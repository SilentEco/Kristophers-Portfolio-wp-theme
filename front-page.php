<?php

get_header();

$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$heroImageArray = get_field('image');
$heroImage = $heroImageArray['sizes']['large'];


$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$aboutImageArray = get_field('about_link');
$aboutImage = $aboutImageArray['sizes']['large'];

?>

  <section class="red-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo $heroImage; ?>">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1"><?php echo $title; ?></h1>
           <?php echo $description; ?>
           <button type="button" class="btn btn-outline-light" id="button1">
           <a style="text-decoration: none; color: white"href="<?php echo $link['url']; ?>">
           Veckans Recept!
            </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- 
  <section class="generic" id="about">
    <div class="container">
      <h2 class="display-5 mb-2"><?php echo $about_title; ?></h2>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="d-flex h-50 flex-column justify-content-center mt-5">
            <p>
                <?php echo $about_desc; ?>
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 p-0">
          <img class="img-fluid" src="<?php echo $aboutImage; ?>">
        </div>
        <div class="col-sm-12 col-md-3"></div>
      </div>
    </div>
  </section> -->


<?php
get_footer();