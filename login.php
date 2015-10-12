<?php
error_reporting(0);
session_start();
extract($_POST);
include("conn.php");
if(isset($sub))
{
            if(!empty($id) && !empty($pass))
            {
                	  $pass=md5(trim($pass));
                    $sel=mysqli_query($link,"select id,uname,pass from regis where id='$id' or uname='$id'");
                	  $arr=mysqli_fetch_array($sel);
                    	  if(($id==$arr['id'] or $id==$arr['uname']) and $pass==$arr['pass'])
                    	  {
                            		session_start();
                            		$_SESSION['sid']=$arr['uname'];
                                // for cookie
                                if(isset($remember))
                                {
                                  setcookie("id",$id,time()+3600);
                                  setcookie("pass",$pa,time()+3600);
                                }
                              /*  if(file_exists("userp\$id.png"))
                                {
                                  $img="images\$id.png";
                                }
                                else
                                {
                                  $img="images\default.png";
                                }*/
                            		header("location:home.php");

                        }
                    	  else
                    	  {
                    		echo "<script> alert('Id and pass is not correct')</script>";
                    	  }
            }
            else
            {
          	  echo "<script> alert('Plz fill blank fields')</script>";
            }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function cook()
{
	if("<?php echo $_COOKIE['id'];?>"!=null)
	{
	   if(document.form2.id.value=="<?php echo $_COOKIE['id'];?>")
	   {
		 document.form2.pass.value="<?php echo $_COOKIE['pass'];?>" ;
	   }
	   else
	   {
		   document.form2.pass.value="";
	   }

	}
}

function fetchProfile()
{
  var img1 = new Image();
  img1.src = "userp/"+document.getElementById('id').value+'.png';
  // var picname = document.getElementById('id').value+'.png';
   img1.onerror = function() {
    console.log('chutiya')
      img1.src = 'userp/default.png'
   }
  img1.onload = function() {
  document.getElementById('Image').src = img1.src
 } 
}

</script>
<style>

</style>
</head>

<body>
<div class="main" id="main">
   <div class="jumbotron" id="DIV_5" align="center">
      <h1>>SOCIONET</h1>
  </div>
  <div class="below-jum" align="center">
      <h4><span>Sign in to continue to the SOCIONET Account</span></h4>
  </div>
       <div class="jumbotron">
       <div class="container-fluid" align="center" style="margin-bottom:20px">
         <img id="Image" src="userp\default.png" alt="No image" class="img-circle" width="100" height="90">
       </div>
       <form method="post" enctype="multipart/form-data" name="form2" id="form2">
         <table width="25%" border="0" align="center">
              <tr>
                  <td width="3%">&nbsp;</td>
                  <td width="97%">
                      <div class="form-group">
                      <label for="id" class="control-label">Email/Username:</label>
                      <input type="text" class="form-control" id="id" name="id" onchange="cook()" autofocus="autofocus" required="required" placeholder="Enter your ID/username" onfocusout="fetchProfile()" onerror="defaultProfile">
                      </div>
                   </td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>
                      <div class="form-group" >
                      <label for="pass" class="control-label">Password:</label>
                      <input type="password" name="pass" class="form-control" name="pass" id="pass" placeholder="Enter your password">
                      </div>
                  </td>
              </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                      <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember" id="remember" > Remember me</label>
                        </div>
                      </div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>
                  <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block" name="sub" id="sub">Log in</button>
                  </div>
                </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
                <div class="class-back" align="center" style="text-decoration:none">
                  <button type="button" class="btn btn-link"><a href="register.php">Create an Account</a></button>
               </div>
             </td>
            </tr>
   </table>
</form>
  </div>
</div>
</body>
</html>
