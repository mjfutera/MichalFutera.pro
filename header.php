<!-- Blog template v. 1.013 -->
<!-- By Michal Futera -->
<!-- https://linktr.ee/mjfutera -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>MichalFutera.pro <?php echo wp_title(); ?></title>
    
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "4ba95150-cae5-4c4d-b141-015180268ad8",
        });
      });
    </script>
</head>
<body>
    <div class="container">
        <div class="row bg-white">
            <div class="col col-12 p-1 mt-1 col-sm-12 col-md-3 col-lg-3 col-xl-3 bg-white">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" class="rounded" data-aos="flip-left"></a>
            </div>
            <div class="col col-12 text-center d-none d-sm-block mt-1 col-sm-12 col-md-9 col-lg-9 bg-white" id="header-banner">
                <marquee direction="right">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/1.png" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/2.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/3.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/4.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/5.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/6.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/7.png" alt="" class="programming-logo rounded mt-1">
                    <!-- <img src="<?php echo get_template_directory_uri()?>/img/programming/8.png" alt="" class="programming-logo rounded mt-1"> -->
                    <!-- <img src="<?php echo get_template_directory_uri()?>/img/programming/9.png" alt="" class="programming-logo rounded mt-1"> -->
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/10.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/11.png" alt="" class="programming-logo rounded mt-1">
                </marquee>
            </div>
        </div>
        <div class="row text-center">
            <div class="col col-12 p-1 bg-dark text-light mt-1 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                <?php get_search_form(); ?>
            </div>
            <div class="col col-12 p-1 bg-dark text-light mt-1 col-sm-6 col-md-8 col-lg-8 col-xl-8 text-center">
                <nav>
                    <?php echo wp_nav_menu(); ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center bg-white">
                
            
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
                <div id="mc_embed_signup">
                    <form action="https://michalfutera.us4.list-manage.com/subscribe/post?u=21eac6b776cd0f6a0fc755d9b&amp;id=4feb6fa9f8&amp;f_id=000358e8f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <h2>Subscribe</h2>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
                    <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">First Name </label>
                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    <span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
                </div>
                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_21eac6b776cd0f6a0fc755d9b_4feb6fa9f8" tabindex="-1" value=""></div>
                        <div class="optionalParent">
                            <div class="clear foot">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                <p class="brandingLogo"><a href="http://eepurl.com/hnqbl5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text'; /*
                * Translated default messages for the $ validation plugin.
                * Locale: PL
                */
                $.extend($.validator.messages, {
                    required: "To pole jest wymagane.",
                    remote: "Proszę o wypełnienie tego pola.",
                    email: "Proszę o podanie prawidłowego adresu email.",
                    url: "Proszę o podanie prawidłowego URL.",
                    date: "Proszę o podanie prawidłowej daty.",
                    dateISO: "Proszę o podanie prawidłowej daty (ISO).",
                    number: "Proszę o podanie prawidłowej liczby.",
                    digits: "Proszę o podanie samych cyfr.",
                    creditcard: "Proszę o podanie prawidłowej karty kredytowej.",
                    equalTo: "Proszę o podanie tej samej wartości ponownie.",
                    accept: "Proszę o podanie wartości z prawidłowym rozszerzeniem.",
                    maxlength: $.validator.format("Proszę o podanie nie więcej niż {0} znaków."),
                    minlength: $.validator.format("Proszę o podanie przynajmniej {0} znaków."),
                    rangelength: $.validator.format("Proszę o podanie wartości o długości od {0} do {1} znaków."),
                    range: $.validator.format("Proszę o podanie wartości z przedziału od {0} do {1}."),
                    max: $.validator.format("Proszę o podanie wartości mniejszej bądź równej {0}."),
                    min: $.validator.format("Proszę o podanie wartości większej bądź równej {0}.")
                });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
            
            </div>
        </div>
        <div class="row">
            <div class="col col-12 mt-1 bg-white col-sm-12 col-md-12 col-lg-10 col-xl-10 p-3">