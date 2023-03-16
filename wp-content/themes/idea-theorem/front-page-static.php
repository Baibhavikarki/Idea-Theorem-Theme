<?php
/*
Template Name: Home Page Static
*/
get_header();
?>


<div class="top-banner-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img.png);" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="back"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/back.png" alt="">BACK TO WORK</a>
                <div class="testimonial-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/woodbine.png" alt="">
                    <h1>A Legacy Reinvented</h1>
                    <hr class="line">
                    <p>The team at Idea Theorem™ took the time to really understand our business needs and challenges, and ultimately produced a solution which was excellent. Their UX research and design is incredibly thorough and it shows in the final product. We didn’t hesitate beginning another project with them once our first website build was complete.</p>

                    <div class="cite-by">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/author.png" alt="">
                        <div>
                            <span>Andrew Fuss</span>
                            Senior Marketing Manager
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
                <h2>The <span class="brand-color">Challenge</span></h2>
                <hr class="line">
                <p>Established in 1881 as the Ontario Jockey Club, the prestigious Woodbine Entertainment Group is home to Toronto’s only Casino and Race Track for recreational gambling. It also houses a variety of venues for events including restaurants and bars delivering experiences ranging from old-world charm to swanky cosmopolitan vibes. Being the most preferred destination for all kinds of social and private events, Woodbine felt like it needed to revamp their digital presence to consolidate their numer-uno status.</p>
            </div>
            <div class="col-md-8">
                <div class="img-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TheChallenge_ImageGroup.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//get_sidebar();
get_footer();
?>