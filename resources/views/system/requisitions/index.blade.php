@extends('theme.app')

@section('title')
    Requisitions | TL Ideas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb float-left">
                <h1 class="mr-2">Requisition</h1>
                <ul>
                    <li><a href="">List</a></li>
                </ul>
            </div>

            <a class="btn btn-primary btn-rounded m-1 float-right mb-3" href="{{ route('requisitions.create') }}">New Requistion</a>
        </div>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4">
                <div>

                    <div class="row">
                        @foreach($requisitions as $requisition)
                            <div class="col-md-4 float-left">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <a href="/requisitions/{{ $requisition->id }}">
                                            <h6 class="mb-2 text-muted">TLI - {{ $requisition->requisition_number }}</h6>
                                            <p>{{ $requisition->pivot }}</p>
                                        </a>
                                        <p class="mb-1 text-22 font-weight-light" id="percentage">0%</p>
                                        <div class="progress mb-1" style="height: 4px">
                                            <div class="progress-bar bg-success" style="width: 0%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="badge badge-pill badge-outline-primary p-2 m-1" id="status-text">{{ $requisition->requisition_status->title }}</p>
                                        <p class="card-text mb-2 mt-2">{{ $requisition->subject }}</p>
                                        <a class="btn btn-primary btn-rounded float-left" href="{{ route('geolocation.locate', ['requisition' => $requisition->id]) }}">View on Map</a>
                                        @if($requisition->manifest != null)
                                        <a class="btn btn-success btn-rounded float-right" href="{{ route('manifest.show', ['manifest' => $requisition->manifest->id]) }}">View Manifest</a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" defer>
        const status = document.querySelectorAll('#status-text')
        let percentage = document.querySelectorAll('#percentage')
        let progress = document.querySelectorAll('.progress-bar')
        console.log(status, percentage, progress)
        status.forEach((_status, i) => {
            console.log(i);
            if (_status.innerText === 'Awaiting Acceptance') {
                percentage[i].innerText = '0%'
                progress[i].style.width = '0%'
            } else if (_status.innerText === 'Accepted') {
                percentage[i].innerText = '10%'
                progress[i].style.width = '10%'
            } else if (_status.innerText === 'Assigned to Driver') {
                percentage[i].innerText = '25%'
                progress[i].style.width = '25%'
            } else if (_status.innerText === 'Waste Collected') {
                percentage[i].innerText = '50%'
                progress[i].style.width = '50%'
            } else if (_status.innerText === 'Disposed') {
                percentage[i].innerText = '100%'
                progress[i].style.width = '100%'
            } else if (_status.innerText === 'Collected' || 'Handed Over') {
                percentage[i].innerText = '75%'
                progress[i].style.width = '75%'

            } else {
                percentage[i].innerText = '0%'
                progress[i].style.width = '0%'
            }
        });
    </script>
@endsection
