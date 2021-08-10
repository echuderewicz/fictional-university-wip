<?php get_header();

//
while(have_posts()){
    //the post function below does not return anything
    the_post();?> 

    <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
    <?php the_content(); ?>
    <hr>

<?php
}
get_footer();
//the_permalink();
?>