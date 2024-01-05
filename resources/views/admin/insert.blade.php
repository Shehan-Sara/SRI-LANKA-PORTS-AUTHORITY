@include('layout.bootstrap')

<div class="container-fluid">
    <form class="needs-validation" action="{{ route('AddRecord') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                <a href="{{ route('AdminDashboard') }}" class="nav-link link-body-emphasis">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                      </svg>
                  Dashboard
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
                <a href="{{ route('AdminUsers') }}" class="nav-link link-body-emphasis">
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
    
    
    <div class="col-md-6">
      <div class="container"> 
        
        <h5 class="mb-3">ADD NEW PROCUREMENT</h5>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">General Details</h5>

                <div class="mb-3 row">
                    <label for="inputID" class="col-sm-3 col-form-label">Tender ID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputID" name="id" required>
                      @error('id')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputName" class="col-sm-3 col-form-label">Display Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" name="name" required>
                      @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputDescription" class="col-sm-3 col-form-label">Tender Description</label>
                    <div class="col-sm-9">
                      <input type="Text box" class="form-control" id="inputDescription" name="des" required>
                      @error('des')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputDescription" class="col-sm-3 col-form-label">Tender Equipment Type</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="type" required>
                            <option value="" selected>Open the equipment type</option>
                            <option value="ELECTRICAL EQUIPMENT">ELECTRICAL EQUIPMENT</option>
                            <option value="MECHANICAL EQUIPMENT">MECHANICAL EQUIPMENT</option>
                            <option value="OTHER MATERIALS & EQUIPMENT">OTHER MATERIALS & EQUIPMENT</option>
                          </select>
                          @error('type')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Bid Sec. Amount (Rs.)</label>
                    <div class="col-sm-9">
                      <input type="Number" class="form-control" id="inputPassword" name="amount" min="0" required>
                      @error('amount')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                      <div class="invalid-feedback">
                        Please select a Amount.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Close Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="inputPassword" name="date" required>
                      @error('date')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Upload Document</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="pdffile" id="fileInput" accept=".pdf">
                      @error('pdffile')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Publishr By</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Admin Name" name="user">
                      
                    </div>
                  </div>
                  
            </div>
          </div>
          
      </div>      
  </div>

  <div class="col-md-4">
    <div class="container"> 
      <div class="card border-0">
        <div class="row g-0">
            <div class="col-md-10">
                <div class="card-body">
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%"></div>
                      </div>
                  </div>
            </div>
            <div class="col-md-2">
                <div class="card-body">
                    10%
                </div>
            </div>
        </div>

        <div class="card mb-3 ">            
            <div class="card-body">
                <h5 class="card-title mb-3">Tender Preview</h5>
                add
            </div>
          </div>

          

          <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">SET UP</h5>
              
                <div class="mb-3 row">
                    <label for="inputDescription" class="col-sm-4 col-form-label">PROCUREMENT TYPE</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="Category" required>
                            <option selected value="">SELECT PROCUREMENT TYPE</option>
                            <option value="2">FOREIGN-PURCHASES</option>
                            <option value="1">LOCAL-PURCHASES</option>
                            <option value="3">OTHER-PURCHASES</option>
                          </select>
                          @error('Category')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputDescription" class="col-sm-4 col-form-label">Tender Status</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="status" required>
                            <option value="0" selected>Active</option>
                            <option value="1">Deactive</option>
                            <option value="2">Compleet</option>                            
                          </select>
                          @error('status')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

            </div>
          </div>

          <div class="card mb-3 ">            
            <div class="card-body">
                <button type="submit"> Submit</button>
              
                
            </div>
          </div>
    </div>      
</div>



</div>

        </form>
  </div>
  