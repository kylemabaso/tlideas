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
                                <h5 class="text-18 font-weight-700 card-title">Finance Summary</h5>
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
                            <h3 class="text-muted text-14 font-weight-500">Final Commission Revenue</h3><span class="text-muted text-18 font-weight-600">$790,420</span>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-muted text-14 font-weight-500">Final Commission Revenue</h3><span class="text-muted text-18 font-weight-600">July 25,2019</span>
                        </div>
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
                    <div class="card-title">Sales by Countries</div>
                    <div id="stackedPie" style="height: 250px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head v-margin">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Client Requisitions</h3>
                        </div>
                        <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
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
                                    <!-- start tr-->
                                    <tr>

                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/10.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/12.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/13.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-primary p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/15.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/16.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                                    <div class="ul-widget_user-card">
                                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/9.jpg" alt="" /></div>
                                                                    </div>
                                                                </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xl-4 mt-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="ul-widget__head">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Users</h3>
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
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-danger m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-success m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-warning m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-success m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-info m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="__g-widget4-tab2-content">
                                <div class="ul-widget1">
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-danger m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-success m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-warning m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                        <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                        <div class="ul-widget4__actions">
                                            <button class="btn btn-outline-info m-1" type="button">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

