<?php
error_reporting(0);
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
$att=$_FILES['att']['name'];
$dat=date("d-m-y h-i-s a");
extract($_POST);
if(isset($send))
{ $sel=mysqli_query($link,"select id from regis where id='$to'");
  $arr=mysqli_fetch_array($sel);
  if($to==$arr['id'])
  {
    if(mysqli_query($link,"insert into inbox values('$sid','$to','$sub','$textarea1','$att','$dat')") and mysqli_query($link,"insert into sent values('$sid','$to','$sub','$textarea1','$att','$dat')"))
   {
      mkdir("attach/$dat");
			move_uploaded_file($_FILES['att']['tmp_name'],"attach/$dat/$att");
			echo "<script> alert('Mail Sent Successfully')</script>";
   }
  }
  else
  {
   echo "<script> alert('user doesnot exist')</script>";
  }
}
if(isset($save))
{
  if(mysqli_query($link,"insert into draft values('$sid','$to','$sub','$textarea1','$att','$dat')"))
  {
     echo "<script> alert('Message Saved')";
     header("location:home.php");

  }

}

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
<script>
$(document).ready(function() {
    $('#textarea1').characterCounter();
  });
</script>
</head>
<body>
  <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="email" type="email" class="validate" name="to" id="to"></input>
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
   </div>
   <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">subject</i>
           <input id="icon_prefix" type="text" class="validate" name="sub" id="sub"></input>
           <label for="icon_prefix">Subject</label>
         </div>
    </div>
    <div class="row">
          <div class="input-field col s12">
            <div class="file-field input-field">
                <div class="btn-flat">
                  <i class="material-icons prefix">note_add</i>
                    <input type="file">
                 </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="att" id="att" type="text" placeholder="Attachments">
               </div>
           </div>
     </div>
   </div>
    <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">description</i>
            <textarea id="textarea1" class="materialize-textarea" length="100"></textarea>
            <label for="textarea1">Message</label>
          </div>
     </div>

     <div class="row">
       <div class="col s3 m3">
         <button class="btn waves-effect waves-light red" type="submit" id="send" name="send">Send
                 <i class="material-icons right">send</i>
        </button>
      </div>
      <div class="col s3 m3">
        <button class="btn waves-effect waves-light red" type="submit" id="save" name="save">save
                <i class="material-icons right">done</i>
       </button>
     </div>
      <div class="col s3 m3">
         <a class="btn waves-effect waves-purple red" href="home.php">cancel<i class="material-icons right">close</i></a>
    </div>
  </div>
</body>
</html>
