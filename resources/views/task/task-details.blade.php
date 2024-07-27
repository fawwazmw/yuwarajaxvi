@extends('layouts.vertical', ['page_title' => 'Task Details', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body task-detail">
                    <div class="d-flex mb-3">
                        <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64"
                            src="{{ $assignment->classRoom->teacher->profile_image }}">
                        <div class="flex-grow-1">
                            <h4 class="media-heading mt-0">{{ $assignment->classRoom->teacher->name }}</h4>
                            <span class="badge bg-danger">{{ $assignment->due_date->diffForHumans() }}</span>
                        </div>
                    </div>

                    <h4>{{ $assignment->title }}</h4>

                    <p class="text-muted">{{ $assignment->description }}</p>

                    <div class="row task-dates mb-0 mt-2">
                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Start Date</h5>
                            <p> {{ $assignment->created_at->format('d F Y') }} <small
                                    class="text-muted">{{ $assignment->created_at->format('h:i A') }}</small></p>
                        </div>

                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Due Date</h5>
                            <p> {{ $assignment->due_date->format('d F Y') }} <small
                                    class="text-muted">{{ $assignment->due_date->format('h:i A') }}</small></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="attached-files mt-3">
                        <h5>Attached Files </h5>
                        <ul class="list-inline files-list">
                            @foreach ($assignment->submissions as $submission)
                                <li class="list-inline-item file-box">
                                    <a href="{{ $submission->file_path }}" target="_blank">
                                        <img src="{{ $submission->file_thumbnail }}" class="img-fluid img-thumbnail"
                                            alt="attached-img" width="80">
                                    </a>
                                    <p class="font-13 mb-1 text-muted"><small>{{ $submission->file_name }}</small></p>
                                </li>
                            @endforeach
                            <li class="list-inline-item file-box ms-2">
                                <div class="fileupload add-new-plus">
                                    <span><i class="mdi-plus mdi"></i></span>
                                    <input type="file" class="upload">
                                </div>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light me-1">
                                        Save
                                    </button>
                                    <button type="button" class="btn btn-light waves-effect">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
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

                    <h4 class="header-title mt-0 mb-3">Comments ({{ $assignment->comments->count() }})</h4>

                    <div>
                        @foreach ($assignment->comments as $comment)
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64"
                                            src="{{ $comment->user->profile_image }}"> </a>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">{{ $comment->user->name }}</h5>
                                    <p class="font-13 text-muted mb-0">
                                        <a href="" class="text-primary">{{ '@' . $comment->user->name }}</a>
                                        {{ $comment->comment }}
                                    </p>
                                    <a href="" class="text-success font-13">Reply</a>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64"
                                        src="{{ auth()->user()->profile_image }}"> </a>
                            </div>
                            <div class="flex-grow-1">
                                <form action="{{ route('comments.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                                    <input type="text" class="form-control" name="comment"
                                        placeholder="Add a comment...">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/task-detail.init.js'])
@endsection
