<?php
	session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>StarLabs Project</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/reset.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a52ca9a4af.js" crossorigin="anonymous"></script>
	<style>
		/*footer/*/
		.footer{
			background-color:#32a89e; 
			width: 98%;
			/*height: 10%;*/
			position: absolute;
            bottom: 0px;
            box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
            margin-top: 50px;
		}
		.madeby{
			color: #e6f7ff;
			float: left;
			font-size: 25px;
			font-family: Arial, Helvetica, sans-serif;
		}
		.artrrustemi{
			color: white;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 15px;
			/*margin-right: 80%;*/
			/*border:solid;*/
			/*display: inline;*/
			
		}
		.menufooter{
			color: #e6f7ff;
			margin-left: 30%;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 25px;
			/*border:solid;*/
		}

		.homefooter{
			color: white;
			margin-left:30%;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 15px;
			/*border:solid;*/
		}
		.menufooter2{
			display: inline;
		}
		.portfoliofooter{
			font-size: 15px;
			color: white;
			margin-left:30%;
			font-family: Arial, Helvetica, sans-serif;
			/*border:solid;*/
		}
		.loginfooter{
			font-size: 15px;
			color: white;
			margin-left:30%;
			font-family: Arial, Helvetica, sans-serif;
			/*border:solid;*/
		}
		.signupfooter{
			font-size: 15px;
			color: white;
			margin-left:30%;
			font-family: Arial, Helvetica, sans-serif;
			/*border:solid;*/
		}
		.socialmedia{
			float: right;
			color: #e6f7ff;
			margin-right: 4%;

		}
		a{
			text-decoration: none;
			color: white;
		}
		/*slideshow*/
		.mySlides {display:none;}
		.slideshow{
			margin-left:auto;
			margin-right:auto;
			margin-top: 5%;
			margin-bottom: 0%;
			box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
		}
		.view{
			/*padding-left: 7%;*/
			margin-left: 15%;
			display: flex;
			margin-top: 0%;
		}

		.nrv{
			color: #32a89e;
			font-size: 40px;
			/*padding-bottom:1% ; */
			margin-top: 3.5%;
		}
		.eye{
			    margin-top: 4%;
			    padding-right:1%;
			    color:#32a89e; 
		}
		.txtv{
			color:  #32a89e;
			font-size: 20px;
			margin-top: 4.5%;
			padding-left: 1%;
			font-family: Arial, Helvetica, sans-serif;
		}
		.comments{
			border:none;
			margin-left: 15%;
			margin-right: 50%;
			box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
			font-family: Arial, Helvetica, sans-serif;
		}
body{
	background-color: #e6f7ff;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #32a89e;
  border-radius: 3px;
  margin:0 auto;
}

li {
  float: left;
}

li a {
  display: block;text-align: center;
  color: white;
  text-align: center;
  padding: 20px 100px;
  text-decoration: none;
  border-radius: 3px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  margin:0 auto;
  
}

li a:hover {
  background-color: #e6f7ff;
  color:  #80d7ff;
}
h1{
	color: #008080;
}
.logout{
	float: right;
}
textarea{
	width: 400px;
	height: 80px;
	background-color: #fff;
	resize: none;
}
/*indexP*/
.index-intro{
	/*border:solid;*/
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
  	font-weight: bold;
  	width: 100%;
}
/*.inline{
	display: inline;
*/}
.logoDiv{
	/*border:solid;*/

	margin-top: 30px;
    margin-left: 30px;

}
.hellothere{
	/*border:solid;*/
	display: block;
	padding-right: 0;
	/*display: block;
	float: left;
	/*margin-top*/: 50px;*/
}

.header{
	/*border:solid;*/
	/*display: flex;*/
}
.index-categories{
	/*border:solid;*/
	
	width: 100%;
}
.index-categories-list{
	/*border:solid;*/
	width: 100%;
	text-align: center;
	
}
.divIn{
	/*text-align: center;*/
	float: left;
	/*border:solid;*/
	width: 19%;
	height: 200px;
	padding-bottom: 5%;
	padding-left: 5%;
	background-color: #32a89e;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	margin-right: 18px;
	margin-bottom: 40px;
}
.hapsira{
	margin-right: 35%;
	margin-top: 20%;
	color: white;
}
.welcometxt{
	font-size: 40px;
	color: #32a89e;
	font-family: Arial, Helvetica, sans-serif;
  	font-weight: bold;
  	/*margin-bottom: -129px;*/
}
/*login*/

