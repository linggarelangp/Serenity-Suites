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
                                            <h4><?= $_SESSION['fullname'] ?? 'None'; ?></h4>
                                            <p class="text-muted"><?= $_SESSION['email']; ?></p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">My Balance</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li> -->
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
                                <?= $_SESSION['fullname'] ?? 'None'; ?>
                                <span class="user-level"><?= $_SESSION['roleid'] === 1 ? "Admin" : "Staff"; ?></span>
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
                                    <a href="<?= BASE_URL; ?>/admin/customers">
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
                    <li class="nav-item active submenu">
                        <a data-toggle="collapse" href="#roomsconfiguration" class="collapsed" aria-expanded="true">
                            <i class="fas fa-door-open"></i>
                            <p>Rooms Configuration</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse show" id="roomsconfiguration">
                            <ul class="nav nav-collapse pb-0 mb-0">
                                <li>
                                    <a href="<?= BASE_URL; ?>/admin/rooms">
                                        <span class="sub-item">Room</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL; ?>/admin/details_room">
                                        <span class="sub-item">Details Room</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="<?= BASE_URL; ?>/admin/room_facilities">
                                        <span class="sub-item">Room Facilities</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/admin/facilities_hotel">
                            <i class="fas fa-database"></i>
                            <p>Facilities Hotel</p>
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
                            <a href="#">Room facilities</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Table Room Facilities</h4>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add_room_facilitiesModal">Add Foom Facilities</button>
                            </div>

                            <!-- Add Room Facilities Modal -->
                            <div class="modal fade" id="add_room_facilitiesModal" tabindex="-1" aria-labelledby="add_room_facilitiesModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header border-bottom-0">
                                            <h1 class="modal-title fs-5" id="add_room_facilitiesModal">Add Room Facilities</h1>
                                            <button type="button" class="border-0 bg-transparent text-white" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <form method="POST" action="<?= BASE_URL; ?>/room_facilities/addRoomFacilities">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="room_facilitiesName">Facilities Name</label>
                                                    <input type="text" class="form-control" id="room_facilitiesName" placeholder="Enter name" name="name_facility_room">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top-0">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="reset" class="btn  btn-sm btn-info">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Create At</th>
                                                <th>Update At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Create At</th>
                                                <th>Update At</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data["room_facilities"] as $room_facilities) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $room_facilities->name; ?></td>
                                                    <td><?= $room_facilities->createdAt; ?></td>
                                                    <td><?= $room_facilities->updatedAt; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#updateModalRoomFacilities<?= $room_facilities->id; ?>">Edit</button>
                                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $room_facilities->id; ?>">Delete</button>
                                                    </td>
                                                </tr>

                                                <!-- Update Modal -->
                                                <div class="modal fade" id="updateModalRoomFacilities<?= $room_facilities->id; ?>" tabindex="-1" aria-labelledby="updateModalRoomFacilities" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-dark">
                                                            <div class="modal-header border-bottom-0">
                                                                <h1 class="modal-title fs-5" id="updateModalRoomFacilities">Update Room Facilities</h1>
                                                                <button type="button" class="border-0 bg-transparent text-white" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                            </div>
                                                            <form method="POST" action="<?= BASE_URL; ?>/room_facilities/updateRoomFacilities">
                                                                <div class="modal-body">
                                                                    <div class="d-none form-group">
                                                                        <input type="text" class="form-control" id="room_facilitiesName" placeholder="Enter name" value="<?= $room_facilities->id; ?>" name="id_room_facilities">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="room_facilitiesName">Name Room Facilities</label>
                                                                        <input type="text" class="form-control" id="room_facilitiesName" placeholder="Enter name" value="<?= $room_facilities->name; ?>" name="name_facility_room">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="deleteModal<?= $room_facilities->id; ?>" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-dark">
                                                            <div class="modal-header border-bottom-0">
                                                                <h1 class="modal-title fs-5">Delete Room Facilities</h1>
                                                                <button type="button" class="border-0 bg-transparent text-white" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                            </div>
                                                            <form method="POST" action="<?= BASE_URL; ?>/room_facilities/deleteRoomFacilities">
                                                                <div class="modal-body">
                                                                    <p class="text-center">Are you sure you want to delete this Room Facilities?</p>

                                                                    <div class="d-none form-group">
                                                                        <input type="text" class="form-control" id="room_facilitiesName" placeholder="Enter name" value="<?= $room_facilities->id; ?>" name="id_room_facilities">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="room_facilitiesName">Name Room Facilities</label>
                                                                        <input type="text" class="text-white form-control-plaintext border border-1 rounded-5 px-3" id="room_facilitiesName" placeholder="Enter name" value="<?= $room_facilities->name; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-top-0">
                                                                    <button type=" button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const url = "<?= $_SERVER['REQUEST_URI']; ?>"

    const getLastUrl = url.split("/")[4]
    const alert = getLastUrl[0].toUpperCase() + getLastUrl.slice(1)

    if (alert === 'Failed') {
        Swal.fire({
            title: "Error",
            text: "Input Fields Cannot be empty!",
            icon: "error",
        }).then((result) => {
            if (result.isConfirmed) {
                redirect()
            }
        })
    }


    if (alert === 'Error') {
        Swal.fire({
            title: "Opss",
            text: `Error!`,
            icon: "error",
        }).then((result) => {
            if (result.isConfirmed) {
                redirect()
            }
        })
    }

    const method = ["Added", "Updated", "Deleted"]

    if (method.includes(alert)) {
        Swal.fire({
            title: "Success",
            text: `Data Has Been ${alert}!`,
            icon: "success",
        }).then((result) => {
            if (result.isConfirmed) {
                redirect()
            }
        })
    }

    function redirect() {
        window.location.href = "<?= BASE_URL ?>/admin/room_facilities"
    }
</script>