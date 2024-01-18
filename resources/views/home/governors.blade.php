<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Board Of Governors</title>
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
    @include('home.navbar_campus')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Board Of Governors</h1>
                    <a href="{{url('index')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Board Of Governors</a>
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

    <!-- Directors Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">CSBM</h5>
                <h1 class="mb-0">Board Of Governors</h1>
            </div>
            <div class="row g-5">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (6).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Senior Prof K D Gunawardana</h5>
                            <small>
                                B.Sc. in Bus. Admin (SJP); M.B.A. (Co¬lombo); CMA (Au); FIPA (SL); PhD.(Computer Engineering Mgt). <br><b>Chairman - Board of Director CSBM<br>
                                Department of Accounting</b><br>
                                Professor of Accounting Information Systems at the Department of Accounting, University of Sri Jayewardenepura, Sri Lanka.
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (4).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Prof. Bandara Wanninayake</h5>
                            <small>
                                B.Sc. in Mkt. Mgt (Special) (SJP); MBA (Colombo); PhD (TBU- Czech Republic); Dip. M. (UK).<br><b>Faculty of Commerce and Manage¬ment Studies</b><br>
                                Professor in Marketing attached to the Department of Marketing Management University of Kelaniya.
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (1).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Isuru Manawadu</h5>
                            <small>
                                Ph.D. in Accounting (University of Malaya); B.Sc. (Hons) in Accounting (Sp); M.Phil (Ma¬laysia); USJP; FCA; CPFA (UK); MAAT.<br><b>Senior Lecturer</b><br>
                                Department of Accounting, Faculty of Management Studies and Commerce, Uni-versity of Sri Jayewardanepura, Sri Lanka
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (5).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Pushpika Janadheera</h5>
                            <small>
                                MBA (SJP); BSc (SJP); CIMA; CA.
                                Managing Director at Dipped Products PLC
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (2).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Jagath Ranasinghe</h5>
                            <small>
                                Masters in Maritime Law and Policy (UoW); Masters in Management (Defence Studies) (KDU); PGDip in Peace Studies and Conflict Resolution (Colombo); Diploma in Conflict resolution (UPEACE).
                                Character with a rare blend of mili-tary, academic and administrative competencies, Maritime Professional
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/governors/governors (3).jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Amitha Kumara</h5>
                            <small>BCom.(Special) (SJP); MBA in Information Technology (Moratuwa); PhD (VUW)
                                    Department of information Technology
                                    Senior Lecturer Faculty of Management Studies & Commerce,
                                    University of Sri Jayewardenepura.
                            </small>
                            
                        </div>
                    </div>
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
                                <img class="img-fluid" src="home/img/Ruwantha Cooray.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ruwantha Cooray</h5>
                            <small>Director LLB (Hons) Attorney-At-Law, Barrister-At-Law (Lincolns Inn)</small>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Directors End -->
    

    @include('home.footer')
</body>

</html>