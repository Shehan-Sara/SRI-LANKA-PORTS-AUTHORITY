@include('layout.main')

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-xl">
          <a class="navbar-brand" href="#">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('local') }}">LOCAL-PURCHASES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('foreign') }}">FORIGN-PURCHASES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('other') }}">OTHER-PURCHASES</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CONTACT
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>


      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/img1.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container-fluid">
        <center>
        <img src="images/bg.png" width="100%" alt="">
    </center>
      </div>

      <div class="container">
        <h1>Who We Are?</h1>
        <p align='justify'>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit aliquid assumenda corporis consectetur necessitatibus dignissimos provident sit? Iste sequi dolorum nostrum pariatur quos autem? Quo cupiditate minus voluptatibus quia esse?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit aliquid assumenda corporis consectetur necessitatibus dignissimos provident sit? Iste sequi dolorum nostrum pariatur quos autem? Quo cupiditate minus voluptatibus quia esse?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit aliquid assumenda corporis consectetur necessitatibus dignissimos provident sit? Iste sequi dolorum nostrum pariatur quos autem? Quo cupiditate minus voluptatibus quia esse?
        </p>
      </div>


      <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">PROCUREMENT</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">LOCAL-PURCHASES</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                See More
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">FOREIGN-PURCHASES</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                See More
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">OTHER-PURCHASES</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="bg-dark text-secondary">
      <div class="container">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-5 fw-bold text-white lh-1 mb-3">Contact Us</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                  </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Massage</label>
              </div>
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">Send Massage</button>
              <hr class="my-4">
              <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
      </div>
    </div>

    @include('layout.fotter')
    
    
 


  
