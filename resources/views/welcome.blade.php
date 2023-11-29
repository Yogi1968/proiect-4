<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Proiect4</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <script>
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 0);
            $('a').toggleClass('black', $(this).scrollTop() > 0);
            $('a').toggleClass('display', $(this).scrollTop() > 0);
        });
    </script>


</head>


<body>


<nav class="navbar custom-navbar sticky-top navbar-expand-lg navbar-dark bg-light ">
    <div class="container">
        <a class="navbar-brand " href="#" style="font-weight: 700">
            <img src="imag4/icon-t-alt.png" alt="" width="40" height="40" class="d-inline-block align-text-top "
                 style="color: black; margin-right: 10px">
            <span class="ico" style="color: #2ac7b4">ICO</span> <p class="cripto">CRYPTO</p>
        </a>

        <div class="container -fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Azalea Dark<span class="indici">V1.6</span></a></li>
                                    <li><a class="dropdown-item" href="#">Azalea Multi<span class="indici">V1.6</span></a></li>
                                    <li><a class="dropdown-item" href="#">Gentian Dark<span class="indici">V1.5</span></a></li>
                                    <li><a class="dropdown-item" href="#">Gentian Pro<span class="indici">V1.5</span></a></li>
                                    <li><a class="dropdown-item" href="#">Gentian Multi<span class="indici">V1.5</span></a></li>
                                    <li><a class="dropdown-item" href="#">Zinnia Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Salvia Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Lungwort Dark</a></li>

                                </div>
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Jasmine Light</a></li>
                                    <li><a class="dropdown-item" href="#">Lobalia Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Muscari Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Lavander Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Azure Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Azure Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Default Dark Pro</a></li>
                                    <li><a class="dropdown-item" href="#">Default Light</a></li>
                                </div>
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Default Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Linum Walle<span class="indici">V1.8</span></a></li>
                                    <li><a class="dropdown-item" href="#">Flax Wallet<span class="indici">V1.8</span></a></li>
                                    <li><a class="dropdown-item" href="#">Crocus Multi<span class="indici">V1.8</span></a></li>
                                    <li><a class="dropdown-item" href="#">Cyanuss Multi</a></li>
                                    <li><a class="dropdown-item" href="#">Blockchain<span class="new">NEW</span></a></li>
                                    <li><a class="dropdown-item" href="#">NFT Portofolio<span class="new">NEW</span></a></li>

                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu" style="min-width: 36rem">
                            <div class="row">
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">About Us - Base</a></li>
                                    <li><a class="dropdown-item" href="#">About Us - Linum</a></li>
                                    <li><a class="dropdown-item bulina" href="#">About Us - Cyanus<span class="bula"></span></a></li>
                                    <li><a class="dropdown-item " href="#">Our Teams</a></li>
                                    <li><a class="dropdown-item" href="#">Wallets-v1</a></li>
                                    <li><a class="dropdown-item" href="#">Wallets-v2</a></li>
                                    <li><a class="dropdown-item" href="#">Features</a></li>
                                    <li><a class="dropdown-item" href="#">Token Sale</a></li>
                                    <li><a class="dropdown-item" href="#">Roadmap</a></li>

                                </div>
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                    <li><a class="dropdown-item" href="#">FAQs</a></li>
                                    <li><a class="dropdown-item" href="#">Contact-Base</a></li>
                                    <li><a class="dropdown-item bulina" href="#">Contact-Cyanus<span class="bula"></span></a></li>
                                    <li><a class="dropdown-item bulina" href="#">Exchange-Cyanus<span class="bula"></span></a></li>
                                    <li><a class="dropdown-item bulina" href="#">Partner-Cyanus<span class="bula"></span></a></li>
                                    <li><a class="dropdown-item bulina" href="#">Mission-Cyanus<span class="bula"></span></a></li>
                                    <li><a class="dropdown-item bulina" href="#">Career-Cyanus<span class="bula"></span></a></li>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Blog & Misc
                        </a>
                        <ul class="dropdown-menu" style="min-width: 16rem; left: -30px" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Blog Pages<span class="next">></span></a></li>
                            <li><a class="dropdown-item" href="#">Auth Pages<span class="next">></span></a></li>
                            <li><a class="dropdown-item" href="#">Coming Soon<span class="next" style="margin-left: -16px">></span></a></li>
                            <li><a class="dropdown-item" href="#">Error 404<span class="next" style="margin-left: 15px">></span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Elements
                        </a>
                        <ul class="dropdown-menu"style="min-width: 28rem" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Alert</a></li>
                                    <li><a class="dropdown-item" href="#">Buttons</a></li>
                                    <li><a class="dropdown-item" href="#">Contents</a></li>
                                    <li><a class="dropdown-item" href="#">Tables</a></li>
                                    <li><a class="dropdown-item" href="#">Videos</a></li>
                                    <li><a class="dropdown-item" href="#">Typography</a></li>
                                    <li><a class="dropdown-item" href="#">Progress Bar</a></li>
                                    <li><a class="dropdown-item" href="#">Form Elements</a></li>
                                    <li><a class="dropdown-item" href="#">Custom Icons<span class="element">V1.6.2</span></a></li>

                                </div>
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Tabs</a></li>
                                    <li><a class="dropdown-item" href="#">Grids</a></li>
                                    <li><a class="dropdown-item" href="#">Colors</a></li>
                                    <li><a class="dropdown-item" href="#">Modals</a></li>
                                    <li><a class="dropdown-item" href="#">Charts</a></li>
                                    <li><a class="dropdown-item" href="#">Notification</a></li>
                                    <li><a class="dropdown-item" href="#">Countdown</a></li>
                                    <li><a class="dropdown-item" href="#">Accordions</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Blocks
                        </a>
                        <ul class="dropdown-menu" style="min-width: 28rem" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Navbar</a></li>
                                    <li><a class="dropdown-item" href="#">Page Header</a></li>
                                    <li><a class="dropdown-item" href="#">Footer</a></li>
                                    <li><a class="dropdown-item" href="#">Team</a></li>
                                    <li><a class="dropdown-item" href="#">Banner<span class="hot">HOT</span></a></li>
                                    <li><a class="dropdown-item" href="#">FAQs</a></li>
                                    <li><a class="dropdown-item" href="#">Subscribe</a></li>



                                </div>
                                <div class="col-sm-4 mx-auto">
                                    <li><a class="dropdown-item" href="#">Roadmaps</a></li>
                                    <li><a class="dropdown-item" href="#">Partners</a></li>
                                    <li><a class="dropdown-item" href="#">Token Info</a></li>
                                    <li><a class="dropdown-item" href="#">Features Cards</a></li>
                                    <li><a class="dropdown-item" href="#">Features Panel</a></li>
                                    <li><a class="dropdown-item" href="#">Login/Register</a></li>
                                    <li><a class="dropdown-item" href="#">Contact</a></li>

                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>

        <form class="container  justify-content-end" style="display: flex">
            <button class="btn btn-outline-success btn-sign me-2" type="button">SIGN UP</button>
            <button class="btn  btn-outline-success btn-login me-2" type="button">LOGIN</button>
        </form>
    </div>
