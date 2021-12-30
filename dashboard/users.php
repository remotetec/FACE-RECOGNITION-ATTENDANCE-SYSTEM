<?php include ('includes/connection.php'); 
include "includes/adminheader.php"; ?>




<?php if($_SESSION['role'] == 'admin')  
{ 
	?>
	 <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">

                        
                        <h1 class="page-header">
                            All Users
                        </h1>


                        <?php
if (isset($_POST['signup'])){

      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $password = password_hash("$pass" , PASSWORD_DEFAULT);
      $role = $_POST['role'];
      $course = $_POST['course'];
      $gender = $_POST['gender'];
      $about = $_POST['about'];
      $joindate = date("F j, Y");
      $query = "INSERT INTO users(username,name,email,password,role,course,gender,about,joindate,token) VALUES ('$username' , '$name' , '$email', '$password' , '$role', '$course', '$gender' , '$about' , '$joindate' , '' )";
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      if (mysqli_affected_rows($conn) > 0) { 
        echo "<script>alert('SUCCESSFULLY REGISTERED');
        window.location.href='index.php';</script>";
}
else {
  echo "<script>alert('Error Occured');</script>";
}
}

?>
<br>

<div class="container">


      <div  class="form">
        <form id="contactform" method="POST"> 

        <p class="contact"><label for="username">Student Name</label></p> 
          <input id="username" name="username" placeholder="Student Name" required="" tabindex="2" type="text" value=""> 
           
          <p class="contact"><label for="name">Roll No.</label></p> 
          <input id="name" name="name" placeholder="Roll No." required="" tabindex="1" type="text" value=""> 
           
          <p class="contact"><label for="email">Email</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value=""> 
                       
            <p class="contact"><label for="gender">Starting Time</label></p> 
            <input name="gender" required="" type="time" value=""> 
            <br><br>
            
            <p class="contact"><label for="role">Ending Time</label></p>
            <input name="role" required="" type="time" value=""> 
            <br><br>
            
            <p class="contact"><label for="course">No of Classes</label></p>
            <input name="course" required="" placeholder="No of Classes" type="number" value=""> 
            <br><br>

            <p class="contact"><label for="about">Teacher Name</label></p>
            <input name="about" required="" placeholder="Teacher Name" type="text" value=""> 
            <br><br>

            <input class="buttom" name="signup" id="submit" tabindex="5" value="Add Student" type="submit">    
   </form> 
</div>      
</div>

<!-- ======================================================== -->

    


    <?php } else {
    	header("location: user.php");
    }
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>