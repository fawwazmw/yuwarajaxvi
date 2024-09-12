@extends('layouts.vertical', ['page_title' => 'Submission', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css', 'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.css', 'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.css', 'node_modules/datatables.net-select-bs5/css/select.bootstrap5.css'])
@endsection

@section('content')
    @if (Auth::user()->role !== 'student')
        <div class="row">
            <div class="col-12">
                <div class="card">
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

                        @if (Auth::user()->role !== 'student' && Auth::user()->role !== 'teacher')
                            <a href="{{ route('submissions.create') }}"
                                class="btn btn-purple rounded-pill w-md waves-effect waves-light mb-3 float-end">
                                <i class="mdi mdi-plus"></i> Add Submission
                            </a>
                        @endif

                        <h4 class="mt-0 header-title">Submissions</h4>
                        <p class="text-muted font-14 mb-3">
                            List of submissions.
                        </p>

                        <!-- Membuat tabel menjadi responsif -->
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Assignment</th>
                                        <th>Cluster</th>
                                        <th>Student</th>
                                        <th>Content</th>
                                        <th>Submitted At</th>
                                        <th>Status</th>
                                        <th>Grade</th>
                                        <th>Edit</th>
                                        @if (Auth::user()->role !== 'student' && Auth::user()->role !== 'teacher')
                                            <th>Delete</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                     @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($submissions as $submission)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $submission->assignment->title }}</td>
                                            <td>{{ $submission->assignment->classRoom->name }}</td>
                                            <td>{{ $submission->student->name }}</td>
                                            <td>{{ strlen($submission->content) > 50 ? substr($submission->content, 0, 50) : $submission->content }}</td>
                                            <td>{{ $submission->updated_at }}</td>
                                            <td>{{ $submission->status }}</td>
                                            <td>{{ $submission->grade }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('submissions.edit', ['id' => $submission->id]) }}"
                                                    class="btn btn-warning btn-sm waves-effect waves-light"><i
                                                        class="mdi mdi-pencil"></i></a>
                                            </td>
                                            @if (Auth::user()->role !== 'student' && Auth::user()->role !== 'teacher')
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm waves-effect waves-light delete-btn"
                                                        data-id="{{ $submission->id }}"><i
                                                            class="mdi mdi-close"></i></button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- End table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    @else
        @php
            abort(404);
        @endphp
    @endif
@endsection

@section('script')
    @vite(['resources/js/pages/datatables.init.js'])
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const submissionId = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this submission?')) {
                        fetch(`/submissions/${submissionId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    setTimeout(() => {
                                        location.reload();
                                    }, 2000);
                                }
                            });
                    }
                });
            });
        });
    </script>
@endsection
