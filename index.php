<?php

require 'backend/db.php';
$banners = "SELECT * FROM Committees";
$banners_result = mysqli_query($db_connect, $banners);
$after_assoc =  mysqli_fetch_assoc($banners_result);


$dd = "SELECT * FROM dates";
$dd_result = mysqli_query($db_connect, $dd);
$dd_after_assoc =  mysqli_fetch_assoc($dd_result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STI</title>
    <link rel="shortcut icon" href="images/sti-2024.png" type="image/x-icon">

    <!------------google fonts Manrope ------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!----------icons setup link ----------->
    <script src="https://kit.fontawesome.com/8723cc5cb2.js" crossorigin="anonymous"></script>

    <!------------tailwind and daisyUi ----------->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!------------tailwind custom color ------------>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'primary': '#FF4240',
                    }
                }
            }
        }
    </script>
    <style>
        .manrope-font {
            font-family: 'Manrope', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body class="manrope-font">
    <header class="container mx-auto lg:my-10 lg:px-32">

        <!------------navbar section start here ----------->
        <div class="navbar px-4">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about_us">About Us</a></li>
                        <li><a href="#committees">Committees</a></li>
                        <li><a href="#dates">Important Dates</a></li>
                        <li><a href="#venue">Event Venue</a></li>
                    </ul>
                </div>
                <a href=""><img class="w-14" src="images/sti-2024.png" alt=""></a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                <li><a href="#">Home</a></li>
                        <li><a href="#about_us">About Us</a></li>
                        <li><a href="#committees">Committees</a></li>
                        <li><a href="#dates">Important Dates</a></li>
                        <li><a href="#venue">Event Venue</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="backend/registration.php" class="btn border-none bg-primary px-4 lg:px-6 text-base lg:text-xl text-white">Registration</a>
            </div>
        </div>
        <!---------------navbar section end here-------------->

        <!---------------banner section start here------------>
        <section class="mt-14 px-4 lg:relative">
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <img src="images/industry-banner3.jpg" class="w-full rounded-2xl" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn bg-black text-white btn-circle border-none">❮</a>
                        <a href="#slide2" class="btn bg-black text-white border-none btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <img src="images/industry-banner2.jpg" class="w-full rounded-2xl" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle bg-black text-white border-none">❮</a>
                        <a href="#slide3" class="btn btn-circle bg-black text-white border-none">❯</a>
                    </div>
                </div>

            </div>
            <div class="lg:w-[566px] bg-[#131318] lg:absolute mx-auto lg:right-10 lg:bottom-8 p-4 lg:p-10 rounded-2xl mt-6">
                <h2 class="text-2xl font-extrabold text-white mb-4">11 - 15 DECEMBER 2024</h2>
                <p class="text-[#ffffff99]">2024 6th INTERNATIONAL CONFERENCE ON SUSTAINABLE TECHNOLOGIES FOR INDUSTRY 5.0 (STI 2024)</p>
            </div>
        </section>
        <!----------------banner section end here-------------->
    </header>



    <main class="container mx-auto lg:my-4 lg:px-32">

        <!-- ---------------Clients Question section start here------------ -->
        <section id="about_us" class="mt-12 px-4 lg:mt-24">
            <hr class="mb-8 border border-dashed border-gray-300" />
            <div class="space-y-6">
                <h3 class="text-4xl font-extrabold text-center">ABOUT US</h3>
                <p class="font-semibold text-center w-2/3 mx-auto">A platform for facilitating and promoting innovative research on Industry 5.0</p>
            </div>
            <hr class="mt-8 border border-dashed border-gray-300" />
            <div class="my-12">
                <div class="flex gap-12 flex-col lg:flex-row justify-center items-center border border-gray-400 rounded-xl p-4">
                    <img src="images/sti-2023-banner.png" class="object-cover rounded-xl" />
                    <div>
                        <div class="collapse collapse-plus ">
                            <input type="radio" name="my-accordion-3" checked="checked" />
                            <div class="collapse-title text-xl font-bold">
                                Brief
                            </div>
                            <div class="collapse-content">
                                <p>STI 2024 welcomes researchers, industry professionals, and practitioners to display their scientific achievements and sustainable solutions for industrial developments in the fields of computer science & engineering, electrical & electronic engineering, textile engineering, robotics and cyber-physical systems related to Industry 5.0</p>
                            </div>
                            <hr>
                        </div>
                        <div class="collapse collapse-plus ">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-xl font-bold">
                                WHY STI?
                            </div>
                            <div class="collapse-content">
                                <p>First initiative in southeast Asia for organizing an international conference on Sustainable Technologies for Industry 5.0
                                    Only conference in Bangladesh, technically co-sponsored by the central IEEE Computer Society, USA
                                    All the papers of the previous editions were included in the IEEE Xplore digital library within short period of times
                                    From the very first edition, all the accepted papers are included in the Scopus and other renowned indexed databases
                                    With each subsequent edition, involvement of international participants is increasing, e.g., 2019: 20 countries, 2020: 22 countries, 2021: 35 countries, and 2022: 39 countries
                                    In the last edition (STI 2022), FOUR (4) IEEE fellows joined as keynote speakers, and it is a regular practice for STI episodes</p>
                            </div>
                            <hr>
                        </div>
                        <div class="collapse collapse-plus ">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-xl font-bold">
                                CALL for Paper
                            </div>
                            <div class="collapse-content">
                                <p>From its inception, innovation shows no signs of slowing down. However, to overcome the post-covid economic challenges and to establish competitive, sustainable, and greener industries, a new wave of innovation needs to be introduced, which inspires to transit from Industry 4.0 to Industry 5.0. The latter complements the earlier by highlighting synergic co-existence of human intelligence and machine intelligence as drivers for a transition to a sustainable, human-centric and resilient industry. Attaining green and digital transitions requires new technologies to be introduced focusing on the values of stakeholder unlike Industry 4.0 - on machine intelligence and automation only. Hence, Industry 5.0 attempts to capture the value of new technologies, providing prosperity beyond jobs and growth, while respecting planetary boundaries, and placing the well-being of the industry worker at the centre of the production process.</p>
                            </div>
                            <hr>
                        </div>
                        <div class="collapse collapse-plus ">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-xl font-bold">
                                IEEE Xplore
                            </div>
                            <div class="collapse-content">
                                <p>FSTI 2024 welcomes researchers, industry professionals, and practitioners to display their scientific achievements and sustainable solutions for industrial developments in the fields of computer science & engineering, electrical & electronic engineering, textile engineering, robotics and cyber-physical systems related to Industry 4.0. It will be hosted at the permanent campus of Green University of Bangladesh, Purbachal American City, Dhaka, Bangladesh during 14-15 December 2024.</p>
                            </div>
                            <hr>
                        </div>
                        <div class="collapse collapse-plus ">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-xl font-bold">
                                Track 1 and Track 2
                            </div>
                            <div class="collapse-content">
                                <p>We are seeking original high-quality innovative research for submissions. All submissions to STI 2024 will go through a double-blind peer reviewing process.

                                    Accepted and presented papers of Track 1 and Track 2 will be submitted to the IEEE Xplore digital library. Note that, papers of our last four editions are already accepted and archived in IEEE Xplore digital library and they are also archived in Scopus database.</p>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ---------------Clients Question section end here------------ -->

        <!-- --------------Committees section start---------- -->
        <section id="committees" class="mt-4  px-4 lg:mt-4">
            <div class="space-y-6">
                <h3 class="text-4xl font-extrabold text-center">Committees</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-4 lg:mt-12">
            <?php foreach ($banners_result as $key => $banner) { ?>
            <div class="hero border border-gray-300 rounded-2xl">
                    <div class="flex flex-col lg:flex-row gap-6 p-4 lg:p-6">
                        <img class="w-36" src="backend/uploads/banner/<?= $banner['img']?>" class="object-cover" />
                        <div class="space-y-3">
                            <h5 class="text-xl font-extrabold"><?=$banner['guest_title'] ?></h5>
                            <p><?=$banner['details'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </section>
        <!-- --------------Committees section end---------- -->

        <!-- --------------Important Dates section start---------- -->
        <section id="dates" class="mt-4  px-4 lg:mt-24">
            <div class="space-y-6">
                <h3 class="text-4xl font-extrabold text-center">Important Dates
                </h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-4 lg:mt-12">
            <?php foreach ($dd_result as $key => $dd) { ?>    
            <div class="">
                    <div class="flex flex-col gap-6 p-4 lg:p-6">
                        <img class="w-20" src="images/clock.png" class="object-cover" />
                        <div class="space-y-3">
                            <h5 class="text-xl font-extrabold"><?=$dd['dates']?></h5>
                            <p><?=$dd['notes']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>  
            </div>
        </section>
        <!-- --------------Important Dates section end---------- -->
        <!--subscribe section Start -->

        <section class="subscribe-container">
            <div class="subscribe-items place-items-center">
                <i class="fa-solid text-5xl text-red-600 fa-envelope-circle-check"></i>
                <h3 class="share-title">Subscribe Newsletter</h3>
                <p class="share-paragraph subscribe">Subscribe to get in touch to Display Scientific Achievements and Sustainable Solutions for Industrial Developments</p>
                <input class="input-box" type="text" placeholder="user@gmail.com">
                <button class="btn-subscribe">Subscribe</button>
            </div>
        </section>
        <!--subscribe section End -->
        <!-- --------------EVENT VENUE section start---------- -->
        <section id="venue" class="mt-4  px-4 lg:mt-16">
            <div class="space-y-6">
                <h3 class="text-4xl font-extrabold text-center">EVENT VENUE</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-4 lg:mt-4">
                <div class="">
                    <div class="flex flex-col gap-6 p-4 lg:p-6">
                        <div class="space-y-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7299.301793033026!2d90.562522!3d23.83101!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755cb5b90b02463%3A0xc6d028a32576ee4c!2sPurbachal%20American%20City!5e0!3m2!1sen!2sbd!4v1718059092408!5m2!1sen!2sbd" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="p-4 lg:p-6">
                        <img class="" src="images/maxresdefault.jpg" class="object-cover" />
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------EVENT VENUE section end---------- -->



    </main>
    <footer class="container mx-auto px-4 lg:px-48 py-10 bg-base-200 text-base-content lg:mb-10">
        <div class="flex justify-between my-24">
            <img src="images/cup.png" alt="">
            <p>
                <span class="mr-3">Ready to get started?</span>
                <button class="text-white btn bg-gradient-to-r from-blue-400 to-cyan-400">Get Started</button>
            </p>
        </div>
        <div class="footer">
            <div>
                <header class="footer-title text-xl font-semibold">Quick Links</header>
                <a class="link link-hover">Home</a>
                <a class="link link-hover">About US</a>
                <a class="link link-hover">Publication</a>
                <a class="link link-hover">Policy</a>
            </div>
            <div>
                <header class="footer-title text-xl font-semibold">Important Dates</header>
                <a class="link link-hover">Speakers</a>
                <a class="link link-hover">Committee Team</a>
                <a class="link link-hover">Schedule</a>
                <a class="link link-hover">Call For Paper</a>
            </div>
            <div>
                <header class="footer-title text-xl font-semibold">Help</header>
                <a class="link link-hover">FAQs</a>
                <a class="link link-hover">Contact Us</a>
            </div>
            <form>
                <header class="footer-title text-2xl font-semibold">Subscribe to our
                    <br> newsletter
                </header>
                <fieldset class="form-control w-80">
                    <label class="label">
                        <span class="label-text">Email address</span>
                    </label>
                    <div class="relative">
                        <input type="text" placeholder="username@site.com" class="py-4 bg-transparent border-b-2 border-black outline-none" />
                        <button class="btn text-white lg:absolute top-0 right-0 rounded-full bg-gradient-to-r from-blue-400 to-cyan-400"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </fieldset>
                <div>
                    <a href=""><i class="fa-brands fa-facebook mr-3"></i></a>
                    <a href=""><i class="fa-brands fa-twitter mr-3"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </form>
        </div>
        <aside class="mt-10 text-center">
            <p>Copyright © 2024 - Green University of Bangladesh. All Rights Reserved.</p>
        </aside>
    </footer>
</body>

</html>