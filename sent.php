<?php
error_reporting(0);
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
$sel=mysqli_query($link,"select * from sent where frm='$sid'");
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
</head>
<body>
  <table class="highlight">
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>
  <?php
 if(mysqli_num_rows($sel)>0)
{
      while($arr=mysqli_fetch_array($sel))
      {
        extract($arr);
        ?>
            <tr>
              <td><form action="#">
                   <p>
                     <input type="checkbox" id="test" name="c[]" id="c[]" value="<?php echo $dat;?>"/>
                     <label for="test"></label>
                   </p>
                 </form>
              </td>
              <td><strong><?php echo $frm;?><strong></td>
              <td><a href="home.php?ri=<?php echo $dat;?>"><?php echo substr($mesg,0,5)."....";?></td>
            </tr>


        <?php
      }
}
else
{
  ?>
  <tr><td colspan="6" align="center"><span class="black-text"><strong>No mails found</strong></span></td></tr>
    <?php
}
?>
</tbody>
</table>

</body>
</html>
