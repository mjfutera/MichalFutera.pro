<!-- MichalFutera.Pro v. 1.000 -->
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
    <title>Hello world</title>
</head>
<body>
<div class="bg-image" 
     style="background-image: url('<?php echo get_template_directory_uri()?>/img/background.jpg');
            height: 100vh">
    <div class="container rounded bg-light shadow-lg">
        <header class="main-header">
            <div class="custom-logo">Logo</div>
            <div class="search"><?php get_search_form(); ?></div>
            <nav class="main-menu"><?php wp_nav_menu(); ?></nav>
        </header>
        <section class="banner">
            <progress max="100" value="110"></progress>
        </section>

        <section class="content-holder">
            <article class="content">Main content</article>
            <aside class="sidebar">Sidebar</aside>
        </section>

        <footer class="main-footer">
            <aside class="footer-box">Footer box</aside>
            <aside class="footer-box">Footer box</aside>
            <aside class="footer-box">Footer box</aside>
            <aside class="footer-box">Footer box</aside>
        </footer>

        <div class="powered">Powered by</div>
    </div>
</div>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"
    ></script>
</body>
</html>