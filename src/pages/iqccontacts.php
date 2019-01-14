<!DOCTYPE html>
<html>
<head>
  <title>IQC Contacts POP</title>
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
  <h3>  International Switch Contacts POP</h3>
  <hr>


	<?php

	if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    $query = "SELECT * FROM `iqcc1` WHERE CONCAT (`pop`, `contact`, `email`, `phone`, `comments`) LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}else 
	{
	    $query = "SELECT * FROM iqcc1";
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
                      <form action="addcarrier1.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <label for="">Step 1) Insert Information:</label>
                            <br>
                          <label for="pop" class="col-lg-3">POP:</label>
                          <input type="text" id="pop" name="pop" required="">
                          <br>
                          <br>
                          <label for="contact" class="col-lg-3">Contact:</label>
                          <input type="text" id="contact" name="contact">
                          <br>
                          <br>                          
                          <label for="email" class="col-lg-3">Email:</label>
                          <input type="text" id="email" name="email">
                          <br>
                          <br>
                          <label for="phone" class="col-lg-3">Phone:</label>
                          <input type="text" id="phone" name="phone">
                          <br>
                          <br>
                          <label for="comments" class="col-lg-3">Comments:</label>
                          <textarea class="form-control" rows="5" id="comments" name="comments"></textarea> 
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


          <label for="clist"">Select Contact List:</label>
          <br>
          <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts.php"">POP</option>
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts2.php"">Carriers</option>
      			<option value="http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts3.php">BU Switching</option>
    		  </select>


          <br>
          <br>
          <div class="table table-bordered">
            <table class="table table-sm table-striped table-hover ">
                <thead class="thead-inverse">
                  <tr>
                    <th class="bg-primary">POP</th>
                    <th class="bg-primary">Contact</th>
                    <th class="bg-primary">E-Mail</th>
                    <th class="bg-primary">Phone</th>
                    <th class="bg-primary">Comments</th>
                    <th class="bg-primary">Edit</th>
                    <th class="bg-primary">Remove</th>
                  </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['pop'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['comments'];?></td>
		            <td><?php echo "<a href='carrieredit1.php?edit=".$row['keyz']."'>Edit</a>";?></td>
		            <td><?php echo "<a href='del1.php?keyz=".$row['keyz']."'>Delete</a>";?></td>                  
                </tr>
                <?php endwhile ;?>
            </table>
        </form>
        </div>
        <br>
        <br>




	<script>
	function change(){
	    document.getElementById("myform").submit();
	}
	</script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="js/modal.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
  <footer> <strong>Digicel Group</strong> ©2016 Roamtech  - <strong> Version 1.0.0</strong></footer>
</html>