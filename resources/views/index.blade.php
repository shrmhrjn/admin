<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="backend/src/img/brand/a.png" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('backend/src/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/src/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
    /* Fixed sidenav, full height */
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <header class="app-header navbar">
        <a class="navbar-brand" href="{{route('index')}}">
            <img class="navbar-brand-full" src="{{asset('backend/src/img/brand/a.png')}}" width="50" height="50"
                alt="adminlogo">
            <img class="navbar-brand-full" src="{{asset('backend/src/img/brand/admin.png')}}" width="100" height="50"
                alt="admin">
        </a>
        <button class=" navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="img-avatar" src="{{asset('backend/src/img/avatars/shreeya.jpg')}}" alt="AdminShreeya">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-bell-o"></i> Updates
                        <span class="badge badge-info">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-envelope-o"></i> Messages
                        <span class="badge badge-success">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-tasks"></i> Tasks
                        <span class="badge badge-danger">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-comments"></i> Comments
                        <span class="badge badge-warning">42</span>
                    </a>
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-usd"></i> Payments
                        <span class="badge badge-secondary">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-file"></i> Projects
                        <span class="badge badge-primary">42</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">

            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="img-avatar" src="{{asset('backend/src/img/slide.png')}}" alt="slider"
                                width="200" height="50">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Sliders</strong>
                            </div>
                            <a class="dropdown-item" href="{{route('slider.index')}}">
                                <i class="fa fa-bell-o"></i> Index
                            </a>
                            <a class="dropdown-item" href="{{route('slider.create')}}">
                                <i class="fa fa-envelope-o"></i> Create
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks"></i> Edit
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="img-avatar" src="{{asset('backend/src/img/service.jpeg')}}" alt="service"
                                width="200" height="100">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Services</strong>
                            </div>
                            <a class="dropdown-item" href="{{route('service.index')}}">
                                <i class="fa fa-bell-o"></i> Index
                            </a>
                            <a class="dropdown-item" href="{{route('service.create')}}">
                                <i class="fa fa-envelope-o"></i> Create
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks"></i> Edit
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="img-avatar" src="{{asset('backend/src/img/testimonial.jpeg')}}"
                                alt="testimonial" width="200" height="100">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Testimonial</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-bell-o"></i> Index
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-envelope-o"></i> Create
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks"></i> Edit
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="img-avatar" src="{{asset('backend/src/img/team.jpeg')}}" alt="team" width="200"
                                height="100">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Team</strong>
                            </div>
                            <a class="dropdown-item" href="{{route('team.index')}}">
                                <i class="fa fa-bell-o"></i> Index
                            </a>
                            <a class="dropdown-item" href="{{route('team.create')}}">
                                <i class="fa fa-envelope-o"></i> Create
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks"></i> Edit
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="img-avatar" src="{{asset('backend/src/img/clientss.png')}}" alt="client"
                                width="200" height="100">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Clients</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-bell"></i> Index
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-envelope-o"></i> Create
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks"></i> Edit
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="main">
            @yield('content')
        </main>
    </div>

    <!-- necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js">
    </script>
    <script src="{{asset('backend/src/js/main.js')}}"></script>
</body>

</html>