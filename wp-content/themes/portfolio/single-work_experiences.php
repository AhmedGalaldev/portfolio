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
                <li class="list-group-item"> <?php echo get_field("job_description") ;?></li>
                <li class="list-group-item"> <?php echo get_field("start_date") ;?></li>
                <li class="list-group-item"> <?php echo get_field("company_name") ;?></li>
            </ul>
        </div>
    </div>
        <?php } ?>
</div>


<?php get_footer() ?>