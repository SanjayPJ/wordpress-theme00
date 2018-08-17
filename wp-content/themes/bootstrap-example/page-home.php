<?php
/*
    Template Name: Home Page
*/

//carousel variables
$carousel1_image = get_field('carousel1_image');
$carousel1_heading = get_field('carousel1_heading');
$carousel1_description = get_field('carousel1_description');
$carousel2_image = get_field('carousel2_image');
$carousel2_heading = get_field('carousel2_heading');
$carousel2_description = get_field('carousel2_description');
$carousel3_image = get_field('carousel3_image');
$carousel3_heading = get_field('carousel3_heading');
$carousel3_description = get_field('carousel3_description');

//people variables
$people1_image = get_field('people1_image');
$people1_heading = get_field('people1_heading');
$people1_description = get_field('people1_description');
$people2_image = get_field('people2_image');
$people2_heading = get_field('people2_heading');
$people2_description = get_field('people2_description');
$people3_image = get_field('people3_image');
$people3_heading = get_field('people3_heading');
$people3_description = get_field('people3_description');

//feature variables
$feature1_image	= get_field('feature1_image');
$feature1_heading = get_field('feature1_heading');
$feature1_description = get_field('feature1_description');
$feature2_image	= get_field('feature2_image');
$feature2_heading = get_field('feature2_heading');
$feature2_description = get_field('feature2_description');
$feature3_image	= get_field('feature3_image');
$feature3_heading = get_field('feature3_heading');
$feature3_description = get_field('feature3_description');

get_header();
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="first-slide" src="<?php echo $carousel1_image['url']; ?>" alt="<?php echo $carousel1_image['alt']; ?>">
      <div class="container">
        <div class="carousel-caption text-left read-aloud">
          <h1><?php echo $carousel1_heading; ?></h1>
          <p><?php echo $carousel1_description ?></p>
          <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item active">
      <img class="second-slide" src="<?php echo $carousel2_image['url']; ?>" alt="<?php echo $carousel2_image['alt']; ?>">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo $carousel2_heading; ?></h1>
          <p><?php echo $carousel2_description ?></p>
          <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="<?php echo $carousel3_image['url']; ?>" alt="<?php echo $carousel3_image['alt']; ?>">
      <div class="container">
        <div class="carousel-caption text-right read-aloud">
          <h1><?php echo $carousel3_heading; ?></h1>
          <p><?php echo $carousel3_description ?></p>
          <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="https://getbootstrap.com/docs/4.1/examples/carousel/#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="https://getbootstrap.com/docs/4.1/examples/carousel/#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4 read-aloud">
      <img class="rounded-circle" src="<?php echo $people1_image['url']; ?>" alt="Generic placeholder image" width="140" height="140">
      <h2 class="pt-2"><?php echo $people1_heading; ?></h2>
      <p><?php echo $people1_description; ?></p>
      <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 read-aloud">
      <img class="rounded-circle" src="<?php echo $people2_image['url']; ?>" alt="Generic placeholder image" width="140" height="140">
      <h2 class="pt-2"><?php echo $people2_heading; ?></h2>
      <p><?php echo $people2_description; ?></p>
      <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 read-aloud">
      <img class="rounded-circle" src="<?php echo $people3_image['url']; ?>" alt="Generic placeholder image" width="140" height="140">
      <h2 class="pt-2"><?php echo $people3_heading; ?></h2>
      <p><?php echo $people3_description; ?></p>
      <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/4.1/examples/carousel/#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 read-aloud">
      <h2 class="featurette-heading"><?php echo $feature1_heading; ?></h2>
      <p class="lead"><?php echo $feature1_description; ?></p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto rounded" alt="500x500" style="width: 500px; height: 500px;" src="<?php echo $feature1_image['url']; ?>" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2 read-aloud">
      <h2 class="featurette-heading"><?php echo $feature2_heading; ?></span></h2>
      <p class="lead"><?php echo $feature2_description; ?></p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto rounded" alt="500x500" src="<?php echo $feature2_image['url']; ?>" data-holder-rendered="true" style="width: 500px; height: 500px;">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 read-aloud">
      <h2 class="featurette-heading"><?php echo $feature3_heading; ?></span></h2>
      <p class="lead"><?php echo $feature3_description; ?></p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto rounded" alt="500x500" src="<?php echo $feature3_image['url']; ?>" data-holder-rendered="true" style="width: 500px; height: 500px;">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<?php get_footer(); ?>