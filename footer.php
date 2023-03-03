<!-- Blog template v. 1.013 -->
<!-- By Michal Futera -->
<!-- https://linktr.ee/mjfutera -->

<div class="row">
            <div class="col col-12 mt-1 bg-white col-xs-6 col-md-12 col-lg-3 col-xl-3" data-aos="fade-up">   
                <?php dynamic_sidebar( 'widgets_area_1' ); ?>   
            </div>
            <div class="col col-12 mt-1 bg-white col-xs-6 col-md-12 col-lg-3 col-xl-3" data-aos="fade-down">
                <?php dynamic_sidebar( 'widgets_area_2' ); ?>   
            </div>
            <div class="col col-12 d-none d-sm-none d-md-none d-lg-block mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3" data-aos="fade-down">
                <?php dynamic_sidebar( 'widgets_area_3' ); ?>
            </div>
            <div class="col col-12 d-none d-sm-none d-md-none d-lg-block mt-1 bg-white col-xs-6 col-md-6 col-lg-3 col-xl-3" data-aos="fade-up">
                <?php dynamic_sidebar( 'widgets_area_4' ); ?>
            </div>
        </div>
    </div>
    <footer class="container text-center bg-dark text-light mt-1 p-3">&copy; by <a href="https://linktr.ee/mjfutera" target="_blank">Michał Futera</a> 2023 - <?php echo date('Y')?>. Template v. 1.013</footer>
    <script src="https://important.michalfutera.pro/lib/scripts.js"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"
    ></script>
    <script src="https://important.michalfutera.pro/cornerBanner/banner.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/scripts.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>