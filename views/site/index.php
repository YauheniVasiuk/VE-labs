<!DOCTYPE html>
<html lang="ru" class="contact">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;900&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="/template/CSS/normalize.css">
   <link rel="stylesheet" href="/template/CSS/style.CSS">
   <link rel="stylesheet" href="/template/CSS/dark.CSS" id="dark">
   <link rel="icon" href="/template/images/icon.svg" type="image/x-icon">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <title>VE-labs</title>
</head>

<body class="contact">
   <div class="wrapper-contact">

      <header class="header">
         <div class="container">
            <nav class="nav">
               <a class="logo">
                  <img class="logo-img dark" src="/template/images/dark.svg" alt="logo" id="logo">
                  <img class="logo-img light" src="/template/images/light.svg" alt="logo" id="logo">
                  <input type="checkbox" class="theme-checkbox"></input>
               </a>
               <div class="header_burger">
                  <span></span>
               </div>
               <ul class="menu">
                  <li class="menu-item">
                     <a href="/views/works.html" class="menu-link">Works</a>
                  </li>
                  <li class="menu-item">
                     <a href="/views/skills.html" class="menu-link">Skills</a>
                  </li>
                  <li class="menu-item">
                     <a href="/views/contact.html" class="menu-link">Contact</a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>

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
                        <h4 class="work-item-title"><a href="#"><?php echo ($worksItem['title']) ?></a></h4>
                        <div class="work-item-inside-wrapper">
                           <div class="work-item-year"><span><?php echo (substr($worksItem['date'], 0, 4)) ?></span></div>
                           <div class="work-item-describe"><?php echo ($worksItem['status']) ?></div>
                        </div>
                        <div class="work-item-description"><?php echo ($worksItem['description']) ?></div>
                     </div>
                  </div>
               <?php endforeach; ?>
         </section>
      </main>

      <footer class="footer contact-footer">
         <div class="container">
            <a class="logo-footer">
               <img class="logo-img" src="/template/images/logo_tr.svg" alt="logo">
            </a>
            <div class="social">
               <ul class="social-links">
                  <li class="social-link">
                     <a href="#"><img src="/template/images/VK.png" alt="vk"></a>
                  </li>
                  <li class="social-link">
                     <a href="#"><img src="/template/images/telegram.png" alt="telegram"></a>
                  </li>
                  <li class="social-link">
                     <a href="#"><img src="/template/images/linkedin.png" alt="linkedin"></a>
                  </li>
                  <li class="social-link">
                     <a href="#"><img src="/template/images/skype.png" alt="skype"></a>
                  </li>
               </ul>
            </div>
            <div class="copy-right">Copyright ©2023 All rights reserved</div>
         </div>
      </footer>

   </div>
   <script src="/template/js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>