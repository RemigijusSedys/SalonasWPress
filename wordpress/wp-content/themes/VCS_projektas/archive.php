<div class="item">
   <div class="card">
      <div class="card-head" style="background: url(<?php echo the_post_thumbnail_url('full') ?>);"></div>
      <div class="card-body">
         <div class="text-content">
            <h3><?php echo get_the_title(); ?></h3>
            <p><?php echo get_the_content(); ?></p>
         </div>
      </div>
   </div>
</div>