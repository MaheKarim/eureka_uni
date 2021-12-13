<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.inc.style')
    <title>City University </title>
</head>
<body>

{{--<div class="preloader">--}}
{{--    <div class="lds-ripple">--}}
{{--        <div class="pl-flip-1 pl-flip-2"></div>--}}
{{--    </div>--}}
{{--</div>--}}


<header class="header-area">
    @include('frontend.inc.header')
</header>


<section class="banner-area bg-2 banner-area-style-two jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="video-banner">
            <img src="{{ asset('/') }}front-assets/images/banner/video-img.png" alt="Image">
            <div class="video-button">
                <a href="https://youtu.be/NpWvMoizhqE" class="popup-youtube video-btn">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
            <div class="shape-1">
                <img src="{{ asset('/') }}front-assets/images/banner/banner-shape.png" alt="Image">
            </div>
        </div>
    </div>
</section>


<section class="study-area study-area-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Browse courses by study area</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna</p>
        </div>
        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="{{ asset('/') }}front-assets/images/study/study-1.jpg" alt="Image">
                    </a>
                    <div class="single-study-content">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href="study-online.html">Business and finance</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et
                            dolore.</p>
                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="{{ asset('/') }}front-assets/images/study/study-2.jpg" alt="Image">
                    </a>
                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="study-online.html">IT and data science</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et
                            dolore.</p>
                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="{{ asset('/') }}front-assets/images/study/study-3.jpg" alt="Image">
                    </a>
                    <div class="single-study-content">
                        <i class="flaticon-compliant"></i>
                        <h3>
                            <a href="study-online.html">Law and criminology</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et
                            dolore.</p>
                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="{{ asset('/') }}front-assets/images/study/study-4.jpg" alt="Image">
                    </a>
                    <div class="single-study-content">
                        <i class="flaticon-health"></i>
                        <h3>
                            <a href="study-online.html">Health and medicine</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et
                            dolore.</p>
                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-5.jpg" alt="Image">
                    </a>
                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="study-online.html">Business and finance</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et
                            dolore.</p>
                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-area bg-color-f8fafb ptb-100">
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
                    <h2>Our education system inspires the next generation</h2>
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


<section class="simple-steps-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Halls</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna</p>
        </div>
        <div class="row">
            @foreach($halls as $hall)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-search"></i>
                        <h3>{{ data_get($hall, "name") }}</h3>
                        <p>{{ data_get($hall, "description") }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="our-campus-information-area pb-100">
    <div class="container">
        <div class="our-campus-bg our-campus-bg-style">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="campus-content mr-15">
                        <span>Our campus information</span>
                        <h2>We are proud that more than 50 students from different nationalities study on our
                            campus</h2>
                        <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a
                            pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in
                            ipsum id orci porta dapibus. Proin eget tortor risus.</p>
                        <a href="campus-information.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="campus-img-2 ml-15">
                        <img src="{{ asset('/') }}front-assets/images/campus-img-2.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="events-area events-area-style-two pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="events-timer mr-15">
                    <div class="event-img">
                        <img src="{{ asset('/') }}front-assets/images/event-img.jpg" alt="Image">
                    </div>
                    <span>Next Event</span>
                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>
                    <a href="application.html" class="default-btn">
                        Book now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="events-content ml-15">
                    <span>Events</span>
                    <h2>Upcoming events</h2>
                    <ul class="events-list">
                        <li>
                            <div class="events-date">
                                <span class="mb-2">01 May</span>
                                <span>2021</span>
                            </div>
                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    Universities admission conference 2021
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                        <li>
                            <div class="events-date">
                                <span class="mb-2">02 May</span>
                                <span>2021</span>
                            </div>
                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    History and culture open day conference 2021
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                        <li>
                            <div class="events-date">
                                <span class="mb-2">03 May</span>
                                <span>2021</span>
                            </div>
                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    Undergraduate and postgraduate open days 2021
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                    </ul>
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
                <img src="{{ asset('/') }}front-assets/images/counter-shape-1.png" alt="Image">
            </div>
            <div class="shape counter-shape-2">
                <img src="{{ asset('/') }}front-assets/images/counter-shape-2.png" alt="Image">
            </div>
        </div>
    </div>
</section>


<section class="admission-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="admission-img mr-15">
                    <img src="{{ asset('/') }}front-assets/images/admission-img.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="admission-content ml-15">
                    <span>Admission information</span>
                    <h2>All types of university admission information can be found here</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                        nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci
                        porta dapibus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit
                        amet ligula.</p>
                    <a href="admissions.html" class="default-btn">
                        Overview
                        <i class="ri-arrow-right-line"></i>
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
                            <span>MCA, PhD</span>
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
                            <span>PhD, Medical Sciences</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="application-submit-area">
    <div class="container">
        <div class="application-submit-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="application-submit-content">
                        <h2>Are you ready for your next journey with us?</h2>
                        <a href="application.html" class="default-btn">
                            Application form
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="application-submit-img">
                        <img src="{{ asset('/') }}front-assets/images/application-submit-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Academic’s news</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt laboredolore
                magna suspendisse ultrices gravida.</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="{{ asset('/') }}front-assets/images/blog/blog-1.jpg" alt="Image">
                        <span>Academics</span>
                    </a>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>26 March, 2021</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">
                                How I applying to university
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum
                            nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="{{ asset('/') }}front-assets/images/blog/blog-2.jpg" alt="Image">
                        <span>Academics</span>
                    </a>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>28 March, 2021</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">
                                What and where choosing to study
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum
                            nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="{{ asset('/') }}front-assets/images/blog/blog-3.jpg" alt="Image">
                        <span>Academics</span>
                    </a>
                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>29 March, 2021</span>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">
                                A day in the life of a student
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum
                            nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
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
