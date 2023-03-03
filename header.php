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
        <div class="row">
            <div class="col col-12 mt-1 bg-white col-sm-12 col-md-12 col-lg-10 col-xl-10 p-3">