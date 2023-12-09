<?php
include 'connection.php' ;





if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string ($con, $_POST['name']);
    $email= mysqli_real_escape_string ($con, $_POST['email']); 
    $password= mysqli_real_escape_string ($con, $_POST['password']);

  
  
    $cpassword='admin123@';


    if($password==$cpassword){

            $insertquery= "INSERT INTO adlog(name, email, password) 
            values('$name','$email','$password')";

            $iquery=mysqli_query($con,$insertquery);
            
            if($con){
             
             echo"<script>
            alert('login successful');
            </script>
            ";
            header('Location:Adminhome.php');
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

?>