<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">

            <a href="index.html" class="logo">
                <img src="<?= BASE_URL; ?>/assets/img/logo-white.svg" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
            <div class="container-fluid">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="<?= BASE_URL; ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="<?= BASE_URL ?>/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4>Admin</h4>
                                            <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">My Balance</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="dark2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="<?= BASE_URL ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                Admin
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a href="<?= BASE_URL; ?>/admin/index">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/user">
                            <i class="fas fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/kamar">
                            <i class="fas fa-door-open"></i>
                            <p>Kamar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/reservasi">
                            <i class="fas fa-database"></i>
                            <p>Reservasi</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">

                <div class="page-header">
                    <h4 class="page-title">Admin</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-2 mb-4">
                    <h2 class="text-white pb-2">Welcome back, Admin!</h2>
                    <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                        I am wise, so I am changing myself.</h5>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-dark bg-primary-gradient">
                            <div class="card-body pb-0">
                                <div class="h1 fw-bold float-right">+5%</div>
                                <h2 class="mb-2">17</h2>
                                <p>Users online</p>
                                <div class="pull-in sparkline-fix chart-as-background">
                                    <div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-dark bg-secondary-gradient">
                            <div class="card-body pb-0">
                                <div class="h1 fw-bold float-right">-3%</div>
                                <h2 class="mb-2">27</h2>
                                <p>New Users</p>
                                <div class="pull-in sparkline-fix chart-as-background">
                                    <div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-dark bg-success2">
                            <div class="card-body pb-0">
                                <div class="h1 fw-bold float-right">+7%</div>
                                <h2 class="mb-2">213</h2>
                                <p>Transactions</p>
                                <div class="pull-in sparkline-fix chart-as-background">
                                    <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Full Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Email</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Full Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>shad@gmail.com</td>
                                                <td>Shad</td>
                                                <td>Decker</td>
                                                <td>Shad Decker</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>bruce@gmail.com</td>
                                                <td>Michael</td>
                                                <td>Bruce</td>
                                                <td>Michael Bruce</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>donna@gmail.com</td>
                                                <td>Donna</td>
                                                <td>Snider</td>
                                                <td>Donna Snider</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>
</div>