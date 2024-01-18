<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diploma In English & IT</title>
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
    @include('home.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Diploma In English & IT</h1>
                    <a href="{{url('index')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('courses')}}" class="h5 text-white">Faculties</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('ICT')}}" class="h5 text-white">Programs</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Diploma In English & IT</a>
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
                        <h1 class="mb-0">Diploma In English & IT</h1>
                    </div>
                    <div class="section-title position-relative pb-3 mb-5">
                        <h4 class="mb-2">Course Information</h4>
                    </div>
                    <p class="mb-4">The Diploma in English & IT is a curriculum that combines advanced IT knowledge with English proficiency. It includes topics 
                        such as reading, writing, and oral communication, as well as basics in digital Marketing, fundamentals of Microsoft 365 applications and 
                        professional development online. Students receive hands-on experience in the ever-changing technical world as well as a deep grasp of IT 
                        applications. This comprehensive curriculum provides graduates with a well-rounded skill set, equipping them for occupations that need a 
                        combination of language and technical competence.</p>
                </div>
                <div class="col-lg-7">
                    <img class="w-100" src="home/img/ICT/englishD.png" alt="Image">
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden"> 
                        </div>
                        <div class="text-center py-4"> 
                            <h5>Program Duration: </h5>
                            <h4 class="text-primary">12 months (1 Year)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden"> 
                        </div>
                        <div class="text-center py-4"> 
                            <h5>Mode of Learning: </h5>
                            <h4 class="text-primary">Physical / Hybrid</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden"> 
                        </div>
                        <div class="text-center py-4"> 
                            <h5>Intake(s): </h5>
                            <h4 class="text-primary">February,  May</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden"> 
                        </div>
                        <div class="text-center py-4"> 
                            <h5>Location of Lectures:</h5>
                            <h4 class="text-primary">Nugegoda, Malabe, Dehiwala</h4>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <div class="ps-4">
                    <h5 class="mb-2">Call to ask any question</h5>
                    <h4 class="text-primary mb-0">+94 112 667 678</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>