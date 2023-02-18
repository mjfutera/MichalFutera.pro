<!-- Blog template v. 1.007 -->
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
    <title>MichalFutera.pro <?php echo wp_title(); ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 p-1 mt-1 col-sm-12 col-md-3 col-lg-3 col-xl-3 bg-white">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="" srcset="" class="rounded">
            </div>
            <div class="col col-12 text-center d-none d-sm-block mt-1 col-sm-12 col-md-9 col-lg-9 bg-white" id="header-banner">
                <marquee direction="right">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/1.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/2.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/3.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/4.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/5.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/6.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/7.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/8.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/9.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/10.png" alt="" class="programming-logo rounded mt-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/programming/11.png" alt="" class="programming-logo rounded mt-1">
                </marquee>
            </div>
        </div>
        <div class="row text-center">
            <div class="col col-12 p-1 bg-dark text-light mt-1 col-sm-6 col-md-4 col-lg-4 col-xl-4
            order-3">
                <?php get_search_form(); ?>
            </div>
            <div class="col col-12 p-1 bg-dark text-light mt-1 col-sm-6 col-md-8 col-lg-8 col-xl-8
            order-4">
                <?php echo wp_nav_menu(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 mt-1 bg-white col-sm-12 col-md-12 col-lg-12 col-xl-12
            order-5 p-3 text-center">
                <!-- <marquee behavior="" direction=""> -->
                Partners logos
                <!-- </marquee> -->
            </div>
        </div>
        <div class="row">
            <div class="col col-12 mt-1 bg-white col-sm-12 col-md-10 col-lg-10 col-xl-10
            order-6 p-3">
                <!-- Blog posts -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <div>
                                    <img src="<?php echo get_template_directory_uri()?>/img/testHeader.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                                <h2>
                                    <?php echo get_the_title(); ?>
                                </h2>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quasi a! Quisquam, optio ullam laboriosam nobis, modi est animi ut deleniti culpa facilis labore a consequatur sunt! Reprehenderit recusandae iure atque expedita ullam, illum veritatis sequi autem reiciendis alias sit architecto pariatur consectetur aliquid facere itaque. Rem inventore harum autem.
                                <br>
                                <div class="btn btn-success">Read article</div>
                            </div>
                        </div>
                    </article>
                    <hr>
                    <?php endwhile; else : ?>
	                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                <!-- Blog posts -->
            </div>
            <aside class="col col-12 mt-1 bg-white col-sm-12 col-md-2 col-lg-2 col-xl-2 text-center p-3">
                <img src="<?php echo get_template_directory_uri()?>/img/avatar.jpeg" class="side-picture shadow"><br>
                <a href="https://twitter.com/mjfutera" target="_blank"><img src="https://user-images.githubusercontent.com/100314711/216403440-e92aff25-3452-4948-8805-f7ad944983fe.png" class="rounded shadow sm-banner m-1"></a>
                <a href="https://www.linkedin.com/in/michalfutera/" target="_blank"><img src="https://user-images.githubusercontent.com/100314711/216405566-d8a0eb5d-1424-4e84-b931-35217ada1083.png" class="rounded shadow sm-banner m-1"></a>
                <a href="https://www.buymeacoffee.com/mjfutera" target="_blank"><img src="https://user-images.githubusercontent.com/100314711/216403435-a0d3d0d3-e991-4612-b0d2-40408ae8d4d0.png" class="rounded shadow sm-banner m-1"></a>
                <a href="https://www.fiverr.com/michalfutera" target="_blank"><img src="https://user-images.githubusercontent.com/100314711/218256294-c71b8656-0f3a-4fbd-bb5d-804504caa7a0.png" class="rounded shadow sm-banner m-1"></a>
                <a href="https://linktr.ee/mjfutera" target="_blank"><img src="https://user-images.githubusercontent.com/100314711/216403438-94aeff33-6ed6-41ef-9972-92ea878e76e4.png" class="rounded shadow sm-banner m-1"></a>
                    </aside>
        </div>
        <div class="row">
            <div class="col col-12 mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3">
                <?php dynamic_sidebar( 'widgets_area_1' ); ?>
            </div>
            <div class="col col-12 mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3">
                <?php dynamic_sidebar( 'widgets_area_2' ); ?>   
            </div>
            <div class="col col-12 d-none d-sm-block mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3">
                <?php dynamic_sidebar( 'widgets_area_3' ); ?>
            </div>
            <div class="col col-12 d-none d-sm-block mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3">
                <?php dynamic_sidebar( 'widgets_area_4' ); ?>
            </div>
        </div>
    </div>
    <footer class="container text-center bg-dark text-light mt-1 p-3">&copy; by <a href="https://linktr.ee/mjfutera" target="_blank">Michał Futera</a> 2023 - <span id="currentYear"></span>. Template v. 1.007</footer>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri()?>/scripts.js"></script>
</body>
</html>