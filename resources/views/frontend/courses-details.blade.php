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


<div class="modal fade search-modal-area" id="exampleModalsrc">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="closer-btn">
                <i class="ri-close-line"></i>
            </button>
            <div class="modal-body">
                <form class="search-box">
                    <div class="search-input">
                        <input type="text" name="Search" placeholder="Search for..." class="form-control">
                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="page-title-area bg-21">
    <div class="container">
        <div class="page-title-content">
            <h2>Courses details</h2>
            <ul>
                <li>
                    <a href="{{ url('/homepage') }}">
                        Home
                    </a>
                </li>
                <li class="active">Courses details</li>
            </ul>
        </div>
    </div>
</div>


<section class="courses-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-default-content mr-15">
                    <h2>Business and finance</h2>
                    <div class="gap-20"></div>
                    <img src="{{ asset('') }}front-assets/images/courses-details-img.jpg" alt="Image">
                    <div class="gap-20"></div>
                    <h3>Course descriptions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. When an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has svived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus
                        commodo viverra maec enas ccumsan lacus vel facilisis.Curabitur aliquet quam id dui posuere
                        blandit. essentially unchanged. sed do eiusmod</p>
                    <div class="gap-20"></div>
                    <h3>Professional experience</h3>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor
                        risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero
                        malesuada feugiat.</p>
                    <div class="gap-20"></div>
                    <h3>Career opportunities</h3>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor
                        risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero
                        malesuada feugiat.</p>
                    <ul>
                        <li>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus</li>
                        <li>Cras ultricies ligula sed magna dictum porta.</li>
                        <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                        <li>Curabitur aliquet quam id dui posuere blandit.</li>
                        <li>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</li>
                    </ul>
                    <div class="gap-20"></div>
                    <h3>Credit and pathways</h3>
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui
                        posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed
                        magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                        Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                        nec, egestas non nisi. Vivamus suscipit tortor.</p>
                    <div class="gap-20"></div>
                    <div class="course-odf-bg">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="course-pdf">
                                    <i class="ri-file-pdf-line"></i>
                                    <h3>All courses tution fees</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="download-pdf">
                                    <a href="#" class="default-btn">
                                        Download
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-sidebar ml-15">
                    <div class="courses-single-sidebar mb-0">
                        <h3>Course information for - 2021</h3>
                        <ul>
                            <li>
                                Modes of study
                                <span>Attendance</span>
                            </li>
                            <li>
                                Duration
                                <span>3 years full-time</span>
                            </li>
                            <li>
                                Academic direction
                                <span>UK</span>
                            </li>
                            <li>
                                Method
                                <span>On Campus</span>
                            </li>
                            <li>
                                Campus
                                <span>Wales</span>
                            </li>
                            <li>
                                Booked Slot
                                <span>0</span>
                            </li>
                            <li>
                                Start dates
                                <span>1st Semester - May</span>
                            </li>
                            <li>
                                Fees (first year)
                                <span>$22,350</span>
                            </li>
                            <li>
                                Language
                                <span>English</span>
                            </li>
                            <li>
                                Seats avilable
                                <span>90</span>
                            </li>
                        </ul>
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
