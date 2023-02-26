<!-- Blog template v. 1.010 -->
<!-- By Michal Futera -->
<!-- https://linktr.ee/mjfutera -->

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
    <footer class="container text-center bg-dark text-light mt-1 p-3">&copy; by <a href="https://linktr.ee/mjfutera" target="_blank">Michał Futera</a> 2023 - <?php echo date('Y')?>. Template v. 1.010</footer>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri()?>/scripts.js"></script>
</body>
</html>