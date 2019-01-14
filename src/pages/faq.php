<!DOCTYPE html>
<html>
<head>
  <title>Core Contacts</title>
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
          <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  <h3>  Core Contacts</h3>
  <hr>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `contacts` WHERE CONCAT (`apn`, `cnumber`, `country`,`email`, `mail`, `maill`,`namedep`, `network`, `number`,`plmn`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}else 
{
    $query = "SELECT * FROM contacts";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = @mysqli_connect(localhost,chartdata,carleato21,charts) or die("Could not connect to MYSQL: ".mysqli_connect_error());
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

          <div class="container-fluid">
<!--             <form action="" method="post">
              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                    <input type="text" class="form-control" name="valueToSearch" placeholder="Seach table..... " >
                    <span class="input-group-btn"><input type="submit" name="search" value="Search" class="btn btn-primary"></span>
                  </div>
                </div>
              </div>  
            </form> -->
          <br>
          <br>
          <div class="table table-bordered">
            <table class="table table-sm table-striped table-hover ">
                <thead class="thead-inverse">
                  <tr>
                    <th class="bg-primary">Country</th>
                    <th class="bg-primary">Network</th>
                    <th class="bg-primary">TADIG CODE</th>
                    <th class="bg-primary">Name & Department</th>
                    <th class="bg-primary">Email</th>
                    <th class="bg-primary">Email</th>
                    <th class="bg-primary">Email</th>
                    <th class="bg-primary">Contact Number</th>
                    <th class="bg-primary">Other Contact Number</th>
                    <th class="bg-primary">APN - Access Point Name</th>
                  </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['network'];?></td>
                    <td><?php echo $row['plmn'];?></td>
                    <td><?php echo $row['namedep'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mail'];?></td>
                    <td><?php echo $row['maill'];?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['cnumber'];?></td>
                    <td><?php echo $row['apn'];?></td>

                </tr>
                <?php endwhile ;?>
            </table>
        </form>
        </div>
        <br>
        <br>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="js/modal.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
  <footer> <strong>Digicel Group</strong> ©2016 Roamtech  - <strong> Version 1.0.0</strong></footer>
</html>