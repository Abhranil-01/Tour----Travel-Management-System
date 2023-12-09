<?php 
  include 'connection.php';

  if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string ($con, $_POST['name']);
    $email= mysqli_real_escape_string ($con, $_POST['email']); 
    $password= mysqli_real_escape_string ($con, $_POST['password']);
    $cpassword= mysqli_real_escape_string ($con, $_POST['cpassword']);

    $pass=password_hash($password, PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery= "SELECT * FROM register where email='$email' ";
    $query= mysqli_query($con, $emailquery);

    $emailcount= mysqli_num_rows($query);

    if($emailcount>0){
    
     echo "<script>
     alert('email already registered');
 </script>";

  }
  else{
    if($password==$cpassword){

            $insertquery= "INSERT INTO register(name, email, password, cpassword) 
            values('$name','$email','$pass','$cpass')";

            $iquery=mysqli_query($con,$insertquery);
            
            if($con){
              ?>
                  <script>
                      alert("Inserted successful");
                  </script>
              <?php
          }
          else{
              ?>
              <script>
                      alert("Not Inserted");
                  </script>
              <?php
          }
            
    }else{
  
   echo "<script>alert('Password not matched')</script>";
    }
  }
}
  ?>