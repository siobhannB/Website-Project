<?php
/*
Template Name: Services
*/
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
           
              <?php $post_id = 5589;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h9><?php echo $queried_post->post_title; ?></h9>
<?php echo $queried_post->post_excerpt; ?>
  <a href ="http://206.189.45.97/~mesh5/5589/" class="btn10" type="button">Further Information</a>
          </div>
			</div>
           
            <?php $post_id = 5591;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
     <a href ="http://206.189.45.97/~mesh5/5591/" class="btn11" type="button">Further Information</a>                    
			</div>
            
                <?php $post_id = 5593;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
    <a href ="http://206.189.45.97/~mesh5/5593/" class="btn12" type="button">Further Information</a>                
			</div>
           
     </div>
    </div>
  </div>
<?php get_footer(); ?>