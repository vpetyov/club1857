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
                <div class="beer-image">
                    <img src="<?php echo $featured_img_url ?>">
                </div>
                <div class="beer-info">
                    <h3><?php echo $beer->post_title?></h3>
                    <h5><?php echo $beer->post_content?></h5>

                    <?php if($beer_taste):?>
                        <p>
                            <b><?php _e('TASTE')?>:</b>
                            <br>
                            <?php echo $beer_taste;?>
                        </p>
                    <?php endif ?>

                    <?php if($beer_particular_signs):?>
                        <p>
                            <b><?php _e('PARTICULAR SIGNS')?>:</b>
                            <br>
                            <?php echo $beer_particular_signs?>
                        </p>
                    <?php endif?>

                    <?php if($beer_glass):?>
                        <p>
                            <b><?php _e('GLASS')?>:</b>
                            <br>
                            <?php echo $beer_glass?>
                        </p>
                    <?php endif ?>

                        <p>
                            <?php if($beer_alcohol):?>
                                <b><?php _e('ALCOHOL')?>:</b>
                                <?php echo $beer_alcohol?>
                            <?php endif?>

                            <?php if($beer_ideal_temperature):?>
                                <b><?php _e('IDEAL TEMPERATURE')?>:</b>
                                <?php echo $beer_ideal_temperature?>
                            <?php endif?>
                        </p>

                    <?php if($beer_flavour):?>
                        <p>
                            <b><?php _e('FLAVOUR:')?></b>
                            <br>
                            <?php echo $beer_flavour?>
                        </p>
                    <?php endif?>

                    <?php if($beer_foam):?>
                        <p>
                            <b><?php _e('FOAM')?>:</b>
                            <br>
                            <?php echo $beer_foam?>
                        </p>
                    <?php endif?>

                </div>
            </div>
        </div>

    <?php }?>
</div>
<script>
jQuery(document).ready(function () {
    var activeSlide = jQuery('body').find('.slick-center');
    jQuery('.beer-slider').slick({
        prevArrow:'<button type="button" class="slick-prev"><?php _e('Previous')?></button>',
        nextArrow:'<button type="button" class="slick-next"><?php _e('Next')?></button>',
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        responsive: [
            {
            breakpoint: 1000,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    })
})
</script>