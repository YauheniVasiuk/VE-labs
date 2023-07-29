<?php include(ROOT . '/views/layouts/header.php') ?>
<script>
   sessionStorage.setItem("errors_contact", 'false');
</script>
<main class="main contact-main">
   <div class="container">
      <?php if ($result) : ?>
         <div style="text-align: center; margin: 50px 0 50px 0;">
            <p><b>Сообщение отправлено. Я обязательно с вами свяжусь!</b></p>
         </div>
      <?php else : ?>
         <h1 class="text-center text-uppercase title-contact">Contact</h1>
         <?php if (isset($errors)) : ?>
            <p>- <?php echo $errors ?></p>
            <script>
               sessionStorage.setItem("errors_contact", 'true');
            </script>
         <?php endif; ?>
         <div class="col-lg-12 mt-lg-5 mb-lg-5 mb-sm-3 location-big">
            <div class="col-lg-10 col-sm-12">
               <form action="#" method="POST">
                  <div class="row">
                     <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                           <input type="text" name="name" placeholder="Имя" value="<?php echo $name ?>" class="form-control mb-sm-3 mb-lg-0" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                           <input type="text" name="surname" value="<?php echo $surname ?>" placeholder="Фамилия" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                           <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" class="form-control mt-3" required>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                           <input type="number" name="phone" value="<?php echo $phone ?>" placeholder="Номер телефона" class="form-control mt-3" required>
                        </div>
                     </div>
                     <div class="col-12">
                        <textarea id="textarea" cols="30" rows="15" name="offer" placeholder="Напишите мне ваши предложения!" class=" form-control mt-3"></textarea>
                     </div>
                     <div class="col-12"></div>
                     <button type="submit" name="submit" class="col-lg-3 col-sm-12 btn btn-primary btn-lg mt-sm-3 ms-auto send">Send</button>
                  </div>
               </form>
            </div>
            <div class="col-lg-4 col-sm-12 location-small">
               <h3 class="ms-lg-5 ms-sm-0 text-uppercase location">location</h3>
               <p class="ms-lg-5 ms-sm-0 region">Brest Region, Kobryn City</p>
               <h3 class="ms-lg-5 ms-sm-0 text-uppercase location my-social">my social</h3>
               <ul class="ms-lg-5 ms-sm-0">
                  <li class="social-link-contact mb-lg-3">
                     <a href="#" class="social-img"><img src="/template/images/VK.png" alt="vk"></a>
                  </li>
                  <li class="social-link-contact mb-lg-3">
                     <a href="#" class="social-img"><img src="/template/images/telegram.png" alt="telegram"></a>
                  </li>
                  <li class="social-link-contact mb-lg-3">
                     <a href="#" class="social-img"><img src="/template/images/linkedin.png" alt="linkedin"></a>
                  </li>
                  <li class="social-link-contact mb-lg-3">
                     <a href="#" class="social-img"><img src="/template/images/skype.png" alt="skype"></a>
                  </li>
               </ul>
            </div>
         </div>
      <?php endif; ?>
   </div>
</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>