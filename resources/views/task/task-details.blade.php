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

                    @php
                        $userSubmission = $assignment->submissions->firstWhere('student_id', auth()->id());
                    @endphp

                    <div class="attached-files mt-3">
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <div class="text-end">
                                    @if ($userSubmission)
                                        <!-- Tombol Edit Submission -->
                                        <button type="button" class="btn btn-primary" id="editSubmissionBtn">Edit
                                            Submission</button>
                                        <!-- Tombol Delete Submission -->
                                        <button type="button" class="btn btn-danger"
                                            id="deleteSubmissionBtn">Delete</button>
                                    @else
                                        <!-- Tombol Add Submission -->
                                        <button type="button" class="btn btn-primary" id="addSubmissionBtn">Add
                                            Submission</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form untuk menambah submission -->
                    <div class="submission-form d-none" id="addSubmissionForm">
                        <h5>Submit Your Answer</h5>
                        <form id="addSubmissionFormElement" action="{{ route('user.submissions.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                            <div class="mb-3">
                                <label for="addContent" class="form-label">Content</label>
                                <textarea class="form-control" id="addContent" name="content" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-light" id="cancelAddSubmissionBtn">Cancel</button>
                        </form>
                        <div class="alert alert-success mt-3 d-none" id="addSubmissionSuccessMessage">
                            Submission added successfully!
                        </div>
                        <div class="alert alert-danger mt-3 d-none" id="addSubmissionErrorMessage">
                            Submission failed!
                        </div>
                    </div>

                    <!-- Form untuk mengedit submission -->
                    <div class="submission-form d-none" id="editSubmissionForm">
                        <h5>Edit Your Answer</h5>
                        <form id="editSubmissionFormElement"
                            action="{{ route('user.submissions.update', $userSubmission->id ?? '') }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                            <div class="mb-3">
                                <label for="editContent" class="form-label">Content</label>
                                <textarea class="form-control" id="editContent" name="content" rows="3">{{ $userSubmission->content ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-light" id="cancelEditSubmissionBtn">Cancel</button>
                        </form>
                        <div class="alert alert-success mt-3 d-none" id="editSubmissionSuccessMessage">
                            Submission updated successfully!
                        </div>
                        <div class="alert alert-danger mt-3 d-none" id="editSubmissionErrorMessage">
                            Submission failed!
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addSubmissionBtn = document.getElementById('addSubmissionBtn');
            const editSubmissionBtn = document.getElementById('editSubmissionBtn');
            const addSubmissionForm = document.getElementById('addSubmissionForm');
            const editSubmissionForm = document.getElementById('editSubmissionForm');
            const cancelAddSubmissionBtn = document.getElementById('cancelAddSubmissionBtn');
            const cancelEditSubmissionBtn = document.getElementById('cancelEditSubmissionBtn');
            const deleteSubmissionBtn = document.getElementById('deleteSubmissionBtn');
            const addSubmissionSuccessMessage = document.getElementById('addSubmissionSuccessMessage');
            const addSubmissionErrorMessage = document.getElementById('addSubmissionErrorMessage');
            const editSubmissionSuccessMessage = document.getElementById('editSubmissionSuccessMessage');
            const editSubmissionErrorMessage = document.getElementById('editSubmissionErrorMessage');
            const userSubmission = @json($userSubmission);

            if (addSubmissionBtn) {
                addSubmissionBtn.addEventListener('click', function() {
                    addSubmissionForm.classList.remove('d-none');
                    addSubmissionBtn.classList.add('d-none');
                });
            }

            if (editSubmissionBtn) {
                editSubmissionBtn.addEventListener('click', function() {
                    editSubmissionForm.classList.remove('d-none');
                    editSubmissionBtn.classList.add('d-none');
                    if (deleteSubmissionBtn) {
                        deleteSubmissionBtn.classList.add('d-none');
                    }
                });
            }

            if (cancelAddSubmissionBtn) {
                cancelAddSubmissionBtn.addEventListener('click', function() {
                    addSubmissionForm.classList.add('d-none');
                    addSubmissionBtn.classList.remove('d-none');
                });
            }

            if (cancelEditSubmissionBtn) {
                cancelEditSubmissionBtn.addEventListener('click', function() {
                    editSubmissionForm.classList.add('d-none');
                    editSubmissionBtn.classList.remove('d-none');
                    if (deleteSubmissionBtn) {
                        deleteSubmissionBtn.classList.remove('d-none');
                    }
                });
            }

            if (deleteSubmissionBtn) {
                deleteSubmissionBtn.addEventListener('click', function() {
                    if (confirm('Are you sure you want to delete this submission?')) {
                        fetch(`{{ route('user.submissions.destroy', $userSubmission->id ?? '') }}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                                        .value,
                                    'Accept': 'application/json',
                                }
                            })
                            .then(response => {
                                if (response.ok) {
                                    return response.json();
                                } else {
                                    throw new Error('Network response was not ok.');
                                }
                            })
                            .then(data => {
                                if (data.success) {
                                    editSubmissionForm.reset();
                                    editSubmissionForm.classList.add('d-none');
                                    addSubmissionBtn.textContent = 'Add Submission';
                                    addSubmissionBtn.classList.remove('d-none');
                                    if (deleteSubmissionBtn) {
                                        deleteSubmissionBtn.classList.add('d-none');
                                    }
                                    alert('Submission deleted successfully.');
                                } else {
                                    editSubmissionErrorMessage.textContent = data.message ||
                                        'Failed to delete submission.';
                                    editSubmissionErrorMessage.classList.remove('d-none');
                                    setTimeout(() => {
                                        editSubmissionErrorMessage.classList.add('d-none');
                                    }, 2000);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                editSubmissionErrorMessage.textContent =
                                    'An error occurred. Please try again. ' + error.message;
                                editSubmissionErrorMessage.classList.remove('d-none');
                                setTimeout(() => {
                                    editSubmissionErrorMessage.classList.add('d-none');
                                }, 2000);
                            });
                    }
                });
            }

            document.getElementById('addSubmissionFormElement').addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch(this.action, {
                        method: this.method,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json',
                        },
                        body: formData,
                    })
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw new Error('Network response was not ok.');
                        }
                    })
                    .then(data => {
                        if (data.success) {
                            addSubmissionSuccessMessage.classList.remove('d-none');
                            setTimeout(function() {
                                addSubmissionSuccessMessage.classList.add('d-none');
                                addSubmissionForm.classList.add('d-none');
                                addSubmissionBtn.textContent = 'Edit Submission';
                                addSubmissionBtn.classList.remove('d-none');
                            }, 2000);
                        } else {
                            addSubmissionErrorMessage.textContent = data.message ||
                                'Submission failed.';
                            addSubmissionErrorMessage.classList.remove('d-none');
                            setTimeout(() => {
                                addSubmissionErrorMessage.classList.add('d-none');
                            }, 2000);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        addSubmissionErrorMessage.textContent =
                            'An error occurred. Please try again. ' + error.message;
                        addSubmissionErrorMessage.classList.remove('d-none');
                        setTimeout(() => {
                            addSubmissionErrorMessage.classList.add('d-none');
                        }, 2000);
                    });
            });

            document.getElementById('editSubmissionFormElement').addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch(this.action, {
                        method: this.method,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json',
                        },
                        body: formData,
                    })
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw new Error('Network response was not ok.');
                        }
                    })
                    .then(data => {
                        if (data.success) {
                            editSubmissionSuccessMessage.classList.remove('d-none');
                            setTimeout(function() {
                                editSubmissionSuccessMessage.classList.add('d-none');
                                editSubmissionForm.classList.add('d-none');
                                editSubmissionBtn.classList.remove('d-none');
                                if (deleteSubmissionBtn) {
                                    deleteSubmissionBtn.classList.remove('d-none');
                                }
                            }, 2000);
                        } else {
                            editSubmissionErrorMessage.textContent = data.message ||
                                'Submission failed.';
                            editSubmissionErrorMessage.classList.remove('d-none');
                            setTimeout(() => {
                                editSubmissionErrorMessage.classList.add('d-none');
                            }, 2000);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        editSubmissionErrorMessage.textContent =
                            'An error occurred. Please try again. ' + error.message;
                        editSubmissionErrorMessage.classList.remove('d-none');
                        setTimeout(() => {
                            editSubmissionErrorMessage.classList.add('d-none');
                        }, 2000);
                    });
            });
        });
    </script>
@endsection
