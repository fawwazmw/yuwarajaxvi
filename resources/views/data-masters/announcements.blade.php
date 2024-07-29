@extends('layouts.vertical', ['page_title' => 'Announcements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css', 'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.css', 'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.css', 'node_modules/datatables.net-select-bs5/css/select.bootstrap5.css'])
@endsection

@section('content')
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

                    <a href="{{ route('announcements.create') }}"
                        class="btn btn-purple rounded-pill w-md waves-effect waves-light mb-3 float-end">
                        <i class="mdi mdi-plus"></i> Add Announcement
                    </a>

                    <h4 class="mt-0 header-title">Announcements</h4>
                    <p class="text-muted font-14 mb-3">
                        List of announcements.
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($announcements as $announcement)
                                <tr>
                                    <td>{{ $announcement->title }}</td>
                                    <td>{{ Str::limit($announcement->content, 50) }}</td>
                                    <td>{{ $announcement->created_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('announcements.edit', $announcement->id) }}"
                                            class="btn btn-warning btn-sm waves-effect waves-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-danger btn-sm waves-effect waves-light delete-btn"
                                            data-id="{{ $announcement->id }}"><i class="mdi mdi-close"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/datatables.init.js'])
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const announcementId = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this announcement?')) {
                        fetch(`/data-masters/announcements/${announcementId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    displayMessage('success', data.success);
                                    setTimeout(() => {
                                        location.reload();
                                    }, 2000);
                                } else if (data.error) {
                                    displayMessage('danger', data.error);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred while deleting the announcement.');
                            });
                    }
                });
            });

            function displayMessage(type, message) {
                const messageContainer = document.getElementById('message-container');
                messageContainer.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
            }
        });
    </script>
@endsection
