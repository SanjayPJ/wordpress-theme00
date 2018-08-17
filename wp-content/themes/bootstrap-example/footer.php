<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap-example
 */
    $company = get_post_meta(8 , 'company', true);
?>

	<!-- FOOTER -->
	<footer class="container">
	<p class="float-right"><a href="https://getbootstrap.com/docs/4.1/examples/carousel/#">Back to top</a></p>
	<p>© 2017-2018 <?php echo $company; ?> · <a href="https://getbootstrap.com/docs/4.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/4.1/examples/carousel/#">Terms</a></p>
	</footer>

<?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo bloginfo('template_directory') ?>/assets/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_directory') ?>/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo bloginfo('template_directory') ?>/assets/popper.min.js.download"></script>
    <script src="<?php echo bloginfo('template_directory') ?>/assets/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo bloginfo('template_directory') ?>/assets/holder.min.js.download"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>

</body>
</html>
