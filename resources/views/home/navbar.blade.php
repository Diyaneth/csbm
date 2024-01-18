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
                <a href="{{url('courses')}}" class="nav-item nav-link active">Courses</a>
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