</nav>
<div class="zona1 ">
    <div class="cover"></div>

    <div class="container" style="padding: 0px">

        <div class="row" style="padding-top:180px; z-index: 4">

            <div class="col-sm-5">
                <div class="card" style="padding-top: 50px; background-color:#5D19B4FF;border: none ">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size: 48px; font-weight: 700;color: white">Simple. Faster.
                            Secure</h1>
                        <p class="card-text" style="font-size: 20px;color: #9e77f2">Distributing finance for
                            everyone</p>
                        <p class="card-text-2" style="font-size: 17px;color: #9e77f2">Buy Bitcoin and cryptocurrecies.
                            Pay whith Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary btn-lg">WHITE PAPER</a>
                        <a href="#" class="btn btn-secondary btn-lg">ONE PAGER</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-7">
                <div id="carouselExampleCaptions" style="width: 115%" class="carousel slide d-flex"
                     data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imag4/sc-mockup.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block">
                                <img src="imag4/sc-slide-one.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imag4/sc-mockup.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block">
                                <img src="imag4/sc-slide-two.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imag4/sc-mockup.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block">
                                <img src="imag4/sc-slide-three.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row" style="position: relative;  padding-top: 100px;padding-bottom: 50px; z-index: 5">
                <div class="col-sm-6 ">
                    <a href="#" class="btn btn-primary btn-wiev  " role="button" data-bs-toggle="button"
                       aria-pressed="true"><img src="imag4/1.png"style="margin-right: 10px;align-items: center">View Details Statistic
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-arrow-right" style="margin-left: 10px" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-sm-6 d-flex zon1">
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"
                       role="button">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"
                       role="button">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"

                       role="button">
                        <i class="fa fa-google"></i>
                    </a>
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"
                       role="button">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"
                       role="button">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="btn text-black btn-sm btn-floating m-1" style="background-color: ;" href="#!"
                       role="button">
                        <i class="fa fa-github"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="zona2" style="height: 100%; background-color: #f2f4fb">
    <div class="container text-center " style="padding-top: 80px;padding-bottom: 80px">
        <div class="row" style="padding-top: 60px">
            <div class="col-sm-12">
                <h1 style="color:#5d588e">Buy popular digital currencies with ICO Crypto!</h1>
                <p>Buy through our currency partners and recive assets directly to your personal wallet </p>
            </div>

        </div>
        <div class="container d-flex justify-content-center mt-5 mb-5">
            <div class="row align-items-center">

                <div class="col-sm-4 ">
                    <img src="imag4/bitcoin-2.png" alt="...">
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <img src="./imag4/cryptocurrency+icons+++color+eth-1324449025115700782%20(1).ico" alt="...">
                </div>
                <div class="col-sm-4 ">
                    <img src="imag4/bitcoin-2.png" alt="...">
                </div>

            </div>
        </div>

        <div class="row ">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary btn-lg">PURCHASE NOW</button>
            </div>

        </div>
    </div>
