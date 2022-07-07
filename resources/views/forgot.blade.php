<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Syurga - Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}" />
  </head>
  <body>
    <div id="auth">
      <div class="row h-100">
        <div class="col-lg-6 col-12">
          <div id="auth-left" class="position-relative">
            <img
              class="position-absolute top-50 start-50 translate-middle"
              src="{{ asset('img/forgot.svg') }}"
              alt="background"
            />
          </div>
        </div>
        <div class="col-lg-6">
          <div id="auth-right">
            <h1 class="auth-title text-center mb-4">Lupa Password</h1>
            <p class="auth-subtitle text-center mb-4">
              Masukan email untuk mengirimkan tautan penggantian sandi
            </p>

            <form action="">
              <div class="form-group mb-5">
                <input
                  type="email"
                  class="form-control form-control-xl"
                  placeholder="Email"
                />
              </div>
              <div class="d-grid col-12 mb-4">
                <button type="submit" class="btn btn-green">Kirim</button>
              </div>
              <div class="d-grid col-12">
                <a href="/" class="btn btn-orange">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
