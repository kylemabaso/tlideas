@extends('theme.app')

@section('title')
    Requisitions | TL Ideas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb float-left">
                <h1 class="mr-2">Driver</h1>
                <ul>
                    <li><a href="">Location</a></li>
                </ul>
            </div>

            <a class="btn btn-primary btn-rounded m-1 float-right mb-3" href="{{ route('requisitions') }}">Back to Requisitions</a>
        </div>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4">
                <div>
                    {{ $requisition->requisition_status->title }} -
                </div>

                <div id="map" style="height: 600px; width: auto"></div>

            </div>
        </div>
    </div>

    <script type="text/javascript" defer>
        let map;

        function initMap() {
            var myLatlng = new google.maps.LatLng({{ $requisition->geolocations->last()->lat }},{{ $requisition->geolocations->last()->lng }});
            var mapOptions = {
                zoom: 12,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"Profile is Here!"
            });

// To add the marker to the map, call setMap();
            marker.setMap(map);
        }

    </script>
@endsection
