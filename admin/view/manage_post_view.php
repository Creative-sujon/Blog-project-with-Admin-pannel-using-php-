<?php

$posts = $obj->display_post();

?>



<h2 class="mt-4">Manage Post</h2>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tittle</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($postdata = mysqli_fetch_assoc($posts)) { ?>
                            <tr>
                                <td><?php echo $postdata['post_id']; ?></td>
                                <td><?php echo $postdata['post_tittle']; ?></td>
                                <td><p style="height:100px; overflow: auto; "><?php echo $postdata['post_content']; ?></p></td>
                                <td> <img style="height:100px;" src="../upload/<?php echo $postdata['post_img']; ?>" alt=""> <br>
                                <a class="text-primary" href="edit_img.php?status=edit_img&&id=<?php echo $postdata['post_id']; ?>">Change</a>
                                </td>
                                <td><?php echo $postdata['post_author']; ?></td>
                                <td><?php echo $postdata['post_date']; ?></td>
                                <td><?php echo $postdata['cat_name']; ?></td>
                                <td><?php if ($postdata['post_status'] == 1) {
                                        echo "published";
                                    } else {
                                        echo "unpublished";
                                    } ?></td>
                                <td>
                                    <a class="btn btn-primary" href="edit_post.php?status=edit_post&&id=<?php echo $postdata['post_id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
