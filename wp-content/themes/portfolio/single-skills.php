<?php get_header(); ?>
<div class="skills">
    <div class="container">
        <div class="card" style="width: 70rem;">
            <div class="card-header">
            <?php the_title() ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo get_field("first_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("second_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("third_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("fourth_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("fifth_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("sixth_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("seventh_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("eighth_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("ninth_skill") ;?></li>
                <li class="list-group-item"><?php echo get_field("tenth_skill") ;?></li>

                
            </ul>
            </div>

    </div>
</div>

<?php  get_footer();?>