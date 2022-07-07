<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Syurga - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  </head>
  <body>
    <div id="auth">
      <div class="row h-100">
        <div class="col-lg-6 col-12">
          <div id="auth-left" class="position-relative">
            <img
              class="position-absolute top-50 start-50 translate-middle"
              src="{{ asset('img/background.png') }}"
              alt="background"
            />
          </div>
        </div>
        <div class="col-lg-6">
          <div id="auth-right">
            <div class="auth-logo mb-5 text-center">
              <a href="#"><img src="{{ asset('img/logo.png') }}" alt="Logo" /></a>
            </div>
            <h1 class="auth-title">Welcome Back</h1>
            <p class="auth-subtitle">Silahkan masukan email dan password</p>
            <form action="">
              <div class="form-group mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  placeholder="Username"
                />
              </div>
              <div class="form-group mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  placeholder="Password"
                />
              </div>
              <div class="row mb-3">
                <div class="col">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="autoSizingCheck"
                    />
                    <label class="form-check-label" for="autoSizingCheck">
                      Remember me
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <a
                      href="/forgot-password"
                      class="form-check-label"
                      for="autoSizingCheck"
                    >
                      Forgot Password?
                    </a>
                  </div>
                </div>
              </div>
              <div class="d-grid col-12">
                <a href="/dashboard" class="btn btn-green">Sign in</a>
                {{-- <button type="submit" class="btn btn-green">Sign in</button> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
