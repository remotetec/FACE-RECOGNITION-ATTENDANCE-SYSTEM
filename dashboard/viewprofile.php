<?php
include ('includes/connection.php');
include ('includes/adminheader.php');
?>

<div id="wrapper">

        
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-15">

<?php 
if (isset($_GET['name'])) {
    $user = mysqli_real_escape_string($conn , $_GET['name']);
    $query = "SELECT * FROM users WHERE username= '$user' ";
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
    if (mysqli_num_rows($run_query) > 0 ) {
    while ($row = mysqli_fetch_array($run_query)) {
    $user_id = $row['id'];
    $username = $row['username'];
	$name = $row['name'];
	$email = $row['email'];
	$course = $row['course'];
	$role = $row['role'];
	$bio = $row['about'];
	$image = $row['image'];
    $image1 = $row['image1'];
    $joindate = $row['joindate'];
    $gender = $row['gender'];
    $file = $row['file'];
}
}
else {
    $user_id = "N/A";
    $username = "N/A";
	$name = "N/A";
	$email = "N/A";
	$course = "N/A";
	$role = "N/A";
	$bio = "N/A";
	$image = "profile.jpg";
    $image1 = "profile.jpg";
    $gender = "N/A";
    $joindate = "N/A";
    $file = "N/A";
}

?>



<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-9">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-5 col-md-8">   
                    <img src="profilepics/<?php echo $image; ?>" size=300x500 alt="" class="img-rounded img-responsive" />
                    </div>

                    <div class="col-sm-5 col-md-8">
                    <img src="profilepics/<?php echo $image1; ?>" size=300x500 alt="" class="img-rounded img-responsive" />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Roll No.</th>
            <th>Email</th>
            <th>Starting Time</th>
            <th>Ending Time</th>
            <th>No of Classes</th>
            <th>Teacher Name</th>
            <th>Attendence</th>
            
        </tr>
    </thead>

    <tbody>
    <?php
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$username</a></td>";
                echo "<td>$name</td>";
                echo "<td>$email</td>";           
                echo "<td>$gender</td>";
                echo "<td>$role</td>";
                echo "<td>$course</td>";
                echo "<td>$bio</td>";
                echo "<td><a href='allfiles/$file' target='_blank' style='color:green'>Download </a></td>";
                echo "</tr>";
    ?>
    </tbody>
 </table>


             <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php } else {
    header("location:index.php");
    } ?>
