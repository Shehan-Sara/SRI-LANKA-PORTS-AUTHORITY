@include('layout.header');

<div class="purchases-hero bg-cover d-flex align-items-center justify-content-center ">
    <div class="overlay"></div>
    <div class="row ">
        <div class="col-12 align-items-center justify-content-center ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item "><a href="">Procuirements</a></li>

                    <li class="breadcrumb-item active" aria-current="page">
                        Other
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Other start-->


<div class="container" id="other">
    <div class="row">
        <div class="col-12">


            <div class="style5">
                <h6>Other</h6>
            </div>
            <div class="row">
                <div id="other">
                    <table class="table custom-table" class="table table-striped">
                        <tbody>
                            @if ($tender->isEmpty())
                                <tr class="text-center">
                                    <td colspan="5">No Records to Display.</td>
                                </tr>
                            @else
                                @foreach ($tender->sortByDesc('id') as $Tender)
                                    <tr>
                                        <td>
                                            @if ($Tender->AttachmentPath == null)
                                                <p><i class="bi bi-filetype-pdf"></i></p>
                                            @else
                                                <a href="{{ asset($Tender->AttachmentPath) }}" target="_blank"><i
                                                        class="bi bi-filetype-pdf"></i></a>
                                            @endif
                                        </td>
                                        <td>{{ $Tender->Description }}</td>
                                        <td>Publishd {{ $Tender->created_at }} </td>
                                        <td>

                                            @if ($Tender->AttachmentPath == null)
                                        <td>No Attachment</td>
                                    @else
                                        <a class="btn table-action" href="{{ asset($Tender->AttachmentPath) }}"
                                            target="_blank">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <a class="btn table-action" href="{{ asset($Tender->AttachmentPath) }}"
                                            download>
                                            <i class="bi bi-cloud-download-fill"></i>
                                        </a>
                                @endif
                                </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
