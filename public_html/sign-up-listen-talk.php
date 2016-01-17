<!DOCTYPE html>

<html>

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta name="description" content="Let's Talk - Sign-Up">
	<meta name="keywords" content="chat, depression, help, messenger, social anxiety">
	<meta name="author" content="Spencer Deevy">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="shortcut icon" href="resources/images/tabIcon.ico">-->

	<!-- Title -->
	<title>Let's Talk | Sign-Up</title>

	<!-- Links -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/sign-up-listen-talk.css">

	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav navbar-nav navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="#page-top">Let's Talk</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" href="#page-top"class=" navbar-brand page-scroll" >WebsiteName</a><!--TODO-->
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid -->
       
    </nav>

	<div id="logo-centered">
		Let's Talk
	</div>

	<div id="listen-talk-choices">
		<div class="listen-talk-choice">Listen</div>
		<div class="listen-talk-choice">Both</div>
		<div class="listen-talk-choice">Talk</div>
	</div>

	<div id="listen-talk-slider">
		<input type ="range" min ="0" max="2.0" step ="1"/>		
	</div>

		<div id="next-button">Next</div>

</body>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script>
$("#next-button").click(function(){
	window.location.href = "sign-up.php";
	// TODO: Grab slider data, send to database
});
</script>