<?php get_header() ?>


    <?php 
        
        if(have_posts()){
            while(have_posts()){
                the_post();
              ?>
               <div class="archive">
                <div class="container">
                    <div class="card" style="width: 70rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="<?php echo  get_permalink() ?>">
                        <?php    the_title();?>
                        </a></li>
                            
                        </ul>
                    </div>
                </div>
            
                </div>
    <?php } } ?>
 
<?php get_footer() ?>
