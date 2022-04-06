@extends('theme.app')

@section('title')
    Create Manifest | TL Ideas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb float-left">
                <h1 class="mr-2">Manifest</h1>
                <ul>
                    <li><a href="">Create</a></li>
                </ul>
            </div>

            <a class="btn btn-primary btn-rounded m-1 float-right mb-3" href="{{ route('requisitions') }}">Back to Requisitions</a>
        </div>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="card">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                            <div class="d-sm-flex mb-5" data-view="print"><span class="m-auto"></span>
                                <button class="btn btn-primary mb-sm-0 mb-3 print-invoice">Print Invoice</button>
                            </div>
                            <!-- -===== Print Area =======-->
                            <div id="print-area">

                            </div>
                            <!-- ==== / Print Area =====-->
                        </div>
                        <div class="tab-pane fade active show" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                            <!-- ==== Edit Area =====-->
                            <div class="d-flex mb-5"><span class="m-auto"></span>
                                <button class="btn btn-primary">Save Manifest</button>
                            </div>
                            <form method="post" action="{{ route('manifest.store', ['requisition' => $requisition->id]) }}">
                                @csrf
                                <div class="row justify-content-between">
                                    <div class="col-md-6">
                                        <h4 class="font-weight-bold">Manifest for {{ $requisition->user->client->name ?? "Private Entity" }}</h4>
                                        <div class="col-sm-6 form-group mb-3 pl-0">
                                            <label for="requisition_id">Manifest Number</label>
                                            <input class="form-control form-control-rounded"
                                                   id="requisition_id"
                                                   name="requisition_id"
                                                   type="text"
                                                   placeholder="{{ $requisition->requisition_number  }}">
                                            <input class="form-control form-control-rounded"
                                                   id="requisition_id"
                                                   name="requisition_id"
                                                   type="hidden"
                                                   value="{{ $requisition->id  }}">
                                        </div>
                                        <div class="col-sm-6 form-group mb-3 pl-0">
                                            <label for="user_id">Created By</label>
                                            <input class="form-control form-control-rounded"
                                                   id="user_id"
                                                   name="user_id"
                                                   type="text"
                                                   placeholder="{{ $requisition->user->full_name()  }}">
                                            <input class="form-control form-control-rounded"
                                                   id="user_id"
                                                   name="user_id"
                                                   type="hidden"
                                                   value="{{ $requisition->user_id  }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <label class="d-block text-12 text-muted">Requisition Status</label>
                                        <div class="pr-0 mb-4">

                                            <label class="radio radio-reverse radio-danger">
                                                <input type="radio" name="orderStatus" value="Pending"><span>Pending</span><span class="checkmark">&nbsp;</span>
                                            </label>
                                            <label class="radio radio-reverse radio-warning">
                                                <input type="radio" name="orderStatus" value="Processing"><span>En Route</span><span class="checkmark"></span>
                                            </label>
                                            <label class="radio radio-reverse radio-success">
                                                <input type="radio" name="orderStatus" value="Delivered"><span>Disposed</span><span class="checkmark"></span>
                                            </label>

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="order-datepicker">Requisition Date</label>
                                            <input class="form-control form-control-rounded text-right" id="order-datepicker" value="{{ $requisition->created_at->format('d/m/Y') }}" name="dp">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 border-top"></div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <h5 class="font-weight-bold">Collection</h5>
                                        <div class="col-md-10 form-group mb-3 pl-0">
                                            <input class="form-control form-control-rounded" name="operator_in" type="text" placeholder="Operator In">
                                        </div>
                                        <div class="col-md-10 form-group mb-3 pl-0">
                                            <input class="form-control form-control-rounded" id="time_in" name="time_in" type="text" placeholder="Time In">
                                        </div>
                                        <div class="col-md-10 form-group mb-3 pl-0">
                                            <input class="form-control form-control-rounded" name="operator_out" type="text" placeholder="Operator Out">
                                        </div>
                                        <div class="col-md-10 form-group mb-3 pl-0">
                                            <input class="form-control form-control-rounded" id="time_out" name="time_out" type="text" placeholder="Time Out">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h5 class="font-weight-bold">Disposal</h5>
                                        <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                            <select name="destination_id" id="destination_id" class="form-control form-control-rounded">
                                                <option value="">Select Destination</option>
                                                @foreach($destinations as $destination)
                                                    <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                            <textarea class="form-control form-control-rounded text-right" data-value="notes" placeholder="Additional notes"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <livewire:waste />

                                <button class="btn btn-primary">Save Manifest</button>

                            </form>
                            <!-- ==== / Edit Area =====-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
