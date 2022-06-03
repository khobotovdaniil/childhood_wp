<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('aboutus_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history1_aboutus_subtitle'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history1_aboutus_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history1_aboutus_img');
                    
                    if (!empty($image)): ?>
                        <img class="aboutus__img" 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                    $image = get_field('history2_aboutus_img');
                    
                    if (!empty($image)): ?>
                        <img class="aboutus__img" 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history2_aboutus_subtitle'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history2_aboutus_text'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history3_aboutus_subtitle'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history3_aboutus_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history3_aboutus_img');
                    
                    if (!empty($image)): ?>
                        <img class="aboutus__img" 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?> 
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>