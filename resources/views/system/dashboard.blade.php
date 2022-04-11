@extends('theme.app')

@section('title')
    Dashboard | TL Ideas
@endsection

@section('content')

    <div class="breadcrumb">
        <h1 class="mr-2">Dashboard</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12 col-lg-8 mt-4">
            <div class="card o-hidden h-100">
                <div class="card-header bg-transparent">
                    <div class="row" style="align-items: center;">
                        <div class="col-md-6">
                            <div class="ul-card-widget__head-label">
                                <h5 class="text-18 font-weight-700 card-title">Disposed Waste</h5>
                            </div>
                        </div>
                        <div class="text-right col-md-6">
                            <button class="btn btn-outline-primary" type="button">Summary View</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-muted text-14 font-weight-500">April 2022</h3><span class="text-muted text-18 font-weight-600">{{ $totalTonnage }}</span>
                        </div>
{{--                        <div class="col-md-6">--}}
{{--                            <h3 class="text-muted text-14 font-weight-500">April</h3><span class="text-muted text-18 font-weight-600">2000 Tons</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div>
                    <div id="spark2"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mt-4">
            <div class="card mb-4 h-100">
                <div class="card-body">
                    <div class="card-title">Top Clients</div>
                    <div id="stackedPie" style="height: 250px;"></div>
                </div>
            </div>
        </div>

        @hasrole('admin|owner|staff')
        <div class="col-lg-8 col-xl-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head v-margin">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Latest Requests</h3>
                        </div>
                    </div>
                    <div class="ul-widget-body">
                        <div class="ul-widget3">
                            <div class="ul-widget6__item--table">
                                <table class="table">
                                    <thead>
                                    <tr class="ul-widget6__tr--sticky-th">
                                        <th scope="col">Company</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created By</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($requisitions as $requisition)
                                    <tr>
                                        <td>{{ $requisition->client->name }}</td>
                                        <td>{{ $requisition->pick_up_date->format('d/m/Y') }}</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">{{ $requisition->requisition_status->title }}</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">{{ $requisition->user->firstname }} {{ $requisition->user->lastname }}</a><span>{{ $requisition->user->email }}</span></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
{{--                            <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endhasrole

        @hasrole('user')
        <div class="col-lg-8 col-xl-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head v-margin">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Latest Requests</h3>
                        </div>
                    </div>
                    <div class="ul-widget-body">
                        <div class="ul-widget3">
                            <div class="ul-widget6__item--table">
                                <table class="table">
                                    <thead>
                                    <tr class="ul-widget6__tr--sticky-th">
                                        <th scope="col">Company</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created By</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($client_req as $requisition)
                                    <tr>
                                        <td>{{ $requisition->client->name }}</td>
                                        <td>{{ $requisition->pick_up_date->format('d/m/Y') }}</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">{{ $requisition->requisition_status->title }}</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">{{ $requisition->user->firstname }} {{ $requisition->user->lastname }}</a><span>{{ $requisition->user->email }}</span></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endhasrole

        <div class="col-lg-4 col-md-6 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="ul-widget__head">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">New Manifests</h3>
                        </div>
                        <div class="ul-widget__head-toolbar">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget4-tab1-content" role="tab" aria-selected="true">Today</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab2-content" role="tab" aria-selected="false">Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ul-widget__body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="__g-widget4-tab1-content">
                                <div class="ul-widget1">
                                    @foreach($manifests as $manifest)
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget2__info ul-widget4__users-info">
                                            <a class="ul-widget2__title" href="{{ route('manifest.show', ['manifest' => $manifest->id]) }}">
                                                TL - {{ $manifest->requisition->requisition_number }}
                                            </a>
                                            <span class="ul-widget2__username" href="#">{{ $manifest->requisition->created_at->format('d/m/Y') }}</span></div>
                                        <div class="ul-widget4__actions">
                                            <a href="{{ route('manifest.show', ['manifest' => $manifest->id]) }}" class="btn btn-outline-danger m-1">
                                                View
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="tab-pane" id="__g-widget4-tab2-content">
                                <div class="ul-widget1">
{{--                                    <div class="ul-widget4__item ul-widget4__users">--}}
{{--                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>--}}
{{--                                        <div class="ul-widget4__actions">--}}
{{--                                            <button class="btn btn-outline-danger m-1" type="button">View</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

