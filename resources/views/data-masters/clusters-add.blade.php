@extends('layouts.vertical', ['page_title' => 'Add Cluster', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                    <i class="fas fa-user-circle me-2"></i> ADD CLUSTER
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
                    <form action="{{ route('clusters.store') }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomName" class="form-label">Cluster Name</label>
                                <input type="text" class="form-control" id="validationCustomName" name="name"
                                    placeholder="Cluster Name" required />
                                <div class="invalid-feedback">
                                    Please enter a valid cluster name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="description-textarea" rows="5" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SPV</label>
                                <select class="form-select" id="validationCustomTeacher" name="teacher_id" required>
                                    <option value="">Select SPV</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button class="btn btn-warning float-start" type="submit">Add Cluster</button>
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
