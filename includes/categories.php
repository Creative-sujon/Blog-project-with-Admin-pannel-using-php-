<?php

$display_cat = $obj->display_category();

?>
<div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
        <?php while($category_name=mysqli_fetch_assoc($display_cat)){ ?>
            <li><a href="#">- <?php echo $category_name['cat_name'] ?></a></li>
        <?php }?>
        </ul>
    </div>
</div>