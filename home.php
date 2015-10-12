
<?php
error_reporting(0);
$bdis="disabled";
session_start();
$sid=$_SESSION['sid'];
// for blank session


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src='files/js/jquery.modernizr.min.js'></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--<link href="http://fonts.googleapis.com/css?family=Inidomptentsolata" rel="stylesheet" type="text/css">-->
<script>
 document.location.href="#ID_2";
$(document).ready(function(){
	 // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	 $('.modal-trigger').leanModal();
 });

</script>

</script>
<style>
#DIV_2 {
	font-weight: bolder;
}

#DIV_4
{
  border-bottom: 2px solid #FFFFFF;
  border-top: 2px solid #FFFFFF;
  border-left: 2px solid #FFFFFF;
  border-right: 2px solid #FFFFFF;
}
#DIV_10
{
  border-bottom: 2px solid #FFFFFF;
  border-top: 2px solid #FFFFFF;
  border-left: 2px solid #FFFFFF;
  border-right: 2px solid #FFFFFF;
}

</style>
</head>
<body>

 <div class="row" >
		<div class="DIV_1" id="DIV_1">
        <div class="col m2 s9">
				  <a class="waves-effect waves-teal btn-flat-large"><span class="white-text"><h4>>Socio Net</h4></span></a>
				</div>
				<div class="col m1 offset-m9 s1 offset-s2	" align="right" style="margin-top:0.7%">
					<a href="#" class="tooltipped waves-effect waves-teal btn-flat-large" data-position="bottom" data-tooltip="Logout"><span class="white-text"><i class="small material-icons">power_settings_new</i></span></a>
				</div>
    </div>
</div>
	<div>
		<img src="images/covers.jpg" class="responsive-img" width="100%" style="margin-top:-9%" >
	</div>
  <div class="DIV_3" style="width=100%; position: absolute;	top: 20%">
    <div class="row">
       <div class="col s4 m4">
         <div class="row">
           <div class="col s5 m7 offset-m2 offset-s2">
             <div class="DIV_4" id="DIV_4" align="center">
               <h4 class="white-text" align="centre">Friends&nbsp;<i class="material-icons">play_circle_filled</i></h4>
             </div>
           </div>
         </div>
         <div class="row">
            <div style="width=100%">
               <div class="DIV_5" id="DIV_5" >
                 <h1>Friend's List will come here</h1>
               </div>
            </div>
         </div>
       </div>
       <div class="col s5 m5">
         <div class="transparent white-text">
           <h1>Friend's bio will come here</h1>
         </div>
       </div>
       <div class="col s3 m3">
         <div class="row">
           <div class="col s9 m9 offset-m2 offset-s2">
             <div class="DIV_10" id="DIV_10"  align="center">
               <h4 class="white-text">Recents&nbsp;<i class="material-icons">view_week</i></h4>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>

	<div class="col m6 s6" style="margin-top:0">
		 <img src="images/ucovers.jpg" >
	</div>

	<div class="row" style="margin-top:4%" id="ID_2">
		<div class="col s3 m3">
		  <div class="container">
		     <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
		       <i class="mdi-navigation-menu"></i></a>
		  </div>
		  <ul id="nav-mobile" class="side-nav-fixed">
		    <div class="pico">
		    <li><a href="#"><img class="img-circle responsive-img" src="default_profile_image_large-e61b362fc14b3206204a64e603d7ad80.png" width="200" height="150"></a></li>
		  </div>
		    <div class="divider"></div>
			   	<div class="card amber darken-3 ">
						 <div class="card-content white-text" align="left">
							<a href="#"><span class="card-title" ><?php echo $sid;?></span></a>
						 </div>
					 </div>
		      <div class="divider"></div>

				  <li class="bold"><a class="modal-trigger waves-effect waves-teal btn-flat" id="DIV_2" href="#about">About</a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1000">Request&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge right">4</span></a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1001">Compose</a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1002">Inbox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge right">99</span></a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1003">Sent</a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1004">Drafts</a></li>
					<li class="bold"><a class="waves-effect waves-teal btn-flat" id="DIV_2" href="home.php?idomptent=1005">Trash</a></li>
					<div id="about" class="modal modal-fixed-footer">
            <div class="modal-content">
             <?php include("profile.php"); ?>
					  </div>
           <div class="modal-footer">
						   <button class="btn waves-effect waves-light <?php ?>" type="submit" name="action">Submit
	                <i class="material-icons right">send</i>
               </button>
							 <button class="btn-flat waves-effect waves-light <?php ?>" type="submit" name="action">Edit
							 </button>
          </div>
  </div>
		</div>
		<div class="col s9" style="margin-top:2%">
		<?php

		switch($_GET['idomptent'])
				{
			    // case 'about':include("profile.php");
				              //      break;
           case NULL: include("inbox.php");
					             break;
					 case 1000:include("pattern.php");
				                    break;
				   case 1001:include("compose.php");
				                    break;
				   case 1002:include("inbox.php");
				                    break;
				   case 1003:include("sent.php");
				                    break;
				   case 1004:include("draft.php");
				                    break;
				   case 1005:include("trash.php");
				                    break;

			  }
				if(isset($_GET['ri']))
		   {
		  	include("readin.php");
		   }

			 ?>
  </div>
<div class="poss col m12 " style="position:absolute; bottom:-150%;left:0%">
<div class="row">
	<div class="col m12">
    <footer class="page-footer black">
		  <div class="container">
			   <div class="row">
				   <div class="col l6 s12">
					    <h5 class="white-text">Social Networking</h5>
					    <p class="grey-text text-lighten-4">An organised and material designed mail system</p>
				   </div>
				 <div class="col l4 offset-l2 s12">
					 	 <ul>
						 <li><a class="grey-text text-lighten-3" href="autologin.php">Meet the Team</a></li>
						 <li><a class="grey-text text-lighten-3" href="home.php">Home</a></li>
						 <li><a class="grey-text text-lighten-3" href="#!">Friends</a></li>
						 </ul>
				 </div>
			 </div>
		 </div>
		 <div class="footer-copyright">
			 <div class="container">
			 © 2014 Copyright Text
			 <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			 </div>
		 </div>
	 </footer>
 </div>
 </div>
</div>


</body>
</html>
