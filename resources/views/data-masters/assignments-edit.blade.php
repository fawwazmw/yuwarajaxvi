@extends('layouts.vertical', ['page_title' => 'Add Assignment', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                    <i class="fas fa-user-circle me-2"></i> EDIT ASSIGNMENT
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
                    <form action="{{ route('assignments.update', ['id' => $assignment->id]) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="validationCustomTitle" name="title"
                                    placeholder="Title" value="{{ old('title', $assignment->title) }}" required />
                                <div class="invalid-feedback">
                                    Please enter a valid title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="description-textarea" rows="5" name="description">{{ old('description', $assignment->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Class</label>
                                <select class="form-select" id="validationCustomClass" name="class_id" required>
                                    <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}"
                                            {{ old('class_id', $assignment->class_id) == $class->id ? 'selected' : '' }}>
                                            {{ $class->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid class.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustomDueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="validationCustomDueDate" name="due_date"
                                    value="{{ old('due_date', \Carbon\Carbon::parse($assignment->due_date)->format('Y-m-d')) }}"
                                    required />
                                <div class="invalid-feedback">
                                    Please select a valid due date.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning float-start" type="submit">Update Assignment</button>
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
