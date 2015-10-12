<?php
$dis="disabled";


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
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
</head>
<body>
<!--  <form name="form1" method="post" action="">
  <table width="30%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Edit Profile</strong></div></td>
    </tr>
    <tr>
      <td><strong>Fname</strong></td>
      <td><strong>
        <input name="fname" type="text" required="required" id="fname" value="<?php echo $f;?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Lname</strong></td>
      <td><strong>
        <input name="lname" type="text" required="required" id="lname" value="<?php echo $l;?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Qualification</strong></td>
      <td><strong>
        <input name="qua" type="text" required="required" id="qua" value="<?php echo $q;?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>IIN</strong></td>
      <td><strong>
        <input name="iin" type="text" required="required" id="iin" value="<?php echo $i;?>">
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>-->
  <div class="row">
      <form class="col s12 m12">
        <div class="row">
          <div class="input-field col s6 m6">
            <input id="first_name" type="text" class="validate" required="required" <?php echo $dis; ?>>
            <label for="first_name">First Name</label>
          </div>
         <div class="input-field col s6 m6">
           <input id="lastname" type="text" class="validate">
           <label for="lastname">Last name</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6">
          <input id="qualification" type="text" class="validate">
          <label for="qualification">Qualifiaction</label>
        </div>
        <div class="input-field col s6 m6">
          <input id="telephone" type="text" class="validate">
          <label for="telephone">contact no.</label>
        </div>
      </div>
      <div class="row">
         <div class="input-field col s3 m3">
           <p>
            <input name="group1" type="radio" id="test1" value="male" checked/>
            <label for="test1">Male</label>
           </p>
         </div>
         <div class="input-field col s3 m3">
           <p>
            <input name="group1" type="radio" id="test2" value="female" />
            <label for="test2">Female</label>
           </p>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s4 m4">
          <input type="date" class="datepicker">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 m4">
          <select>
           <option value="1" checked>India</option>
           <option value="2">USA</option>
           <option value="3">UK</option>
           <option value="3">Russia</option>
          </select>
         <label>Lives in</label>
       </div>
     </div>
     <div class="row">
       <form class="col s12">

            <div class="input-field col s12">
             <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">About me</label>

         </div>
      </form>
   </div>
      <div class="row">
        <div class="col m10 s10">
            <form action="#">
              <div class="file-field input-field">
               <div class="btn">
                 <span>Profile picture</span>
                    <input type="file">
               </div>
               <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
              </div>
            </div>
          </form>
        </div>
     </div>

  </div>

</body>

</html>
