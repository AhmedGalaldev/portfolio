<?php get_header() ?>
<div class="experience">
    <?php 
        if(have_posts()){
            the_post(  );
        
    ?>
    <div class="container">
        <div class="card" style="width: 70rem;">
            <div class="card-header">
                <?php the_title() ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <?php ?></li>
               
            </ul>
        </div>
    </div>
        <?php } ?>
</div>


<?php get_footer() ?>