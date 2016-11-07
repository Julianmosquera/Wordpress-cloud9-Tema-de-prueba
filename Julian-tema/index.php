
<?php get_header( $TOP ); ?>
<?php echo '<p>Hola Mundo</p>'; ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} //end if
?>

<?php get_footer( $Abajo); ?>
