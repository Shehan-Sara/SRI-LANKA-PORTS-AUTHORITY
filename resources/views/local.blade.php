@include('layout.header');

<!-- Local purchases Start-->
<section id="local-purchases">
    <div class="container-fluid">
        <div class="row">
            <!-- Left Side Navigation -->
            <nav class="col-md-3 col-lg-3 position-relative d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" onclick="showContent('electrical')">ELECTRICAL EQUIPMENTS
                                <span><i class="bi bi-chevron-double-right"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="showContent('mechanical')">MECHANICAL EQUIPMENTS
                                <span><i class="bi bi-chevron-double-right"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="showContent('other-equipement')">OTHER MATERIALS & EQUIPMENTS
                                <span><i class="bi bi-chevron-double-right"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Right Side Content -->
            <main role="main" class="col-md-9 col-lg-9 px-md-4">
                <div id="electrical" class="d-none">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Procuirements</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">Local Purchases</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Electrical Equipments
                            </li>
                        </ol>
                    </nav>

                    <div class="style5">
                        <h6>Electrical Equipments</h6>
                    </div>
                    <table id="example" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr class="text-light">
                                <th>Tender No.</th>
                                <th>Description</th>
                                <th>BID Security Amount (Rs.)</th>
                                <th>Closing Date and Time</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $electric = '0';
                            @endphp
                            @if($tender->isEmpty())
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>
                            @else 
                            @foreach($tender ->sortByDesc('id') as $Tender)
                              @if($Tender->Type == "ELECTRICAL EQUIPMENT")
                              @php
                                $electric ++;
                              @endphp
                            <tr>
                                <td>{{ $Tender->TenderNo }}</td>
                                <td>{{ $Tender->Description }}</td>
                                <td>{{ $Tender->Ammount }}</td>
                                <td>{{ $Tender->ClosedDate }}</td>
                                @if( $Tender->AttachmentPath == null)   
                                <td>No Attachment</td>
                                @else
                                <td><a class="btn table-action" href="{{ asset($Tender->AttachmentPath) }}" download>Download</a></td>
                                @endif
                            </tr>
                              @endif
                            @endforeach 
                            @if ($electric == 0)
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>                                                          
                            @endif 
                            @endif
                        </tbody>                   
                        
                    </table>
                </div>
                <div id="mechanical" class="d-none">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Procuirements</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">Local Purchases</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">
                                Mechanical Equipments
                            </li>
                        </ol>
                    </nav>

                    <div class="style5">
                        <h6>Mechanical Equipments</h6>
                    </div>
                    <table id="example" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Tender No.</th>
                                <th>Description</th>
                                <th>BID Security Amount (Rs.)</th>
                                <th>Closing Date and Time</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $mechanical = '0';
                            @endphp
                            @if($tender->isEmpty())
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>
                            @else 
                            @foreach($tender ->sortByDesc('id') as $Tender)
                              @if($Tender->Type == "MECHANICAL EQUIPMENT")
                              @php
                              $mechanical ++;
                              @endphp
                            <tr>
                                <td>{{ $Tender->TenderNo }}</td>
                                <td>{{ $Tender->Description }}</td>
                                <td>{{ $Tender->Ammount }}</td>
                                <td>{{ $Tender->ClosedDate }}</td>
                                @if( $Tender->AttachmentPath == null)   
                                <td>No Attachment</td>
                                @else
                                <td><a class="btn table-action" href="{{ asset($Tender->AttachmentPath) }}" download>Download</a></td>
                                @endif
                            </tr>
                              @endif
                            @endforeach  
                            @if ($mechanical == 0)
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>                                                          
                            @endif 
                            @endif
                        </tbody>                   
                    </table>
                </div>
                <div id="other-equipement" class="d-none">


                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Procuirements</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">Local Purchases</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">
                                Other Materials and Equipments
                            </li>
                        </ol>
                    </nav>

                    <div class="style5">
                        <h6>Other Materials and Equipments</h6>
                    </div>
                    <table id="example" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Tender No.</th>
                                <th>Description</th>
                                <th>BID Security Amount (Rs.)</th>
                                <th>Closing Date and Time</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $other = '0';
                            @endphp                                
                            @endphp
                            @if($tender->isEmpty())
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>
                            @else 
                            @foreach($tender ->sortByDesc('id') as $Tender)
                              @if($Tender->Type == "OTHER MATERIALS & EQUIPMENT")
                              @php
                                $other ++;
                              @endphp
                            <tr>
                                <td>{{ $Tender->TenderNo }}</td>
                                <td>{{ $Tender->Description }}</td>
                                <td>{{ $Tender->Ammount }}</td>
                                <td>{{ $Tender->ClosedDate }}</td>
                                @if( $Tender->AttachmentPath == null)   
                                <td>No Attachment</td>
                                @else
                                <td><a class="btn table-action" href="{{ asset($Tender->AttachmentPath) }}" download>Download</a></td>
                                @endif
                            </tr>
                              @endif
                            @endforeach 
                            
                            @if ($other == 0)
                            <tr class="text-center">
                                <td colspan="5">No Records to Display.</td>
                            </tr>                                                          
                            @endif
                            @endif  
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</section>
<!-- Local purchases end-->