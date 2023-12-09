<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Enquiry</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
          <h2 class=" text-center">Enquiry Details</h2>
          <div class="table-responsive">
            <table class="table table-border table-warning table-hover table-striped">
              <thread>
                <tr class="table-dark">
                  <th>Sl No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Messages</th>
                </tr>
              </thread>
              <tbody>
                <?php
                  include('connection.php'); 
                  $sql="SELECT * FROM enq";
                  $query=mysqli_query($con,$sql);
                  while($row=mysqli_fetch_array($query))
                {


               ?>
                  
                <tr>
                  <td><?php echo $row['Id'];?></td>
                  <td><?php echo $row['Name'];?></td>
                  <td><?php echo $row['Email'];?></td>                  
                  <td><?php echo $row['Phone'];?></td>
                  <td><?php echo $row['Messages'];?></td>   
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

          </div>
          
        </div>    
      </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>