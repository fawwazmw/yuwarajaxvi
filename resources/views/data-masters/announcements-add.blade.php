@extends('layouts.vertical', ['page_title' => 'Add Announcement', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">
                    <i class="fas fa-bullhorn me-2"></i> ADD ANNOUNCEMENT
                </h5>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('announcements.store') }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomTitle" class="form-label">Announcement Title</label>
                                <input type="text" class="form-control" id="validationCustomTitle" name="title"
                                    placeholder="Announcement Title" required />
                                <div class="invalid-feedback">
                                    Please enter a valid announcement title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content-textarea" class="form-label">Content</label>
                                <textarea class="form-control" id="content-textarea" rows="5" name="content" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter the announcement content.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary float-start" type="submit">Add Announcement</button>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    @vite('resources/js/pages/widgets.init.js')
@endsection
