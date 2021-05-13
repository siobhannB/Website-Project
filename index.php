<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid eventsbg text-center ">
      <div class="container eventscontent">
          <div class="row">
            <div>
          <h2>Events On Now</h2>
            </div>
              
          <div class="col-md-4">
<?php $post_id = 5451;
$queried_post = get_post($post_id);?>
<h3><?php echo $queried_post->post_title; ?></h3>
  <p><?php echo get_the_date( 'j F, Y' ); ?></p>
<?php echo $queried_post->post_excerpt; ?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<?php echo '<a class="btn2 readmore" href="'.get_permalink($queried_post).'">Find Out More</a>';?>                                     
 

           </div>
              
              <div class="col-md-4">
<?php $post_id = 5453;
$queried_post = get_post($post_id);?>
<h4><?php echo $queried_post->post_title; ?></h4>
  <p><?php echo get_the_date( 'j F, Y' ); ?></p>
<?php echo $queried_post->post_excerpt; ?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<?php echo '<a class="btn3 readmore" href="'.get_permalink($queried_post).'"><br>Find Out More</a>';?>               

          </div>
              
            <div class="col-md-4">
<?php $post_id = 5455;
$queried_post = get_post($post_id);?>       
<h5><?php echo $queried_post->post_title; ?></h5>
  <p><?php echo get_the_date( 'j F, Y' ); ?></p>
<?php echo $queried_post->post_excerpt; ?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<?php echo '<a class="btn4 readmore" href="'.get_permalink($queried_post).'"><br>Find Out More</a>';?>               

        </div>
              
              
              
          </div>
         <!-- row-->
          </div>
       <!--   container-->
    
      </section>
      
      <section class="container-fluid creativitybg">
      <div class="container">
          <div class="row">
         <div class="col-md-6">
           <!--<h6>Unlock Your <br>Creativity</h6>
          <p id="artcentre">Fremantle Art Centre has a range of <br> creative art courses suited for both <br> adults and kids. Whether you like <br> making jewellery, art prints or <br> sculptures, there is a course for <br> everyone and anyone.</p>
             <button type="button" class="btn5">Find Out More</button>-->
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=13');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6> 
            <div><p id="artcentre"><?php the_content() ?></p></div>
             <?php echo '<a class="btn5 readmore" href="'.get_permalink($queried_post).'"><br>Find Out More</a>';?> 
<?php
endwhile;
endif;
wp_reset_query();?>    

            </div> <!--col div-->
          </div> <!--row div-->
    
          </div>
         <!-- container div-->
      </section>
      
       <section class="container-fluid historybg">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-1"></div>
              <div class="col-md-6 col-sm-11 text-right historyblock">
        <!--  <h7>Our History</h7>
          <p id="historytext">Housed in a gothic building built in the 1860s, the <br> site now known as the Fremantle Arts Centre has a <br> long and fascinating history. Built by convicts on <br> a grant of six acres, this splendid example of <br>Australian Gothic architecture first opened its <br> doors in 1864, as the Convict Establishment <br> Fremantle Lunatic Asylum and Invalid Depot. <br></p>
              
          <p id="historytext2">In 1958, the old Fremantle Lunatic Asylum was <br> finally threatened with demolition and was saved <br> largely through the efforts of Sir Frederick <br> Samson, then Mayor of Fremantle. His vision for <br> the site was to establish both a Mariners’ Museum <br> and an Arts Centre. The building was restored <br> and the museum stage was finally completed in <br> 1970. <br> </p>
              
          <p id="historytext3">Fremantle Arts Centre opened in 1973, with Ian <br> Templeman as Founding Director. Templeman <br> relied on minimal resources and skeleton staff for <br> support and, over his 17 years at the helm, <br> developed Fremantle Arts Centre’s first programs <br> and services, including Fremantle Arts Centre<br>   Press.</p>
                  <button type="button" class="btn6">Read More</button>-->
                  <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=14');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6> 
            <div><p id="historytext"><?php the_content() ?></p></div>
             <?php echo '<a class="btn6 readmore" href="'.get_permalink($queried_post).'"><br>Read More</a>';?> 
<?php
endwhile;
endif;
wp_reset_query();?>    
          </div> <!--col div-->
             </div> <!--row div -->
          </div>
          <!-- container div-->
      </section>
      
   
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>