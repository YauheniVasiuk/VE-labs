<?php include(ROOT . '/views/layouts/header.php') ?>

<main class="main contact-main">
   <section class="skill">
      <div class="container">
         <div class="wrapper-title">
            <h4 class="skill-title">Skill</h4>
         </div>
         <div class="line"></div>
         <div class="skill-stack">
            <?php foreach ($skillsList as $skillsItem) : ?>
               <div class="skill-item">
                  <?php if ($skillsItem == 'PHP') : ?>
                     <img src="/template/images/<?php echo (strtolower($skillsItem['title'])) ?>.svg" alt="<?php echo ($skillsItem['title']) ?>" class="skill-img">
                  <?php else : ?>
                     <img src="/template/images/<?php echo (strtolower($skillsItem['title'])) ?>.svg" alt="<?php echo ($skillsItem['title']) ?>" class="skills-img">
                  <?php endif; ?>
                  <div class="line-wrapper ">
                     <div class="description-wrapper <?php echo (strtolower($skillsItem['title'])) ?>">
                        <div class="description-title"><?php echo $skillsItem['title'] ?></div>
                        <div class="description-percent"><?php echo $skillsItem['percent'] ?>%</div>
                     </div>
                     <div class="skill-line <?php echo strtolower($skillsItem['title']) ?>"></div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>