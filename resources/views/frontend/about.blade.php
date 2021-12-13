<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.inc.style')
    <title>City - University </title>
</head>
<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="pl-flip-1 pl-flip-2"></div>
    </div>
</div>


<header class="header-area">
    @include('frontend.inc.header')
</header>




<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>
            <ul>
                <li>
                    <a href="{{ url('/homepage') }}">
                        Home
                    </a>
                </li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>


<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-img-two mr-15">
                    <img src="{{ asset('/') }}front-assets/images/about-img-2.jpg" alt="Image">
                    <div class="about-shape">
                        <img src="{{ asset('/') }}front-assets/images/about-shape.png" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content ml-15">
                    <span>About our university</span>
                    <h2>Our education system inspires the next generation.</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                        nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci
                        porta dapibus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit
                        amet ligula.</p>
                    <a href="about.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="counter-area bg-color-f8fafb pt-100 pb-70">
    <div class="container">
        <div class="counter-bg">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-graduated"></i>
                        <h2>
                            <span class="odometer" data-count="4517">00</span>
                        </h2>
                        <h4>Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-teacher"></i>
                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="640">00</span>
                            </h2>
                            <h4>Teachers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-book-1"></i>
                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="54">00</span>
                            </h2>
                            <h4>Subjects</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-graduation-cap"></i>
                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="269">00</span>
                            </h2>
                            <h4>Degrees</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape counter-shape-1">
                <img src="assets/images/counter-shape-1.png" alt="Image">
            </div>
            <div class="shape counter-shape-2">
                <img src="assets/images/counter-shape-2.png" alt="Image">
            </div>
        </div>
    </div>
</section>


<section class="our-campus-information-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7">
                <div class="campus-img">
                    <img src="{{ asset('/') }}front-assets/images/campus-img.jpg" alt="Image">
                </div>
            </div>
            <div class="col-xl-5">
                <div class="campus-content">
                    <span>Our campus information</span>
                    <h2>We are proud that more than 50 students from different nationalities study on our campus</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                        nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci
                        porta dapibus. Proin eget tortor risus.</p>
                    <a href="campus-information.html" class="read-more">
                        Find out more
                        <span class="ri-arrow-right-line"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-area team-area-three pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our professors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('/') }}front-assets/images/team/team-1.jpg" alt="Image">
                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-name">
                            <h3>DAndrew M. Nichols</h3>
                            <span>MCA, PHD</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('/') }}front-assets/images/team/team-2.jpg" alt="Image">
                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-name">
                            <h3>Chandra Ferrante</h3>
                            <span>Assistant Professor</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('/') }}front-assets/images/team/team-3.jpg" alt="Image">
                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-name">
                            <h3>William Johnston</h3>
                            <span>PHD, Medical Sciences</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="campus-experience-area-style pb-100">
    <div class="container">
        <div class="campus-experience-bg ptb-100">
            <div class="campus-experience-slider owl-carousel owl-theme">
                <div class="single-campus-experience">
                    <span>Admission information</span>
                    <h3>The campus experience</h3>
                    <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor
                        volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna
                        justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere
                        blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>
                    <a href="campus-experience.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="single-campus-experience">
                    <span>Admission information</span>
                    <h3>The campus experience about</h3>
                    <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor
                        volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna
                        justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere
                        blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>
                    <a href="campus-experience.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.inc.footer')

<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>

        @include('frontend.inc.js')
</body>

</html>
