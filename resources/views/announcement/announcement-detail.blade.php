{{-- resources/views/announcement/announcement-detail.blade.php --}}

@extends('layouts.vertical', ['page_title' => 'Announcement Details', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    <!-- Quill css -->
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body task-detail">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="col-sm-12 text-center">
                            <img src="{{ asset(substr($announcement->announcement_image, 0, 7) . '/public' . substr($announcement->announcement_image, 7)) }}" alt="image"
     class="img-fluid rounded" />

                        </div>
                    </div>

                    <div class="row task-dates mb-0 mt-2">
                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Tanggal Up Announcement</h5>
                            <p>{{ $announcement->created_at->format('d F Y') }} <small
                                    class="text-muted">{{ $announcement->created_at->format('h:i A') }}</small></p>
                        </div>
                    </div>

                    <h4 class="text-center">{{ $announcement->title }}</h4>

                    <p class="text-muted">
                        {!! nl2br(e($announcement->content)) !!}
                    </p>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>

    <!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/task-detail.init.js'])
@endsection
