@extends('layouts.vertical', ['page_title' => 'Morris Charts', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Line Chart</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #ff8acc;"><i class="mdi mdi-checkbox-blank-circle"></i> Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="mdi mdi-checkbox-blank-circle"></i> Series B</h5>
                        </li>
                    </ul>
                </div>
                <div dir="ltr">
                    <div id="morris-line-example" style="height: 300px;" class="morris-chart" data-colors="#4a81d4,#f672a7"></div>
                </div>
            </div>
        </div> <!-- card -->
    </div> <!-- end row -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Bar Chart</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #ff8acc;"><i class="mdi mdi-checkbox-blank-circle"></i> Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="mdi mdi-checkbox-blank-circle"></i> Series B</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #35b8e0;"><i class="mdi mdi-checkbox-blank-circle"></i> Series C</h5>
                        </li>
                    </ul>
                </div>
                <div dir="ltr">
                    <div id="morris-bar-example" style="height: 300px;" class="morris-chart" data-colors="#02c0ce,#0acf97,#ebeff2"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Stacked Bar Chart</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #71b6f9;"><i class="fa fa-circle me-1"></i>Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5><i class="fa fa-circle me-1" style="color: #ebeff2;"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
                <div dir="ltr">
                    <div id="morris-bar-stacked" style="height: 300px;" class="morris-chart" data-colors="#4a81d4,#4fc6e1,#e3eaef"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Area Chart</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #35b8e0;"><i class="fa fa-circle me-1"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
                <div dir="ltr">
                    <div id="morris-area-example" style="height: 300px;" class="morris-chart" data-colors="#4a81d4,#f1556c"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Area Chart with Point</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #35b8e0;"><i class="fa fa-circle me-1"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
                <div dir="ltr">
                    <div id="morris-area-with-dotted" style="height: 300px;" class="morris-chart" data-colors="#e3eaef,#6658dd"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Donut Chart</h4>
                <div dir="ltr">
                    <div id="morris-donut-example" style="height: 300px;" class="morris-chart" data-colors="#4fc6e1,#6658dd,#ebeff2"></div>
                </div>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>In-Store Sales</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #35b8e0;"><i class="fa fa-circle me-1"></i>Mail-Order Sales</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #ff8acc;"><i class="fa fa-circle me-1"></i>Download Sales</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/morris.init.js'])
@endsection
