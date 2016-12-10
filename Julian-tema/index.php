<!DOCTYPE html>
<html>
   
<body>
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri ();?>"/>
   
<div id="intro">
<div id="cabezera">  
<?php get_header(); ?>
</div> 

<div id="menuzito">

       <?php wp_nav_menu(
           array(
            'menu' => 'menu2'
        )
        ); ?>

</div>

</div>





<div id="entradas">
<h1>Entradas en el Blog:</h1>

<?php 


if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
echo "Listo"
?>
</div>

<div id="sidebar">
<?php get_sidebar(); ?>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="single">

<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
</div>

<div id="abajo">
<?php get_footer(); ?>
</div>


</body>
</html>