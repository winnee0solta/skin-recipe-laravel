<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Skin Recipe</title>

        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        />
        <link rel="stylesheet" href="{{ asset('css/v1_0_app.css') }}" />
    </head>
    <body>
        <div id="main-wrapper">
            <div class="navbar-section">
                <!-- navtop  -->
                <div
                    class="nav-top pt-1 pb-2 px-3 d-flex justify-content-between"
                >
                    <!-- email  -->
                    <div class="d-none d-md-block">example@gmail.com</div>

                    <!-- notice  -->
                    <div>Free shipping on orders of Rs.1500+</div>
                    <div>
                        <!-- auths  -->
                        <button class="btn btn-login">Login</button>
                        <button class="btn btn-register">Register</button>
                    </div>
                </div>
                <!-- navtop !ENDS -->

                <!-- nav mid  -->
                <div
                    class="nav-mid d-flex justify-content-between align-items-center"
                >
                    <!-- logo  -->
                    <div class="nav-mid__logo">
                        <!-- <img src="{{ asset('/image') }}" alt="Skin Recipe" class="img-fluid"> -->
                        <a href="/" class="">Skin Recipe</a>
                    </div>
                    <!-- search  -->
                    <div class="search-form d-none d-lg-block">
                        <form action="">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search products"
                                    aria-label="search"
                                    aria-describedby="basic-addon1"
                                />
                                <div class="input-group-append">
                                    <i class="material-icons">search</i>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- action  -->
                    <div class="nav-mid__actions">
                        <a href=""
                            ><i class="material-icons">shopping_bag</i></a
                        >
                    </div>
                </div>
                <div class="nav-mid nav-mid--mobile mt-0 pt-0">
                    <!-- search  -->
                    <div class="search-form seach-form-sm d-block d-lg-none">
                        <form action="">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search products"
                                    aria-label="search"
                                    aria-describedby="basic-addon1"
                                />
                                <div class="input-group-append">
                                    <i class="material-icons">search</i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- nav mid !ENDS -->
                <!-- nav footer  -->
                <div class="nav-foot">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Skin Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Make Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hair</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fragnance</a>
                        </li>
                    </ul>
                    <!-- <a href="" class="btn btn-link"> Home</a> -->
                </div>
                <!-- nav footer !ENDS -->
            </div>

            @yield('content')

            <!-- footer -->
            <div class="footer-section">
                <div class="container">

                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="footer-section__title">
                                <h2>Contact</h2>
                            </div>
                            <div class="footer-section__content">
                                <div>
                                    <span> Address: </span>
                                    Seestrasse 21, Zurich
                                </div>
                                <div><span> E-mail: </span> example@gmail.com</div>
                                <div><span> Phone : </span> +977 9860699854</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="footer-section__title">
                                <div class="footer-logo">
                                    <a href="/" class="">Skin Recipe</a>
                                </div>
                            </div>
                            <div class="footer-section__content">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Explicabo fugiat tempore omnis
                                    cumque laudantium, neque perspiciatis eius
                                    voluptatum magnam.
                                </p>
                                <div class="social-icons text-center">
                                    <div class="nav-link">
                                        <a class=" " href="/"
                                            ><i class="fab fa-facebook"></i
                                        ></a>
                                        <a class=" " href="/"
                                            ><i class="fab fa-instagram"></i
                                        ></a>
                                        <a class=" " href="/"
                                            ><i class="fab fa-youtube"></i
                                        ></a>
                                        <a class=" " href="/"
                                            ><i class="fab fa-twitter"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <div class="footer-section__title">
                                <h2>Links</h2>
                            </div>
                            <div class="footer-section__content">
                                <div class="footer-links">
                                    <a href="/" class="btn btn-link d-block"
                                        >Home</a
                                    >
                                    <a href="/blog" class="btn btn-link d-block"
                                        >Blog
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer-section--bottom">
                    <ul class="nav justify-content-center" >
                        <li class="nav-item">
                            <a class="nav-link " href="/">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/">Terms And condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- footer!ENDS -->
        </div>

        <script src="{{ asset('js/v1_0_app.js') }}"></script>
    </body>
</html>
