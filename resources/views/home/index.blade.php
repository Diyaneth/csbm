<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Colombo School Of Business Management</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/csbmcampus?igsh=MWtnY3E3Njg1bXVhMg=="><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UC0BoEnF8uL15yBkATT5Qe2Q"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
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
                <a href="{{url('index')}}" class="nav-item nav-link active">Home</a>
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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
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

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="home/img/_R226803.jpg" alt="Image">
                
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <!--<h5 class="text-white text-uppercase mb-3 animated slideInDown">NURTURING A FUTURE OF GLOBAL LEADERS</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Knowledge Itself Is Power</h1>
                        <a href="courses.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Courses</a>
                        <a href="contact.html" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>-->
                        <img class="img-fluid" src="home/img/CSBM Campus Logo White.png" alt="">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="w-100" src="home/img/_R2S0031.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Be Inspired</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Be Transformed</h1>
                        <a href="{{url('courses')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Courses</a>
                        <a href="{{url('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->

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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Faculties</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">5</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Programs</h5>
                            <h1 class="mb-0" data-toggle="counter-up">30</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Locations</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">3</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">CSBM Campus</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Academic Exellence</h4>
                            <p class="mb-0">We promote academic success as a result of innovative programs, highly experienced faculty members, cutting-edge technology, and a thriving learning environment.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Career Outlook</h4>
                            <p class="mb-0">We prepare students for a promising career outlook with industry-aligned programs, hands-on experiences, mentorship, 
                                and a strong network, empowering graduates to excel in today's competitive job market</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="home/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Strongly Affiliated</h4>
                            <p class="mb-0">We are proudly affiliated with industry leaders and educational partners, ensuring a transformative and impactful 
                                educational experience</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Global Perspectives</h4>
                            <p class="mb-0">We promote education through diverse communities, international partnerships, and experiential learning, preparing 
                                students for an interconnected world, fostering cultural awareness and adaptability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Courses Start -->
    @include('home.course')
    <!-- Courses end -->


    

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonials</h5>
                <h1 class="mb-0">What Our Clients Say About Our Corporate Training Programs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/dulith.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dulith Herath</h4>
                            <small class="text-uppercase">Founder & chairmen Kapruka</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Star employee at KAPRUKA seeking a professional business qualification I recommended CSBM"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/wegapitiya.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">W.K.H Wegapitiya</h4>
                            <small class="text-uppercase">chairmen Of Lauges Group</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "I recommend CSBM to anyone who wishes to develop themselves as I am sure they will provide the much needed leadership outlook to the budding coporate leaders" 
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/simon.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Simon Wills</h4>
                            <small class="text-uppercase">Former High-performance Manager Sri Lanka Cricket</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "CSBM did an amazing job with our under 19 cricket team taking them on a life skill development program"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/khan.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">I.M Khan</h4>
                            <small class="text-uppercase">Group General Manager Sales, Ceylon Busicutes at the CBL DLM Convocation</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "CSBM is the best business school of Sri Lanka.They did a wonderful job in training our sales vertical.Thanks you CSBM"
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    


    <!-- locations Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Locations Of</h5>
                <h1 class="mb-0">CSBM Campus</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.787603598186!2d79.86913681519165!3d6.915978520393848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259738891b71d%3A0x9e83c9da6e9475d2!2sColombo%20School%20of%20Business%20%26%20Management!5e0!3m2!1sen!2slk!4v1617094351491!5m2!1sen!2slk"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Colombo-Ward Place</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Colombo-Ward Place</h4>
                            <p>No. 65/5, Ward Place, Colombo 07, Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.327845989631!2d79.861462773977!3d6.851247919269983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b875bc76799%3A0xe116e8c2dc153f50!2sMSTI%20Maritime%20Academy!5e0!3m2!1sen!2slk!4v1704778043541!5m2!1sen!2slk"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Dehiwala</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Dehiwala</h4>
                            <p>32 Station Road, Dehiwala-Mount Lavinia 10350</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1795386044914!2d79.88548767397711!3d6.869078219053105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a451b9e4533%3A0x1806e5379e3b8dd!2sCINEC%20Metro%20Campus!5e0!3m2!1sen!2slk!4v1704778197805!5m2!1sen!2slk"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Nugegoda</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Nugegoda</h4>
                            <p>VV9Q+J6G, දකුණු ද එස් ජයසිංහ මාවත, Nugegoda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- locations end -->


    <!-- Affiliations Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our</h5>
            <h1 class="mb-0">Affiliations</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="home/img/logos/CINEC.png" alt="">
                    <img src="home/img/logos/KIIT.png" alt="">
                    <img src="home/img/logos/NCE.png" alt="">
                    <img src="home/img/logos/NIOE.png" alt="">
                    <img src="home/img/logos/PEARSON.png" alt="">
                    <img src="home/img/logos/QUALIFI.png" alt="">
                    <img src="home/img/logos/SRL.png" alt="">
                    <img src="home/img/logos/TVEC.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Affiliations End -->
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>