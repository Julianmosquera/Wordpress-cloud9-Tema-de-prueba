
<?php get_header(); ?>
<?php echo '<p>Hola Mundo </p>'; ?>
<?php 

if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
echo "Listo"
?>
</br

<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>



<?php get_footer(); ?>
