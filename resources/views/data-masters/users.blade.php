@extends('layouts.vertical', ['page_title' => 'Data User', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                        <h4 class="mt-0 header-title">Data User</h4>
                        <p class="text-muted font-14 mb-3">
                            Ini adalah kumpulan dari data user yang daftar campur mau SPV, Admin, dan Mahasiswa
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>NIM</th>
                                    <th>Email</th>
                                    <th>Program Studi</th>
                                    <th>Cluster</th>
                                    <th>Role</th>
                                    <th>Phone / WhatsApp</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nim }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($user->prodi as $item)
                                                {{ $item->name }}@if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($user->classes as $class)
                                                {{ $class->name }}@if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($user->role == 'admin')
                                                Admin
                                            @elseif($user->role == 'teacher')
                                                SPV
                                            @elseif($user->role == 'student')
                                                Mahasiswa
                                            @endif
                                        </td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                                                class="btn btn-warning btn-sm waves-effect waves-light edit-btn"><i
                                                    class="mdi mdi-pencil"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"
                                                class="btn btn-danger btn-sm waves-effect waves-light delete-btn"
                                                data-id="{{ $user->id }}"><i class="mdi mdi-close"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                    const userId = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this user?')) {
                        fetch(`/users/delete/${userId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    location.reload();
                                } else {
                                    alert('An error occurred while deleting the user.');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred while deleting the user.');
                            });
                    }
                });
            });
        });
    </script>
@endsection
