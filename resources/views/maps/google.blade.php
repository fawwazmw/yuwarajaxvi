@extends('layouts.vertical', ['page_title' => 'Google Maps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
<div class="row">
                            
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Markers</h4>
                <div id="gmaps-markers" class="gmaps"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Overlays</h4>
                <div id="gmaps-overlay" class="gmaps"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->

</div> <!-- end row -->


<div class="row">
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Street View Panoramas</h4>
                <div id="panorama" class="gmaps-panaroma"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Map Types</h4>
                <div id="gmaps-types" class="gmaps"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- end row -->
@endsection

@section('script')
    <!-- Google Maps API -->
    <script src="https://maps.google.com/maps/api/js"></script>
    @vite(['resources/js/pages/google-maps.init.js'])
@endsection
