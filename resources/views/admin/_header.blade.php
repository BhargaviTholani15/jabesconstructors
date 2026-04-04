<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EM Building Contractors | Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= url('favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assetsAdmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('assetsAdmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assetsAdmin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assetsAdmin/css/style.css') }}" rel="stylesheet">
    <style>
        .logo1 {
            padding: 20px;
            width: 200px;
        }

        .table {
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container-fulid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <img class="logo1" src="">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('favicon.ico')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">EM Building Contractors</h6>
                        <span>ADMIN</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('_admin/secure/dashboard') }}" id="dashboard-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{url('_admin/secure/contact') }}" id="contact-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Contact Requests</a>
                    <a href="{{url('_admin/secure/appointment') }}" id="appointment-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Book Appointments</a>
                    <a href="{{url('_admin/secure/homeimages') }}" id="home-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Home Banners</a>
                    <a href="{{url('_admin/secure/services') }}" id="services-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Services</a>
                    <a href="{{url('_admin/secure/project-items') }}" id="projects-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Projects</a>
                    <a href="{{url('_admin/secure/faqs') }}" id="faqs-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>FAQ's</a>
                    <a href="{{url('_admin/secure/blog') }}" id="blogs-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Blogs</a>
                    <a href="{{url('_admin/secure/images') }}" id="image-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Gallery Images</a>
                    <a href="{{url('_admin/secure/videos') }}" id="video-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Gallery Videos</a>
                    <a href="{{url('_admin/secure/testimonials') }}" id="testimonials-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Testimonials</a>
                    <a href="{{url('_admin/secure/team') }}" id="team-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Team Members</a>
                    <a href="{{url('_admin/secure/client-logos') }}" id="clients-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Client Logos</a>
                    <a href="{{url('_admin/secure/seo') }}" id="seo-link" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>SEO</a>
                    <a href="{{url('_admin/secure/settings') }}" id="settings-link" class="nav-item nav-link "><i class="fa fa-cog me-2"></i>Site Settings</a>
                    <a href="{{url('_admin/secure/change-password') }}" id="password-link" class="nav-item nav-link "><i class="fa fa-key me-2"></i>Change Password</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>


                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('favicon.ico')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Logout</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{url('_admin/secure/logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>