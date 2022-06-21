<?php session_start()?>

<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-bulma.min.css">
<!-- or -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-bs5.min.css">
<!-- or -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-bs4.min.css">
<!-- or -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-foundation.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href='main.css'>
    <link rel="stylesheet" href='form.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
   
</style>
    <title>health</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid ">
    <img src="	https://lms.ha.edu.sa/pluginfile.php/1/theme_edumy/headerlogo_mobile/1655367857/logo-f-3.png"class="navbar-brand text-light" style="width:50px;height:50px"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-3 ">
        <a class="nav-link active text-light" aria-current="page" href="index.php">الرئيسية</a>
        <a class="nav-link text-light" href="#us">من نحن؟</a>
        <a class="nav-link text-light" href="#programs">البرامج</a>
        <a class="nav-link text-light" href="#footer">اتصل بنا</a>
      </div>
      <div class="navbar-nav me-auto">
        <?php if(isset($_SESSION['logged_in'])){ ?>
      <a href="userDashboared.php" class="btn btn-primary mx-3">طلباتي </a>
      <?php } 
      else {
      ?>
        <a href="signin.php" class="btn btn-primary">تسجيل الدخول</a>
      <?php }?>
            
       
                  

           
      </div>
    </div>
  </div>
</nav>