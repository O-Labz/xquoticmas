<?php

  //Gets the connection to the db up and running
  require_once('../mysqli_charts_connect.php');



  if (isset($_GET['edit'])) 
  {
    //Make a vairable to catch the value of edit
    $id = $_GET['edit'];
    //Query the database for the row you want
    $query = "SELECT * FROM iqcc1 WHERE keyz = ".$id." ";
    //Generate a response from the data base
    $response = @mysqli_query($abc, $query);
    //The row that is returned
    $row = mysqli_fetch_array($response);
  }

  if (isset($_POST['contact'])) 
  {
    //To get values from the index.php file to add to the DB
    $keyz = $_POST['keyz'];
    $pop = $_POST['pop'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

    $sql = "UPDATE `iqcc1` SET`pop`='$pop',`contact`='$contact',`email`='$email',`phone`='$phone',`comments`='$comments'WHERE keyz = ".$keyz."";


    $response = @mysqli_query($abc, $sql);
    if ($response) 
    {
      echo "Record updated successfully";
      header("Location: http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts.php");
      exit();
    }
    else 
    {
      echo "Error updating record: " . mysqli_error($abc);
    }

    mysqli_close($abc);
  }


?>
<!-- Start of the portion of the HTML document -->
<!DOCTYPE html>
<html>
<head>
  <title>Home - IQC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


  <!-- Tab Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16"/>
    <link rel="manifest" href="../images/manifest.json"/>
    <link rel="mask-icon" href="../images/safari-pinned-tab.svg" color="#5bbad5"/>
    <meta name="theme-color" content="#ffffff"/>

    <!-- Bootstrap -->
    <link href="../style_sheet/strap_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <!--     <span class="navbar-toggler-icon"></span> -->
    </button>
    <a class="navbar-brand" href="index.php">International Switch</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="#">Database</a>
      </li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact Lists
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <h6 class="dropdown-header">Contacts</h6>
            <a class="dropdown-item" href="iqccontacts.php">IQC Contact List</a>
            <a class="dropdown-item" href="faq.php">Digicel Contact List</a>
            <a class="dropdown-item" href="globalcontacts.php">Global Contact List</a>
          </div>
        </li>
      </ul>
      <ul class="nav navbar-nav">

          <form class="form-inline my-2 my-lg-0" action="" method="post">
            <input class="form-control mr-sm-2" name="valueToSearch" type="text" placeholder="Search table.....">
            <button class="btn btn-outline-success my-2 my-sm-0" name="search" value="Search" type="submit">Search</button>
          </form>

      <li class="nav-item active">
          <a class="nav-link" href="../index.php">Logout</a>
      </li>   
      </ul>
    </div>
  </nav>
  <br>


          <!-- Modal -->
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg ">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h6 class="modal-title">POP Contact Form</h6>
                </div>
                <div class="modal-header">
                      <form action="carrieredit1.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <label for="">Step 1) Insert Information:</label>
                            <br>
                          <label for="pop" class="col-lg-3">POP:</label>
                          <input type="text" id="pop" name="pop" value="<?php echo $row['pop']; ?>">
                          <input type="hidden" id="keyz" name="keyz" value="<?php echo $row['keyz']; ?>">
                          <br>
                          <br>
                          <label for="contact" class="col-lg-3">Contact:</label>
                          <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
                          <br>
                          <br>                          
                          <label for="email" class="col-lg-3">Email:</label>
                          <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">
                          <br>
                          <br>
                          <label for="phone" class="col-lg-3">Phone:</label>
                          <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
                          <br>
                          <br>
                          <label for="comments" class="col-lg-3">Comments:</label>
                          <textarea class="form-control" rows="5" id="comments" name="comments"><?php echo $row['comments']; ?></textarea> 
                          <br>
                          <br>
                        </div>
                        </div>        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" onclick="location.href='http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts.php';" data-dismiss="modal">Cancel</button>
                          <button type="submit" name="submit" value="Upload Dump" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                  </form>
                  </div>
                </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="js/modal.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal("show");
        });
    </script>
    </body>
  <footer> <strong>Digicel Group</strong> ©2016 Roamtech  - <strong> Version 1.0.0</strong></footer>
</html>