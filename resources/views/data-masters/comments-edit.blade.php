@extends('layouts.vertical', ['page_title' => 'Edit Comment', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/dropify/dist/css/dropify.min.css'])
    @vite(['node_modules/mohithg-switchery/dist/switchery.min.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">
                    <i class="fas fa-comments me-2"></i> EDIT COMMENT
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
                    <form action="{{ route('comments.update', ['id' => $comment->id]) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $comment->id }}">
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomAssignment" class="form-label">Assignment</label>
                                <select class="form-select" id="validationCustomAssignment" name="assignment_id" required>
                                    <option value="">Select Assignment</option>
                                    @foreach ($assignments as $assignment)
                                        <option value="{{ $assignment->id }}"
                                            {{ $comment->assignment_id == $assignment->id ? 'selected' : '' }}>
                                            {{ $assignment->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid assignment.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustomUser" class="form-label">User</label>
                                <select class="form-select" id="validationCustomUser" name="user_id" required>
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ $comment->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid user.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="comment-textarea" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment-textarea" rows="5" name="comment" required>{{ $comment->comment }}</textarea>
                                <div class="invalid-feedback">
                                    Please enter a valid comment.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-warning float-start" type="submit">Update Comment</button>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    @vite('resources/js/pages/widgets.init.js')
    @vite(['resources/js/pages/form-fileuploads.init.js'])
    @vite(['resources/js/pages/form-advanced.init.js'])
@endsection
