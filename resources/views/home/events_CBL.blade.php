<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events-CBL Certificate Awards Ceremony</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    @include('home.css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>No. 65/5, Ward Place, Colombo 07, Sri Lanka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 112 667 678</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@csbm.edu.lk</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/csbmsrilanka"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/csbm.edu.lk"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://lk.linkedin.com/company/csbmcampus"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/csbm.edu.lk/"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UC0BoEnF8uL15yBkATT5Qe2Q"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{url('index')}}" class="navbar-brand p-0">         
          <div>  
            <img class="img-fluid" src="home/img/CSBM Logo N.png" style="width: 100px; height: 100px;" alt="">
        </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url('index')}}" class="nav-item nav-link">Home</a>
                <a href="{{url('about_us')}}" class="nav-item nav-link">About</a>
                <a href="{{url('courses')}}" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Campus</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('governors')}}" class="dropdown-item">Board Of Governors</a>
                        <a href="{{url('directors')}}" class="dropdown-item">Directors Of CSBM</a>
                        <a href="{{url('coporate')}}" class="dropdown-item">Coporate Management</a>
                        <a href="{{url('coporate_team')}}" class="dropdown-item">Coporate Team</a>
                        <a href="{{url('lecture_Panel')}}" class="dropdown-item">Lecture Panel</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Partners</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('educational')}}" class="dropdown-item">Educational Affiliations</a>
                        <a href="{{url('clients')}}" class="dropdown-item">Our Clients</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('events_CBL')}}" class="dropdown-item"> CBL Certificate Awards Ceremony</a>
                        <a href="{{url('events_EWCL')}}" class="dropdown-item">EWCL - Dhammika Perera</a>
                        <a href="{{url('events_EWCL_2018')}}" class="dropdown-item">EWCL - 2018</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('gallery_CBL')}}" class="dropdown-item"> CBL Certificate Awards Ceremony</a>
                        <a href="{{url('gallery_EWCL')}}" class="dropdown-item">EWCL - Dhammika Perera</a>
                        <a href="{{url('gallery_EWCL_2018')}}" class="dropdown-item">EWCL - 2018</a>
                    </div>
                </div>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="{{url('register')}}" class="btn btn-secondary py-2 px-4 ms-3">Apply Now</a>
            <a href="{{url('contact')}}" class="btn btn-primary py-2 px-4 ms-3">Contact Us</a>
        </div>
    </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">CBL Certificate Awards Ceremony</h1>
                    <a href="{{url('index')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>>
                    <a href="" class="h5 text-white">CBL Certificate Awards Ceremony</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">CSBM Campus</h5>
                        <h1 class="mb-0">CBL Awarding Ceremony</h1>
                    </div>
                    <p class="mb-4">At our most recent Certificate Awarding Ceremony at the CSBM Campus, our alumni were acknowledged for their exceptional achievements and 
                        commitment to business leadership against a backdrop of academic success. Guest speakers were recognized industry leaders who presented critical insights 
                        to inspire the next generation of business trailblazers. The stage was lit by a procession of proud graduates, each receiving their certificate to the 
                        cheers of family and professors, indicating the triumphant end of their academic journey. The graduation ceremony demonstrated the significance of their 
                        accomplishments and transformation, and it has defined CSBM's legacy of developing future leaders.</p>
                </div>
                <div class="col-lg-7">
                    <img class="w-100" src="home/img/CBL/8.jpg" alt="Image"><br><br>
                    <a href="{{url('gallery_CBL')}}" class="btn btn-primary py-2 px-4 ms-3">More Pictures</a><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>