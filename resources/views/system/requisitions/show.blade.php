@extends('theme.app')

@section('title')
    Requisitions | TL Ideas
@endsection

@section('content')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <div class="breadcrumb">
        <h1 class="mr-2">Requisition</h1>
        <ul>
            <li><a href="">Information</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4">
                <div>
                    <div>
                        <div class="card-title clearfix">
                            <a class="btn btn-primary btn-rounded m-1 float-right clearfix" href="{{ route('requisitions') }}">
                                Back to Requisitions
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4 o-hidden">
                                <div class="card-body">
                                    <h5 class="card-title">TL - {{ $requisition->requisition_number }}</h5>
                                    <p class="card-text">{{ $requisition->subject }}</p>
                                    <p id="requisition_number" hidden>{{ $requisition->requisition_number }}</p>
                                </div>

                                <form action="{{ route('requisitions.update', $requisition->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        {{ $requisition->details }}
                                    </li>
                                    <li class="list-group-item">
                                        Created by {{ $requisition->user->firstname }} {{ $requisition->user->lastname }}  ( {{ $requisition->user->client->name ?? "Private Entity" }} ) | {{ $requisition->requisition_status->title }}
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker1">Status</label>

                                                <select class="form-control form-control-rounded" name="requisition_status_id" id="requisition_status_id">
                                                    <option value="">
                                                        Select Status
                                                    </option>
                                                    @foreach($requisition_statuses as $requisition_status)
                                                        <option
                                                            value="{{ $requisition_status->id }}"
                                                            {{ old('requisition_status_id', $requisition->requisition_status->id) == $requisition_status->id ? 'selected' : '' }}
                                                        >
                                                            {{$requisition_status->title}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker1">Assign to Driver</label>
                                                <select class="form-control form-control-rounded" name="driver_id" id="driver_id">
                                                    <option value="">Select Driver</option>

                                                    @foreach(\App\Models\User::role('driver')->get() as $driver)
                                                    <option
                                                        value="{{ $driver->id }}"
                                                        {{ old('driver_id', $requisition->driver_id) == $driver->id ? 'selected' : ''}}
                                                    >
                                                        {{ $driver->firstname }} {{ $driver->lastname }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-success btn-rounded m-1" type="submit">Save Information</button>
                                    @if($requisition->manifest != null)
                                        <a href="{{ route('manifest.show', ['manifest' => $requisition->manifest->id]) }}" class="btn btn-success btn-rounded m-1">View Manifest</a>
                                    @else
                                        <a href="{{ route('manifest.create', ['requisition' => $requisition->id]) }}" class="btn btn-success btn-rounded m-1">Create Manifest</a>
                                    @endif
                                </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/plugins/jquery-3.3.1.min.js') }}"></script>

    <script>
        // $(document).ready(function(){
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $("#btn_assign_driver").click(function(e){
        //         let driver_id = document.getElementById("select-driver").value;
        //         let requisition_number = document.getElementById("requisition_number").innerText;
        //         let status = document.getElementById("select-status").value;
        //         if(status == "Assigned to Profile")
        //         {
        //             $.ajax({
        //                 type: "POST",
        //                 url: "assign",
        //                 data: {
        //                     driver_id: driver_id,
        //                     requisition_number: requisition_number,
        //                 },
        //                 success: function(data){
        //                     alert("Profile Assigned");
        //                 }
        //             })
        //         }
        //     })
        // })
        // $("#btn_assign_driver").on("click", function() {
        //     console.log("assign driver, hha");
        // });
    </script>
@endsection