.h2Login{
	color: #32a89e;
	text-align: center;
	margin-top: 5%;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 60px;
}
.login-form1{
	border: solid 2px  #32a89e;
	margin-left: auto;
	margin-right: auto;
	width: 60%;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	margin-top: 5%;
	padding-bottom: 10%;
}
.login-form{
	/*border: solid 1px  #32a89e;*/
	margin-right: auto;
	margin-left: auto;
	width: 70%;
	/*box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);*/
}
input{
	width: 100%;
	height: 70px; 
	margin-bottom: 5%;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	border:none;
}
.btn{
	width: 100%;
	height: 65px;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	background-color: #32a89e;
	border:none;
	color: white;
	font-size: 20px;
	font-weight: bold;
}
.btn:hover{
	opacity: 0.8;
	cursor: pointer;
}
/*signup*/
.h2signup{
	color: #32a89e;
	text-align: center;
	margin-top: 5%;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 60px;
}
.signup-form1{
	border: solid 2px  #32a89e;
	margin-left: auto;
	margin-right: auto;
	width: 60%;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	margin-top: 5%;
	padding-bottom: 7%;
}
.signup-form{
	/*border: solid 1px  #32a89e;*/
	margin-right: auto;
	margin-left: auto;
	width: 70%;
	/*box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);*/
}
.btn2{
	width: 100%;
	height: 65px;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	background-color: #32a89e;
	border:none;
	color: white;
	font-size: 20px;
	font-weight: bold;
}
.btn2:hover{
	opacity: 0.8;
	cursor: pointer;
}
::placeholder{
	color: #32a89e;
	font-size: 18px;
}
.cv{
	margin: 2% auto;
	border:solid #32a89e;
	width: 60%;
	/*height: 1000px;*/
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
}
.foto{
	margin-top: 2%;
	margin-left: 2%;
	border:solid #32a89e;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	width: 20%;
	float: left;
}
.foto img{
	max-width: 100%;
    max-height: 100%;
}
.info{
	float: left;
	margin-left: 5%;
	font-size: 180%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.line{
	border:solid #32a89e;
	width: 50%;
	margin:0 27%;
}
.address{
	margin-left: 27%;
	margin-right: 40%;
	/*border:solid;*/
	font-size: 130%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #3bc4b9;
}
.phone{
	margin-left: 27%;
	margin-right: 40%;
	/*border:solid;*/
	font-size: 130%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #3bc4b9;
}
.email{
	margin-left: 27%;
	margin-right: 40%;
	/*border:solid;*/
	font-size: 130%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #3bc4b9;
}
.educationtxt{
	margin-left: 2%;
	font-size: 200%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.ed1{
	margin-left: 2%;
	float: left;
	font-size: 140%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.edd1{
	margin-bottom: 0%;
}
.ed2{
	margin-left: 10%;
	margin-top: 3.7%;
	font-size: 140%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	
	/*margin-bottom: 5%;*/

}
.edd2{
	/*border:solid;*/
	margin-left: 15%;

	/*margin-bottom: 5%;*/
}
.xhv{
	margin-left: 23%;
	font-size: 140%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;

}
.row{
	margin-bottom: 6%;
}
.line2{
	border:solid #32a89e;
	width: 50%;
	margin:0 2%;
}
.ed3{
	margin-left: 10%;
	margin-top: 3.7%;
	font-size: 140%;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;

	padding-top: 1.5%;

}

/*responsive*/
@media screen and (max-width: 600px) {
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #32a89e;
  border-radius: 3px;
  margin:0;
}

li {
  /*float: right;*/
  /*margin-left: 12%;*/
  /*margin:100%;*/
	

}

li a {
  display: block;text-align: center;
  color: white;
  text-align: center;
  padding: 20px 90px;
  text-decoration: none;
  border-radius: 3px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  /*padding: 0 100%;*/

  
}

li a:hover {
  background-color: #e6f7ff;
  color:  #80d7ff;
}
.logout{
	float: left;
}
.logoDiv{
	text-align: center;
}
.divIn{
	width: 78%;
	height: 200px;
	padding-bottom: 5%;
	background-color: #32a89e;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	margin-left: 5%;
}
.hapsira{
	padding-left: 20%;
}
.slideshow{
			margin: 1%  auto;
			box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
		}
}
textarea{
	margin-left:15%;
	border:none;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
}
.submitcomment{
	margin-left: 15%;
	padding: 15px 30px;
	background-color: #32a89e;
	border:none;
	box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
	color: white;
	font-weight: bold;
	margin-top: 13px;
}
.submitcomment:hover{
	opacity: 0.8;
	cursor: pointer;
	}


/*porfoioComments*/
	.comments{
		margin: 0 auto;
		width: 30%;
		border:solid 2px  #32a89e;
		margin-top: 20px;
	}
	.comments h1{
		font-size: 25px;
	}
	.comments p{
		font-size: 20px;
		color:#3bc4b9;
	}
	.commentsTitle{
		font-size: 50px;
		font-family: Arial, Helvetica, sans-serif;
	}
	.brja{
		height: 5px;
		width: 100%;
	}
	.commentView{
		font-size: 30px;
		font-family: Arial, Helvetica, sans-serif;
	}
	.portfolioLink{
		color: #008080;
	}
/*porfoioComments*/
.login-form h1{
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>
	<nav>
		<!-- <div class="wrapper"> -->

			<!-- <a href="index/php"><img src=""></a> -->
			<ul>
				<!-- <li><a href="index.php">Home</a></li> -->
				<li><a href="home.php">Home</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				
				<?php
					if (isset($_SESSION["useruid"])) {
						// echo "<li><a href='profile.php'>Profile page</a></li>";
						echo "<li class='logout'><a href='includes/logout.inc.php'> Log out</a></li>";
					}
					else{
						echo "<li><a href='signup.php'>Sign up</a></li>";
						echo "<li><a href='login.php'>Log in</a></li>";
					}
				?>
				
			</ul>
		<!-- </div> -->
	</nav>

	<div class="wrapper">
