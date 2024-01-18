<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
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
                <a href="{{url('about_us')}}" class="nav-item nav-link active">About</a>
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

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="{{url('index')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">About</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Who We Are</h1>
                    </div>
                    <p class="mb-4">Colombo School of Business and Management was established in 2015, to create a 
                        platform for Sri Lankans to enhance knowledge through an institute that has the DNA of 
                        both the Academic and Corporate worlds.
                    </p>

                    <p class="mb-4">We are registered as a certificate awarding institution under the Tertiary 
                        and Vocational Education (TVEC) Act No 50 of 1990 thus all our academic programmes are 
                        in compliance with the Sri Lanka Qualification Framework (SLQF) which includes, 
                        Certificate, Diploma and Executive Diploma programs in many disciplines.
                    </p>

                    <p class="mb-4">Our students also have the opportunity to obtain a highly recognized qualification 
                        from the United Kingdom or India, through our affiliated Degree programs, in partnership 
                        with ranked institutes such as University of Cumbria in the UK and KIIT University in India.
                    </p>

                    <p class="mb-4">Our brand is distinguished for the many customized Corporate Training programs 
                        and industry engagement events, such as the “Talk of the Month” and “An evening with a corporate leader” series.
                    </p>

                    <div class="row g-5">

                    </div>
                    <br><br>
                    
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+94 112 667 678</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="home/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Vision</h4>
                        <p class="m-0">TO CREATE WORLD-CLASS PROFESSIONALS THAT EMBODY THE TRAITS OF A “GOOD GLOBAL CITIZEN”, WHO CAN PROUDLY REPRESENT SRI LANKA 
                            IN THE WORLD STAGE.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Mission</h4>
                        <p class="m-0">TO ENHANCE KNOWLEDGE AND SKILLS OF OUR NATION BY PROVIDING EDUCATION AND TRAINING OF THE HIGHEST STANDARDS. TO FOSTER CREATIVITY AND 
                            FACILITATE A LOVE FOR LEARNING. TO CREATE A STRONG LINK BETWEEN THE CORPORATE WORLD AND THE ACADEMIC SPHERE, TO FACILITATE THE CONTINUOUS IMPROVEMENT 
                            OF SRI LANKAN BUSINESSES. TO EMPOWER THROUGH ENHANCED KNOWLEDGE.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Watchmarks</h4>
                        <p class="m-0">“IPSA SCIENTIA POTESTAS EST” <br>SIR FRANCIS BACON, 1597 TRANSLATION: “KNOWLEDGE ITSELF IS POWER”</p>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>


    <!-- Directors Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">CSBM</h5>
                <h1 class="mb-0">DIRECTORS OF CSBM CAMPUS</h1>
            </div>
            <div class="row g-5">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/Pradeep Alexander.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pradeep Alexander</h5>
                            <small>Director/CEO
                                MBA (Finance)UsJ, MA in Fin. Economics UoC, MSc. in Project Mgt. AuU Malaysia, B.Com. Sp. Acc. Hons. UsJ, ICMA, CILT, CA-Inter, ACCA-Final
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (2).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Jagath Ranasinghe</h5>
                            <small>DIRECTOR MASTERS IN MARITIME LAW AND POLICY (UOW), MASTERS IN MANAGEMENT (DEFENCE STUDIES) (KDU), PGDIP IN PEACE STUDIES AND CONFLICT RESOLUTION (COLOMBO)</small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/Ruwantha Cooray.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ruwantha Cooray</h5>
                            <small>DIRECTOR LLB (HONS) ATTORNEY-AT-LAW, BARRISTER-AT-LAW (LINCOLNS INN)</small>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Directors End -->

    <!-- Coporate management start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">CSBM</h5>
                <h1 class="mb-0">CORPORATE MANAGEMENT</h1>
            </div>
            <div class="row g-5">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/Pradeep Alexander.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pradeep Alexander</h5>
                            <small>Director/CEO
                                MBA (Finance)UsJ, MA in Fin. Economics UoC, MSc. in Project Mgt. AuU Malaysia, B.Com. Sp. Acc. Hons. UsJ, ICMA, CILT, CA-Inter, ACCA-Final
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/23.jpg" alt="">
                            </div>
                            <h5 class="mb-0">K. Gamage</h5>
                            <small>Registrar
                                M.A (USJP), PGD (USJP), BA in Writership & Communications (UOC)
                            </small>
                        </div>
                    </div>
            </div>
            <br><br>
        </div>
    </div>
    <!-- Coporate management End -->

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

    <!-- clients Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our</h5>
            <h1 class="mb-0">Clients</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                <img src="home/img/clients/CLIENTS (1).png" alt="">
                <img src="home/img/clients/CLIENTS (2).png" alt="">
                <img src="home/img/clients/CLIENTS (3).png" alt="">
                <img src="home/img/clients/CLIENTS (4).png" alt="">
                <img src="home/img/clients/CLIENTS (5).png" alt="">
                <img src="home/img/clients/CLIENTS (6).png" alt="">
                <img src="home/img/clients/CLIENTS (7).png" alt="">
                <img src="home/img/clients/CLIENTS (8).png" alt="">
                <img src="home/img/clients/CLIENTS (9).png" alt="">
                <img src="home/img/clients/CLIENTS (10).png" alt="">
                <img src="home/img/clients/CLIENTS (11).png" alt="">
                <img src="home/img/clients/CLIENTS (12).png" alt="">
                <img src="home/img/clients/CLIENTS (13).png" alt="">
                <img src="home/img/clients/CLIENTS (14).png" alt="">
                <img src="home/img/clients/CLIENTS (15).png" alt="">
                <img src="home/img/clients/CLIENTS (16).png" alt="">
                <img src="home/img/clients/CLIENTS (17).png" alt="">
                <img src="home/img/clients/CLIENTS (18).png" alt="">
                <img src="home/img/clients/CLIENTS (19).png" alt="">
                <img src="home/img/clients/CLIENTS (20).png" alt="">
                <img src="home/img/clients/CLIENTS (21).png" alt="">
                <img src="home/img/clients/CLIENTS (22).png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- clients End -->

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
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>