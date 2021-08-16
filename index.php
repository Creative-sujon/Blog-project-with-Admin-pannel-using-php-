<?php

    include("admin/class/function.php");
    $obj= new adminBlog();
    $get_cat = $obj->display_category();

?>


<?php include_once('includes/head.php'); ?>

<body>

    <!-- ***** Preloader Start ***** -->
    <?php include_once('includes/preloader.php'); ?>

    <!-- Header sectin -->
    <?php include_once('includes/header.php'); ?>

    <!-- Banner section -->
    <?php include_once('includes/banner.php'); ?>

    <!-- Call to action -->
    <?php include_once('includes/cta.php'); ?>

    <!-- Blog post section -->
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php include_once('includes/blog_posts.php') ?>
                <?php include_once('includes/sidebar.php') ?>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php include_once('includes/footer.php'); ?>
    <?php include_once('includes/script.php'); ?>