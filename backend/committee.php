<?php

session_start();

require 'header.php';
require 'db.php';


$banners = "SELECT * FROM committees";
$banners_result = mysqli_query($db_connect, $banners);


?>

<div class="h-screen  place-content-center">
    <div class="add_banner">
        <h1 class="text-center mb-5  text-2xl">
            Add Committee Member
        </h1>
        <form action="committee_post.php" method="POST" enctype="multipart/form-data" class="container mx-auto w-1/2">
            <div>
                <label class="" for="">Guest Title</label> <br>
                <input name="title" type="text" placeholder="Guest Title" class="input input-bordered input-error w-full" />
            </div>
            <div>
                <label class="" for="">Guest Details (Name, Designation, etc)</label> <br>
                <input name="sub_title" type="text" placeholder="Name, Designation, etc" class="input input-bordered input-error w-full" />
            </div>
            <div>
                <label class="" for="">Guest Image</label> <br>
                <input name="banner_image" type="file" class="file-input file-input-bordered file-input-error w-full" />

                <?php if (isset($_SESSION['invalid_extension'])) : ?>
                    <p class="text-red-600"><?= $_SESSION['invalid_extension']; ?></p>
                <?php endif;
                unset($_SESSION['invalid_extension']) ?>

                <?php if (isset($_SESSION['size'])) : ?>
                    <p class="text-red-600"><?= $_SESSION['size']; ?></p>
                <?php endif;
                unset($_SESSION['size']) ?>

            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-error">Add</button>
            </div>
        </form>
    </div>
    <div class="view_banner">
        <h1 class="text-center mt-5 mb-5  text-2xl">
            View Committee Members
        </h1>
        <div class="banner_table">
            <div class="overflow-x-auto">
                <table class="table container mx-auto ">
                    <!-- head -->
                    <thead class="">
                        <tr>
                            <th></th>
                            <th>Guest Title</th>
                            <th>Guest Details</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners_result as $key => $banner) { ?>
                            <tr class="">
                                <th><?= $key + 1 ?></th>
                                <td><?= $banner['guest_title'] ?></td>
                                <td><?= $banner['details'] ?></td>
                                <td><img width="50" src="uploads/banner/<?= $banner['img'] ?>"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>