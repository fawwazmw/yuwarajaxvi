@extends('layouts.vertical', ['page_title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <style>
        @media (max-width: 1024px) {
            .ml-3.d-flex.align-items-center img {
                display: none;
            }
        }

        @media (max-width: 425px) {
            .line-pengumuman {
                margin-top: -10px !important;
            }
        }

        @media (max-width: 425px) {
            .line-pengumuman {
                margin-top: -30px !important;
            }
        }
    </style>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('second', ['task', 'task-list']) }}" class="text-decoration-none">
                <div class="card card-body d-flex flex-row align-items-center" style="height: 200px;">
                    <div class="flex-grow-1">
                        <i class="fas fa-book text-info noti-icon mb-2"></i>
                        <h4 class="card-title text-info">My Task</h4>
                        <p class="card-text text-body">Lihat untuk tugas-tugas Yuwaraja XVI sesuai dengan cluster
                            masing-masing</p>
                    </div>
                    <div class="ml-3 d-flex align-items-center">
                        <img src="/images/tugas-saya.png" alt="Description" style="max-width: 100px; height: auto;">
                    </div>
                    <span class="stretched-link"></span>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('second', ['clusters', 'clusters']) }}" class="text-decoration-none">
                <div class="card card-body d-flex flex-row align-items-center" style="height: 200px;">
                    <div class="flex-grow-1">
                        <i class="fas fa-users text-warning noti-icon mb-2"></i>
                        <h4 class="card-title text-warning">My Cluster</h4>
                        <p class="card-text text-body">Lihat untuk cluster anda di Yuwaraja XVI sesuai dengan yang sudah
                            dibagi</p>
                    </div>
                    <div class="ml-3 d-flex align-items-center">
                        <img src="/images/group-cluster.png" alt="Description" style="max-width: 110px; height: auto;">
                    </div>
                    <span class="stretched-link"></span>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('second', ['rank', 'ranks']) }}" class="text-decoration-none">
                <div class="card card-body d-flex flex-row align-items-center" style="height: 200px;">
                    <div class="flex-grow-1">
                        <i class="fas fa-medal text-success noti-icon mb-2"></i>
                        <h4 class="card-title text-success">Ranking</h4>
                        <p class="card-text text-body">Lihat untuk rank kalian di Yuwaraja XVI sesuai dengan nilai tugas dan
                            penilaian lainnya</p>
                    </div>
                    <div class="ml-3 d-flex align-items-center">
                        <img src="/images/my-rank.png" alt="Description" style="max-width: 120px; height: auto;">
                    </div>
                    <span class="stretched-link"></span>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card" style="height: 300px;">
                <h5 class="card-header">
                    <i class="mdi mdi-progress-check me-2"></i> TASK PROGRESS
                </h5>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Berikut adalah progress chart terkini tugas anda Yuwaraja XVI</h5>

                    <div class="widget-chart-box-1 mx-auto" dir="ltr">
                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050"
                            data-bgColor="#F9B9B9" value="{{ $progressPercentage }}" data-skin="tron" data-angleOffset="180"
                            data-readOnly="true" data-thickness=".15" />
                    </div>

                    <hr class="my-3">

                    <div class="mt-auto">
                        <a href="{{ route('second', ['task', 'task-list']) }}" class="btn btn-primary border-end-0">
                            Lihat Progress
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card" style="height: 300px;">
                <h5 class="card-header">
                    <i class="mdi mdi-bell-ring me-2"></i> ANNOUNCEMENT
                </h5>
                <div class="card-body">
                    <h5 class="card-title mb-4">Berikut adalah informasi terkini tentang Yuwaraja XVI</h5>
                    @if ($latestAnnouncement)
                        <div class="alert alert-info mb-3" role="alert">
                            <i class="mdi mdi-information-outline me-2"></i>
                            {{ strlen($latestAnnouncement->title) > 95 ? substr($latestAnnouncement->title, 0, 95) . '...' : $latestAnnouncement->title }}
                        </div>
                    @else
                        <div class="alert alert-danger mb-3" role="alert">
                            <i class="mdi mdi-block-helper me-2"></i> Tidak ada <strong>Pengumuman</strong> check untuk
                            lihat pengumuman sebelumnya!
                        </div>
                    @endif
                    <hr class="line-pengumuman" style="margin-top: 42px;">
                    <div class="mt-auto">
                        <a href="{{ route('second', ['announcement', 'announcement-list']) }}"
                            class="btn btn-primary border-end-0">Lihat
                            Pengumuman</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-lg">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="mdi mdi-chart-line me-2"> Task Complete</h4>
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
                    <div id="morris-line-example" style="height: 300px;" class="morris-chart"
                        data-colors="#4a81d4,#f672a7"></div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('script')
    @vite('resources/js/pages/widgets.init.js')
    @vite(['resources/js/pages/morris.init.js'])
@endsection
