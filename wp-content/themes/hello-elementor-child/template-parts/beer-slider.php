<div class="beer-slider">
    <?php
        $args = array( 'numberposts' => '-1','post_type'=>'beer_type','suppress_filters' => false );
        $beers = get_posts($args);
        foreach( $beers as $beer ){
        $featured_img_url = get_the_post_thumbnail_url($beer->ID, 'full');
        $beer_taste = get_field('taste', $beer->ID);
        $beer_particular_signs = get_field('particular_signs', $beer->ID);
        $beer_glass = get_field('glass', $beer->ID);
        $beer_alcohol = get_field('alcohol', $beer->ID);
        $beer_ideal_temperature = get_field('ideal_temperature', $beer->ID);
        $beer_flavour = get_field('flavour', $beer->ID);
        $beer_foam = get_field('foam', $beer->ID);
    ?>
        <div class="beer-slide">
            <div class="beer-wrap">
                <div class="title-and-description-mobile-only">
                <h3><?php echo $beer->post_title?></h3>
                    <h5><?php echo $beer->post_content?></h5>
                </div>
                <div class="beer-image">
                    <img src="<?php echo $featured_img_url ?>">
                </div>
                <div class="beer-info">
                    <h3><?php echo $beer->post_title?></h3>
                    <h5><?php echo $beer->post_content?></h5>

                    <?php if($beer_taste):?>
                        <p>
                            <b class="beer-specs-title"><?php _e('Вкус')?>:</b>
                            <br>
                            <?php echo $beer_taste;?>
                        </p>
                    <?php endif ?>

                    <?php if($beer_particular_signs):?>
                        <p>
                            <b class="beer-specs-title"><?php _e('Характер')?>:</b>
                            <br>
                            <?php echo $beer_particular_signs?>
                        </p>
                    <?php endif?>

                    <?php if($beer_glass):?>
                        <p>
                            <b class="beer-specs-title"><?php _e('Чаша')?>:</b>
                            <br>
                            <?php echo $beer_glass?>
                        </p>
                    <?php endif ?>

                    <?php if($beer_flavour):?>
                        <p>
                            <b class="beer-specs-title"><?php _e('Аромат:')?></b>
                            <br>
                            <?php echo $beer_flavour?>
                        </p>
                    <?php endif?>
                    
                    <div class="beer-info-bundle">
                        <?php if($beer_alcohol):?>
                            <div style="width:30%">
                            <p> 
                                <b class="beer-specs-title"><?php _e('Алкохол')?>:</b>
                                <?php echo $beer_alcohol?>
                            <?php endif?>
                            </p>
                            </div>

                            <div style="width:40%">
                            <p>
                            <?php if($beer_ideal_temperature):?>
                                <b class="beer-specs-title"><?php _e('Идеална температура')?>:</b>
                                <?php echo $beer_ideal_temperature?>
                            <?php endif?>
                            </p>
                            </div>

                            <div style="width:30%">
                            <p>
                            <?php if($beer_foam):?>
                            <b class="beer-specs-title"><?php _e('Пяна')?>:</b>
                                <?php echo $beer_foam?>
                            <?php endif?>
                            <p>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    <?php }?>
</div>
<script>
(function ($) {
    jQuery(document).ready(function () {
        var activeSlide = jQuery('body').find('.slick-center');
            console.log('slider component')
            jQuery('.beer-slider').slick({
            prevArrow: '<img class="slick-prev" src="https://dev.club1857.com/wp-content/uploads/2024/03/5.png" />',
            nextArrow: '<img class="slick-next" src="https://dev.club1857.com/wp-content/uploads/2024/03/5.png" />',
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            variableWidth: true,
            responsive: [
                {
                breakpoint: 1280,
                settings: {
                    variableWidth: false,
                    slidesToShow: 1,
                    centerMode: false,
                    slidesToScroll: 1
                }
                }
            ]
        })
    })
})(jQuery)
</script>