<div class="card text-bg-light mb-3 position-absolute top-50 start-50 translate-middle rounded-0 d-flex shadow-lg" style="width: 23rem; height: 32rem;">
  <div class="card-body my-3">
    <h1 class="card-title fw-bold text-center">REGISTER</h1>

    <form id="registerForm" method="POST" action="<?= BASE_URL; ?>/auth/registerValidation">
      <div class="mb-3">
        <label for="email" class="form-label text-secondary fw-light">EMAIL</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label text-secondary fw-light">PASSWORD</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <div class="mb-3">
        <label for="confirmPassword" class="form-label text-secondary fw-light">CONFIRM PASSWORD</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
      </div>

      <div class="mt-5">
        <div class="d-grid">
          <button class="btn btn-primary bg-color-main rounded-0 fw-light" type="submit">REGISTER</button>
        </div>

        <div class="mt-4 text-center text-secondary fw-light">
          <span>have an account? <a href="<?= BASE_URL; ?>/auth/login">Login</a></span>
        </div>
    </form>
  </div>
</div>