<?php
$args = array( 'post_type' => 'slider');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<h2><?php the_title(); ?></h2>
<?php
if( have_rows('slide') ): ?>
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	  <!-- Overlay -->
	  <div class="overlay"></div>
	  
	<ol class="carousel-indicators">
	<?php 
	$i=0;
	while( have_rows('slide') ): the_row();
	if ($i == 0) { ?>
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	<?php 
	} else { ?>
		<li data-target="#bs-carousel" data-slide-to="<?php print $i ?>"></li>
	<?php 
	}
	$i++;
	endwhile; ?>
	</ol>
	 
	  <!-- Wrapper for slides -->
	 <div class="carousel-inner">
	 <?php 
	 $z = 0;
	 while( have_rows('slide') ): the_row();
	   // $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); 
	   $image = get_sub_field('image');
	   ?>

	    <div class="item slides <?php if ($z==0) { echo 'active';} ?>">
	    <img class="center-block img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
	      <div class="carousel-caption">
	        <hgroup>
	            <h1><?php the_sub_field('title');?></h1>        
	            <h3><?php the_sub_field('title_2');?></h3>
	        </hgroup>
	        <p><?php the_sub_field('description');?></p>
	        <a href="<?php the_sub_field('link'); ?>"><button class="btn btn-hero btn-lg" role="button"><?php the_sub_field('call_to_action_text'); ?></button></a>
	      </div>
	    </div>
	<?php 
	$z++;
	endwhile; ?>    
	  </div>
	  <!-- Controls -->
	    <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	</div>
<?php
else :
endif;
?>

<?php
endwhile;
wp_reset_query();
?>

