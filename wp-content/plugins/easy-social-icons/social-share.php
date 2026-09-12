<?php
function cnss_social_share_option_fn()
{
?>
    <div class="wrap" style="clear:both;">
        <h2>Welcome to the Easy Social Icons Share!</h2>
        <div class="content_wrapper">
            <div class="left">
                <span><a class="icon_shape_pro blink_me" href="#" data-image="<?php echo plugins_url('images/hello-world.png', __FILE__); ?>">Preview</a></span>

                <div class="cnss_new_prmium">
                    <p>
                        <b>New: </b>Want more likes and shares, more placement options, and better sharing features for your posts and pages? Upgrade to <a href="https://www.cybernetikz.com/store/" target="_blank">Premium now!</a>
                    </p>
                </div>

                <h3 style="color:#999">1. Which icons do you want to show on your site?</h3>

                <form method="post" enctype="multipart/form-data" action="">
                    <?php wp_nonce_field('cn_active_icon'); ?>
                    <table class="show-icon-table">
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="facebook" class="facebook" value="yes"> <i title="Facebook" style="font-size:18px; vertical-align:middle" class="fa fa-facebook cnss_common_display cnss_facebook_awesome"></i> <span class="cnss_facebook_text">Facebook</span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="twitter" class="cnss_x_display" value="yes"> <i title="X.com" style="font-size:18px; vertical-align:middle" class="fa-brands fa-x-twitter cnss_common_display cnss_twitter_awesome"></i> <span class="cnss_twitter_text">Twitter </span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="linkedin" class="cnss_ld_display" value="yes"> <i title="LinkedIn" style="font-size:18px; vertical-align:middle" class="fa fa-linkedin cnss_common_display cnss_linkedin_awesome"></i> <span class="cnss_linkedin_text">LinkedIn</span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="whatsapp" class="cnss_wa_display" value="yes"> <i title="Whatsapp" style="font-size:18px; vertical-align:middle" class="fab fa-whatsapp cnss_common_display cnss_whatsapp_awesome"></i> <span class="cnss_whatsapp_text">Whatsapp</span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="telegram" class="cnss_tg_display" value="yes"> <i title="Telegram" style="font-size:18px; vertical-align:middle" class="fa fa-telegram cnss_common_display cnss_telegram_awesome"></i> <span class="cnss_telegram_text">Telegram</span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="reddit" class="cnss_tg_display" value="yes"> <i title="Reddit" style="font-size:18px; vertical-align:middle" class="fa fa-reddit cnss_common_display cnss_reddit_awesome"></i> <span class="cnss_reddit_text">Reddit</span>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="copy_link" class="cnss_copy_link_display" value="yes"> <i title="Copy Link" style="font-size:18px; vertical-align:middle" class="fas fa-link cnss_common_display cnss_copy_link_awesome"></i> <span class="cnss_copy_link_text">Copy Link</span>
                            </td>
                        </tr>

                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="email" class="cnss_email_display" value="yes"> <i title="Mailto" style="font-size:18px; vertical-align:middle" class="fa fa-envelope cnss_common_display cnss_envelope_awesome"></i> <span class="cnss_envelope_text">Email</span>
                            </td>
                        </tr>
                    </table>

                    <h3 style="color:#999">2. Where shall they be displayed?</h3>
                    <table class="form-table2">
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="place_icon_post" id="place_icon_post" value="yes"> <span class="cnss_posts" style="font-size: 15px;"><strong>Place them before or after the content of the post</strong></span>
                                <table id="bef_aft_post">
                                    <tr>
                                        <td><input type="radio" name="bef_aft_post" value="before_post"> Before posts</td>
                                        <td><input type="radio" name="bef_aft_post" value="after_post"> After posts</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="tab_align_top">
                            <td><input type="checkbox" disabled name="place_icon_page" id="place_icon_page" value="yes"> <span class="cnss_posts" style="font-size: 15px;"><strong>Display them either before or after the page content</strong></span>
                                <table id="bef_aft_page">
                                    <tr>
                                        <td><input type="radio" name="bef_aft_page" value="before_page"> Before pages</td>
                                        <td><input type="radio" name="bef_aft_page" value="after_page"> After pages</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </table>

                    <h3 style="color:#999">3. Alignment of share icons</h3>
                    <table class="form-table">
                        <tr>
                            <select name="alignment" disabled>
                                <option value="left">Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                            </select></td>
                        </tr>
                    </table>


                    <p class="submit"><input type="submit" disabled class="button-primary" value="<?php _e('Save Changes') ?>"></p>

                </form>



                <script>
                    jQuery(document).ready(function($) {
                        $(".icon_shape_pro").mouseenter(function() {
                            var image_name = $(this).data('image');
                            var uniqueId = 'image-preview-' + Date.now();

                            // Check if already created
                            if (!$(this).data('preview-id')) {
                                var imageTag = `
									<div class="image-preview" id="${uniqueId}" style="
										position: fixed;
										top: 50%;
										left: 50%;
										transform: translate(-50%, -50%);
										border-radius: 10px;
										border: 10px solid rgb(204, 204, 204);
										background: white;
										z-index: 9999;
										pointer-events: none;
									">
												<img src="${image_name}" alt="image" height="450" />
											</div>
										`;
                                $("body").append(imageTag);
                                $(this).data('preview-id', uniqueId);
                            } else {
                                $('#' + $(this).data('preview-id')).show();
                            }
                        });

                        $(".icon_shape_pro").mouseleave(function() {
                            var previewId = $(this).data('preview-id');
                            if (previewId) {
                                $('#' + previewId).hide();
                            }
                        });

                        // hover toggle and checkbox logic
                        $('#show_whatis_social_profile_links').hover(function() {
                            $('#whatis_social_profile_links').fadeToggle('fast');
                        });

                        $('input#cnss_social_profile_links').change(function(event) {
                            if ($(this).prop("checked") == true) {
                                $('#wrap-social-profile-type').fadeIn('fast');
                            } else {
                                $('#wrap-social-profile-type').fadeOut('fast');
                            }
                        });

                        $('input#cnss_use_original_color').change(function(event) {
                            if ($(this).prop("checked") == false) {
                                $('.wrap-icon-bg-color').fadeIn('fast');
                            } else {
                                $('.wrap-icon-bg-color').fadeOut('fast');
                            }
                        });

                    });
                </script>




            </div>
            <div class="right">
                <?php cnss_admin_sidebar(); ?>
            </div>
        </div>
    </div>
<?php }
