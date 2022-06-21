<?php include './template/header.php' ;


if($_SERVER['REQUEST_METHOD']=="POST"){
   $_SESSION['logged_in']=true;
}
?>


       



<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/signup.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <title>Sign in</title>
</head>
<body id="body">
  <div class="container-css flex-column">
      <a href="index.php" class="my-3 text-bold ">Brand</a>
      <form  class="form" id="form" action="" method="POST"> 
          <div class="header">
              <h2>تسجيل دخول</h2>
          </div>
   <div class="padding">
   <div class="form-control-css ">
    <label for="email">Email</label>
    <input type="text" placeholder="ادخل الايميل" id="email" name="email">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>error msg</small>
   </div>

   

      <div class="form-control-css ">
     <label for="password">Password</label> -->
        <!-- <input type="password" placeholder="ادخل كلمة السر" id="password" name="password">
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-exclamation-circle"></i>
       <small>error msg</small>
      </div>
      <div class="forgot  ">
          <a href="#"> هل نسيت كلمة السر؟ </a>
       </div>

       <div class="signup  ">
       <span>ليس لديك حساب؟</span> <a href="register.php">سجل هنا</a>
         </div>


       <div>
           <button id="submit" type="submit" name="submit">تسجيل دخول</button>

      </div>
   </form>
</div>

 </div>  
   <script  src="./js/signin.js"></script> 
 </body>
</html> --> 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>تسجيل دخول</title>
    
</head>
<body class="bg-light">
<section class="vh-75 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">تسجيل الدخول</h2>
              <p class="text-white-50 mb-5">من فضلك ادخل المعلومات</p>
            <form method="post">
              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">ادخل الايميل</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">كلمة السر</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">هل نسيت كلمة السر؟</a></p>

              <a class="btn btn-outline-light btn-lg px-5" type="submit" href="index.php">تسجيل الدخول</a>

              <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div> -->

            </div>
            </form>
            <div>
              <p class="mb-0">ليس لديك حساب؟ سجل هنا <a href="register.php" class="text-white-50 fw-bold">تسجيل</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<?php include './template/footer.php' ?>