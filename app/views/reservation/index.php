<header class="container-fluid m-0 p-0">
    <div class="position-relative mb-5">
        <div class="facilities-hero">
            <div class="container h-100 align-content-center">
                <div class="text-center text-white mt-5">
                    <img src="<?= BASE_URL; ?>/assets/img/logo-big.svg" alt="">
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="reservation" class="d-flex justify-content-center align-items-center">
        <h1 class="mb-2 fw-semibold" style="letter-spacing: .1rem;">Reservation</h1>
    </div>
</header>

<section class="container">
    <div class="row mt-5">
        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control shadow-none" id="floatingName" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>

            <div class="position-relative mb-3" style="z-index: 9999999999;">
                <input id="phone" type="tel" class="form-control py-3 shadow-none" placeholder="Phone Number">
            </div>

            <div class="form-floating mb-3">
                <select class="form-select shadow-none" id="floatingSelectGender">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
                <label for="floatingSelectGender">Gender</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control shadow-none" id="floatingGuest" placeholder="Guest" value="1" readonly>
                <label for="floatingGuest">Guest</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control shadow-none" id="floatingCheckIn" placeholder="Check In" value="12-02-2024" readonly>
                <label for="floatingCheckIn">Check In</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control shadow-none" id="floatingCheckOut" placeholder="Check Out" value="13-02-2024" readonly>
                <label for="floatingCheckOut">Check Out</label>
            </div>

            <div>
                <button class="w-100 btn btn-outline-success">Book</button>
            </div>
        </div>

        <div class="col">
            <h3 class="mb-4 text-center fw-normal">Image Preview</h3>
            <div class="card" style="width: auto;">
                <img id="imagePreview" src="" class="card-img-top">
            </div>

            <div class="d-flex justify-content-between">
                <h3 id="imageName" class="my-3 fw-light"></h3>
                <h3 id="imagePrice" class="my-3 fw-light"><span>IDR</span></h3>
            </div>
        </div>
    </div>
</section>

<script>
    const phoneInputField = document.getElementById("phone")
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    })

    const iti = document.querySelector('.iti')
    setTimeout(() => {
        iti.classList.remove('iti')
    }, 500)


    let image = document.getElementById('imagePreview')
    let imageName = document.getElementById('imageName')
    let imagePrice = document.getElementById('imagePrice')

    const data = JSON.parse(window.localStorage.getItem('roomData'))

    image.src = data.imagePath
    imageName.innerHTML = data.roomName
    imagePrice.innerHTML = 'IDR ' + data.price
</script>