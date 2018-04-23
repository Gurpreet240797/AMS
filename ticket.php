<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://icons.iconarchive.com/icons/pelfusion/folded-flat/512/Air-Plane-icon.png">

    <title>Aviation Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>
      <div class="container">
          <form action="index.html" method="post">
            <input type="text" name="username" class="form-control" placeholder="Enter your name" value="username">
            <?php
              include 'connect.php';

              $sql=" select id from booking order by id desc limit 1;";
            	$result = $con->query($sql);
            	if ($result->num_rows > 0)
            	{
            		while($row = $result->fetch_array())
            		{
            			$id=$row['id'];
            			// echo$id;
            		}
            	}

              $sql1= " SELECT * FROM booking WHERE id='$id' ";
            	$result1=mysqli_query($con,$sql1);
            	if(($result1->num_rows)>0)
            	{
                while($row1 = $result1->fetch_array())
            		{
                  $adult = $row1['adult'];
                  $children = $row1['children'];
                  $infant = $row1['infant'];
                  $class = $row1['class'];
                  $dep = $row1['depature_from'];
                  $dist= $row1['arrival_to'];
                  $date=$row1['depature_date'];
                  $date1=$row1['arrival_date'];
                }
            	}


              for ($i=0; $i <$adult ; $i++) {
                echo'<input type="text" name="username" class="form-control" placeholder="Enter your name" value="username">';
              }
              echo "<br>";echo "<br>";
              for ($i=0; $i <$children ; $i++) {
                echo'<input type="text" name="username" class="form-control" placeholder="Enter your name" value="username">';
              }

              echo "<br>";echo "<br>";
              for ($i=0; $i <$infant ; $i++) {
                echo'<input type="text" name="username" class="form-control" placeholder="Enter your name" value="username">';
              }

             ?>

          </form>

         </form>

         </div>

      </div>
  </body>

</html>
