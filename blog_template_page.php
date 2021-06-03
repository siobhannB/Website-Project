<?php
/*
Template Name: Blog
*/
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <?php $post_id = 5578;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5578/" class="btn7" type="button">Read More</a>  
			</div>
           
            <?php $post_id = 5585;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5585/" class="btn8" type="button">Read More</a>              
			</div>
            
                <?php $post_id = 5587;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5587/" class="btn9" type="button">Read More</a>                     
			</div>
            
     </div>
    </div>
  </div>
<?php get_footer(); ?>