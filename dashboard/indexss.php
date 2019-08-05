<!DOCTYPE html>
<html>
  <head>
	<?php include('../dbconn.php'); ?>
	<?php include('../session.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C.Z - <?php echo $member_row['Company_Name'];?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link rel="stylesheet" href="engine/css/videolightbox.css" type="text/css" />
		<style type="text/css">#videogallery a#videolb{display:none}</style>
		
			<link rel="stylesheet" type="text/css" href="engine/css/overlay-minimal.css"/>
            <link rel="shortcut icon" href="dist/img/Logo Template - RE_Logo_43 - Copy.png">
			<script src="engine/js/jquery.tools.min.js"></script>
			<script src="engine/js/swfobject.js"></script>
			<!-- make all links with the 'rel' attribute open overlays -->
			<script src="engine/js/videolightbox.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Client Zone</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
            
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				 <?php echo $member_row['Company_Name'];?>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?php 
						$id=$_SESSION['id'];
						$member_query = mysql_query("select * from client where id = '$id'")or die(mysql_error());
						$member_row = mysql_fetch_array($member_query);
						$_SESSION['id']= $member_row['id'];
						
						echo '<img class="img-circle" SRC="' . "dist/img/team-member.gif" . '" alt="Unable to view" />';
					?>
					
			
                    <p>
                      <?php echo $member_row['Client_Name'];
			?>
                      
                    </p>
                  </li>
                 
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
               <?php 
						$id=$_SESSION['id'];
						$member_query = mysql_query("select * from client where id = '$id'")or die(mysql_error());
						$member_row = mysql_fetch_array($member_query);
						$_SESSION['id']= $member_row['id'];
							echo '<img class="img-circle" SRC="' . "dist/img/team-member.gif" . '" alt="Unable to view" />';

					?>
            </div>
            <div class="pull-left info">
              <p> <?php echo $member_row['Client_Name'];
			?>  </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
              
               <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="time-table.php"><i class="fa fa-circle-o"></i>Time Table</a></li>
                <li><a href="term.php"><i class="fa fa-circle-o"></i>Terms</a></li>
              </ul>
            </li>
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i> <span>Stats</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="video.php">
                <i class="fa fa-book"></i> <span>Learning Videos</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="ebooks.php">
                <i class="fa fa-book"></i><span>Ebooks</span>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <img src="dist/img/Logo Template - RE_Logo_43 - Copy.png" height="200" width="503">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>40<sup style="font-size: 20px"></sup></h3>
                  <p>Stundents in your class</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <!-- ./col employees-->
           
                
            
            
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edusoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(ID) as total FROM classinfo";
$result = $conn->query($sql);
    
  if ($result->num_rows > 0) {
	 // output data of each row
     while($row = $result->fetch_assoc()) { 
               echo " <h3>". $row["total"]."</h3>";
                  echo "<p>Current Class</p>";				  
				   }

		
} else {
     echo "0 results";
}

$conn->close(); 

?>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="small-box bg-red">
                <div class="box-header">
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edusoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM  schoolinfo order by ID desc limit 1";
$result = $conn->query($sql);
    
  if ($result->num_rows > 0) {
	 // output data of each row
     while($row = $result->fetch_assoc()) {
                  
				   echo "<i class='fa fa-calendar'></i>
                  <h2 class='box-title'><b style='color:white;'>". $row["SchoolN"]."</b></h2>
                 
                </div><!-- /.box-header -->
                <div class='box-body no-padding'>
                  <!--The calendar -->
                  <div id='calendar' style='width: 100%'></div>
                </div><!-- /.box-body -->
                <div class='box-footer text-black'>";                
 
	 
	 
	  
             echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td  style='width:25%;'>EMIS:</td>
<td><b>". $row["EMIS"]."</b></td>
<td rowspan='3' align='right'><img src=". $row["ImageData"]." height='100' width=''></td>
</tr>

<tr align='left'>
<td>District:</td>
<td><b>". $row["SDistrict"]."</b></td>
</tr>

<tr align='left'>
<td>School Address:</td>
<td><b>". $row["SchoolA"]."</b></td>
</tr>";
	 
	
        echo "</table><br>";
		
echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>School Tell:</td>
<td><b>". $row["SchoolT"]."</b></td>

</tr>

<tr align='left'>
<td >Email:</td>
<td><b>". $row["SchoolM"]."</b></td>
</tr>

<tr align='left'>
<td>Website:</td>
<td><b>". $row["SchoolW"]."</b></td>
</tr>";

 

echo "</table><br>";


echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>Principal Name:</td>
<td><b>". $row["title"]."</b>&nbsp;<b>". $row["manager"]."</b></td>

</tr>

<tr align='left'>
<td>Princiapl Cell:</td>
<td><b>". $row["PrincipalN"]."</b></td>
</tr>

<tr align='left'>
<td>Principal Mail:</td>
<td><b>". $row["principal_email"]."</b></td>
</tr>";



echo "</table><br>";





echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>Deputy:</td>
<td><b>". $row["dupity_principal"]."</b></td>

</tr>

<tr align='left'>
<td>Deputy Cell:</td>
<td><b>". $row["dupity_cell"]."</b></td>
</tr>

<tr align='left'>
<td>Deputy Email:</td>
<td><b>". $row["dupity_email"]."</b></td>
</tr>";

 }

echo "</table>";

		
} else {
     echo "0 results";
}

$conn->close();
 

?>
                  
             
             
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- Chat box -->
             <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">Chat</h3>
                  <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle" >
                     
                    </div>
                  </div>
                </div>
                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15PM</small>
                        Mrs A Smith <i>(Teacher)</i>
                      </a>
                      Dear Fhulufhelo, please be advised that your class test marks are back. You did not perform they way i expected, you are 
                      better than this. I have attached two documents<br>
                      1. Your Class test<br>
                      2. Study guide<br>
                      Please use the study guide to help in speeling errors, thats were your lacking.
                      
                      
                    </p>
                    <div class="attachment">
                      <h4>Attachment:</h4>
                      <p class="filename">
                        20 May 2017 Class Test2.pdf
                      </p>
                      <div class="pull-right">
                        <button class="btn btn-primary btn-sm btn-flat">Open</button>
                      </div>
                    </div><!-- /.attachment -->
                     <div class="attachment">
                      <h4>Attachment:</h4>
                      <p class="filename">
                        Spelling Manual.pdf
                      </p>
                      <div class="pull-right">
                        <button class="btn btn-primary btn-sm btn-flat">Open</button>
                      </div>
                    </div><!-- /.attachment -->
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <!-- /.item -->
                  <!-- chat item -->
                  <!-- /.item -->
                </div><!-- /.chat -->
                <div class="box-footer">
                  <div class="input-group">
                    <input class="form-control" placeholder="Type message...">
                    <div class="input-group-btn">
                      <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div><!-- /.box (chat box) -->
              <!-- /.box (chat box) -->

             

              <!-- quick email widget -->
              

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


<div class="box box-solid bg-red">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                        
                      </ul>
                    </div>

                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">                
                  
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edusoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM  marketingf";
$result = $conn->query($sql);
    
  if ($result->num_rows > 0) {
	 // output data of each row
     while($row = $result->fetch_assoc()) { 
	 
	 
	   echo "<p style='font-size:20px;'>&nbsp;<b>". $row["Event_Name"]."</b></p>";
             echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr>
<td>Vanue:</td>
<td>&nbsp;<b>". $row["Vanue"]."</b></td>
</tr>

<tr>
<td>Date:</td>
<td>&nbsp;<b>". $row["DateF"]."</b></td>
</tr>

<tr>
<td>Time:</td>
<td>&nbsp;<b>". $row["TimeF"]."</b></td>
</tr>


<tr>
<td>Price:</td>
<td>&nbsp;<b>R ". $row["Damages_Price"]."</b></td>
</tr>";
	 
	
        echo "</table>";
		
	 }

echo "</table>";

		
} else {
     echo "0 results";
}

$conn->close();
 

?>
            
  <hr>           
                </div>
              </div>
              
              
              
              
              

              <!-- Map box -->
              <div class="box box-solid bg-red">
                <div class="box-header">
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    
                  </div><!-- /. tools -->




                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                   	Profile
                  </h3>
                </div>
                <div class="box-body">
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edusoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM  studentinfo order by ID desc limit 1";
$result = $conn->query($sql);
    
  if ($result->num_rows > 0) {
	 // output data of each row
     while($row = $result->fetch_assoc()) {
                  
				   echo "<i class='fa fa-calendar'></i>
                  <h2 class='box-title'><b style='color:white;'>". $row["SchoolN"]."</b></h2>
                 
                </div><!-- /.box-header -->
                <div class='box-body no-padding'>
                  <!--The calendar -->
                  <div id='calendar' style='width: 100%'></div>
                </div><!-- /.box-body -->
                <div class='box-footer text-black'>";                
 
	 
	 
	  
             echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td  style='width:25%;'>First Name:</td>
<td><b>". $row["First_Name"]."</b></td>

</tr>

<tr align='left'>
<td>Last Name:</td>
<td><b>". $row["Last_Name"]."</b></td>
</tr>

<tr align='left'>
<td>Gender:</td>
<td><b>". $row["Gender"]."</b></td>
</tr>";
	 
	
        echo "</table><br>";
		
echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>Date of birth:</td>
<td><b>". $row["DOB"]."</b></td>

</tr>

<tr align='left'>
<td >Age:</td>
<td><b>". $row["Age"]."</b></td>
</tr>

<tr align='left'>
<td>Grade:</td>
<td><b>". $row["Grade"]."</b></td>
</tr>";

 

echo "</table><br>";


echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>Residential:</td>
<td><b>". $row["Residential"]."</b>&nbsp;<b>". $row["Postal"]."</b></td>

</tr>

<tr align='left'>
<td>Cell:</td>
<td><b>". $row["cell_number"]."</b></td>
</tr>

<tr align='left'>
<td>Email:</td>
<td><b>". $row["email"]."</b></td>
</tr>";



echo "</table><br>";





echo "<table width='100%' border='0' style='border-bottom:#999 solid 0px; border-top:#999 solid 0px;'>
			 
<tr align='left'>
<td style='width:25%;'>Previous Grade:</td>
<td><b>". $row["PREVIOUS_GRADE"]."</b></td>

</tr>

<tr align='left'>
<td>Current Grade:</td>
<td><b>". $row["CURRENT_GRADE"]."</b></td>
</tr>

<tr align='left'>
<td>Student Number:</td>
<td><b>". $row["STUDENT_No"]."</b></td>
</tr>";

 }

echo "</table>";

		
} else {
     echo "0 results";
}

$conn->close();
 

?>




                </div><!-- /.box-body-->
                
              </div>
              <!-- /.box -->

	
 <?php 	 
				 echo " 
              <div class='box box-success'>
                <div class='box-header'>
                  <i class='fa fa-comments-o'></i>
				  
                  <h3 class='box-title'>Marks Records of: <b>". $member_row["First_Name"]."&nbsp;". $member_row["Last_Name"]."</b></h3>
				  
                  <div class='box-tools pull-right' data-toggle='tooltip' title='Status'>
                  </div>
                </div>
                              
                <div class='box-body no-padding'>
                  <!--The calendar -->
                  <div id='calendar' style='width: 100%'></div>
                </div><!-- /.box-body -->
                <div class='box-footer text-black'>";              
                     
             echo "<table width='100%' border='01' style='border-bottom:#000 solid 1px; border-top:#999 solid 0px;'>
			 
<tr align='left' >
<td  style='width:13%; background:gray'><b>School Term</b></td>
<td style=' background:gray;' align='center'><b>HL</b></td>
<td style=' background:gray' align='center'><b>FAL</b></td>
<td style=' background:gray' align='center'><b>MAT</b></td>
<td style=' background:gray' align='center'><b>NST</b></td>
<td style=' background:gray' align='center'><b>SS</b></td>
<td style=' background:gray' align='center'><b>LO</b></td>
<td style=' background:gray' align='center'><b>TECH</b></td>
<td style=' background:gray' align='center'><b>NS</b></td>
<td style=' background:gray' align='center'><b>CA</b></td>
<td style=' background:gray' align='center'><b>EMS</b></td>

</tr>


<tr align='left'>
<td>Term 1</td>
<td align='center'><b>54</b</td>
<td align='center'><b>22</b></td>
<td align='center'><b>36</b></td>
<td align='center'><b>66</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>87</b></td>
<td align='center'><b>15</b></td>
<td align='center'><b>86</b></td>
<td align='center'><b>95</b></td>
<td align='center'><b>25</b></td>


</tr>


<tr align='left'>
<td>Term 2</td>
<td align='center'><b>68</b</td>
<td align='center'><b>65</b></td>
<td align='center'><b>8</b></td>
<td align='center'><b>53</b></td>
<td align='center'><b>68</b></td>
<td align='center'><b>86</b></td>
<td align='center'><b>66</b></td>
<td align='center'><b>58</b></td>
<td align='center'><b>55</b></td>
<td align='center'><b>68</b></td>

</tr>

<tr align='left'>
<td>Term 3</td>
<td align='center'><b>68</b</td>
<td align='center'><b>68</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>64</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>98</b></td>
<td align='center'><b>100</b></td>
<td align='center'><b>99</b></td>
<td align='center'><b>86</b></td>
<td align='center'><b>65</b></td>

</tr>


<tr align='left'>
<td>Term 4</td>
<td align='center'><b>54</b</td>
<td align='center'><b>52</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>68</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>45</b></td>
<td align='center'><b>54</b></td>
<td align='center'><b>55</b></td>
<td align='center'><b>35</b></td>
<td align='center'><b>0</b></td>
</tr>";	 	
echo "</table>";
		
		
	
		?>  
</div><!-- /.box-body-->
                 
              </div><!-- /.box (chat box) --> 




         <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">School Reports</h3>
                  
                </div>
                <!-- /.chat -->
                
                <table width="100%" border="1" bordercolor='#FFFFFF'>
  <tr align="center" height="30">
    <td style="background:#4A92B2; color:#FFF; font-weight:bold;" align="center">School Terms</td>
    <td style="background:#4A92B2; color:#FFF; font-weight:bold;">Download Report</td>
	<td style="background:#4A92B2; color:#FFF; font-weight:bold;">Date Issued</td>
  </tr>
             
    <tr align='center' height='25'>
				<td style="background:#C4F3FF; color:#000;" align="center">Term 1</td>
				<td style="background:#C4F3FF; color:#000;"><a href="Download School Report/Community Based Business making a difference towards development and empowerment of community members..pdf" download="Corporate CSI Form">Report<img src="dist/img/filetype_pdf.png" height="25" width="25" /></a></td>				
				<td style="background:#C4F3FF; color:#000;" align="center">25 March 2016</td>

				</tr>  
                
                
                <tr align='center' height='25'>
				<td style="background:#C4F3FF; color:#000;" align="center">Term 2</td>
				<td style="background:#C4F3FF; color:#000;"><a href="Download School Report/Community Based Business making a difference towards development and empowerment of community members..pdf" download="Corporate CSI Form">Report<img src="dist/img/filetype_pdf.png" height="25" width="25" /></a></td>				
				<td style="background:#C4F3FF; color:#000;" align="center">26 June 2016</td>
				</tr>
                
                
                <tr align='center' height='25'>
				<td style="background:#C4F3FF; color:#000;" align="center">Term 3</td>
				<td style="background:#C4F3FF; color:#000;"><a href="Download School Report/Community Based Business making a difference towards development and empowerment of community members..pdf" download="Corporate CSI Form">Report<img src="dist/img/filetype_pdf.png" height="25" width="25" /></a></td>				
				<td style="background:#C4F3FF; color:#000;" align="center">02 October 2016</td>
				</tr>
                
                <tr align='center' height='25'>
				<td style="background:#C4F3FF; color:#000;" align="center">Term 4</td>
				<td style="background:#C4F3FF; color:#000;"><a href="Download School Report/Community Based Business making a difference towards development and empowerment of community members..pdf" download="Corporate CSI Form">Report<img src="dist/img/filetype_pdf.png" height="25" width="25" /></a></td>				
				<td style="background:#C4F3FF; color:#000;" align="center">9 December 2016</td>

				</tr>      
                          
                
                <tr align="center" height="3">
				<td style="background:#fff; color:#000; font-size:1px;">&nbsp; </td>
				<td style="background:#fff; color:#000; font-size:1px;">&nbsp;</td>
				<td style="background:#fff; color:#000; font-size:1px;">&nbsp;</td>

				</tr></table>
                
                
                 
              </div>
         

              </div><!-- /.box (chat box) -->         
         
         
         
         

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      
      
    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        
        </div>
        <strong>Copyright &copy;2016 <a href="http://mris.co.za">MRIS</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
