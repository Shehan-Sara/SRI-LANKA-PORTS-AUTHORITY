@include('layout.bootstrap')

<div class="container-fluid">
    <div class="row">
        @include('layout.nav')
    <div class="col-md-2">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 230px;">               
           
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{ route('AdminHome') }}" class="nav-link link-body-emphasis" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                      </svg>
                  Home
                </a>
              </li>              
              <li>
                <a href="{{ route('AdminLocal') }}" class="nav-link link-body-emphasis">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                        <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3m0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4m2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3z"/>
                        <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0"/>
                      </svg>
                  Local Purchases
                </a>
              </li>
              <li>
                <a href="{{ route('AdminForeign') }}" class="nav-link link-body-emphasis">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                        <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849m.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599"/>
                      </svg>
                  Foreign Purchases
                </a>
              </li>
              <li>
                <a href="{{ route('AdminOther') }}" class="nav-link link-body-emphasis">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                        <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
                        <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
                      </svg>
                  Other Purchases
                </a>
              </li>
              <li>
                <a href="{{ route('AdminMassages') }}" class="nav-link link-body-emphasis">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                      </svg>
                  Massages
                </a>
              </li>
              <li>
                <a href="{{ route('AdminUsers') }}" class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                      </svg>
                  Users
                </a>
            </li>
            </ul>

            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
    </div>
    
    <div class="col-md-10">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Registration</h5>

                    <script>
                      $(document).ready(function () {
                          $('#password, #password_confirmation').on('keyup', function () {
                              var password = $('#password').val();
                              var confirmPassword = $('#password_confirmation').val();
                  
                              if (password === confirmPassword) {
                                  $('#password_confirmation').removeClass('is-invalid');
                                  $('#password_confirmation').addClass('is-valid');
                              } else {
                                  $('#password_confirmation').removeClass('is-valid');
                                  $('#password_confirmation').addClass('is-invalid');
                              }
                          });
                  
                          $('#registrationForm').submit(function (event) {
                              var password = $('#password').val();
                              var confirmPassword = $('#password_confirmation').val();
                  
                              if (password !== confirmPassword) {
                                  event.preventDefault();  // Prevent form submission
                                  alert('Password and Confirm Password must match.');
                              }
                          });
                      });
                  </script>


                    <form method="POST" action="{{ route('usercreate') }}" id="registrationForm">
                      @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">User Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="name" name="name" required>
                          @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">User E-Mail</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="email" name="email" required>
                          @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">User Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password" id="password" required>
                          @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="passwordc" class="col-sm-3 col-form-label">Confirm User Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="invalid-feedback">
                          Password and Confirm Password must match.
                      </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="user" class="col-sm-3 col-form-label">Select User Type</label>
                        <div class="col-sm-9">
                            <select class="form-select" aria-label="Default select example" name="user" required>                          
                                <option value="0" selected>Default User</option>
                                <option value="1">Admin User</option>                                
                            </select>
                            @error('user')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary"> Submit</button>

                    </form>

                </div>
            </div>
            
        </div>      
    </div>
</div>
  </div>
  