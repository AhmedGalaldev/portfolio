<?php get_header(); ?>
<div class="skills">
    <div class="container">
        <div class="card" style="width: 70rem;">
            <div class="card-header">
            <?php the_title() ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo get_field("university") ;?></li>
                <li class="list-group-item"><?php echo get_field("faculty") ;?></li>
                <li class="list-group-item"><?php echo get_field("department") ;?></li>
                <li class="list-group-item"><?php echo get_field("grade") ;?></li>
             

                
            </ul>
            </div>

    </div>
</div>

<?php  get_footer();?>