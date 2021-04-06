<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ladun/forge_template/assets/img/favicon.png') }}">

    <title>Dashboard - Uinsu Website Panel</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/lib/ionicons/css/ionicons.min.css') }}">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/forge_template/assets/css/dashforge.dashboard.css') }}">
</head>

<body class="page-profile">

    <header class="navbar navbar-header navbar-header-fixed">
        <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
            <a href="#!" class="df-logo">dash<span>forge</span></a>
        </div><!-- navbar-brand -->
        <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="#!" class="df-logo">dash<span>forge</span></a>
                <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
            </div><!-- navbar-menu-header -->

            @include('admin_panel.dashboard.menu.navbar_menu')


        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
            <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
            <div class="dropdown dropdown-message">
                <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                    <i data-feather="message-square"></i>
                    <span>5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">New Messages</div>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Socrates Itumay</strong>
                                <p>nam libero tempore cum so...</p>
                                <span>Mar 15 12:32pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Joyce Chua</strong>
                                <p>on the other hand we denounce...</p>
                                <span>Mar 13 04:16am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Althea Cabardo</strong>
                                <p>is there anyone who loves...</p>
                                <span>Mar 13 02:56am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <strong>Adrian Monino</strong>
                                <p>duis aute irure dolor in repre...</p>
                                <span>Mar 12 10:40pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <div class="dropdown-footer"><a href="">View all Messages</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-notification">
                <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                    <i data-feather="bell"></i>
                    <span>2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Notifications</div>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                <span>Mar 15 12:32pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                <span>Mar 13 04:16am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                <span>Mar 13 02:56am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-item">
                        <div class="media">
                            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                            <div class="media-body mg-l-15">
                                <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                <span>Mar 12 10:40pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </a>
                    <div class="dropdown-footer"><a href="">View all Notifications</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-profile">
                <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                    <div class="avatar avatar-sm"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                </a><!-- dropdown-link -->
                <div class="dropdown-menu dropdown-menu-right tx-13">
                    <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <h6 class="tx-semibold mg-b-5">Katherine Pechon</h6>
                    <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>

                    <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                    <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
                    <a href="" class="dropdown-item"><i data-feather="life-buoy"></i> Forum</a>
                    <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
                    <a href="" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>
                    <a href="page-signin.html" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- navbar-right -->
        <div class="navbar-search">
            <div class="navbar-search-header">
                <input type="search" class="form-control" placeholder="Type and hit enter to search...">
                <button class="btn"><i data-feather="search"></i></button>
                <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
            </div><!-- navbar-search-header -->
            <div class="navbar-search-body">
                <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
                <ul class="list-unstyled">
                    <li><a href="dashboard-one.html">modern dashboard</a></li>
                    <li><a href="app-calendar.html">calendar app</a></li>
                    <li><a href="#!">modal examples</a></li>
                    <li><a href="#!">avatar</a></li>
                </ul>

                <hr class="mg-y-30 bd-0">

                <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>

                <ul class="list-unstyled">
                    <li><a href="dashboard-one.html">cryptocurrency</a></li>
                    <li><a href="app-calendar.html">button groups</a></li>
                    <li><a href="#!">form elements</a></li>
                    <li><a href="#!l">contact app</a></li>
                </ul>
            </div><!-- navbar-search-body -->
        </div><!-- navbar-search -->
    </header><!-- navbar -->
