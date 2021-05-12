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
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h3><?php echo $queried_post->post_title; ?></h3>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       
 

           </div>
              
              <div class="col-md-4">
<?php $post_id = 5453;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       
 

          </div>
              
            <div class="col-md-4">
<?php $post_id = 5455;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h5><?php echo $queried_post->post_title; ?></h5>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       
 

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
           <h6>Unlock Your <br>Creativity</h6>
          <p id="artcentre">Fremantle Art Centre has a range of <br> creative art courses suited for both <br> adults and kids. Whether you like <br> making jewellery, art prints or <br> sculptures, there is a course for <br> everyone and anyone.</p>
             <button type="button" class="btn5">Find Out More</button>
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
          <h7>Our History</h7>
          <p id="historytext">Housed in a gothic building built in the 1860s, the <br> site now known as the Fremantle Arts Centre has a <br> long and fascinating history. Built by convicts on <br> a grant of six acres, this splendid example of <br>Australian Gothic architecture first opened its <br> doors in 1864, as the Convict Establishment <br> Fremantle Lunatic Asylum and Invalid Depot. <br></p>
              
          <p id="historytext2">In 1958, the old Fremantle Lunatic Asylum was <br> finally threatened with demolition and was saved <br> largely through the efforts of Sir Frederick <br> Samson, then Mayor of Fremantle. His vision for <br> the site was to establish both a Mariners’ Museum <br> and an Arts Centre. The building was restored <br> and the museum stage was finally completed in <br> 1970. <br> </p>
              
          <p id="historytext3">Fremantle Arts Centre opened in 1973, with Ian <br> Templeman as Founding Director. Templeman <br> relied on minimal resources and skeleton staff for <br> support and, over his 17 years at the helm, <br> developed Fremantle Arts Centre’s first programs <br> and services, including Fremantle Arts Centre<br>   Press.</p>
                  <button type="button" class="btn6">Read More</button>
          </div> <!--col div-->
             </div> <!--row div -->
          </div>
          <!-- container div-->
      </section>
      
   
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>