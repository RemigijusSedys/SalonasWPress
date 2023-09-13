<?php
get_header();
?>

<main>
   <?php
   if (have_posts()) {
      while (have_posts()) {
         the_post();
         // the_content();
         get_template_part( 'template-parts/content', 'article');
      }

   }

   ?>

   <section class="hero">
      <div class="container">
         <h1>Lorem ipsum dolor sit amet.</h1>
      </div>
   </section>
   <section class="cards">
      <div class="container" id="cards">
         <div class="owl-carousel owl-theme">
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card">
                  <div class="card-head"></div>
                  <div class="card-body">
                     <div class="text-content">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                           dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
                           molestiae mollitia quas veritatis! Pariatur ad ex atque.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="card">
					<div class="card-head"></div>
					<div class="card-body">
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
							dolores incidunt omnis commodi, ea sapiente voluptatibus veniam
							molestiae mollitia quas veritatis! Pariatur ad ex atque.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="card-head"></div>
					<div class="card-body">
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p>
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio
							quis maiores tenetur iure porro, qui cum eius magni, amet ad
							exercitationem? Rerum soluta molestiae voluptates?
						</p>
					</div>
				</div>
				<div class="card" id="third">
					<div class="card-head"></div>
					<div class="card-body">
						<h3>Lorem ipsum dolor sit amet.</h3>
						<p>
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam
							et soluta suscipit, blanditiis itaque molestias ad ipsam, ipsum
							eius porro labore, officiis maxime ut cupiditate!
						</p>
					</div> 
				</div> -->
      </div>
   </section>
   <div class="banner">
      <div class="container">
         <h2>Lorem ipsum dolor sit amet.</h2>
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
            perspiciatis iste necessitatibus illo, consequuntur molestias, rem
            ex architecto sint beatae reprehenderit laboriosam ipsum ut? Hic!
         </p>
      </div>
   </div>
</main>
<footer class="footer">
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


<?php
get_footer();
?>