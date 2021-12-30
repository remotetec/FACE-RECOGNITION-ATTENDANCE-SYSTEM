<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>

<?php include 'includes/navbar.php';?>



<?php
if (isset($_POST['signup']))// {
// require "gump.class.php";
// $gump = new GUMP();
// $_POST = $gump->sanitize($_POST); 

// $gump->validation_rules(array(
//   'username'    => 'required|alpha_numeric|max_len,20|min_len,4',
//   'name'        => 'required|alpha_space|max_len,30|min_len,5',
//   'email'       => 'required|valid_email',
//   'password'    => 'required|max_len,50|min_len,6',
// ));
// $gump->filter_rules(array(
//   'username' => 'trim|sanitize_string',
//   'name'     => 'trim|sanitize_string',
//   'password' => 'trim',
//   'email'    => 'trim|sanitize_email',
//   ));
// $validated_data = $gump->run($_POST);

// if($validated_data === false) {

// }
// else if ($_POST['password'] !== $_POST['repassword']) 
// {
//   echo  "<center><font color='red'>Passwords do not match </font></center>";
// }
// else {
//       $username = $validated_data['username'];
//       $checkusername = "SELECT * FROM users WHERE username = '$username'";
//       $run_check = mysqli_query($conn , $checkusername) or die(mysqli_error($conn));
//       $countusername = mysqli_num_rows($run_check); 
//       if ($countusername > 0 ) {
//     echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
// }
// $email = $validated_data['email'];
// $checkemail = "SELECT * FROM users WHERE email = '$email'";
//       $run_check = mysqli_query($conn , $checkemail) or die(mysqli_error($conn));
//       $countemail = mysqli_num_rows($run_check); 
//       if ($countemail > 0 ) {
//     echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
// }

   {  
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
        window.location.href='../online-notes-sharing-website/dashboard/users.php';</script>";
}
else {
  echo "<script>alert('Error Occured');</script>";
}
}
//}
//}
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
            
            <!-- <p class="contact"><label for="password">Type Any No. b\w 1 to 6</label></p> 
            <select class="select-style gender" name="password">
            <option value="123456">123456</option>
            </select><br><br> -->

            <input class="buttom" name="signup" id="submit" tabindex="5" value="Add Student" type="submit">    
   </form> 
</div>      
</div>



</body>
</html>