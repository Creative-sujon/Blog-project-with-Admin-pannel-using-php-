<?php

    include('Class/function.php');
    $obj = new adminBlog();
    session_start();
    $id = $_SESSION['adminID'];
    if($id==null){
        header("location: index.php");
    }

    if(isset($_GET['adminlogout'])){
        if($_GET['adminlogout']=='logout'){
            $obj->adminLogout();
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SW Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php include_once("includes/topnav.php")?>
        <div id="layoutSidenav">
        <?php include_once("includes/sidenav.php") ?>
            <div id="layoutSidenav_content">
                <main class="mx-3">

                    <?php
                        if(isset($view)){
                            if($view == "dashboard.php"){
                            include("view/dash_view.php");
                            }elseif($view == "add_category"){
                                include("view/add_cat_view.php");
                            }elseif($view == "manage_category"){
                                include("view/manage_cat_view.php");
                            }elseif($view == "add_post"){
                                include("view/add_post_view.php");
                            }elseif($view == "manage_post"){
                                include("view/manage_post_view.php");
                            }elseif($view == "edit_cat.php"){
                                include("view/edit_cat_view.php");
                            }elseif($view == "edit_img.php"){
                                include("view/edit_img_view.php");
                            }elseif($view == "edit_post.php"){
                                include("view/edit_post_view.php");
                            }
                        }
                    ?>
                    
                </main>
            <?php include_once("includes/footer.php")?>   
            </div>
        </div>
        <?php include_once("includes/script.php"); ?>
    </body>
</html>
