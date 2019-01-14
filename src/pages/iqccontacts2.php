<!DOCTYPE html>
<html>
<head>
  <title>IQC Contacts Carriers</title>
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
  <h3>  International Switch Contacts Carriers</h3>
  <hr>


	<?php

	if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    $query = "SELECT * FROM `iqcc2` WHERE CONCAT (`carrier`, `specdetails`, `pnumber`,`email`, `mail`, `site`,`usname`, `pw`, `escalation`,`escalationtwo`, `details`) LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}else 
	{
	    $query = "SELECT * FROM iqcc2";
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
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Contact</button>
          <br>
          <br>          
          <label for="clist"">Select Contact List:</label>
          <br>
          <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts2.php"">Carriers</option>
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts.php"">POP</option>
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts2.php"">Carriers</option>
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts3.php">BU Switching</option>
    		  </select>


          <!-- Modal -->
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg ">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Carrier Contact Form</h6>
              </div>
              <div class="modal-header">
                    <form action="addcarrier2.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label for="">Step 1) Insert Information:</label>
                        <br>
                      <label for="carrier" >Carrier:</label>
                      <input type="text" id="carrier" name="carrier" required="">
                      <br>
                      <br>
                      <label for="specdetails" ">Special Details:</label>
                      <input type="text" id="specdetails" name="specdetails" >
                      <br>
                      <br>
                      <label for="pnumber" >Phone:</label>
                      <input type="text" id="pnumber" name="pnumber" >
                      <br>
                      <br>
                      <label for="email" >Email 1:</label>
                      <input type="text" id="email" name="email" >
                      <br>
                      <br>
                      <label for="mail" >Email 2:</label>
                      <input type="text" id="mail" name="mail" >
                      <br>
                      <br>
                      <label for="site" >Website:</label>
                      <input type="text" id="site" name="site" >
                      <br>
                      <br>        
                      <label for="usname">Username:</label>
                      <input type="text" id="usname" name="usname" >
                      <br>
                      <br>
                      <label for="pw">Password:</label>
                      <input type="text" id="pw" name="pw" >
                      <br>
                      <br>
                      <label for="escalation">Escalation:</label>
                      <input type="text" id="escalation" name="escalation" >
                      <br>
                      <br>
                      <label for="escalationtwo">Escalation 2:</label>
                      <input type="text" id="escalationtwo" name="escalationtwo" >
                      <br>
                      <br>
                      <label for="details">Details:</label>
                      <input type="text" id="details" name="details" >
                      <br>
                      <br>
                    </div>
                    </div>        
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="submit" name="submit" value="Upload Dump" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </form>
              </div>
            </div>


          <br>
          <br>
          <div class="table table-bordered">
            <table class="table table-sm table-striped table-hover ">
                <thead class="thead-inverse">
                  <tr>
                    <th class="bg-primary">Carrier</th>
                    <th class="bg-primary">Special Details</th>
                    <th class="bg-primary">Phone Number</th>
                    <th class="bg-primary">Email 1</th>
                    <th class="bg-primary">Email 2</th>
                    <th class="bg-primary">Website</th>
                    <th class="bg-primary">Username</th>
                    <th class="bg-primary">Password</th>
                    <th class="bg-primary">Escalation</th>
                    <th class="bg-primary">Escalation 2</th>
                    <th class="bg-primary">Details</th>
                    <th class="bg-primary">Edit</th>
                    <th class="bg-primary">Remove</th>

                  </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['carrier'];?></td>
                    <td><?php echo $row['specdetails'];?></td>
                    <td><?php echo $row['pnumber'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mail'];?></td>
                    <td><?php echo $row['site'];?></td>
                    <td><?php echo $row['usname'];?></td>
                    <td><?php echo $row['pw'];?></td>
                    <td><?php echo $row['escalation'];?></td>
                    <td><?php echo $row['escalationtwo'];?></td>
                    <td><?php echo $row['details'];?></td>
		            <td><?php echo "<a href='carrieredit2.php?edit=".$row['keyz']."'>Edit</a>";?></td>
		            <td><?php echo "<a href='del2.php?keyz=".$row['keyz']."'>Delete</a>";?></td>                 
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