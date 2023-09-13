<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main>
   <div class="about">
      <div id="about">
         <div class="contacts">
            <h2> <?php echo get_the_title(); ?> </h2>
            <p><?php echo get_the_content(); ?> </p>
            <div class="form">
               <form class=" leftside" action="https://formsubmit.co/3e39fc609cd119f4a95443f5d0347dda" method="POST">
                  <!-- Honeypot -->
                  <input type="text" name="_honey" style="display: none;">

                  <!-- Disable Captcha -->
                  <input type="hidden" name="_captcha" value="false">

                  <input type="hidden" name="_next" value="http://localhost/wordpress/contact/">


                  <input type="name" id="name" name="name" placeholder="Vardas" required>
                  <input type="phone" id="phone" name="phone" placeholder="Tel-numeris">
                  <input type="email" id="email" name="email" placeholder="E-paštas" required>
                  <textarea id="message" name="message" placeholder="Jūsų pranešimas" style="height:150px" required></textarea>
                  <button type="submit" value="Send" class='button'>Siųsti</button>

               </form>
               <div class=" rightside">
                  <div class="contact">
                     <ul>
                        <li><a href="infovcs@email.com" <i class="bi bi-envelope-at"></i >  salonas@email.com</a></li>
                        <li><a href="123-156-7899" alt="123-156-7899" <i class="bi bi-telephone"></i> 999-777-7777</a></li>
                     </ul>
                  </div>
                  <div class="location">
                     <h2>Salonas</h2>
                     <p> Salono g. 5a </p>
                     <p> Lietuva, Vilnius, LT- 987654321</p>
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9221.345490124668!2d25.259091854095466!3d54.703704928800335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svilnius%20coding%20school!5e0!3m2!1sen!2slt!4v1685989310759!5m2!1sen!2slt" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>

            </div>
         </div>
      </div>
   </div>
</main>


<?php get_footer(); ?>