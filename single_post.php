<?php

    include("admin/class/function.php");
    $obj= new adminBlog();
    $get_cat = $obj->display_category();

    if(isset($_GET['view'])){
        if($_GET['view']='post_view'){
            $id = $_GET['id'];
            $single_post = $obj->get_post_info($id);
        }
    }

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
                <div class="col-lg-8">
                    <img style="max-width:100%;" src="upload/<?php echo $single_post['post_img']; ?>" alt="">
                    <h3><?php echo $single_post['post_tittle']; ?></h3>
                    <p><?php echo $single_post['post_content']; ?></p>
                </div>
                <?php include_once('includes/sidebar.php') ?>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php include_once('includes/footer.php'); ?>
    <?php include_once('includes/script.php'); ?>