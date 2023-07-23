<?php include(ROOT . '/views/layouts/header.php') ?>

<main class="main contact-main">
   <div class="container">
      <section class="works mt-5">
         <div class="container">
            <h2 class="work-title">Work</h2>
            <?php foreach ($worksList as $workItem) : ?>
               <a href="/views/work-ins.html" class="work-item-link-small"><img src="/template/images/<?php echo $workItem['name'] ?>.png" alt="<?php echo $workItem['name'] ?>"></a>
               <div class="work-item">
                  <a href="/views/work-ins.html" class="work-item-link"><img src="/template/images/<?php echo $workItem['name'] ?>.png" alt="<?php echo $workItem['name'] ?>"></a>
                  <div class="work-item-wrapper">
                     <h4 class="work-item-title"><a href="/views/work-ins.html"><?php echo $workItem['title'] ?></a></h4>
                     <div class="work-item-inside-wrapper">
                        <div class="work-item-year"><span><?php echo substr($workItem['date'], 0, 4) ?></sp>
                        </div>
                        <div class="work-item-describe"><?php echo $workItem['status'] ?></div>
                     </div>
                     <div class="work-item-description"><?php echo $workItem['description'] ?></div>
                  </div>
               </div>
               <div class="line"></div>
            <?php endforeach; ?>
         </div>
      </section>
   </div>
</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>