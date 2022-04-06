@extends('theme.app')

@section('title')
    Edit User | TL Ideas
@endsection

@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">User</h1>
        <ul>
            <li><a href="">List</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <span>Create a User</span>
                        <span>
                            <button class="btn btn-primary btn-rounded m-1 float-right" type="button">Back to Users</button>
                        </span>
                    </div>

                    <form action="{{url('users/store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="firstname">First name</label>
                                    <input class="form-control form-control-rounded" name="firstname" id="firstname" type="text" placeholder="Enter your first name" />
                                    @error('firstname')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="lastname">Surname</label>
                                    <input class="form-control form-control-rounded" name="lastname" id="lastname" type="text" placeholder="Enter your last name" />
                                    @error('lastname')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="email">Email Address</label>
                                    <input class="form-control form-control-rounded" name="email" id="email" type="email" placeholder="Enter email" />
                                    @error('email')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="picker1">Select</label>
                                    <select class="form-control form-control-rounded" name="roles[]" @isset($user) @if(in_array($role->id, $user->rolr->pluck('id')->toArray())) @endif @endisset>
                                        <option value="">Select Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ ucwords($role->name) }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control form-control-rounded" type="password" name="password" id="password" placeholder="Password" />
                                    @error('password')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input class="form-control form-control-rounded" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" />
                                    @error('password_confirmation')
                                    <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="picker1">Select</label>
                                    <select name="client" class="form-control form-control-rounded">
                                        <option value="">Select Company</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('firstname')
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
