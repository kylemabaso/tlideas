@extends('theme.app')

@section('title')
    Manifests | TL Ideas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb float-left">
                <h1 class="mr-2">Manifest</h1>
                <ul>
                    <li><a href="">Details</a></li>
                </ul>
            </div>

            <a class="btn btn-primary btn-rounded m-1 float-right mb-3" href="{{ route('requisitions') }}">Back to Requisitions</a>
        </div>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                        <div class="d-sm-flex mb-5" data-view="print"><span class="m-auto"></span>
                            <a href="{{ route('print') }}" class="btn btn-primary mb-sm-0 mb-3 print-invoice">Print Manifest</a>
                        </div>
                        <!-- -===== Print Area =======-->
                        <div id="print-area">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-weight-bold">{{ $manifest->requisition->client->name ?? 'Unavailable' }}</h4>
                                    <p>TL - {{ $manifest->requisition->requisition_number }}</p>
                                </div>
                                <div class="col-md-6 text-sm-right">
                                    <p><strong>Manifest Status: </strong>{{ $manifest->requisition->requisition_status->title }}</p>
                                    <p><strong>Manifest Date: </strong>{{ $manifest->requisition->created_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                            <div class="mt-3 mb-4 border-top"></div>
                            <div class="row mb-5">
                                <div class="col-md-6 mb-3 mb-sm-0">
                                    <h5 class="font-weight-bold">Collection</h5>
                                    <p>{{ $manifest->transaction_number }}</p>
                                    <p>Operator In: {{ $manifest->operator_in }}</p>
                                    <p>Time In: {{ $manifest->time_in }}</p>
                                    <p>Operator Out: {{ $manifest->operator_out }}</p>
                                    <p>Time Out: {{ $manifest->time_out }}</p>
                                </div>
                                <div class="col-md-6 text-sm-right">
                                    <h5 class="font-weight-bold">Disposal</h5>
                                    <p>Landfill: {{ $manifest->destination->name ?? "N/A" }}</p>
                                    <h4>Notes: </h4>
                                    <p>{{ $manifest->notes }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-hover mb-4">
                                        <thead class="bg-gray-300">
                                        <tr>
                                            <th scope="col">Waste Type</th>
                                            <th scope="col">Treatment</th>
                                            <th scope="col">Bin Location</th>
                                            <th scope="col">Bin Qty</th>
                                            <th scope="col">Bin Sizes</th>
                                            <th scope="col" style="text-align:right">Mass (Kg)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($manifest->manifest_items as $waste )
                                        <tr>
                                            <th scope="row">{{ $waste->waste_type_id }}</th>
                                            <td>{{ $waste->treatment }}</td>
                                            <td>{{ $waste->bin_location }}</td>
                                            <td>{{ $waste->bin_qty }}</td>
                                            <td>{{ $waste->bin_size }}</td>
                                            <td>{{ $waste->mass_kg }}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <div class="invoice-summary">
                                        <p>Total Mass (Kg):
                                            <span>{{ \App\Models\ManifestItem::sum('mass_kg') }}</span></p>
                                        <h5 class="font-weight-bold">Tonnage Charged:
                                            <span>{{ (\App\Models\ManifestItem::sum('mass_kg') * 0.001) }}
                                            </span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==== / Print Area =====-->
                    </div>
                    <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                        <!-- ==== Edit Area =====-->
                        <div class="d-flex mb-5"><span class="m-auto"></span>
                            <button class="btn btn-primary">Save</button>
                        </div>
                        <form>
                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <h4 class="font-weight-bold">Order Info</h4>
                                    <div class="col-sm-4 form-group mb-3 pl-0">
                                        <label for="orderNo">Order Number</label>
                                        <input class="form-control" id="orderNo" type="text" placeholder="Enter order number">
                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <label class="d-block text-12 text-muted">Order Status</label>
                                    <div class="pr-0 mb-4">
                                        <label class="radio radio-reverse radio-danger">
                                            <input type="radio" name="orderStatus" value="Pending"><span>Pending</span><span class="checkmark"></span>
                                        </label>
                                        <label class="radio radio-reverse radio-warning">
                                            <input type="radio" name="orderStatus" value="Processing"><span>Processing</span><span class="checkmark"></span>
                                        </label>
                                        <label class="radio radio-reverse radio-success">
                                            <input type="radio" name="orderStatus" value="Delivered"><span>Delivered</span><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="order-datepicker">Order Date</label>
                                        <input class="form-control text-right" id="order-datepicker" placeholder="yyyy-mm-dd" name="dp">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mb-4 border-top"></div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <h5 class="font-weight-bold">Bill From</h5>
                                    <div class="col-md-10 form-group mb-3 pl-0">
                                        <input class="form-control" id="billFrom3" type="text" placeholder="Bill From">
                                    </div>
                                    <div class="col-md-10 form-group mb-3 pl-0">
                                        <textarea class="form-control" placeholder="Bill From Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <h5 class="font-weight-bold">Bill To</h5>
                                    <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                        <input class="form-control text-right" id="billFrom2" type="text" placeholder="Bill From">
                                    </div>
                                    <div class="col-md-10 offset-md-2 form-group mb-3 pr-0">
                                        <textarea class="form-control text-right" placeholder="Bill From Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-hover mb-3">
                                        <thead class="bg-gray-300">

                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Item Name</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input class="form-control" value="Product 1" type="text" placeholder="Item Name">
                                            </td>
                                            <td>
                                                <input class="form-control" value="300" type="number" placeholder="Unit Price">
                                            </td>
                                            <td>
                                                <input class="form-control" value="2" type="number" placeholder="Unit">
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <button class="btn btn-outline-secondary float-right">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input class="form-control" value="Product 1" type="text" placeholder="Item Name">
                                            </td>
                                            <td>
                                                <input class="form-control" value="300" type="number" placeholder="Unit Price">
                                            </td>
                                            <td>
                                                <input class="form-control" value="2" type="number" placeholder="Unit">
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <button class="btn btn-outline-secondary float-right">Delete</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary float-right mb-4">Add Item</button>
                                </div>
                                <div class="col-md-12">
                                    <div class="invoice-summary invoice-summary-input float-right">
                                        <p>Sub total: <span>$1200</span></p>
                                        <p class="d-flex align-items-center">Vat(%):<span>
                                                            <input class="form-control small-input" type="text" value="10">$120</span></p>
                                        <h5 class="font-weight-bold d-flex align-items-center">Grand Total:<span>
                                                            <input class="form-control small-input" type="text" value="$">$1320</span></h5>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- ==== / Edit Area =====-->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
