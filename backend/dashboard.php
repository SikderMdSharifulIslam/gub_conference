<?php
session_start();
require 'db.php';
require 'header.php';

?>

<div class="h-screen text-center place-content-center bg-slate-500">
    <div class="flex flex-wrap mx-auto text-center w-2/3">
        <a href="committee.php"><div class="w-44 h-40" style="background-color: #9e0142;">
            <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                About Committee
            </p>
        </div></a>
        <a href="important.php"><div class="w-44 h-40" style="background-color: #d53e4f;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Update Important Dates
            </p>
        </div></a>
        <a href="paper.php"><div class="w-44 h-40" style="background-color: #f46d43;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Paper submitted
            </p>
        </div></a>
        <a href="logout.php"><div class="w-44 h-40" style="background-color: #fdae61;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Log Out
            </p>
        </div></a>
        
    </div>
</div>



<?php require 'footer.php';?>