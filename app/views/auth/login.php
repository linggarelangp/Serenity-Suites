<div class="card text-bg-light position-absolute top-50 start-50 translate-middle rounded-0 d-flex shadow-lg " style="width: 23rem; height: 24rem;">
        <div class="card-body my-3">
          <h1 class="card-title fw-bold text-center">LOGIN</h5>
            <form id="loginForm">
                <div class="mb-3">
                  <label for="username" class="form-label text-secondary fw-light">USERNAME</label>
                  <input type="text" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label text-secondary fw-light">PASSWORD</label>
                  <input type="password" class="form-control" id="password" required>
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
      <footer class="mt-5 d-flex flex-row justify-content-center align-items-center">
        <img src="../assets/logo/logo-white.svg" alt="" srcset="">
      </footer>