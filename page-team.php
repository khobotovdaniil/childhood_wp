<?php
/*
Template Name: Наша команда
*/
?>

<?php
    get_header();
?>

<div class="specialists">
    <div class="container">
        <div class="title">Наша команда</div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php
                    $image = get_field('team_img');
                    
                    if (!empty($image)): ?>
                        <img class="specialists__img" 
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