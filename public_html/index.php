<?php
    start_session();
    $username = $_SESSION["Username"];
    $con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
    $sql = "SELECT * FROM `2035081_letstalk`.`Person` WHERE `Email` = '". $username ."';";

    echo $username;
    if(!is_null($username)){
        //Send to home.php
    }
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Fail";
    }
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>

eg.
<?php echo $row["FirstName"]?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TentativeTitle</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--for text forms-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="#index.html">L e t 's &nbsp; T a l k</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class="page-scroll" href="index.html" >letstalkaboutthat.com</a><!--TODO-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid -->
         <a id="signUpButton" href="sign-up.html" class="btn btn-default" >Sign Up</a>
    </nav>

    <header>
                       
        <div class="header-content">
           

            <div class="header-content-inner">
                <h1>WebsiteName</h1>
                <hr>
                <p>CatchyCaption!</p>
                  <form role="form">
                    <div class="input-group input-group-lg">
                      <input type="text" class="form-control" id="username" placeholder="Username or Email">
                    </div>
                    <div class="input-group input-group-lg">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  </form>

                <a id="signInButton" href="#signin" class="btn btn-primary btn-xl page-scroll">Sign In</a>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $("#signInButton").click(function() {
        //get login attempt info
        //pass to php function to verify exists in JSON
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            method: 'get',
            url: 'php/verify.php',
            data: {
                'username': username,
                'password': password
            },
            success: function(msg) {
                if(msg == "True"){
                    window.location.href="home.php";
                }
            }
        });
    });
</script>
</body>

</html>
