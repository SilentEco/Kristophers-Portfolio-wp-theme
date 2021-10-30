<?php

get_header();


$recipe_title = get_field('recipe_title');
$recipe_description = get_field('recipe_description');
$aboutImageArray = get_field('about_image');
$aboutImage = $aboutImageArray['sizes']['large'];

?>


  <section class="red-bg" id="about">
    <div class="container">
      <h2 class="display-5 mb-2"><?php echo $recipe_title; ?></h2>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="d-flex h-50 flex-column justify-content-center mt-5">
            <p>
                <?php echo $recipe_description; ?>
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 p-0">
          <img class="img-fluid" src="<?php echo $aboutImage; ?>">
        </div>
        <div class="col-sm-12 col-md-3"></div>
      </div>
    </div>
  </section>


<?php
get_footer();