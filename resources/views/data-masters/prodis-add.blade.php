@extends('layouts.vertical', ['page_title' => 'Add Prodi', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                    <i class="fas fa-school me-2"></i> ADD PRODI
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
                    <form action="{{ route('prodis.store') }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomName" class="form-label">Prodi Name</label>
                                <input type="text" class="form-control" id="validationCustomName" name="name"
                                    placeholder="Prodi Name" required />
                                <div class="invalid-feedback">
                                    Please enter a valid prodi name.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary float-start" type="submit">Add Prodi</button>
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
