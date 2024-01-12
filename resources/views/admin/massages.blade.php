@include('layout.bootstrap')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
                <a href="{{ route('AdminMassages') }}" class="nav-link active">
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
    
    <div class="col-md-10">
        <div class="container">

          <div class=" mb-3">  
            <div class="card border-0">

                <div class="row g-0">
                  <div class="col-md-10">
                    <div class="card-body">
                      
                    </div>
                  </div>

                  <div class="col-md-2">
                      <div class="card-body text-end">
                        <button type="button" href="" class="btn btn-outline-dark" disabled>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                          </svg>
                          Respond</button>
                      </div>
                  </div>


              </div>            
            </div>
          </div>


          <div class=" mb-2"> 
                <div class="row g-0">

                  <div class="col-md-4">

                    @if($massage->isEmpty())

                        <div class="mb-1">
                          <div class="card" style="height: 90px;">
                            <div class="card-body">
                              <h5 class="card-title placeholder-glow">
                                <span class="placeholder col-6"></span>
                              </h5>
                              <p class="card-text placeholder-glow">
                                <span class="placeholder col-10"></span>
                              </p>                           
                            </div>
                          </div>
                        </div>

                      @else
                      @foreach($massage ->sortByDesc('id') as $msg)

                        <div class="mb-1">
                          <div class="card" style="height: 90px;">
                            <div class="card-body">

                              <input type="text" value="{{ $msg->name }}" name="name" id="hname{{ $msg->id }}" hidden>
                              <input type="text" value="{{ $msg->email }}" name="email" id="hemail{{ $msg->id }}" hidden>
                              <input type="text" value="{{ $msg->subject }}" name="subject" id="hsubject{{ $msg->id }}" hidden>
                              <input type="text" value="{{ $msg->massage }}" name="massage" id="hmassage{{ $msg->id }}" hidden>

                              <h5 class="card-title placeholder-glow"> 
                                <a onclick="copyValues({{ $msg->id }})" type="button">
                                  {{ $msg->subject }} 
                                </a>                                                               
                              </h5>
                              <div class="row g-0">
                                <div class="col-md-11">
                                  <p>From : {{ $msg->name }} </p>
                                </div>
                                <div class="col-md-1 text-end">
                                    <a href="/admin/msgdelete/{{ $msg->id }}">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                          <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                                          <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                                       </svg>
                                    </a>
                                </div>
                            </div>        

                            </div>
                          </div>
                        </div>

                      @endforeach
                      @endif

                      <script>
                        function copyValues(msgId) {
                            // Copy values from hidden fields to normal text fields
                            $('#name').val($('#hname' + msgId).val());
                            $('#email').val($('#hemail' + msgId).val());
                            $('#subject').val($('#hsubject' + msgId).val());
                            // Correct the following line if needed based on your actual HTML
                             $('#massage').val($('#hmassage' + msgId).val());
                        }
                    </script>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                          {{$massage->links()}}
                        </ul>
                      </nav>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-7">

                    <div class="card">
                      <div class="card-body">

                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Customer Name</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="name" value="Select a Massage">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Customer E Mail</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="email" value="Select a Massage">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Mail Subject</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="subject" value="Select a Massage">
                          </div>
                        </div>

                        <textarea name="massage" class="form-control-plaintext" id="massage" cols="30" rows="10"></textarea>
                        

                      </div>
                    </div>
                  </div>                 

              </div>         
          </div>
            
            
        </div>      
    </div>

</div>
  </div>
  