<div class="card text-bg-light position-absolute top-50 start-50 translate-middle rounded-0 d-flex shadow-lg " style="width: 23rem; height: 24rem;">
  <div class="card-body my-3">
    <h1 class="card-title fw-bold text-center">LOGIN</h5>
      <form method="POST" enctype="application/x-www-form-urlencoded" action="<?= BASE_URL ?>/auth/loginValidation">

        <div class="mb-3">
          <label class="form-label text-secondary fw-light">EMAIL</label>
          <input type="email" class="form-control" id="username" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label text-secondary fw-light">PASSWORD</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div>
          <div class="d-grid">
            <button class="btn btn-primary bg-color-main rounded-0 fw-light" type="submit">LOGIN</button>
          </div>

          <div class="mt-4 text-center text-secondary fw-light">
            <span>Don't have an account? <a href="<?= BASE_URL; ?>/auth/register">Register here</a></span>
          </div>
      </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  const url = "<?= $_SERVER['REQUEST_URI']; ?>"

  const alert = url.split("/")[4]

  if (alert === 'failed') {
    Swal.fire({
      title: "Login Failed!",
      text: "Email or Password Incorrect!",
      icon: "error",
    })
  }
</script>