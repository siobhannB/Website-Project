<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid eventsbg text-center ">
      <div class="container eventscontent">
          <div class="row">
            <div>
          <h2><?php the_field('eventsonnow'); ?></h2><!--  custom field for the aboutme content-->
            </div>
              
          <div class="col-md-4">

   <h3><?php the_field('spaceyjanetitle'); ?></h3><!--  custom field for the aboutme content-->
<p id="spaceyjane"><?php the_field('spaceyjaneparagraph'); ?></p>
             <p id="date1"><?php the_field('eventdate'); ?></p> 
                <img class="event1" alt=“spaceyjane” src="<?php the_field('eventimage'); ?>"> 
              <a href ="http://206.189.45.97/~mesh5/5451/" class="btn2" type="button">Find Out More</a>
           </div>
              
              
         <div class="col-md-4">
              <h4><?php the_field('oceanalleytitle'); ?></h4><!--  custom field for the aboutme content-->
<p id="oceanalley"><?php the_field('oceanalleyparagraph'); ?></p>
              <p id="date2"><?php the_field('eventdate2'); ?></p> 
             <img class="event2" alt=“oceanalley” src="<?php the_field('eventimage2'); ?>">
               <a href ="http://206.189.45.97/~mesh5/5453/" class="btn3" type="button">Find Out More</a>
          </div>
              
              
              
            <div class="col-md-4">
               <h5><?php the_field('aboriginalartiststitle'); ?></h5><!--  custom field for the aboutme content--> 
                <p id="aboriginalartists"><?php the_field('aboriginalartistsparagraph'); ?></p>
                 <p id="date3"><?php the_field('eventdate3'); ?></p> 
                <img class="event3" alt=“aboriginalartists” src="<?php the_field('eventimage3'); ?>">
                   <a href ="http://206.189.45.97/~mesh5/5455/" class="btn4" type="button">Find Out More</a>
                

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
               <h6><?php the_field('creativitytitle'); ?></h6><!--  custom field for the aboutme content--> 
                <p id="artcentre"><?php the_field('creativityparagraph'); ?></p>
                 <a href ="http://206.189.45.97/~mesh5/5471/" class="btn5" type="button">Find Out More</a>

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
               
                

     <h7><?php the_field('ourhistorytitle'); ?></h7><!--  custom field for the aboutme content--> 
                <p id="historytext"><?php the_field('ourhistoryparagraph'); ?></p>
              
                
                <p id="historytext2"><?php the_field('ourhistoryparagraph2'); ?></p>
              
   
                <p id="historytext3"><?php the_field('ourhistoryparagraph3'); ?></p>
                  
                  <a href ="http://206.189.45.97/~mesh5/5476/" class="btn6" type="button">Read More</a>
    
          </div> <!--col div-->
             </div> <!--row div -->
          </div>
          <!-- container div-->
      </section>
      
   
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>