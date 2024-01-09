@if ($errors->any())
    <script>
        window.onload = function() {
            alert("There was an error with your submission:\n{{ implode('\n', $errors->all()) }}");
        };
    </script>
@endif
<div class=" mb-3">
  
    <div class="card border-0">            
        <div class="row g-0">
          <div class="col-md-10">
            <div class="card-body">
              
            </div>
          </div>
          <div class="col-md-2">
              <div class="card-body text-end">
                <a type="button" href="{{ route('AdminInsert') }}" class="btn btn-outline-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                  </svg>
                  Create New</a>
              </div>
          </div>
      </div>            
    </div>
  </div>


  
  <div class=" mb-3">
    <div class="card">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tender No.</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Amount (Rs.)</th>
            <th scope="col">Closed Date</th>
            <th scope="col">Attachement</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php $num = 0;
          @endphp
          @if($tender->isEmpty())
          <tr>
            <td colspan="9" class="table-active">
              <center>
              <img src="images/Taken.svg" width="20%" alt="">
              <br> No Any Records</td>
            </center>
          </tr>
                    
                    @else
                    @foreach($tender ->sortByDesc('id') as $Tender)

          @php $num ++;
          @endphp
                    
          <tr>
            <th scope="row">{{$num}}</th>
            <td>{{ $Tender->TenderNo }}</td>
            <td>{{ $Tender->Name }}</td>
            <td>{{ $Tender->Type }}</td>
            <td>{{ $Tender->Ammount }}</td>
            <td>{{ $Tender->ClosedDate }}</td>
            <td>
              @if( $Tender->AttachmentPath == null)
              

              No attachment

              @else
              <a href="{{ asset($Tender->AttachmentPath) }}" download>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                  </svg>
                PDF
              </a>
                @endif
            </td>
            <td>              
              @if($Tender->Status == 0)
                  <p> <span class="badge rounded-pill text-bg-success ">Active</span></p>
               @elseif($Tender->Status == 1)
                  <p> <span class="badge rounded-pill text-bg-danger  ">Inactive</span></p>
               @else
                  <p> <span class="badge rounded-pill text-bg-warning  ">Pending</span></p>
              @endif
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal{{ $Tender->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                    </button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit{{ $Tender->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                    </button> 
                    @if(Auth::user()->admin == 1 )                                      
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modaldelete{{ $Tender->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                          </svg>
                        </button>
                        @endif  
                  </div>
            </td>
            <div class="modal fade" id="Modaldelete{{ $Tender->id }}" tabindex="-1" aria-labelledby="Modaldelete{{ $Tender->id }}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Record?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Delete {{ $Tender->TenderNo }} {{ $Tender->Name }}
                    <br>
                    This changes can not be undo
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" href="/recorddelete/{{ $Tender->id }}" class="btn btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                        Delete Record
                      </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="Modal{{ $Tender->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $Tender->TenderNo }}</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>{{ $Tender->Name }}</h3>
                    <p>{{ $Tender->Description }}</p>
                    <hr>
                    <p>Published by {{ $Tender->Author }}</p> 
                    <p>Published Date {{ $Tender->created_at }}</p> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>


<!-- Modal -->
<div class="modal fade" id="Edit{{ $Tender->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('editrecord') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit {{ $Tender->TenderNo }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <input type="text" name="value" value="{{ $Tender->id }}" hidden>
        <input type="text" name="Category" value="{{ $Tender->Category }}" hidden>
        <div class="mb-3 row">
          <label for="name" class="col-sm-3 col-form-label">Tender ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputID" name="id" value="{{ $Tender->TenderNo }}" required>
            
          </div>
        </div>  

        <div class="mb-3 row">
          <label for="name" class="col-sm-3 col-form-label">Tender Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" value="{{ $Tender->Name }}" required>
            
          </div>
        </div> 

        <div class="mb-3 row">
          <label for="name" class="col-sm-3 col-form-label">Ammount</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputamount" name="amount" value="{{ $Tender->Ammount }}" required>
            
          </div>
        </div> 

        <div class="mb-3 row">
          <label for="des" class="col-sm-3 col-form-label">Tender Description</label>
          <div class="col-sm-9">            
            <textarea class="form-control" id="des" name="Description" required>{{ $Tender->Description }}</textarea>
            
          </div>
        </div>

        <div class="mb-3 row">          
          <div class="col-sm-6">
            <input type="date" class="form-control" id="inputPassword" name="date" value="{{ $Tender->ClosedDate }}" required>
            
          </div>
          <div class="col-sm-6">
            <input type="file" class="form-control" name="pdffile" id="fileInput" accept=".pdf">
            
          </div>
        </div>
        
        <div class="mb-3 row">          
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example" name="type" required>
              <option selected value="{{ $Tender->Type }}">{{ $Tender->Type }}</option>
              <option value="ELECTRICAL EQUIPMENT">ELECTRICAL EQUIPMENT</option>
              <option value="MECHANICAL EQUIPMENT">MECHANICAL EQUIPMENT</option>
              <option value="OTHER MATERIALS & EQUIPMENT">OTHER MATERIALS & EQUIPMENT</option>
            </select>
            
          </div>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example" name="status" required>
              <option selected value="{{$Tender->Status}}">Status</option>
              <option value="0">Active</option>
              <option value="1">Deactive</option>
              <option value="2">Compleet</option>
            </select>
            
          </div>
        </div>
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Edit Tender</button>
      </div>
      </form>
    </div>
  </div>
</div>


          </tr>
          @endforeach
                  @endif
          
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          {{$tender->links()}}
        </ul>
      </nav>

    </div> 
  </div>