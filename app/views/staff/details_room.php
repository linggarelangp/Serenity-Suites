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
                                            <h4><?= $_SESSION['fullname']; ?></h4>
                                            <p class="text-muted"><?= $_SESSION['email']; ?></p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
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
                                Staff
                                <span class="user-level">Staff</span>
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
                        <a href="<?= BASE_URL; ?>/staff/index">
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
                                    <a href="<?= BASE_URL; ?>/staff/customers">
                                        <span class=" sub-item">Customers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL; ?>/staff/worker">
                                        <span class="sub-item">Worker</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active submenu">
                        <a data-toggle="collapse" href="#detailsroom" class="collapsed" aria-expanded="true">
                            <i class="fas fa-door-open"></i>
                            <p>Rooms Configuration</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse show" id="detailsroom">
                            <ul class="nav nav-collapse pb-0 mb-0">
                                <li>
                                    <a href="<?= BASE_URL; ?>/staff/rooms">
                                        <span class="sub-item">Room</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="<?= BASE_URL; ?>/staff/details_room">
                                        <span class="sub-item">Details Room</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL; ?>/staff/room_facilities">
                                        <span class="sub-item">Room Facilities</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/staff/facilities_hotel">
                            <i class="fas fa-database"></i>
                            <p>Facilities Hotel</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL; ?>/staff/reservasi">
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
                    <h4 class="page-title">Staff</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Staff</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Details Room</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Table Detail Rooms</h4>
                            </div>

                            <!-- Add Room Modal -->
                            <div class="modal fade" id="addRoomModal" tabindex="-1" aria-labelledby="addRoomModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header border-bottom-0">
                                            <h1 class="modal-title fs-5" id="addRoomModal">Add Detail Room</h1>
                                            <button type="button" class="border-0 bg-transparent text-white" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <form method="POST" action="<?= BASE_URL ?>/details_room/addDetailsRoom">
                                            <div class="modal-body">
                                                <label class="mb-2 px-2">Select Room Name</label>
                                                <div class="input-group mb-3 px-2">
                                                    <select class="custom-select" name="room_id">
                                                        <?php foreach ($data["rooms"] as $room) : ?>
                                                            <option value="<?= $room->id; ?>">[Room ID: <?= $room->id; ?>] &nbsp; <?= $room->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <label class="mb-2 px-2">Select Room Facility</label>
                                                <div class="input-group mb-3 px-2">
                                                    <select class="custom-select" name="facility_id">
                                                        <?php foreach ($data["room_facilities"] as $facilities) : ?>
                                                            <option value="<?= $facilities->id; ?>">[Facility ID: <?= $facilities->id; ?>] &nbsp; <?= $facilities->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="modal-footer border-top-0">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
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
                                                <th>Room</th>
                                                <th>Name Facilities Room</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Room</th>
                                                <th>Name Facilities Room</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data["details_room"] as $detail) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $detail->name; ?></td>
                                                    <td><?= $detail->room_facilities_name; ?></td>
                                                </tr>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="deleteModal<?= $detail->id; ?>" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-dark">
                                                            <div class="modal-header border-bottom-0">
                                                                <h1 class="modal-title fs-5" id="deleteModal">Delete Details Room</h1>
                                                                <button type="button" class="border-0 bg-transparent text-white" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                            </div>
                                                            <form method="POST" action="<?= BASE_URL; ?>/details_room/deleteDetailsRoom">
                                                                <div class="modal-body">
                                                                    <p class="text-center">Are you sure you want to delete this Details Room?</p>

                                                                    <div class="d-none form-group">
                                                                        <input type="text" class="form-control" value="<?= $detail->detail_id; ?>" name="details_room_id">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Room</label>
                                                                        <input type="text" class="text-white form-control-plaintext border border-1 rounded-5 px-3" value="<?= $detail->name; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Name Facility Room</label>
                                                                        <input type="text" class="text-white form-control-plaintext border border-1 rounded-5 px-3" value="<?= $detail->room_facilities_name; ?>" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer border-top-0">
                                                                    <button type="button" class="btn btn-sm btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-sm btn-sm btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header border-bottom-0">
                                                    <h1 class="modal-title fs-5" id="editModal">Edit Room</h1>
                                                    <button type="button" class="border-0 bg-transparent" style="cursor: pointer;" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="RoomName">Name Room</label>
                                                            <input type="text" class="form-control" id="RoomName" placeholder="Enter name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="totalRoom">Total Room</label>
                                                            <input type="number" class="form-control" id="totalRoom" placeholder="Enter total">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer border-top-0">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
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
            title: "Opss...",
            text: `Error While Uploading Data!`,
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
        window.location.href = "<?= BASE_URL ?>/staff/details_room"
    }
</script>