@extends('theme.app')

@section('title')
    Create Client | TL Ideas
@endsection

@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">Client</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <span>Create a Client</span>
                        <span>
                            <button class="btn btn-primary btn-rounded m-1 float-right" type="button">Back to Clients</button>
                        </span>
                    </div>

                    <form action="{{url('clients/store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="firstname">Company Name</label>
                                    <input class="form-control form-control-rounded" name="name" id="name" type="text" placeholder="Enter company name" />
                                    @error('name')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="lastname">Phone</label>
                                    <input class="form-control form-control-rounded" name="phone" id="phone" type="text" placeholder="Enter phone number" />
                                    @error('phone')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="email">Email Address</label>
                                    <input class="form-control form-control-rounded" name="email" id="email" type="email" placeholder="Enter email address" />
                                    @error('email')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="lastname">Address</label>
                                    <input class="form-control form-control-rounded" name="address" id="address" type="text" placeholder="Enter your last name" />
                                    @error('address')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="lastname">Registration No</label>
                                    <input class="form-control form-control-rounded" name="reg_no" id="reg_no" type="text" placeholder="Enter your last name" />
                                    @error('reg_no')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="lastname">Tax No</label>
                                    <input class="form-control form-control-rounded" name="tax_no" id="tax_no" type="text" placeholder="Enter your last name" />
                                    @error('tax_no')
                                    <p>{{ $message }}</p>
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
