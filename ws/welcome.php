<?php
session_start();
require_once 'Classes/Token.php';

$display_messsge = "";

if(isset($_POST['username'], $_POST['csrf_token'], $_POST['password'])){

  $username = $_POST['username'];
  $csrf_token = $_POST['csrf_token'];
  $password = $_POST['password'];
			

  if(!empty($username) && !empty($password) && !empty($csrf_token))
  {
    if(Token::check($csrf_token))
    {
        echo "<script>alert('Changed successfully!');</script>";
    }
    else if(!Token::check($csrf_token))
        echo "<script>alert('Unsuccessfull!');</script>";
    }
  }
 if(!isset($_SESSION['username']))
{
    echo "<h2 align='center'>Can you find index ";
 
    echo "<a href='index.php'>Click here to login</a></h2>";

    echo "<div align='center'>
    <p>Web security assignment IT18230116 | K.R.W.D.M.B.A Bandara | bhathz222@gmail.com Username=admin Password=54321</p>
</div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='Pics/unnamed.gif' alt='icon' />";

}

else{
$now = time();
// checking the time now when home page starts

   if($now > $_SESSION['expire'])

   {

       session_destroy();

       echo "<h2 align='center'>Expired session! <a href='index.php'>Login Here</h2></p>";

       echo "<div align='center'>
    <p>Web security assignment IT18230116 | K.R.W.D.M.B.A Bandara | bhathz222@gmail.com Username=admin Password=54321</p>
    </div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='images/aa.jpg' alt='icon' />";


   }

    
else
{

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="log.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/testlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Destroy Session after 1 minutes </title>

</head>

<body class="welcome_home img-responsive">
   
    <form action="logout.php" method="GET">
        <div class="alert danger-centers alert-dark" role="alert">
            <h2 class="alert-heading">Hello Admin!</h2>
            <h4>You can see how alert work on this kind of content.</h4>
            <hr>
            <h4 class="mb-3">To logout before 10 seconds click here!</h4>
            <button type="submit" class="btn btn-danger btn-lg btn-block">Log Out</button></br>
            <h4 class="mb-3">Or you can see how CSRF Token Works ? You got 10 seconds start now!</h4>



                    </section>
                </section>
            </section>

        </div>
    </form>
  <section class="container-fluid" id = "scale">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form method="POST" class="form-con">
                    <div class="form-group">
                       <h2>Update</h2>
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" type="username" class="form-control" aria-describedby="Username Help">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                       
                        <input type="password" name="password"  type="password" class="form-control" id="exampleInputPassword1"></br>
                       
                       
                        <input type="hidden" name="csrf_token" value="<?php echo Token::generate();?>">
                       
                        
                        <button type="submit" name="submit"    class="btn btn-primary btn-block">Submit</button>
                    </div> 
                </form>
            </section>
        </section>
    </section>
  </div>
</div>
        


    </form>




    <br /><br />

    <span> </span>

    </p>

    <div class="footer">
        <p>Web security assignment IT18230116 | K.R.W.D.M.B.A Bandara | bhathz222@gmail.com | Username=admin Password=54321</p>
    </div>

    <?php
    }
    
}   
    ?>

</body>

</html>