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
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/index">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#user" class="collapsed" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <p>User</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="user">
                            <ul class="nav nav-collapse pb-0 mb-0">
                                <li>
                                    <a href="<?= BASE_URL; ?>/admin/customers"">
                                        <span class=" sub-item">Customers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL; ?>/admin/worker">
                                        <span class="sub-item">Worker</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/room">
                            <i class="fas fa-door-open"></i>
                            <p>Room</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="<?= BASE_URL; ?>/admin/Facilities">
                            <i class="fas fa-door-open"></i>
                            <p>Room Facilities</p>
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
                            <a href="#">Room Facilities</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Table Facilities</h4>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addfacilitiesModal">Add Facilities</button>
                            </div>

                            <!-- Add Facilities Modal -->
                            <div class="modal fade" id="addfacilitiesModal" tabindex="-1" aria-labelledby="addfacilitiesModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="addfacilitiesModal">Add Facilities</h1>
                                            <button type="button" class="border-0 bg-transparent" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="facilitiesName">Name Facilities</label>
                                                    <input type="text" class="form-control" id="facilitiesName" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="CreateAt">Create At</label>
                                                    <input type="date" class="form-control" id="CreateAt" placeholder="Enter Create At">
                                                </div>
                                                <div class="form-group">
                                                    <label for="UpdateAt">Update At</label>
                                                    <input type="date" class="form-control" id="UpdateAt" placeholder="Enter Update At">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Create At</th>
                                                <th>Update At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name Facilities</th>
                                                <th>Create At</th>
                                                <th>Update At</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Standard Facilities</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Superior Facilities</td>
                                                <td>6</td>
                                                <td>6</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Deluxe Facilities</td>
                                                <td>5</td>
                                                <td>5</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editModal">Edit Facilities</h1>
                                                    <button type="button" class="border-0 bg-transparent" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="facilitiesName">Name Facilities</label>
                                                            <input type="text" class="form-control" id="facilitiesName" placeholder="Enter name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="CreateAt">Create At</label>
                                                            <input type="date" class="form-control" id="CreateAt" placeholder="Enter Create At">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="UpdateAt">Update At</label>
                                                            <input type="date" class="form-control" id="UpdateAt" placeholder="Enter Update At">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="deleteModal">Delete Facilities</h1>
                                                    <button type="button" class="border-0 bg-transparent" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this Facilities?</p>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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