</div>

<div class="zona3" style="background-color: #fdfdfe">
    <div class="container" style="padding-top: 80px; padding-bottom: 80px">
        <div class="row ">
            <div class="col-sm-6" style="position: relative">


                <div class="cerc1" style="border: #79ecd2 1px solid"></div>
                <div class="cerc2" style="background-color: #f4f6fd"></div>
                <div class="imagine">
                    <img src="imag4/sc-large-q.png" style="width: 110%">
                </div>


            </div>
            <div class="col-sm-6">
                <div class="container " style="padding: 30px 0px">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h1 class="title-zona2 mb-3" style="color:#564f9f">ICO Crypto Exchange</h1>
                            <p style="color:#564f9f"> The heart of ICO Crypto Lorem ipsum dolor sit amet consecteur
                                addipising elt sed do
                                eisurrod
                                tempor incididunt ut labore et dolore magna alqua ut enim ad minim</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Designed for everyone</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">All the tools you want</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Multiple asset classes</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-lg">TRY IT OUT</button>
                            <button type="button" class="btn btn-secondary btn-lg">EXPLORE FEATURES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="zona4" style="background-color: #fdfdfe">
    <div class="container" style="padding-top: 0px; padding-bottom: 50px">
        <div class="row ">
            <div class="col-sm-6">
                <div class="container " style="padding: 10px 0px">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h1 class="title-zona2 mb-3" style="color:#564f9f">ICO Crypto Mobile WLLET</h1>
                            <p style="color:#564f9f"> Mobile wallet meets trading app</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">All-in-one</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Scan. Convert. Pay.</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Trade as you go</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-lg">EXPLORE FEATURES</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center" style="position: relative">


                <div class="cerc3" style="border: #79ecd2 1px solid"></div>
                <div class="cerc4" style="background-color: #f4f6fd"></div>
                <div class="imagine4">
                    <img src="imag4/sc-large-q2.png" style="width: 80%">
                </div>


            </div>


        </div>
    </div>
