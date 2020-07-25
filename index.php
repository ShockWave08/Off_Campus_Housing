<?php
    //require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Register.php');
    require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Login.php');
?>

<?php
  $Login = new Login();
  $Response = [];
  //$active = $Login->active;
  if (isset($_POST) && count($_POST) > 0) $Response = $Login->login($_POST);
?>







<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""></meta>
        <meta name="" content=""></meta>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen and (min-width:900px)" href="css/main.css">
        <!--
        <link rel="stylesheet" media="screen and (max-width:600px)" href="css/small-devices.css">
        -->
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- Font Awesome 5  -->
        <script src="https://kit.fontawesome.com/cfe5e987ca.js" crossorigin="anonymous"></script>

        <title>Chill Housing</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@100&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto+Mono:ital,wght@1,700&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        </style>

    </head>

    <body>

        <!-- company name -->
        <header>
          <div class="container-fluid">
             <div class="row">
                 <div class="col-sm-1">
                     <div id="logo">
                         <p>Logo</p>
                        <!-- <img src="/off_campus_project/img/logo.jpeg" alt="Logo" height="200" width="200" ></img> -->
                     </div>
                 </div>
                <div class="col-sm-10">
                    <h2>Chill off-campus housing</h2>
                </div>
                <div class="col-sm-1">
                    <div class="user_info_button float-right">
                        <button type="button" onclick="showLogin()" class="add_house_button btn" >
                           <i class="fas fa-user"></i>
                         </button>
                   </div>
                </div>
             </div>
          </div>
        </header>

        <!-- Navigation -->
        <nav>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div col-md-12>
                        <form class="search">
                            <div class="input-group">

                                <!--<div class="input-group-prepend">
                                    <button type="button" class="btn nav_btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                                        Agents
                                    </button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#"> Adam, Rafeek</a>
                                        <a class="dropdown-item" href="#"> Applewhite, Michell</a>
                                        <a class="dropdown-item" href="#"> Arthur, Hugh</a>
                                        <a class="dropdown-item" href="#"> Aswat, Amina</a>
                                        <a class="dropdown-item" href="#"> Aswat, Amina</a>
                                        <a class="dropdown-item" href="#"> Austin, Oneta</a>
                                        <a class="dropdown-item" href="#"> Babb, Grace</a>
                                        <a class="dropdown-item" href="#"> Babb, Joyce</a>
                                        <a class="dropdown-item" href="#"> Babb, Shawn</a>
                                        <a class="dropdown-item" href="#"> Batson, Roslyn</a>
                                        <a class="dropdown-item" href="#"> Beedle, Boothe</a>
                                        <a class="dropdown-item" href="#"> Bellamy, Shannay</a>
                                        <a class="dropdown-item" href="#"> Benjamin, June</a>
                                        <a class="dropdown-item" href="#"> Bernard, Lawson</a>
                                        <a class="dropdown-item" href="#"> Bhana, Hadra</a>
                                        <a class="dropdown-item" href="#"> Bishop, Susan</a>
                                        <a class="dropdown-item" href="#"> Blackman, Margaret</a>
                                        <a class="dropdown-item" href="#"> Blades , Richard</a>
                                        <a class="dropdown-item" href="#"> Blades-Jones, Janna</a>
                                        <a class="dropdown-item" href="#"> Bobat, Lukman</a>
                                        <a class="dropdown-item" href="#"> bostic, mary</a>
                                        <a class="dropdown-item" href="#"> Bowen, Brenda</a>
                                        <a class="dropdown-item" href="#"> Bowen, Michelle</a>
                                        <a class="dropdown-item" href="#"> Bowen, Peter</a>
                                        <a class="dropdown-item" href="#"> Boyce, Aizlene</a>
                                        <a class="dropdown-item" href="#"> Boyce , Charles </a>
                                        <a class="dropdown-item" href="#"> Boyce, Charles</a>
                                        <a class="dropdown-item" href="#"> Bradshaw Archer, Romana</a>
                                        <a class="dropdown-item" href="#"> Branch, Alison</a>
                                        <a class="dropdown-item" href="#"> Brathwaite, Chantelle</a>
                                        <a class="dropdown-item" href="#"> Brathwaite, Cheryl</a>
                                        <a class="dropdown-item" href="#"> Brathwaite, Donn</a>
                                        <a class="dropdown-item" href="#"> Brathwaite , Marcia</a>
                                        <a class="dropdown-item" href="#"> Brathwaite , Marilyn</a>
                                        <a class="dropdown-item" href="#"> Brome, Rufus</a>
                                        <a class="dropdown-item" href="#"> Broome, Dian</a>
                                        <a class="dropdown-item" href="#"> Brown, Rhina</a>
                                        <a class="dropdown-item" href="#"> Burgess, Andre</a>
                                        <a class="dropdown-item" href="#"> Burke, Klinita</a>
                                        <a class="dropdown-item" href="#"> Burrowes, Andrew &amp; Cecily</a>
                                        <a class="dropdown-item" href="#"> Campbell, Judy</a>
                                        <a class="dropdown-item" href="#"> Campbell, Winston</a>
                                        <a class="dropdown-item" href="#"> Carrington, Damani</a>
                                        <a class="dropdown-item" href="#"> Carrington, Sandra</a>
                                        <a class="dropdown-item" href="#"> Carter , Harold Anthony</a>
                                        <a class="dropdown-item" href="#"> Carter, Neil</a>
                                        <a class="dropdown-item" href="#"> Carter, Sharon Ida</a>
                                        <a class="dropdown-item" href="#"> Chadderton, Shirley</a>
                                        <a class="dropdown-item" href="#"> Chandler, Diann </a>
                                        <a class="dropdown-item" href="#"> Charlery, Angela</a>
                                        <a class="dropdown-item" href="#"> Chotia, Mohammed</a>
                                        <a class="dropdown-item" href="#"> Clarke, Andrew</a>
                                        <a class="dropdown-item" href="#"> Clarke, Joan</a>
                                        <a class="dropdown-item" href="#"> Clarke, Markley</a>
                                        <a class="dropdown-item" href="#"> Clarke, Rohan &amp; Adrian</a>
                                        <a class="dropdown-item" href="#"> Clarke , Rohan</a>
                                        <a class="dropdown-item" href="#"> Cox, Audrey</a>
                                        <a class="dropdown-item" href="#"> Cox Cadogan, Carmen</a>
                                        <a class="dropdown-item" href="#"> Crawford, Jason</a>
                                        <a class="dropdown-item" href="#"> Cumberbatch, Ken</a>
                                        <a class="dropdown-item" href="#"> Cumberbatch, Virginia</a>
                                        <a class="dropdown-item" href="#"> Cyrus, Marcia</a>
                                        <a class="dropdown-item" href="#"> Davies, Duane</a>
                                        <a class="dropdown-item" href="#"> Davis, Wendy</a>
                                        <a class="dropdown-item" href="#"> DeAbreu, Carlma</a>
                                        <a class="dropdown-item" href="#"> Depeiza, Anthony</a>
                                        <a class="dropdown-item" href="#"> Dorson, Eleen</a>
                                        <a class="dropdown-item" href="#"> doughin, shannon &amp; Johanan</a>
                                        <a class="dropdown-item" href="#"> Douglin, Anderson</a>
                                        <a class="dropdown-item" href="#"> Drakes , Rodney</a>
                                        <a class="dropdown-item" href="#"> Durant, Annette</a>
                                        <a class="dropdown-item" href="#"> Elgin, Degracia</a>
                                        <a class="dropdown-item" href="#"> Ellis, Owen &amp; Heather </a>
                                        <a class="dropdown-item" href="#"> Estwick, Dona</a>
                                        <a class="dropdown-item" href="#"> Farnum, Shirley</a>
                                        <a class="dropdown-item" href="#"> Federicks, Alice</a>
                                        <a class="dropdown-item" href="#"> Field, Wilfred</a>
                                        <a class="dropdown-item" href="#"> Forde, Frank</a>
                                        <a class="dropdown-item" href="#"> Forde, Kim</a>
                                        <a class="dropdown-item" href="#"> Forde, Moreen</a>
                                        <a class="dropdown-item" href="#"> Forde, Waveney</a>
                                        <a class="dropdown-item" href="#"> Forte, Sandy</a>
                                        <a class="dropdown-item" href="#"> Franklin, Dale</a>
                                        <a class="dropdown-item" href="#"> Gabriel, Esther</a>
                                        <a class="dropdown-item" href="#"> Gaskin, Damien</a>
                                        <a class="dropdown-item" href="#"> Gibbs, Deiderie</a>
                                        <a class="dropdown-item" href="#"> Gibbs, Leroy</a>
                                        <a class="dropdown-item" href="#"> Gibbs, Peter</a>
                                        <a class="dropdown-item" href="#"> Gibson, Patricia</a>
                                        <a class="dropdown-item" href="#"> Gilkes, Philip</a>
                                        <a class="dropdown-item" href="#"> Gill, Mona</a>
                                        <a class="dropdown-item" href="#"> Goodman, Cedric</a>
                                        <a class="dropdown-item" href="#"> Goodman, Nigel</a>
                                        <a class="dropdown-item" href="#"> Goring Gill, Rhonda</a>
                                        <a class="dropdown-item" href="#"> Grant, Basil </a>
                                        <a class="dropdown-item" href="#"> Greaves, Curtis </a>
                                        <a class="dropdown-item" href="#"> Greaves, Sandra</a>
                                        <a class="dropdown-item" href="#"> Green, Tina</a>
                                        <a class="dropdown-item" href="#"> Greenidge, Patricia</a>
                                        <a class="dropdown-item" href="#"> Griffith, Janet &amp; Terry</a>
                                        <a class="dropdown-item" href="#"> Griffith, Kenneth</a>
                                        <a class="dropdown-item" href="#"> Griffith, Marlene</a>
                                        <a class="dropdown-item" href="#"> Griffith Moore, Velda</a>
                                        <a class="dropdown-item" href="#"> Hackett, Christopher</a>
                                        <a class="dropdown-item" href="#"> Hackett, Claudia</a>
                                        <a class="dropdown-item" href="#"> Hall, Mccartney</a>
                                        <a class="dropdown-item" href="#"> Harding, Yvette</a>
                                        <a class="dropdown-item" href="#"> Harewood, Wayne</a>
                                        <a class="dropdown-item" href="#"> Harper, Cecile</a>
                                        <a class="dropdown-item" href="#"> Harper, Rosamond</a>
                                        <a class="dropdown-item" href="#"> Harrison, Carol</a>
                                        <a class="dropdown-item" href="#"> Haynes, Joann</a>
                                        <a class="dropdown-item" href="#"> Headley Gay , Maureen</a>
                                        <a class="dropdown-item" href="#"> Henry, Judy</a>
                                        <a class="dropdown-item" href="#"> Herbert, Richard</a>
                                        <a class="dropdown-item" href="#"> Hill, Anna</a>
                                        <a class="dropdown-item" href="#"> Hinds, Charmaine</a>
                                        <a class="dropdown-item" href="#"> Hinds, James</a>
                                        <a class="dropdown-item" href="#"> Hinds, Marina</a>
                                        <a class="dropdown-item" href="#"> Holder, Lisa</a>
                                        <a class="dropdown-item" href="#"> Holder, Majorie</a>
                                        <a class="dropdown-item" href="#"> Holder, Remi</a>
                                        <a class="dropdown-item" href="#"> Hope, Brian</a>
                                        <a class="dropdown-item" href="#"> Hoyte, Moreen</a>
                                        <a class="dropdown-item" href="#"> Hurley, Karin </a>
                                        <a class="dropdown-item" href="#"> Husbands, Cleotta</a>
                                        <a class="dropdown-item" href="#"> Hutchinson, Heidi</a>
                                        <a class="dropdown-item" href="#"> Inniss, Melanie</a>
                                        <a class="dropdown-item" href="#"> jones, kimoi</a>
                                        <a class="dropdown-item" href="#"> Jones, Marvo</a>
                                        <a class="dropdown-item" href="#"> Jones, Paulette</a>
                                        <a class="dropdown-item" href="#"> Jordan, Charles</a>
                                        <a class="dropdown-item" href="#"> Jordan, Marlene</a>
                                        <a class="dropdown-item" href="#"> King, Keisha</a>
                                        <a class="dropdown-item" href="#"> Kirton, Hyacinth</a>
                                        <a class="dropdown-item" href="#"> Kirton Weekes, Shirley</a>
                                        <a class="dropdown-item" href="#"> Knight, Nicole</a>
                                        <a class="dropdown-item" href="#"> Leacock, Carlyn</a>
                                        <a class="dropdown-item" href="#"> Leslie, Harriette</a>
                                        <a class="dropdown-item" href="#"> Lewis, Ashley</a>
                                        <a class="dropdown-item" href="#"> Lewis, Jillian</a>
                                        <a class="dropdown-item" href="#"> Lucas, Patricia</a>
                                        <a class="dropdown-item" href="#"> Martelli, Ann</a>
                                        <a class="dropdown-item" href="#"> Maxwell, Marjorie</a>
                                        <a class="dropdown-item" href="#"> McCaskie, Lorna</a>
                                        <a class="dropdown-item" href="#"> McClean, Rudolph</a>
                                        <a class="dropdown-item" href="#"> McCollin, Arthur</a>
                                        <a class="dropdown-item" href="#"> McCollin, Eleanor</a>
                                        <a class="dropdown-item" href="#"> McIntosh, Rose</a>
                                        <a class="dropdown-item" href="#"> Medford, Arletta </a>
                                        <a class="dropdown-item" href="#"> Medford, Harry </a>
                                        <a class="dropdown-item" href="#"> Miller, Suzanne</a>
                                        <a class="dropdown-item" href="#"> Mohammed, Sacha</a>
                                        <a class="dropdown-item" href="#"> Moore, Curtis</a>
                                        <a class="dropdown-item" href="#"> Morris, Vincent</a>
                                        <a class="dropdown-item" href="#"> Morris- Maynard, Sherry &amp; Ian </a>
                                        <a class="dropdown-item" href="#"> Nana, Ali</a>
                                        <a class="dropdown-item" href="#"> Norris, Anthony</a>
                                        <a class="dropdown-item" href="#"> Obidah, Jennifer </a>
                                        <a class="dropdown-item" href="#"> Odle, Mark</a>
                                        <a class="dropdown-item" href="#"> Odle, Patricia</a>
                                        <a class="dropdown-item" href="#"> Osbourne, Brenda</a>
                                        <a class="dropdown-item" href="#"> Pandor, Rukaiya</a>
                                        <a class="dropdown-item" href="#"> Patel, Habib</a>
                                        <a class="dropdown-item" href="#"> Patterson, Horatio &amp; Valesta</a>
                                        <a class="dropdown-item" href="#"> Phillips, Andrew &amp; Barbara</a>
                                        <a class="dropdown-item" href="#"> Phillips, Ralph</a>
                                        <a class="dropdown-item" href="#"> Pierre, Beverley </a>
                                        <a class="dropdown-item" href="#"> Pollard-Bostic, Sandra</a>
                                        <a class="dropdown-item" href="#"> Powlett, Marcia</a>
                                        <a class="dropdown-item" href="#"> Price, Vincent</a>
                                        <a class="dropdown-item" href="#"> Raja, Aftabaya</a>
                                        <a class="dropdown-item" href="#"> Ram, Ronald</a>
                                        <a class="dropdown-item" href="#"> Reece, Daine</a>
                                        <a class="dropdown-item" href="#"> Reid, Hartley &amp; Valerie</a>
                                        <a class="dropdown-item" href="#"> Reid, Karen</a>
                                        <a class="dropdown-item" href="#"> Reid, Merlo</a>
                                        <a class="dropdown-item" href="#"> Reveira, Lisa</a>
                                        <a class="dropdown-item" href="#"> Richardson, Magaret</a>
                                        <a class="dropdown-item" href="#"> Robinson, Janice</a>
                                        <a class="dropdown-item" href="#"> Robinson, Wayne</a>
                                        <a class="dropdown-item" href="#"> Rock, Jefferson</a>
                                        <a class="dropdown-item" href="#"> Seale, Bryan</a>
                                        <a class="dropdown-item" href="#"> Sealy, Judy</a>
                                        <a class="dropdown-item" href="#"> Sealy, Pamela</a>
                                        <a class="dropdown-item" href="#"> Sealy, Sandra</a>
                                        <a class="dropdown-item" href="#"> Sergeant, Greta</a>
                                        <a class="dropdown-item" href="#"> Shortt, Theresa</a>
                                        <a class="dropdown-item" href="#"> Simmons, Reuben &amp; Tamara</a>
                                        <a class="dropdown-item" href="#"> Skeete, Ronald and Evelyn</a>
                                        <a class="dropdown-item" href="#"> Smart, Mark &amp; Joycelyn</a>
                                        <a class="dropdown-item" href="#"> Smith , Winston</a>
                                        <a class="dropdown-item" href="#"> Snagg, Heather</a>
                                        <a class="dropdown-item" href="#"> Sobers, Natisha</a>
                                        <a class="dropdown-item" href="#"> Springer, Cynthia</a>
                                        <a class="dropdown-item" href="#"> Taitt, Julia</a>
                                        <a class="dropdown-item" href="#"> Taylor, Marcia</a>
                                        <a class="dropdown-item" href="#"> Taylor , Norman</a>
                                        <a class="dropdown-item" href="#"> Tempro, Eleanor</a>
                                        <a class="dropdown-item" href="#"> Theobalds, Patricia</a>
                                        <a class="dropdown-item" href="#">Thompson, Margo</a>
                                        <a class="dropdown-item" href="#"> Tull, Ezra</a>
                                        <a class="dropdown-item" href="#"> Warner, William</a>
                                        <a class="dropdown-item" href="#"> Watts, Turnell</a>
                                        <a class="dropdown-item" href="#"> Webster, Collen</a>
                                        <a class="dropdown-item" href="#"> Weekes , Marcia</a>
                                        <a class="dropdown-item" href="#"> Wharton, Jenille</a>
                                        <a class="dropdown-item" href="#"> White, Mr. &amp; Mrs. Clayton </a>
                                        <a class="dropdown-item" href="#"> Whittington, Marguerita &amp; Louis</a>
                                        <a class="dropdown-item" href="#"> Wiggins, Claretta</a>
                                        <a class="dropdown-item" href="#"> Wilkinson, Vernon</a>
                                        <a class="dropdown-item" href="#"> Williams, Thelma</a>
                                        <a class="dropdown-item" href="#"> Yearwood, Alicent</a>
                                        <a class="dropdown-item" href="#"> Yearwood, Errol &amp; Patricia</a>
                                    </div>
                                </div> -->

                                <input class="form-control" type="text" placeholder="Search Landlords and Places">

                                <div class="input-group-append">
                                    <button class="btn nav_btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- menu bar -->
        <aside id="menu">
           <div id="menu_button" onclick="openNav()">
                <!-- <span class="menu_obj"> &#9776;</span> --></span>
                <i class="fas fa-sliders-h"></i>
            </div>
            <div id="menu_filter">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <form role="form" method="post" action="">
                    <div class="custom-control custom-switch mt-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
                        <label class="custom-control-label" for="customCheck1">All Inclusive</label>
                    </div>

                    <!-- All Inclusive Section -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="example7">
                        <label class="custom-control-label" for="customCheck2">Internet</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" name="example6">
                        <label class="custom-control-label" for="customCheck3">Water</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" name="example6">
                        <label class="custom-control-label" for="customCheck4">Washing Machine</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheck5" name="example7">
                        <label class="custom-control-label" for="customCheck5">Gas</label>
                    </div>

                    <!-- ------------ -->


                    <!-- Optional -->

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customChecka" name="example7">
                        <label class="custom-control-label" for="customChecka">Burglar Bars</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckb" name="example7">
                        <label class="custom-control-label" for="customCheckb">Microwave</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckc" name="example7">
                        <label class="custom-control-label" for="customCheckc">Air Condition</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckd" name="example2">
                        <label class="custom-control-label" for="customCheckd">Shared</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customChecke" name="example3">
                        <label class="custom-control-label" for="customChecke">Studio</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckf" name="example8">
                        <label class="custom-control-label" for="customCheckf">Flat</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckg" name="example9">
                        <label class="custom-control-label" for="customCheckg">Apartment</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckh" name="example4">
                        <label class="custom-control-label" for="customCheckh">Fenced</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customChecki" name="example5">
                        <label class="custom-control-label" for="customChecki">Furnished</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckj" name="example5">
                        <label class="custom-control-label" for="customCheckj">Unfurnished</label>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckk" name="example6">
                        <label class="custom-control-label" for="customCheckk">Water Heater</label>
                    </div>


                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customCheckl" name="example11">
                        <label class="custom-control-label" for="customCheckl">Renting a room</label>
                    </div>

                    <!-- ------------ -->


                    <!-- Sliders -->
                    <div class="slider-container mt-2">
                        <label class="slider-label" for="distanceRange">Distance: &le; <span id="distance"></span> miles</label>
                        <input type="range" min="1" max="50" step="1" value="10" class="slider" id="distanceRange">
                    </div>

                    <div class="slider-container mt-2">
                        <label class="slider-label" for="roomsAvailableRange">Rooms Available: <span id="rooms"></span> </label>
                        <input type="range" min="1" max="20" step="1" value="5" class="slider" id="roomsAvailableRange">
                    </div>

                    <!-- Menu Filter Animation -->
                    <script>
                        function openNav() {
                            document.getElementById("menu_filter").style.width = "250px";
                            document.getElementById("menu_filter").style.paddingLeft = "20px";
                            document.body.style.marginLeft = "250px";
                            //document.body.style.zIndex = "0";
                        }

                        function closeNav() {
                            document.getElementById("menu_filter").style.width = "0";
                            document.getElementById("menu_filter").style.paddingLeft = "0";
                            document.body.style.marginLeft = "0";
                            //document.body.style.zIndex = "2";
                        }
                    </script>

                    <!-- Sliders -->
                    <script>
                        // Slider for distance
                        var distance_slider = document.getElementById("distanceRange");
                        var distance_output = document.getElementById("distance");

                        // slider for rooms
                        var room_slider = document.getElementById("roomsAvailableRange");
                        var rooms_output = document.getElementById("rooms");

                        // display value where the html element is positioned
                        distance_output.innerHTML = distance_slider.value;
                        rooms_output.innerHTML = room_slider.value;

                        // change value when slider moved
                        distance_slider.oninput = function()
                        {
                            distance_output.innerHTML = this.value;
                        }

                        // change value when slider moved
                        room_slider.oninput = function()
                        {
                            rooms_output.innerHTML = this.value;
                        }
                    </script>



                </form>
            </div>
        </aside>

        <!-- Login and Register Form Framework-->
        <div id="form-container">

            <!-- Login Button -->
            <div class="button-box">
                <div id="btn"> </div>
                <button type="button"  class="toggle-btn" name="button" onclick="login()">Login</button>
                <button type="button"  class="toggle-btn" name="button" onclick="register()"> Register</button>
            </div>

            <!-- Login Form -->
            <form id="login" class="input-group" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                <?php //if (isset($Response['status']) && !$Response['status']) : ?>

                <div class="form-group md-form mb-2">
                    <label data-error="wrong" data-success="right" for="email">Email address</label>
                    <input type="email" class="form-control validate" name="login_email" id="email" placeholder="Enter email" required>
                </div>

                <div class=" form-group md-form mb-2">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    <input type="password" class="form-control validate" id="defaultForm-pass" name="login_psswd" placeholder="Your Password" required>
                </div>

                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="Rememberpasswd" name="example1">
                    <label class="custom-control-label" for="Rememberpasswd">Remember Password</label>
                </div>
                <button type="submit" class="submit_button" name="login_button"> Submit</button>
            </form>


            <!-- Registration Form -->
            <form id="register" class="input-group" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="fname">First Name</label>
                    <input type="text" class="form-control validate" id="fname" aria-describedby="nameHelp" placeholder="Enter First Name" name="fname" required>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="lname">Last Name</label>
                    <input type="text" class="form-control validate" id="email1" aria-describedby="nameHelp" placeholder="Enter Last Name" name="lname" required>
                </div>

                <div class="mt-3">
                    <label>Select Gender</label>
                        <select name="gender" class="custom-select mb-3">
                            <option selected>Gender</option>
                            <option value="volvo">Male</option>
                            <option value="fiat">Female</option>
                            <option value="audi">Other</option>
                        </select>
                </div>

                <div class="form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="email">Email address</label>
                    <input type="email" class="form-control validate" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>

                <div class="form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="tel">Phone</label>
                    <input type="tel" class="form-control validate" id="tel" aria-describedby="emailHelp" placeholder="+1 (555) 666-7777" name="tel" required>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    <input type="password" class="form-control validate" id="defaultForm-pass" placeholder="Your Password" name="passwd" required>
                </div>

                <div class=" form-group md-form mb-1">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Retype password</label>
                    <input type="password" class="form-control validate" id="defaultForm-pass" placeholder="Your Password" name="passwd_verify" required>
                </div>

                <button type="submit" class="submit_button" name="register_button"> Submit</button>
            </form>
        </div>

        <!-- Login and Register Form  Animation-->
        <script type="text/javascript" charset="utf-8">

            // container
            var form_contain = document.getElementById('form-container');

            // Buttons
            var log = document.getElementById('login');
            var reg = document.getElementById('register');
            var btn = document.getElementById('btn');

            function register()
            {
                reg.style.left = "30px";
                log.style.left = "-440px";
                btn.style.left = "110px";
                form_contain.style.height = "850px";
                form_contain.style.width = "380px";
            }

            function login()
            {
                reg.style.left = "450px";
                log.style.left = "30px";
                btn.style.left = "0px";
                form_contain.style.height = "400px";
                form_contain.style.width = "380px";
            }
        </script>

        <!-- Menu Filter Animation -->
        <script type="text/javascript" charset="utf-8">

            var form_cont = document.getElementById('form-container');
            //var form_contain = document.getElementById('form-container');
            //var body = document.getElementsByTagName('body')
            form_cont.style.display = "none";

           function showLogin()
           {
               if (form_cont.style.display === "none")
               {
                   form_cont.style.display = "block";
                   form_cont.style.opacity = "1";
               }
               else
               {
                   form_cont.style.display = "none";
               }
           }

        </script>
