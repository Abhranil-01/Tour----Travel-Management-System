<?php
$server= "localhost";
$user= "root";
$password= "";
$db= "travelx";


$con= mysqli_connect($server,$user,$password,$db);



if($con){
    ?>
        <script>
            alert("Connection successful");
        </script>
    <?php
}
else{
    ?>
    <script>
            alert("NO Connection");
        </script>
    <?php
}

?>