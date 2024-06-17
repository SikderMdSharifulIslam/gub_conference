<?php

session_start();

require 'header.php';
require 'db.php';


$banners = "SELECT * FROM dates";
$banners_result = mysqli_query($db_connect, $banners);


?>

<div class="h-screen  place-content-center">
    <div class="add_banner">
        <h1 class="text-center mb-5  text-2xl">
            Add Important Dates
        </h1>
        <form action="important_post.php" method="POST" enctype="multipart/form-data" class="container mx-auto w-1/2">
            <div>
                <label class="" for="">Date</label> <br>
                <input name="title" type="text" placeholder="16 September, 2024" class="input input-bordered input-error w-full" />
            </div>
            <div>
                <label class="" for="">Important Note</label> <br>
                <input name="sub_title" type="text" placeholder="Full Paper Submission" class="input input-bordered input-error w-full" />
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-error">Add</button>
            </div>
        </form>
    </div>
    <div class="view_banner">
        <h1 class="text-center mt-5 mb-5  text-2xl">
            View Important Dates List
        </h1>
        <div class="banner_table">
            <div class="overflow-x-auto">
                <table class="table container mx-auto ">
                    <!-- head -->
                    <thead class="">
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners_result as $key => $banner) { ?>
                            <tr class="">
                                <th><?= $key+1 ?></th>
                                <td><?= $banner['dates'] ?></td>
                                <td><?= $banner['notes'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>