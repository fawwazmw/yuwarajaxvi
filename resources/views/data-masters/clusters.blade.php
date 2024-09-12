@extends('layouts.vertical', ['page_title' => 'Data Cluster', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css', 'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.css', 'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.css', 'node_modules/datatables.net-select-bs5/css/select.bootstrap5.css'])
@endsection

@section('content')
    @if (Auth::user()->role !== 'student' && Auth::user()->role !== 'teacher')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="message-container"></div>
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
                        <a href="{{ route('clusters.create') }}"
                            class="btn btn-purple rounded-pill w-md waves-effect waves-light mb-3 float-end">
                            <i class="mdi mdi-plus"></i> Add Cluster
                        </a>
                        <h4 class="mt-0 header-title">Data Cluster</h4>
                        <p class="text-muted font-14 mb-3">
                            Ini adalah kumpulan dari data cluster yang dimana bisa tambah dan edit
                        </p>

                        <!-- Membuat tabel menjadi responsif -->
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>SPV</th>
                                        <th>Member Cluster</th>
                                        <th>Class Code</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($classes as $class)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ strlen($class->description) > 50 ? substr($class->description, 0, 50) . '...' : $class->description }}</td>
                                            <td>{{ $class->teacher_name }}</td>
                                            <td>{{ $class->students_count }}</td>
                                            <td>{{ $class->class_code }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('clusters.edit', ['id' => $class->id]) }}"
                                                    class="btn btn-warning btn-sm waves-effect waves-light edit-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm waves-effect waves-light delete-btn"
                                                    data-id="{{ $class->id }}"><i class="mdi mdi-close"></i></button>
                                            </td>
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
                    const classId = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this cluster?')) {
                        fetch(`{{ route('clusters.destroy', ['id' => ':id']) }}`.replace(':id',
                                classId), {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                console.log(data); // Cek response untuk debugging
                                if (data.success) {
                                    window.location.href = "{{ route('clusters.index') }}";
                                }
                            })
                            .catch(error => {
                                console.error('There was an error:', error);
                            });
                    }
                });
            });
        });
    </script>
@endsection
