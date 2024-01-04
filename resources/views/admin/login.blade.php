<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <br><br><br><br>
    <div class="container">
        <center>
        <div class="card text-center mb-3" style="width: 25rem;">            
            <div class="card-body">
                <center>
                    <img class="mb-2" src="https://www.slpa.lk/application_resources/images/logo_1.png" alt="Company Logo">
                </center>
                <main class="form-signin w-100 m-auto">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
                  
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                      </div>
                  
                      <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember me
                        </label>
                      </div>
                      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                      <button class="btn btn-link w-100 py-2" type="submit">Forget Password</button>
                      <p class="mt-3 mb-2 text-body-secondary">© 2023-2024</p>
                    </form>
                  </main>
            </div>
          </div>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


    
