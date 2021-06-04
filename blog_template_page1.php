<?php
/*
Template Name: Blog1
*/
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<div class="container-fluid servicecont">
       <div class="small_herobg text-center">
        
      <h10>Blog</h10>
            </div>
    
    
  <div class="container text-center">
  
    
   
        <div class="row">
    
<!--      <div class="col-md-6">   <img id="music" src="images/music%20applications.png" alt="musicapplications"> </div>-->
            
            
              <?php $post_id = 5578;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h14><?php echo $queried_post->post_title; ?></h14>
    <p id="date4">5 March 2021</p>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5578/" class="btn7" type="button">Read More</a>  
			</div>
            
              
<!--
        <div class="col-md-6">
               <h9>Sunday Music <br>Applications</h9>
          <p id="sundaymusic">Sunday Music is a free concert series <br>which takes place at Fremantle Arts Centre from 2–4pm every Sunday from October–March and aims to showcase a broad range of musical styles and genres as well as providing a platform for both emerging and established artists.</p>
          
           <button type="button" class="btn10">Further Information</button>
           </div>
-->
      </div>  
              
      

            
        <div class="row">
    
<!--      <div class="col-md-6">   <img id="music" src="images/music%20applications.png" alt="musicapplications"> </div>-->
            
            
               
            <?php $post_id = 5585;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h15><?php echo $queried_post->post_title; ?></h15>
     <p id="date5">26 February 2021</p>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5585/" class="btn8" type="button">Read More</a>              
			</div>
            
              
<!--
        <div class="col-md-6">
               <h9>Sunday Music <br>Applications</h9>
          <p id="sundaymusic">Sunday Music is a free concert series <br>which takes place at Fremantle Arts Centre from 2–4pm every Sunday from October–March and aims to showcase a broad range of musical styles and genres as well as providing a platform for both emerging and established artists.</p>
          
           <button type="button" class="btn10">Further Information</button>
           </div>
-->
      </div>  
              
         <div class="row">
    
<!--      <div class="col-md-6">   <img id="music" src="images/music%20applications.png" alt="musicapplications"> </div>-->
            
            
               
                   <?php $post_id = 5587;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h16><?php echo $queried_post->post_title; ?></h16>
     <p id="date6">18 December 2020</p>
<?php echo $queried_post->post_excerpt; ?>
<a href ="http://206.189.45.97/~mesh5/5587/" class="btn9" type="button">Read More</a>                     
			</div>
            
            
              
<!--
        <div class="col-md-6">
               <h9>Sunday Music <br>Applications</h9>
          <p id="sundaymusic">Sunday Music is a free concert series <br>which takes place at Fremantle Arts Centre from 2–4pm every Sunday from October–March and aims to showcase a broad range of musical styles and genres as well as providing a platform for both emerging and established artists.</p>
          
           <button type="button" class="btn10">Further Information</button>
           </div>
-->
      </div>  
              
</div>
    </div>
            
 
   
<?php get_footer(); ?>