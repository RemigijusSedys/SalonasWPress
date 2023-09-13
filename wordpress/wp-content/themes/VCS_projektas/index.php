<?php
get_header();
?>
<main>
   <section class="hero">
      <div class="container">
         <h1>Sveiki atvykę</h1>
      </div>
   </section>
   <section class="cards">
      <div class="container" id="cards">
         <div class="owl-carousel owl-theme">

            <?php
            if (have_posts()) {
               while (have_posts()) {
                  the_post();
                  get_template_part('template-parts/content', 'archive');
               }
            } ?>

         </div>
      </div>
      </div>
   </section>
   <div class="banner">
      <div class="container">
         <h2>Dienos citata</h2>
         <p id="quotes"> </p>
         <p id="author"></p>
      </div>
   </div>
</main>
<!-- <footer class="footer">
   <div class="container">
      <div class="card">
         <h3>Lorem ipsum dolor sit amet.</h3>
         <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
         </ul>
      </div>
      <div class="card">
         <h3>Lorem ipsum dolor sit amet.</h3>
         <ol>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
         </ol>
      </div>
      <div class="card">
         <h3>Lorem ipsum dolor sit amet.</h3>
         <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas, accusamus ipsum aperiam suscipit quo ex? Aliquam alias
            inventore illum necessitatibus non debitis error asperiores?
         </p>
      </div>
      <div class="card">
         <h3>Lorem ipsum dolor sit amet.</h3>
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
            cumque, illo tempore nemo ipsum hic voluptatem saepe quisquam quia
            corrupti consequuntur, maiores aperiam excepturi quae.
         </p>
      </div>
   </div> 


</footer>
      -->

<?php
get_footer();

?>