<?php get_header()?>
<div class="front">
    <div class="container">
    <div class="card" style="width: 70rem;">
  <div class="card-body">
    <h5 class="card-title">Ahmed Galal</h5>
    <p class="card-text">I am a flexible and experienced insurance Development with excellent time management skills. I am a good communicator with proven inter personal skills and am used to working in a team whilst also being capable of using own initiative. I am skilled In dealing with problems in a resourceful manner and negotiating to achieve beneficial agreement. I am always enthusiastic to learn and undertake new challenges.</p>
  </div>
  <div class="card-body">

    <?php 
        $args=array(
            "post_type"=>["education","work_experiences"]
        );

        $query=new WP_Query($args);

        if($query->have_posts(  )){
            while($query->have_posts(  )){
                $query->the_post(  );
    ?>
    <li class="list-group-item"><a href="<?php echo get_permalink();  ?>">
     <p><?php the_title();?></p>
     </a></li>

            <?php }}?>
</div>

</div>

    </div>



<?php get_footer()?>