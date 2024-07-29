@extends('layouts.vertical', ['page_title' => 'Edit Announcement', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">
                    <i class="fas fa-bullhorn me-2"></i> EDIT ANNOUNCEMENT
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
                    <form action="{{ route('announcements.update', ['announcement' => $announcement->id]) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $announcement->id }}">
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="validationCustomTitle" name="title"
                                    placeholder="Title" value="{{ $announcement->title }}" required />
                                <div class="invalid-feedback">
                                    Please enter a valid title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content-textarea" class="form-label">Content</label>
                                <textarea class="form-control" id="content-textarea" rows="5" name="content" required>{{ $announcement->content }}</textarea>
                                <div class="invalid-feedback">
                                    Please enter the announcement content.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-warning float-start" type="submit">Update Announcement</button>
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
