<?php include(ROOT . '/views/layouts/header.php') ?>

<main class="main contact-main">
   <section class="headline">
      <div class="container">
         <div class="wrapper">
            <img src="/template/images/photo.png" alt="photo" class="headline-img-small">
            <div class="description">
               <h1 class="title">Hi, I am Женя, <br> Креативный web Developer</h1>
               <p>Не полохо разработываю back и front. Увлеченно работаю над новыми проектами, <br>
                  постоянно самосовершенствуюсь, прекрасно дополняю интересную команду и <br>
                  стремлюсь к новым свершениям!
               </p>
               <a href="/template/images/resume.pdf" class="headline-btn" target="_blank">Download Resume</a>
            </div>
            <img src="/template/images/photo.png" alt="photo" class="headline-img">
         </div>
      </div>
   </section>

   <section class="skills">
      <div class="container">
         <div class="wrapper-title">
            <h4 class="skills-title">Skills</h4>
            <a href="/views/skills.html" class="skills-link">View all</a>
         </div>
         <div id="carouselControls" class="carousel slide pb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/html.svg" class="w-100 skills-carousel" alt="html">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/css.svg" class="w-100 skills-carousel" alt="css">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/php.svg" class="w-100 skills-carousel w-php  skills-php" alt="php">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/javascript.svg" class="w-sm-20 w-lg-100 skills-carousel skills-js" alt="javascript">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/bootstrap.svg" class="w-sm-20 w-lg-100 skills-carousel skills-bs" alt="bootstrap">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/figma.svg" class="w-sm-20 w-lg-100 skills-carousel skills-figma" alt="figma">
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/laravel.svg" class="w-100 skills-carousel" alt="laravel">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/yii.svg" class="w-100 skills-carousel" alt="yii">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/symfony.svg" class="w-100 skills-carousel" alt="symfony">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/react.svg" class="w-100 skills-carousel" alt="react">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/angular.svg" class="w-100 skills-carousel" alt="angular">
                     </div>
                     <div class="col-md-2 col-sm-2 col-2">
                        <img src="/template/images/vue.svg" class="w-100 skills-carousel" alt="photoshop">
                     </div>
                  </div>
               </div>

               <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Предыдущий</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Следующий</span>
               </button>
            </div>
         </div>
      </div>
   </section>

   <section class="works">
      <div class="container">
         <h2 class="works-title"><a href="/views/works.html">Featured works</a></h2>
         <?php foreach ($works as $worksItem) : ?>
            <a href="#" class="work-item-link-small"><img src="/template/images/<?php echo $worksItem['name'] ?>.png" alt="<?php echo $worksItem['name'] ?>"></a>
            <div class="work-item">
               <a href="#" class="work-item-link"><img src="/template/images/<?php echo $worksItem['name'] ?>.png" alt="<?php echo $worksItem['name'] ?>"></a>
               <div class="work-item-wrapper">
                  <h4 class="work-item-title"><a href="#"><?php echo $worksItem['title'] ?></a></h4>
                  <div class="work-item-inside-wrapper">
                     <div class="work-item-year"><span><?php echo substr($worksItem['date'], 0, 4) ?></span></div>
                     <div class="work-item-describe"><?php echo $worksItem['status'] ?></div>
                  </div>
                  <div class="work-item-description"><?php echo $worksItem['description'] ?></div>
               </div>
            </div>
         <?php endforeach; ?>
   </section>
</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>