<!--  -->
        <main id="apartment_display">
            <div class="container-fluid">
                <!-- row 1 -->
                <div class="row">

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic1">
                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic2">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic3">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- row 2 -->
                <div class="row">

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic1">
                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic2">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic3">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- row 3 -->
                <div class="row">

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic1">
                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic2">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="apartmentss">
                            <div class="apartments_pic apartments_pic3">

                            </div>
                            <div class="apartmentss_info">
                                <div class="apartments_addr">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                </div>
                                <div class="apartments_xinfo">
                                    <ul>
                                        <li>Mr. Lorem ipsum</li>
                                        <li>$500</li>
                                        <li>1 km</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

        <footer id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Tools</p>
                        <ul>
                            <li>Contact Agents</li>
                            <li>Mortgage Calculator</li>
                            <li>PDF Version</li>
                            <li>Email Listing</li>
                            <li>Document Library</li>
                            <li>Legal Disclaimer</li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <p>Links</p>
                        <ul>
                            <li>Cavehill Website</li>
                            <li>On Campus Accomodation</li>
                            <li>Halls Accomodation</li>
                            <li>International Office</li>
                            <li>View All Listings</li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <p>About Us</p>
                        <ul>
                            <li>Cavehill Website</li>
                            <li>On Campus Accomodation</li>
                            <li>Halls Accomodation</li>
                            <li>International Office</li>
                            <li>View All Listings</li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <p>Contact Us</p>
                        <form role="form" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control validate"  placeholder="Enter email">
                            </div>

                            <div class=" form-group text-area">
                                <textarea class="form-control validate" rows="3" maxlength="500"  placeholder=" Write Message"></textarea>
                            </div>

                            <button type="submit" id="contact_but" name="contact_button"> Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </footer>

        <div id="copy">
            <p>Copyright &#169; 2020 CHILL Off Campus Housing Powered by Gator Systems</p>
        </div>

    </body>

</html>
