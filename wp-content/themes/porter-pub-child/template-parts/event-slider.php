<?php 
    $args = array( 
        'numberposts'=> 7,
        'post_type'=>'tribe_events',
        'orderby' =>'meta_value',
        'meta_key' => '_EventStartDate',
        'order' => 'ASC',
        'suppress_filters' => 0,
        'tax_query'=> array(
            array(
                'taxonomy' => 'tribe_events_cat',
                'field' => 'slug',
                'terms' => 'sport'
            )
        )
        // 'cat' => 66
        // 'orderby'=>'date',
        // 'order'=> 'ASC'
    );

    $events = get_posts($args);
    // var_dump($events);

?>
<div class="home-header">

    <div class="events-section">
        <div class="event-dates-slider">
            <?php foreach( $events as $key => $event ){
                $prev = array_key_exists($key - 1, $events) ? $events[$key -1] : false;
                        
            ?>

            <div class="event-date">
                <span class="date"><?php echo tribe_get_start_date($event->ID, true,'j F Y') ?></span>
                <span class="day">/<?php echo tribe_get_start_date($event,true,"l")?>/</span>
            </div>

            <?php 
                }?>
        </div>
        <div class="event-slider">
            <?php
                foreach( $events as $event ){
            ?>
            <div class="event-slide">
                <div class="event-wrap all-events">
                    <?php foreach( $events as $sub_event ):?>
                    <?php $featured_img_url = get_the_post_thumbnail_url($sub_event->ID, 'full');?>
                    <?php if(tribe_get_start_date($event->ID, true,'jS F Y') == tribe_get_start_date($sub_event->ID,true,'jS F Y')) :?>
                    <div class="single-event" style="background-image:url('<?php echo $featured_img_url ?>')">
                        <!-- <div class="event-image">
                                    <img src="<?php echo $featured_img_url ?>">
                                </div> -->
                        <!-- <div class="event-info">
                            <a href="<?php echo tribe_get_event_link($sub_event->ID)?>">
                                <div>
                                    <h2><?php echo $sub_event->post_title?></h2>
                                    <h5><?php echo $sub_event->post_excerpt ?></h5> -->
                                    <!-- <span class="begin-event-date"><?php echo tribe_get_start_date($sub_event->ID) ?></span> -->
                                    <!-- <span class="event-link">More</span> -->
                                <!-- </div>
                            </a>
                        </div> -->
                    </div>
                    <?php endif ?>
                    <?php endforeach?>


                    <!-- <div style="position:absolute;left:0;top:0;width:100%" class="all-events">
                            <?php foreach( $events as $sub_event ):?>
                                <?php if(tribe_get_start_date($event->ID) == tribe_get_start_date($sub_event->ID)) :?>
                                <div>
                                    <h1><?php echo $sub_event->post_title ?></h1>
                                    <h3><?php echo tribe_get_start_date($sub_event->ID)?></h3>
                                </div>
                                <?php endif ?>
                            
                            <?php endforeach?>
                        </div>   -->
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</div>

<div id="events-calender-container">
</div>

<script>
    jQuery(document).ready(function () {
        var body = jQuery('body');
        var eventSlider = body.find('.event-slider');

        var eventDateSlider = body.find('.event-dates-slider');
        var eventDate = eventDateSlider.find('.event-date');

        jQuery('.event-dates-slider').slick({
            slidesToShow: 4,
            // slidesToScroll: 1,
            autoplaySpeed: 2000,
            asNavFor: '.event-slider',
            focusOnSelect: true,
            infinite: false,
            prevArrow: "<span class='arrow arrow-left'></span>",
            nextArrow: "<span class='arrow arrow-right'></span>",
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        var activeSlide = jQuery('body').find('.slick-center');
        jQuery('.event-slider').slick({
            infinite: false,
            arrows: false,
            centerMode: false,
            slidesToShow: 1,
            variableWidth: false,
            draggable: false,
        });
    })
</script>