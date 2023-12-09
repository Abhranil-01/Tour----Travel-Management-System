<?php



include 'connection.php';



if(isset($_POST['sub'])){
    $email= $_POST['Email'];
    $password = $_POST['password'];

    $email_search= "SELECT *from register where email='$email'";
    $query= mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass =  $email_pass['password'];

        $_SESSION['name']= $email_pass['name'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo"<script>
            alert('login successful');
            </script>
            ";
        
                header('Location:home.php');
            
        }
        else{
            echo"<script>alert('Password Incorrect')</script>";
        }
    }else{
        echo"<script>alert('Invalid Email')</script>";
    }
}
?>