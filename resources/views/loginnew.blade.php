<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    @import url("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");


    body {
        font-family: 'Courier New', Courier, monospace;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        color: rgb(5, 53, 96);
    }

    .button-sumbit {
        --bs-btn-padding-y: 0.625rem;
        --bs-btn-padding-x: 1.25rem;
        --bs-btn-font-size: calc(1.26rem + 0.12vw);
        --bs-btn-border-radius: var(--bs-border-radius-lg);
    }

    @media (min-width: 1200px) {
        .button-sumbit {
            --bs-btn-font-size: 1.35rem;
        }
    }

    .image-container {
        position: relative;
        background: url('../assets/img/local-purchases.jpg');
        background-size: cover;

    }

    .link-secondary:hover {
        color: rgb(230, 179, 27) !important;
        font-weight: 600 !important;
    }


    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(6, 6, 6, 0.489);
        /* Adjust the opacity as needed */
        z-index: 1;
    }

    .btn-custom {
        background: #fafafa !important;
    }

    .title {

        color: rgb(5, 53, 96);
        margin-top: 20px;
        font-weight: 600;
    }

    .return-btn a,
    .return-btn i {
        vertical-align: middle;
    }

    .return-btn a:hover {
        color: rgb(230, 179, 27);
    }
</style>

<section class="p-3 p-md-4 p-xl-5">
    <div class="container ">
        <div class="row ">

            <div class="col-12 col-md-6 image-container position-relative">
                <div class="overlay"></div>
                <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">

                </div>
            </div>

            <div class="col-12 col-md-6 btn-custom ">
                <div class="p-3 p-md-4 p-xl-5">
                    <div class="row">
                        <div class="col-12 align-items-center justify-content-center text-center d-flex flex-column">

                            <img class="img-fluid rounded my-auto my-4" src="{{ asset('assets/img/logo.png') }}"
                                width="245" height="80" alt="Logo" />
                            <div>
                                <h2 class="title">SLPA - ADMIN LOGIN</h2>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="floatingInput" class="form-label">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com" required />
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="col-12">
                                <label for="floatingPassword" class="form-label">Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" placeholder="********"
                                    id="floatingPassword" value="" required />
                            </div>

                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror

                            @error('error')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="remember_me"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label text-secondary" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn button-sumbit btn-primary" type="submit">
                                        Log
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <hr class="border-secondary-subtle" />
                        <div class="col-6 return-btn">
                            <a class="my-4" href="{{ Route('Welcome') }}"><i class="bi bi-arrow-left-circle"></i>
                                Return Home</a>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <a href="#!" class="link-secondary">Forgot password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
