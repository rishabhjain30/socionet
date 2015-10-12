<?php
error_reporting(0);
session_start();
extract($_POST);
include("conn.php");
if(isset($submit))
{
   if(!empty($uname) && !empty($pass) && !empty($cpass) && !empty($id) && !empty($age)&& !empty($city) && !empty($ans)&& !empty($ec))
   {
	     if($cpass==$pass)
	       {
            if($ec==$_SESSION['cap'])
	   	      {
                    $id=mysqli_real_escape_string($link,trim($id));
                    $pass=mysqli_real_escape_string($link,md5(trim($pass)));
                    $uname=mysqli_real_escape_string($link,trim($uname));
                    $gen=mysqli_real_escape_string($link,trim($gen));
                    $age=mysqli_real_escape_string($link,trim($age));
                    $city=mysqli_real_escape_string($link,trim($city));
                    $sq=mysqli_real_escape_string($link,trim($sq));
                    $ans=mysqli_real_escape_string($link,trim($ans));
              		  if(mysqli_query($link,"insert into regis values('$id','$pass','$uname',$age,'$gen','$city','$sq','$ans',NOW())") or die("Connection not possible"))
              		  {
              			      mysqli_query($link,"insert into profile(id) values('$id')");
              	          header("location:welcome.php?id=$id");

              		  }

              		  else
              		  {
              			 echo "<script> alert(' Username or ID already registered') </script>";
              		  }
            }
           else
           {
               echo "<script> alert('Please enter captcha code')</script>";
           }
       }
	 else
   {
  	echo "<script> alert('Password fields Doesnot matches') </script>";
   }
 }
   else
   {
     echo "  <script> alert('Enter All fields')</script>;";
   }

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function()
{
$("#uname").blur(function()
{

  $("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");

  $.post("user_availability.php",{uname:$(this).val() } ,function(data)
      {
    //$("#msgbox").html(data);
   if(data=='no') //if username not avaiable
    {
      $("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
    {
      //add message and change the class of the box and start fading
      $(this).html('This User name Already exists').addClass('messageboxerror').fadeTo(900,1);
    });
        }
    else
    {
      $("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
    {
      //add message and change the class of the box and start fading
      $(this).html('Username available to register').addClass('messageboxok').fadeTo(900,1);
    });
    }

      });

});
});

</script>
</head>

<body>
<div class="main" id="main">
   <div class="jumbotron" align="center" >
       <h1>>SOCIONET</h1>

  </div>
  <div class="below-jum" align="center">
       <h4><span>Create your SOCIONET Account</span></h4>
  </div>
  <div class="formx col-md-12" align="center" style="margin-left:20px;max-width:50%;">

        <div class="col-md-12 jumbotron" align="left">
  <form method="post" enctype="multipart/form-data" name="form1" id="form1">
         <table width="100%" border="0">
  <tr>
    <td width="16%"></td>
    <td width="56%"><div class="form-group">
  <label for="uname">User name:</label>
  <input type="text" class="form-control" id="uname" name="uname" required placeholder="User Name" ><span id="msgbox"></span>
  </div></td>
    <td width="28%"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><label for="id">Email:</label>
  <input type="text" class="form-control" id="id" name="id" required placeholder="Email ID" >
  </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><label for="pass">Password:</label>
  <input type="password" class="form-control" id="pass" required name="pass" placeholder="Password" >
  </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><label for="cpass">Confirm password:</label>
  <input type="password" class="form-control" id="cpass" required name="cpass" placeholder="Confirm password" >
  </div></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><label for="age">Age:</label>
  <input type="text" class="form-control" id="age" required name="age" placeholder="Age" >
  </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label class="radio-inline"><input type="radio" name="gen" value="male" checked>Male</label>
        <label class="radio-inline"><input type="radio" name="gen" value="female">Female</label>
     </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group">
  <label for="select">City:</label>
  <select class="form-control" name="city" id="city">
    <option value="India">India</option>
    <option value="Pakistan">pakistan</option>
    <option value="China">China</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Australiia">Australia</option>
  </select>
</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
            <td>&nbsp;</td>
            <td><div class="form-group">
              <label for="sq">Security question:</label>
              <select name="sq" id="sq" class="form-control">
              <option value="What is ur pet name?">What is ur pet name?</option>
              <option value="What is ur fav color?">What is ur fav color?</option>
              <option value="What is ur childhood hero?">What is ur childhood hero?</option>
            </select></td>
    </tr>
    <tr>
            <td>&nbsp;</td>
            <td>
              <div class="form-group"><label for="ans">Answer</label>
              <input name="ans" type="text" required id="ans" class="form-control" placeholder="Answer"></div></td>
          </tr>
          <tr>

            <td>&nbsp;</td>
            <td>
              <div class="form-group">
                <label>Code:</label>
              <?php include("captcha.php");?></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <div class="form-group"><label for="ec">captcha:</label>
              <input class="form-control" name="ec" type="text" required id="ec" placeholder="captcha code"></div></td>
          </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><button type="submit" class="btn btn-success btn-block" name="submit" id="submit">SUBMIT</button></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="form-group"><button type="reset" value="reset" class="btn btn-danger btn-block" name="reset" id="reset">RESET</button></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><div class="class-back" align="center" style="text-decoration:none">
  <button type="button" class="btn btn-link"><a href="login.php">Have an account</a></button>
  </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>
</form>
   </div>
</div>
  <div class="container-fluid" style="margin-top:25%" align="center">
       <img src="android-app-on-google-play-coming-soon.jpg" width="400" height="150">
    </div>
 </div>
</body>
</html>
