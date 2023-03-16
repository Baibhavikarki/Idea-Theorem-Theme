<?php
/*
Template Name: Home Page
*/
get_header();
?>


<div class="top-banner-sec" style="<?php echo ( get_option( 'banner_background_image' ) ) ? 'background-image: url(' . get_option( 'banner_background_image' ) . ');' : ''; ?>" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if ( get_option ( 'banner_testimonial_cta_link' ) ):
                    echo '<a href="' . get_option('banner_testimonial_cta_link') . '" class="back"><img src="' . get_template_directory_uri() . '/assets/img/back.png" alt=""> ' . get_option( 'banner_testimonial_cta_title' ) . '</a>';
                endif;
                ?>
                <div class="testimonial-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/woodbine.png" alt="">
                    <h1><?php echo get_option( 'banner_testimonial_title' ); ?></h1>
                    <hr class="line">
                    <p><?php echo get_option( 'banner_testimonial_description' ); ?></p>

                    <div class="cite-by">
                    <?php echo ( get_option( 'banner_testimonial_client_image' ) ) ? '<img src="' . get_option( 'banner_testimonial_client_image' ) . '" alt="">' : ''; ?>
                        <div>
                        <?php echo get_option( 'banner_testimonial_client_info' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<div class="second-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2><?php echo get_option( 'about_us_title' ); ?></h2>
                <hr class="line">
                <p><?php echo get_option( 'about_us_description' ); ?></p>
            </div>
            <div class="col-md-8">
                <div class="img-col">
                    <?php echo ( get_option( 'about_us_image' ) ) ? '<img src="' . get_option( 'about_us_image' ) . '" alt="">' : ''; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//get_sidebar();
get_footer();
?>