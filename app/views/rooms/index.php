<div class="mb-5">
    <div class="facilities-hero">
        <div class="container h-100 align-content-center">
            <div class="text-center text-white">

                <div class="container bg-white text-black py-3 rounded-5" style=" margin-top: 10rem;">
                    <div class="d-flex gap-4 justify-content-center">
                        <div class="form-floating">
                            <input type="text" class="form-control shadow-none border-0 border-bottom border-secondary rounded-0" id="floatingInput" placeholder="Find Room">
                            <label class="text-secondary">Find Room</label>
                        </div>
                        <div class="form-floating">
                            <input type="date" class="form-control text-black shadow-none border-0 border-bottom border-secondary rounded-0" id="floatingInput" placeholder="Find Room">
                            <label>Check In</label>
                        </div>
                        <div class="form-floating">
                            <input type="date" class="form-control text-black shadow-none border-0 border-bottom border-secondary rounded-0" id="floatingInput" placeholder="Find Room">
                            <label>Check Out</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control shadow-none border-0 border-bottom border-secondary rounded-0" id="floatingInput" placeholder="Guest">
                            <label class="text-secondary">Guest</label>
                        </div>
                        <div class="align-self-center">
                            <button type="button" class="btn btn-sm btn-outline-primary py-2 px-3"><i class="bi bi-search"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="rooms" class="container">
    <div class="container h-100">

    </div>

    <div class="row">
        <div class="col-3 h-full rounded-4 p-3">
            <div class="pt-3">
                <h4 class="mb-5">Filter</h4>

                <div class="mb-5">
                    <h6 class="mb-3">Our Price (IDR)</h6>
                    <ul class="ps-3 d-grid gap-2 list-unstyled">
                        <li><a class="text-decoration-none text-black fst-italic" href="#">0 - 199,999</a></li>
                        <li><a class="text-decoration-none text-black fst-italic" href="#">200,000 - 299,000</a></li>
                        <li><a class="text-decoration-none text-black fst-italic" href="#">300,000 - 499,000</a></li>
                        <li><a class="text-decoration-none text-black fst-italic" href="#">500,000 - 999,999</a></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h6 class="mb-3">Our Room Type</h6>
                    <ul class="ps-3 d-grid gap-2 list-unstyled">
                        <li><a class="text-decoration-none text-black" href="#">Superior</a></li>
                        <li><a class="text-decoration-none text-black" href="#">Deluxe</a></li>
                        <li><a class="text-decoration-none text-black" href="#">Suites</a></li>
                        <li><a class="text-decoration-none text-black" href="#">Presidential Suites</a></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h6 class="mb-3">Our Facilities</h6>
                    <div class="d-grid gap-2 list-unstyled">
                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                TV
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                Coffe Maker
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">
                                Air Conditioner
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-9">
            <div class="container mb-4">
                <h3 class="text-center">Our Rooms in Serenity Suites</h3>
            </div>
            <hr>
            <div class="card w-100 position-relative shadow rounded-5 mb-5 border-0">
                <div class="card-body m-0 p-0">
                    <div class="d-flex">
                        <div class="col-md-5 me-2">
                            <img src="<?= BASE_URL; ?>/assets/img/superior.jpg" class="card-img-top object-fit-cover rounded-start-4 ">
                        </div>

                        <div class="position-relative col-md p-3">
                            <h5>Superior Single Bed</h5>

                            <p class="mt-3">Facilities</p>

                            <div class="w-100">
                                <ul class="d-flex flex-wrap pe-5 list-unstyled">
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-tv"></i></span> TV</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa fa-bath"></i></span> Bathroom</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa-solid fa-fan"></i></span> AC</li>
                                </ul>
                            </div>

                            <div class="position-absolute bottom-0 start-0">
                                <h5 class="ps-3 pb-3">IDR 99,999</h5>
                            </div>

                            <div class="position-absolute bottom-0 end-0 pe-4 pb-3">
                                <button onclick="addRoomToLocalStroage('Superior Single Bed', '<?= BASE_URL; ?>/assets/img/superior.jpg', '99,999')" class="btn btn-sm btn-primary rounded-pill me-1">Book Now</button>
                                <button class="btn btn-sm btn-success rounded-pill">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-100 position-relative shadow rounded-5 mb-5 border-0">
                <div class="card-body m-0 p-0">
                    <div class="d-flex">
                        <div class="col-md-5 me-2">
                            <img src="<?= BASE_URL; ?>/assets/img/superior-twin.jpg" class="card-img-top object-fit-cover rounded-start-4 ">
                        </div>

                        <div class="position-relative col-md p-3">
                            <h5>Superior Double Bed</h5>

                            <p class="mt-3">Facilities</p>

                            <div class="w-100">
                                <ul class="d-flex flex-wrap pe-5 list-unstyled">
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-tv"></i></span> TV</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa fa-bath"></i></span> Bathroom</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa-solid fa-fan"></i></span> AC</li>
                                </ul>
                            </div>

                            <div class="position-absolute bottom-0 start-0">
                                <h5 class="ps-3 pb-3">IDR 112,000</h5>
                            </div>

                            <div class="position-absolute bottom-0 end-0 pe-4 pb-3">
                                <button onclick="addRoomToLocalStroage('Superior Double Bed', '<?= BASE_URL; ?>/assets/img/superior-twin.jpg', '112,000')" class="btn btn-sm btn-primary rounded-pill me-1">Book Now</button>
                                <button class="btn btn-sm btn-success rounded-pill">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-100 position-relative shadow rounded-5 mb-5 border-0">
                <div class="card-body m-0 p-0">
                    <div class="d-flex">
                        <div class="col-md-5 me-2">
                            <img src="<?= BASE_URL; ?>/assets/img/deluxe.jpg" class="card-img-top object-fit-cover rounded-start-4 ">
                        </div>

                        <div class="position-relative col-md p-3">
                            <h5>Deluxe Single Bed</h5>

                            <p class="mt-3">Facilities</p>

                            <div class="w-100">
                                <ul class="d-flex flex-wrap pe-5 list-unstyled">
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-tv"></i></span> TV</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-cup-hot"></i></span> Coffe Maker</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa fa-bath"></i></span> Bathroom</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa-solid fa-fan"></i></span> AC</li>
                                </ul>
                            </div>

                            <div class="position-absolute bottom-0 start-0">
                                <h5 class="ps-3 pb-3">IDR 174,000</h5>
                            </div>

                            <div class="position-absolute bottom-0 end-0 pe-4 pb-3">
                                <button onclick="addRoomToLocalStroage('Deluxe Single Bed', '<?= BASE_URL; ?>/assets/img/deluxe.jpg', '174,000')" class="btn btn-sm btn-primary rounded-pill me-1">Book Now</button>
                                <button class="btn btn-sm btn-success rounded-pill">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-100 position-relative shadow rounded-5 mb-5 border-0">
                <div class="card-body m-0 p-0">
                    <div class="d-flex">
                        <div class="col-md-5 me-2">
                            <img src="<?= BASE_URL; ?>/assets/img/deluxe-twin.jpg" class="card-img-top object-fit-cover rounded-start-4 ">
                        </div>

                        <div class="position-relative col-md p-3">
                            <h5>Deluxe Double Bed</h5>

                            <p class="mt-3">Facilities</p>

                            <div class="w-100">
                                <ul class="d-flex flex-wrap pe-5 list-unstyled">
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-tv"></i></span> TV</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="bi bi-cup-hot"></i></span> Coffe Maker</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa fa-bath"></i></span> Bathroom</li>
                                    <li class="me-3 mb-2"><span class="text-black"><i class="fa-solid fa-fan"></i></span> AC</li>
                                </ul>
                            </div>

                            <div class="position-absolute bottom-0 start-0">
                                <h5 class="ps-3 pb-3">IDR 199,000</h5>
                            </div>

                            <div class="position-absolute bottom-0 end-0 pe-4 pb-3">
                                <button onclick="addRoomToLocalStroage('Deluxe Double Bed', '<?= BASE_URL; ?>/assets/img/deluxe-twin.jpg', '199,000')" class=" btn btn-sm btn-primary rounded-pill me-1">Book Now</button>
                                <button class=" btn btn-sm btn-success rounded-pill">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="./assets/js/script.js"></script>

<script>
    const addRoomToLocalStroage = (roomName, imagePath, price) => {
        const data = {
            roomName,
            imagePath,
            price
        }


        window.localStorage.setItem('roomData', JSON.stringify(data))

        window.location.href = '<?= BASE_URL; ?>/reservation#reservation'
    }
</script>