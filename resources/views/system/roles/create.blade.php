@extends('theme.app')

@section('title')
    Create Requisition | TL Ideas
@endsection

@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">Roles</h1>
        <ul>
            <li><a href="">Create</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <span>Create a Role</span>
                        <span>
                            <a href="{{ route('roles') }}" class="btn btn-primary btn-rounded m-1 float-right" type="button">Back to Roles</a>
                        </span>
                    </div>

                    <form action="{{ route('roles.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="subject">Name</label>
                                    <input class="form-control form-control-rounded" name="name" id="name" type="text" placeholder="Name" />
                                    @error('name')
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
