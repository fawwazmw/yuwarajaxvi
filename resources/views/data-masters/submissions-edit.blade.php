@extends('layouts.vertical', ['page_title' => 'Edit Submission', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                    <i class="fas fa-user-circle me-2"></i> EDIT SUBMISSION
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
                    <form action="{{ route('submissions.update', ['id' => $submission->id]) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $submission->id }}">
                        <div class="row">
                            <div class="mb-3">
                                <label for="assignment-select" class="form-label">Assignment</label>
                                <select class="form-select" id="assignment-select" name="assignment_id" required disabled>
                                    <option value="">Select Assignment</option>
                                    @foreach ($assignments as $assignment)
                                        <option value="{{ $assignment->id }}"
                                            {{ $submission->assignment_id == $assignment->id ? 'selected' : '' }}>
                                            {{ $assignment->title }} - Cluster {{ optional($assignment->classRoom)->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid assignment.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="student-select" class="form-label">Student</label>
                                <select class="form-select" id="student-select" name="student_id" required disabled>
                                    <option value="">Select Student</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}"
                                            {{ $submission->student_id == $student->id ? 'selected' : '' }}>
                                            {{ $student->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid student.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content-textarea" class="form-label">Content</label>
                                <textarea class="form-control" id="content-textarea" rows="5" name="content" required readonly>{{ $submission->content }}</textarea>
                                <div class="invalid-feedback">
                                    Please enter the content.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status-select" class="form-label">Status</label>
                                <select class="form-select" id="status-select" name="status" required>
                                    <option value="assigned" {{ $submission->status == 'assigned' ? 'selected' : '' }}>
                                        Assigned</option>
                                    <option value="under review"
                                        {{ $submission->status == 'under review' ? 'selected' : '' }}>Under Review</option>
                                    <option value="approved" {{ $submission->status == 'approved' ? 'selected' : '' }}>
                                        Approved</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid status.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="grade-input" class="form-label">Grade</label>
                                <input type="number" class="form-control" id="grade-input" name="grade"
                                    value="{{ $submission->grade }}" required>
                                <div class="invalid-feedback">
                                    Please enter a valid grade.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-warning float-start" type="submit">Update Submission</button>
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
