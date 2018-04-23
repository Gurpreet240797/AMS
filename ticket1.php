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

  <style media="screen">
    #nav-btn{
      height: 40px;
      padding-top: 2px;
    }
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-plane"></span>AMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-btn" href="login.html"><button type="button" class="btn btn-warning">Login</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-btn" href="sign.html"><button type="button" class="btn btn-danger">Sign Up</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Fly with Pride</h1>
          <div class="list-group">
            <a href="book.html" class="list-group-item">Book a Flight</a>
            <a href="web-check.html" class="list-group-item">Web Check-In</a>
            <a href="Travel-information.html" class="list-group-item">Travel Information</a>
            <a href="#" class="list-group-item">Baggage</a>
            <a href="https://www.mumbaiairport.com/departures.php" class="list-group-item">Flight Status</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div class="container">
              <form action="index.html" method="post">
              <br><br>
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

                  echo "<h1>$class</h1>";
                  echo "<hr>";
                  echo "<br>";

                  echo "<h3>$adult</h3>";
                  for ($i=0; $i <$adult ; $i++) {
                    echo'<input type="text" name="username" class="form-control" placeholder="Enter your name">';
                  }
                  echo "<br>";
                  echo "<br>";
                  echo "<h3>$children</h3>";
                  for ($i=0; $i <$children ; $i++) {
                    echo'<input type="text" name="username" class="form-control" placeholder="Enter your name">';
                  }

                  echo "<br>";
                  echo "<br>";
                  echo "$infant";
                  for ($i=0; $i <$infant ; $i++) {
                    echo'<input type="text" name="username" class="form-control" placeholder="Enter your name">';
                  }

                 ?>
<input type="submit" value="Print-Ticket">
        </form><br><hr>
          </div>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <br><br><br><br><br><br>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Aviation Management System.<br>Partners Star Alliance</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
