<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid eventsbg text-center ">
      <div class="container eventscontent">
     
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=11');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    
    	
 <div class="blocker"></div>
            
      </div><!--  container-->
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