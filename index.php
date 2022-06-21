<?php include './template/header.php';?>


<header id="header" class="d-flex flex-column justify-content-center align-items-center">
    <!-- <img src="./img/header.svg"> -->
    <div class="d-flex justify-content-center align-items-center text-center">
        <h2 class="text-light" style="max-width:500px">
          مرحبا بك في المنصة التعليمية الخاصة بالأكاديمية الصحية
        </h2>
    </div>
    <?php if(!isset($_SESSION['logged_in'])){ ?>
    <a class="btn btn-primary my-3" href="register.php">سجل معنا </a>
    <?php }?>
</header>

<section id="us">
    <div class="container py-5">
   <div class="row align-items-center">
    <div class="col-6">
        <h5>من نحن؟</h5>
    <p> 
الأكاديمية الصحية هي إحدى مخرجات رؤية 2030، والتي تهدف إلى سد فجوة الاحتياج الوظيفي وخلق برامج التدريب المهني الصحي لغرض بناء القدرات وتعزيز جدارات القوى العاملة في مجال الرعاية الصحية لرفع كفاءة وجودة الخدمات المقدمة.</p>
    </div>
    <div class="col-6">
        <img src="./img/doc.jpg" class="img-fluid">
    </div>
   </div>
       
    </div>

</section>

<section id="programs" class="mb-5">
    <div class="container">
        <div class="row ">

    <div class="col-6 col-md-3" >
    <div class="card text-bg-primary mb-3" style="min-height: 150px" >
  <div class="card-body text-center d-flex align-items-center justify-content-center text-light">
    <h5 class="card-title">برامج الأمن الصحي</h5>
    
  </div>
        </div>
    </div>
     

    <div class="col-6 col-md-3" >
    <div class="card text-bg-primary mb-3" style="min-height: 150px" >
  <div class="card-body text-center d-flex align-items-center justify-content-center text-light">
    <h5 class="card-title">  مساعد دكتور</h5>
    
  </div>
        </div>
    </div>

    <div class="col-6 col-md-3" >
    <div class="card text-bg-primary mb-3" style="min-height: 150px" >
  <div class="card-body text-center d-flex align-items-center justify-content-center text-light">
    <h5 class="card-title">  برنامج فني رعاية مرضى</h5>
    
  </div>
        </div>
    </div>

    <div class="col-6 col-md-3" >
    <div class="card text-bg-primary mb-3" style="min-height: 150px" >
  <div class="card-body text-center d-flex align-items-center justify-content-center text-light">
    <h5 class="card-title">برنامج تمريض مدرسي  </h5>
    
  </div>
        </div>
    </div>

    </div>

</section>


<?php include './template/footer.php';?>
