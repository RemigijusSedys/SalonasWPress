<footer class="footer">
   <div class="footer-responsive">
      <div class="footer-logo">
         <?php

         // tales logo dynamic
         if (function_exists('the_custom_logo')) {
            // the_custom_logo();
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
         }
         ?>
         <a href="/wordpress/"><img style="height: 90px; width: 100px; " src="<?php echo $logo[0] ?> " alt="hand"></a>
         <ul class="socials">
            <li><a href='https://www.facebook.com/' target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href='https://rb.gy/qbjg1' target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href='https://rb.gy/qbjg1' target="_blank"><i class="bi bi-google"></i></a></li>
            <li><a href='https://www.youtube.com/' target="_blank"><i class="bi bi-youtube"></i></a></li>
            <li><a href='https://www.whatsapp.com/contact/?subject=messenger' target="_blank"><i class="bi bi-whatsapp"></i></a></li>
         </ul>

      </div>
   </div>
   <div class=”footer-bottom”>
      <p>copyright &copy;2023 <a href=”#”>ByMe</a> </p>
   </div>
</footer>

<?php

// =====open all skripts=====
wp_footer();
?>

</body>

</html>