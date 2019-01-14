<?php

  //Gets the connection to the db up and running
  require_once('../mysqli_charts_connect.php');



  if (isset($_GET['edit'])) 
  {
    //Make a vairable to catch the value of edit
    $id = $_GET['edit'];
    //Query the database for the row you want
    $query = "SELECT * FROM iqc WHERE keyz = ".$id." ";
    //Generate a response from the data base
    $response = @mysqli_query($abc, $query);
    //The row that is returned
    $row = mysqli_fetch_array($response);
  }

  if (isset($_POST['carrier'])) 
  {
    //To get values from the index.php file to add to the DB
    $keyz = $_POST['keyz'];
    $carrier = $_POST['carrier'];
    $switch = $_POST['switch'];
    $trunk_name = $_POST['trunk_name'];
    $trunk_id = $_POST['trunk_id'];
    $mcc = $_POST['mcc'];
    $fqdns = $_POST['fqdns'];
    $receiving_ip = $_POST['receiving_ip'];
    $sending_ip = $_POST['sending_ip'];
    $media_ip = $_POST['media_ip'];
    $veraz_ip = $_POST['veraz_ip'];
    $port_numb = $_POST['port_numb'];
    $rules_incoming = $_POST['rules_incoming'];
    $rules_outgoing = $_POST['rules_outgoing'];
    $mcc_set = $_POST['mcc_set'];
    $special_req = $_POST['special_req'];
    $admin_state = $_POST['admin_state'];

    $sql = "UPDATE `iqc` SET`carrier`='$carrier',`switch`='$switch',`trunk_name`='$trunk_name',`trunk_id`='$trunk_id',`mcc`='$mcc',`fqdns`='$fqdns',`receiving_ip`='$receiving_ip',`sending_ip`='$sending_ip',`media_ip`='$media_ip',`veraz_ip`='$veraz_ip',`port_numb`='$port_numb',`rules_incoming`='$rules_incoming',`rules_outgoing`='$rules_outgoing',`mcc_set`='$mcc_set',`special_req`='$special_req',`admin_state`='$admin_state'WHERE keyz = ".$keyz."";


    $response = @mysqli_query($abc, $sql);
    if ($response) 
    {
      echo "Record updated successfully";
      header("Location: http://172.27.27.192:1234/roamtechportal/iqc/index.php");
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
        <h6 class="modal-title">Carrier Configuration Form</h6>
      </div>
      <div class="modal-header">
        <form action="carrieredit.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <label for="">Step 1) Insert Information:</label>
            <br>
          <label for="carrier" class="col-lg-3">Carrier:</label>
          <input type="text" id="carrier" name="carrier" value="<?php echo $row['carrier']; ?>" required="">
          <input type="hidden" id="keyz" name="keyz" value="<?php echo $row['keyz']; ?>">
          <br>
          <br>
          <label for="trunk_name" class="col-lg-3">Trunk Name:</label>
          <input type="text" id="trunk_name" name="trunk_name" value="<?php echo $row['trunk_name']; ?>" required="">
          <br>
          <br>
          <label for="trunk_id" class="col-lg-3">Trunk ID:</label>
          <input type="text" id="trunk_id" name="trunk_id" value="<?php echo $row['trunk_id']; ?>" required="">
          <br>
          <br>
          <label for="mcc" class="col-lg-3">MCC:</label>
          <input type="text" id="mcc" name="mcc" value="<?php echo $row['mcc']; ?>" required="" >
          <br>
          <br>
          <label for="fqdns" class="col-lg-3">FQDNS:</label>
          <input type="text" id="fqdns" name="fqdns" value="<?php echo $row['fqdns']; ?>" required="">
          <br>
          <br>
          <label for="receiving_ip" class="col-lg-9">Receiving Signalling IP:</label>
          <textarea class="form-control" rows="5" id="receiving_ip" name="receiving_ip" ><?php echo $row['receiving_ip']; ?></textarea>
          <br>
          <br>        
          <label for="sending_ip">Sending Signalling IP:</label>
          <textarea class="form-control" rows="5" id="sending_ip" name="sending_ip" ><?php echo $row['sending_ip']; ?></textarea>
          <br>
          <br>
          <label for="media_ip">Media IP:</label>
          <textarea class="form-control" rows="5" id="media_ip" name="media_ip" ><?php echo $row['media_ip']; ?></textarea>
          <br>
          <br>
          <label for="veraz_ip">Veraz IP:</label>
          <textarea class="form-control" rows="5" id="veraz_ip" name="veraz_ip" ><?php echo $row['veraz_ip']; ?></textarea>
          <br>
          <br>
          <label for="port_numb">Port #:</label>
          <input type="text" id="port_numb" name="port_numb" value="<?php echo $row['port_numb']; ?>" required="">
          <br>
          <br>
          <label for="rules_incoming">Digi Rules Incoming:</label>
          <input type="text" id="rules_incoming" name="rules_incoming" value="<?php echo $row['rules_incoming']; ?>" required="">
          <br>
          <br>
          <label for="rules_outgoing">Digi Rules Outgoing:</label>
          <input type="text" id="rules_outgoing" name="rules_outgoing" value="<?php echo $row['rules_outgoing']; ?>" required="">
          <br>
          <br>  
          <label for="special_req">Special Requirements:</label>
          <textarea class="form-control" rows="5" id="special_req" name="special_req" ><?php echo $row['special_req']; ?></textarea>          
          <br>
          <br>    
          <label for="mcc_set">MCC Set:</label>
          <select id="mcc_set" name="mcc_set">
            <option value="<?php echo $row['mcc_set']; ?>"><?php echo $row['mcc_set']; ?></option>
            <option value="NO">No</option>
            <option value="YES">Yes</option>
          </select>
          <br>
          <br>              
          <label for="admin_state">Admin State:</label>
          <select id="admin_state" name="admin_state">
            <option value="<?php echo $row['admin_state']; ?>"><?php echo $row['admin_state']; ?></option>
            <option value="UNLOCKED">Unlocked</option>
            <option value="LOCKED">Locked</option>
          </select>
          <br>
          <br>
          <label for="switch">Switch:</label>
          <select id="switch" name="switch">
            <option value="<?php echo $row['switch']; ?>"><?php echo $row['switch']; ?></option>
            <option value="MIAMI">Miami</option>
            <option value="NEW YORK">New York</option>
          </select> 

        </div>
        </div>        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="location.href='http://172.27.27.192:1234/roamtechportal/iqc/index.php';" data-dismiss="modal">Cancel</button>
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