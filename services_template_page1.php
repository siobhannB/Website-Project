<?php
/*
Template Name: Services1
*/
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<div class="container-fluid servicecont">
       <div class="small_herobg text-center">
        
      <h10>Our Services</h10>
            </div>
    
    
  <div class="container text-center">
  
    
        <div class="row">
    
<!--      <div class="col-md-6">   <img id="music" src="images/music%20applications.png" alt="musicapplications"> </div>-->
            
            
            <?php $post_id = 5589;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h11><?php echo $queried_post->post_title; ?></h11>
 <?php echo $queried_post->post_excerpt; ?>  
  <a href ="http://206.189.45.97/~mesh5/5589/" class="btn10" type="button">Further Information</a>
            
              
<!--
        <div class="col-md-6">
               <h9>Sunday Music <br>Applications</h9>
          <p id="sundaymusic">Sunday Music is a free concert series <br>which takes place at Fremantle Arts Centre from 2–4pm every Sunday from October–March and aims to showcase a broad range of musical styles and genres as well as providing a platform for both emerging and established artists.</p>
          
           <button type="button" class="btn10">Further Information</button>
           </div>
-->
      </div>  
              </div>
      
      
      <div class="row">
<!--
        <div class="col-md-6">
               <h9>Exhibition Proposals</h9>
          <p id="proposals">Fremantle Arts Centre welcomes exhibition proposals from individual artists, groups of artists, curators and organisations. FAC will consider gallery-based, off-site and online projects.</p>
             
           <button type="button" class="btn11">Further Information</button>
           </div>
          <div class="col-md-6">
          <img id="exhbitions" src="images/exhibitionproposals.png" alt="exhibitions"> 
          </div>
-->
          
          <?php $post_id = 5591;
$queried_post = get_post($post_id);?>

<div class="col-md-6">
			<h12><?php echo $queried_post->post_title; ?></h12>
<?php echo $queried_post->post_excerpt; ?>
     <a href ="http://206.189.45.97/~mesh5/5591/" class="btn11" type="button">Further Information</a>     
          
      </div>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
      
      
<!--
         <div class="row">
             
             <div class="col-md-6"> <img id="hire" src="images/venuehire.png" alt="venuehire"> </div>
             
        <div class="col-md-6">
               <h9>Venue Hire</h9>
          <p id="venuehire">FAC offers three unique spaces for concert hire, year round – the South Lawn, Front Garden and Inner Courtyard. We can cater for high-profile international acts, national and local performers. Previous acts include Nick Cave, Billie Eilish, RÜFÜS DU SOL, Lauryn Hill, Chet Faker, Passenger, James Bay, Hot Chip, Paul Kelly, The Waifs, Archie Roach, PJ Harvey and Flying Lotus.</p>
            
           <button type="button" class="btn12">Further Information</button>
           </div>
      
    
      </div>
-->

  </div>



   <div class="row">
                       <?php $post_id = 5593;
$queried_post = get_post($post_id);?>
<div class="col-md-6"><?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?></div>
<div class="col-md-6">
			<h13><?php echo $queried_post->post_title; ?></h13>
<?php echo $queried_post->post_excerpt; ?>
    <a href ="http://206.189.45.97/~mesh5/5593/" class="btn12" type="button">Further Information</a>                
			</div>
       
       
       
       
      </div>


  </div>  
</div>



<?php get_footer(); ?>