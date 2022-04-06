@extends('theme.app')

@section('title')
    Create Requisition | TL Ideas
@endsection

@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">Requisition</h1>
        <ul>
            <li><a href="">Edit</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <span>Create a Requisition</span>
                        <span>
                            <a href="">
                                <button class="btn btn-primary btn-rounded m-1 float-right" type="button">Back to Requisitions</button>
                            </a>
                        </span>
                    </div>

                    <form action="{{url('requisitions/store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="subject">Subject</label>
                                <input class="form-control form-control-rounded" name="subject" id="subject" type="text" placeholder="Enter subject" />
                                @error('subject')
                                <p class="danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="subject">When</label>
                                <input class="form-control form-control-rounded" name="pick_up_date" type="datetime-local" id="pickUpDate">
                                @error('pick_up_date')
                                <p class="danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="details">Details</label>
                                <textarea class="form-control form-control-rounded"
                                          name="details"
                                          id="details"
                                ></textarea>

                                @error('details')
                                <p class="danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
