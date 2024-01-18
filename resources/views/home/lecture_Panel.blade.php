<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lecture Panel</title>
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
                    <h1 class="display-4 text-white animated zoomIn">Lecture Panel</h1>
                    <a href="{{url('index')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Lecture Panel</a>
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
                <h1 class="mb-0">Faculty Members</h1>
            </div>
            <div class="row g-5">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/18.jpg" alt="">
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
                                <img class="img-fluid" src="home/img/lecturers/21.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Prof. Gamini de Alwis</h5>
                            <small>
                                BBA (Sp) (Vidyodaya), MBA (PIM) (SJP), Postgraduate Dip. Urban Planning (Moratuwa), M.Sc. in Applied Psychology (Col.)<br>
                                <b>Senior Lecturer<br></b>
                                University of Colombo
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
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/7.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Jeewantha Perera</h5>
                            <small>
                                Masters in Maritime Law and Policy (UoW); Masters in Management
                                (Defence Studies) (KDU); PGDip in Peace Studies and Conflict
                                Resolution (Colombo); Diploma in Con-flict resolution (UPEACE)
                                Character with a rare blend of military, academic and administrative
                                competencies, Maritime Professional
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/20.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Isuru Manawadu</h5>
                            <small>
                                Ph.D. in Accounting (University of Malaya); B.Sc. (Hons) in Accounting (Sp); M.Phil (Ma¬laysia); USJP; FCA; CPFA (UK); MAAT.<br><b>Senior Lecturer</b><br>
                                Department of Accounting, Faculty of Management Studies and Commerce, Uni-versity of Sri Jayewardanepura, Sri Lanka
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/19.jpg" alt="">
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
                                <img class="img-fluid" src="home/img/lecturers/8.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Kalharie N. Pitigala</h5>
                            <small>
                                PhD in Community Health Psychology (Colombo); MSc. Clinical and Health Psychology (University of West London); Master in Business 
                                (Colombo); B.Sc. in Psychology (USA); Postgraduate Certificate in Understanding Criminal Behaviour (JIBS, India)<br>
                                Child Adolescent and Counseling Psychologist at Asiri Medical Hospitals
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/13.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Sajith Chanuka Premathilaka</h5>
                            <small>
                                Ph.D. in Business Administration (Kelaniya); MBA. in Busi¬ness Administration (Franklin Univer¬sity); BBA. (Northwood University).
                                <br><b>University Lecturer</b>
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Dr. Charitha Jayasingha</h5>
                            <small>
                                DBA DM(USA); MBA(UK);
                                Chartered Marketer(UK);  Practicing Marketer (SL Certified Professional Marketer Asia); PGDipM(SL); MSLIM; MCIM.
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/22.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pradeep Alexander</h5>
                            <small>
                                MBA (Finance)UsJ, MA in Fin. Economics UoC, MSc. in Project Mgt. AuU Malaysia, B.Com. Sp. Acc. Hons. UsJ, ICMA, CILT, CA-Inter, ACCA-Final
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/14.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Jinasiri Dadallage</h5>
                            <small>
                                M.Sc Human Resources Develop-ment (UK); Bachelor of Education (Colombo); Dip in Computerized ac-counting (Canada)
                                Former Secretary of
                                Ministry of Public Administration
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/23.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. K. Gamage</h5>
                            <small>
                                M.A (USJP), PGD (USJP), BA in Writership & Communications (UOC)
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/12.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Lasantha Amarakoon</h5>
                            <small>
                                Master of Business Studies (Colombo); B. Com MKT Mgt (Special) (SJP); MCIM (UK). 
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/11.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Kithsiri Jayawardana</h5>
                            <small>
                                MBA Marketing Management (SJP); BSc (Special) Business Administration (SJP).<br>
                                <b>Sales lead</b><br>
                                IGC Consultant PVT Limited
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/15.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Mahesh Ranawaka Arachchi</h5>
                            <small>
                                MBA in taxation (PIM. Sjp); B. B.Mgt. (Special) in Accountacy (Kelaniya). 
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/9.jpg" alt="">
                            </div>
                            <h5 class="mb-0">SDIG. Sajeewa Medawatta</h5>
                            <small>
                                MA in Criminology & Criminal Justice (SJP); PGD in Criminology & Criminal Justice (SJP) ; B.A. Special Degree in Criminology & 
                                Criminal Justice (SJP).
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/5.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Dinesh Kumara Withanage</h5>
                            <small>
                                MBA Finance; AIPFM; ACMA (UK); CGMA; B.Sc Business Administration (UoJ). 
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/10.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ms. Nilani Aluthge</h5>
                            <small>
                                Master of Arts (Sociology) (colombo) ; Master of Sociology (UoJ) ; master of Budhist counselling (Reading) Kelaniya; B.A (Sociology) (colombo) 
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Suranga Tennakoon</h5>
                            <small>
                                Bacherlor of science(Hons) in Hospitality Management (Lincoln University Collage); Diploma In Travel, Tourism, Economics and Hotel management (DTTEHM) ; postgraduate Diploma in Marketing of Sri Lanka Institute of Marketing (SLIM)
                                <br><b>Managing Director – </b>Sustainable leadership Management (Pvt) Ltd 
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Dilan Wijegoonawardena</h5>
                            <small>
                                Master of Business Administration (SJP); Diploma in International Trade from (IBSL).
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/24.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ms. Seroshi D. Nandasiri</h5>
                            <small>
                                MSc. Marketing (University of Hertfordshire UK); BSc. Marketing Management (SJP); Strategic Management Programme(NUS); 
                                Executive Education(NUS); CIMA Passed Finalist, Chartered Institute of Management Accountants, UK; ACIM, Chartered 
                                Institute of Marketing, UK; General Certificate Course in Diplomacy and International Relations (BIDTI).
                                <br><b>Founder and Chair of the Women's International Foundation (WIF)</b>
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/16.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Maheesha Abeythunga</h5>
                            <small>
                                M.A in Linguistics UoK, MA in Gender and Women's studies UoC,BA in Teaching English as a Second Language(TESL) UoK,Higher Diploma in 
                                International Relations
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ms. Sankhala Sooriyaarachchige</h5>
                            <small>
                                BA HONS in French Language and Literature (Kelaniya).
                            </small>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/lecturers/6.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mr. Vidura Chathuranga</h5>
                            <small>
                                Certified Business Accountant (CA Sri Lanka, Membership: CBA2259); Post Graduate Diploma (NSBM Green University). 
                            </small>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Directors End -->
    
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>