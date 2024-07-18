@extends('layouts.vertical', ['page_title' => 'Vector Maps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css'])
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">World Map</h4>
                <div id="world-map-markers" style="height: 420px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">USA Map</h4>
                <div id="usa-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Canada Map</h4>
                <div id="canada-vectormap"  style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

</div>
<!-- end row-->


<div class="row">
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">UK Map</h4>
                <div id="uk-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Australia Map</h4>
                <div id="australia-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    
</div>
<!-- end row-->
@endsection

@section('script')
    <!-- Vector Maps Demo js -->
    @vite(['resources/js/pages/vector-maps.init.js'])
@endsection