</div>
<div class="zona5" style="background-color: #fdfdfe">
    <div class="container" style="padding-top: 80px; padding-bottom: 80px">
        <div class="row ">
            <div class="col-sm-6 d-flex align-items-center" style="position: relative">


                <div class="cerc5" style="background-color: #f4f6fd"></div>
                <div class="imagine5">
                    <img src="imag4/gfx-b.png" style="width: 100%">
                </div>


            </div>
            <div class="col-sm-6">
                <div class="container " style="padding: 30px 0px">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h1 class="title-zona2 mb-3" style="color:#564f9f">ICO Crypto Pay</h1>
                            <p style="color:#564f9f">Make life easy for you customers. Embed our platform into your
                                store for instant digital asset payments - with zero fees cashbaks</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Automatic conversion</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Simple to manage</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#826BFBFF"
                                 class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <h3 style="color: #564f9f">Quick to set up</h3>
                            <p style="color: #564f9f">Duis aute dolor in repprehendent in voluptate velt esse sullum
                                dolore eu fugiat rulla
                                pariatur</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-lg">EXPLORE FEATURES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="zona6" style="background-color: #fdfdfe; height: 100%;">
    <div class="container d-flex" style="padding:80px 80px">

        <div class="row">
            <div class="container text-center">
                <div class="row mb-5">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <h2 style="color: #564f9f">Know more about ICO Crypto</h2>
                    </div>
                </div>
            </div>
            <div class="container d-flex">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex">
                                    <img src="imag4/icon-t-alt.png." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body mb-4">
                                        <h4 class="card-title mb-3">Compliance</h4>
                                        <p class="card-text mb-4" style="padding: 0px 3px">We beleve legal compliance key to growing digital
                                            finance</p>
                                        <button type="button" class="btn btn-primary btn-lg">LEARN MORE
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 fill="currentColor"
                                                 class="bi bi-arrow-right" style="margin-left: 10px"
                                                 viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 ">
                                    <img src="imag4/icon-t2.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body mb-3">
                                        <h4 class="card-title mb-3">Funds management</h4>
                                        <p class="card-text mb-4">ICO Cryptosimplifies lorem ipsum dolor sumit in
                                            repeherendeint</p>
                                        <button type="button" class="btn btn-primary btn-lg">LEARN MORE
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 fill="currentColor"
                                                 class="bi bi-arrow-right" style="margin-left: 10px"
                                                 viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="zona7" style="background-color: #f4f6fd">
    <div class="container  text-center mb-4" style="padding-top: 50px">
        <div class="row mb-4">
            <div class="col-sm-12 ">
                <h1  style="color: #564f9f; padding-bottom: 15px" >Get started now</h1>
                <p style="color: #564f9f">Can't want to try ICO Crypto? You don't have to! Getting started is a matter
                    of minuts</p>
            </div>
        </div>

    </div>
    <div class="container d-flex justify-content-center">
        <div class="row mb-4">
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 16rem;">
                    <div class="container text-center mt-2">
                        <h1 class="cifra">1</h1>
                    </div>
                    <div class="card-body text-center">
                        <h5 style="color: #564f9f">Sign up</h5>
                        <p class="card-text" style="padding: 0px 15px; color: #564f9f">We'll guide through the
                            process</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 16rem;">
                    <div class="container text-center mt-2">
                        <h1 class="cifra">2</h1>
                    </div>
                    <div class="card-body text-center">
                        <h5 style="color: #564f9f">Try your new wallet</h5>
                        <p class="card-text" style="color: #564f9f">Buy crypto trough our partners or tranfer in
                            funds</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 16rem;">
                    <div class="container text-center mt-2">
                        <h1 class="cifra">3</h1>
                    </div>
                    <div class="card-body text-center">
                        <h5 style="color: #564f9f">Explore the ecosystem</h5>
                        <p class="card-text" style="color: #564f9f">See how easy it is to trade pay and invest with ICO
                            <C>rypto!</C>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center ">
        <div class="row " style="padding-bottom: 50px">
            <div class="col-sm-12 mb-5">
                <button type="button" class="btn btn-primary btn-lg">CREATE AN ACCOUNT</button>
            </div>
        </div>

    </div>

</div>
<div class="cutie">

    <p class="text-cutie" style="font-size: 11px;margin-top: 12px;margin-right: -30px">LOOKING FOR FUNCTIONAL<br>ICO/STO DASHBOARD?</p><br>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="imag4/promo-small.png" style="width: 60%">
    </button>


</div>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<footer style="background-color: #3b1c93;height: 100%">
    <div class="container d-flex " style="padding: 80px 0px">

        <div class="row">
            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card card-footer" style="width: 18rem;">
                    <div class="card-header">
                        HELP
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="link-footer" href="">Community</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Knowledge base</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Contact</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">ContactSecurity</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card card-footer" style="width: 18rem;">
                    <div class="card-header">
                        COMPANY
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="link-footer" href="">About</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Compliance</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Careers</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card card-footer" style="width: 18rem;">
                    <div class="card-header">
                        PRODUCTS
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="link-footer" href="">ICO Crypto Excanghe</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Founs Management</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">ICO Crypto Extension</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">ICO Crypto Mobile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card card-footer" style="width: 18rem;">
                    <div class="card-header">
                        Follow
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="link-footer" href="">Twitter</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">You Tube</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Medium</a></li>
                        <li class="list-group-item"><a class="link-footer" href="">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-sm-7  d-flex justify-content-flex-end subsol">
                <div class="agrement" style="color: white">
                    <p><a class="link-footer" href="">User Agrement</a></p>
                </div>
            </div>
            <div class="col-sm-5 d-flex justify-content-center subsol1 ">
                <div class="police" style="color: white">
                    <p><a class="link-footer" href="">Privacy Police</a></p>

                </div>
            </div>
        </div>
    </div>

    <div class="lung">
        <p style="color:red;">ursul gras</p>
        <div class="bila">
            <img src="imag4/promo-small.png" style="width: 100%">
        </div>

    </div>



</footer>

</body>
</html>
