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

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="css/sign-up.css">

	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav navbar-nav navbar-header">
            <a id="logo" class="navbar-brand page-scroll" onclick="scrollToTop()">L e t 's &nbsp; T a l k</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class=" navbar-brand page-scroll" onclick="scrollToTop()">Letstalkaboutthat.com</a><!--TODO-->
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

	<div id="scrollableForm">

		<div class="input-group basicForm">
  			<span class="input-group-addon" id="basic-addon1">First Name</span>
  			<input type="text" class="form-control" id="firstName" placeholder="Dorothy" aria-describedby="basic-addon1">
		</div>

		<div class="input-group basicForm">
  			<span class="input-group-addon" id="basic-addon1">Last Name</span>
  			<input type="text" class="form-control" id="lastName" placeholder="Gale" aria-describedby="basic-addon1">
		</div>

		<div class="input-group basicForm">
  			<span class="input-group-addon" id="basic-addon1">Email</span>
  			<input type="text" class="form-control" id="email" placeholder="DorothyGale@kansasu.edu" aria-describedby="basic-addon1">
		</div>

		<div class="input-group basicForm">
  			<span class="input-group-addon" id="basic-addon1">Password</span>
  			<input type="password" class="form-control" id="password" placeholder="This must be at least 8 characters" aria-describedby="basic-addon1">
		</div>

		<div id="addressNumberAndStreet" class="addressBlock">
			<div class="input-group col-md-3" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">Number</span>
	  			<input type="text" class="form-control"  id="addressNumber" placeholder="42" aria-describedby="basic-addon1">
			</div>

			<div class="input-group col-md-9" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">Street</span>
	  			<input type="text" class="form-control" id="addressStreet" placeholder="Yellow Brick Road" aria-describedby="basic-addon1">
			</div>
		</div>

		<div id="addressCityAndCode" class="addressBlock">
			<div class="input-group col-md-8" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">City</span>
	  			<input type="text" class="form-control" id="addressCity" placeholder="Emerald City" aria-describedby="basic-addon1">
			</div>

			<div class="input-group col-md-4" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">Code</span>
	  			<input type="text" class="form-control" id="addressCode" placeholder="123456" aria-describedby="basic-addon1">
			</div>
		</div>

		<div id="addressRegionAndCountry" class="addressBlock">
			<div class="input-group col-md-6" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">Region</span>
	  			<input type="text" class="form-control" id="addressRegion" placeholder="Munchkin Village" aria-describedby="basic-addon1">
			</div>

			<div class="input-group col-md-6" style="float: left;">
	  			<span class="input-group-addon" id="basic-addon1">Country</span>
	  			<input type="text" class="form-control" id="addressCountry" placeholder="Oz" aria-describedby="basic-addon1">
			</div>
		</div>

		<div id="selectWrapper">
			<div class="select">
	    		<span class="arr"></span>
				<select id="adjective" class="usernameDrop">
	  				<option value="Sexy">Sexy</option>
	  				<option value="Erotic">Erotic</option>
	  				<option value="Alluring">Alluring</option>
	  				<option value="Capricious">Capricious</option>
	  				<!--TODO: Replace with generated function -->
				</select>
			</div>

			<div class="select">
	    		<span class="arr"></span>
				<select id="noun" class="usernameDrop">
	  				<option value="Erc">Erc</option>
	  				<option value="Zebroid">Zebroid</option>
	  				<option value="Mantis Shrip">Mantis Shrimp</option>
	  				<option value="Cuttlefish">Cuttlefish</option>
				</select>
			</div>
		</div>
	</div>

	<textarea rows="4" cols="50" maxlength="140" id = "signUpAchievement">Stuff, Stuff, Stufff...</textarea>

	<form action="">
	  	<input type="radio" name="gender" value="male" class="gender col-md-3" id="male"> Male<br>
	  	<input type="radio" name="gender" value="female" class="gender col-md-3" id="female"> Female<br>
	  	<input type="radio" name="gender" value="other" class="gender col-md-3" id="other"> Not Specified
	</form>

	<div id="next-button">Next</div>
</body>



<script type="text/javascript">

	function scrollToTop() {
		window.scrollTo(500, 0);
	}

	$("#next-button").click(function (){
		var fName = $("#firstName").val();	
		var lName = $("#lastName").val();	
		var email = $("#email").val();	
		var password = $("#password").val();
		var usernameNoun = $("#noun").val();
		var usernameAdjective = $("#adjective").val();
	
		var aNum = $("#addressNumber").val();
		var aStr = $("#addressStreet").val();
		var aCit = $("#addressCity").val();
		var aCod = $("#addressCode").val();
		var aReg = $("#addressRegion").val();
		var aCou = $("#addressCountry").val();
		var signUpAch = $("#signUpAchievement").val();
		var gender;
		if($('#male').is(':checked') == true) {
			gender = "M";
		} else if($('#female').is(':checked') == true) {
			gender = "F";
		} else if($('#other').is(':checked') == true) {
			gender = "O";
		} 
	
		if(fName.length < 1 || fName.length > 255) {
			moveToError("First Name");
		} else if(lName.length < 1 || lName.length > 255) {
			moveToError("Last Name");
		} else if(password.length < 7 || password.length > 32) {
			moveToError("Password");
		} else if(aNum.length < 1 || aNum.length > 9) {
			moveToError("Address Number");
		} else if(aStr.length < 1 || aStr.length > 255) {
			moveToError("Address Street");
		} else if(aCit.length < 1 || aCit.length > 255) {
			moveToError("Address City");
		} else if(aCod.length < 1 || aCod.length > 6) {
			moveToError("Address Code");
		} else if(aReg.length < 1 || aReg.length > 255) {
			moveToError("Postal Code/Zip Code");
		} else if(aCou.length < 4 || aCou.length > 35) {
			moveToError("Country Code");
		} else if(signUpAch.length < 5 || signUpAch.length > 140) {
			moveToError("Sign Up Architecture");
		} 
		//TODO PHP Validate email
		//TODO Verify Address
		//TODO Send Valid stuff to PHP
		$.ajax({
			method: 'get',
  			url: 'php/signUp.php',
  			data: {
  				'gender': gender,
    			'fName': fName,
    			'lName': lName,
    			'email': email,
    			'password': password,
    			'aNum': aNum,
    			'aStr': aStr,
    			'aCit': aCit,
    			'aCod': aCod,
    			'aReg': aReg,
    			'aCou': aCou,
    			'signUpAch': signUpAch,
    			'usernameNoun': usernameNoun,
    			'usernameAdjective': usernameAdjective
  			},
  			success: function(msg) {

  			}
		});
	});
</script>
</html>