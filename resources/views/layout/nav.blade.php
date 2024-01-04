<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('Welcome') }}">                
            <img width="80%" src="https://www.slpa.lk/application_resources/images/logo_1.png" alt="Company Logo">                
      </a>

      <form class="d-flex" role="search">
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu text-small" style="">
            
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </form>
    </div>
  </nav>