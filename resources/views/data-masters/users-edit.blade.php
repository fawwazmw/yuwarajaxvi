@extends('layouts.vertical', ['page_title' => 'Edit User', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                    <i class="fas fa-user-circle me-2"></i> EDIT USER
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
                    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="row">
                            <div class="mb-3">
                                <label for="validationCustomPhone" class="form-label">Phone / WhatsApp</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-phone"></i></span>
                                    <input type="text" class="form-control" id="validationCustomPhone" name="phone"
                                        placeholder="Phone Number" value="{{ $user->phone }}" required />
                                    <div class="invalid-feedback">
                                        Please enter a valid phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Program Studi</label> <br />
                                <select class="form-select" id="validationCustomProdi" name="prodi_id">
                                    <option value="">Nothing</option>
                                    @foreach ($prodi as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $user->prodi->contains($item->id) ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Group Cluster</label> <br />
                                <select class="form-select" name="class_id">
                                    <option value="">Nothing</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}"
                                            {{ $user->classes->contains($class->id) ? 'selected' : '' }}>
                                            {{ $class->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label> <br />
                                <select class="form-select" name="role">
                                    <option value="">Select Role</option>
                                    @foreach (['admin' => 'Admin', 'teacher' => 'SPV', 'student' => 'Mahasiswa'] as $role => $label)
                                        <option value="{{ $role }}" {{ $user->role == $role ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description-textarea" class="form-label">Deskripsi Diri</label>
                            <textarea class="form-control" id="description-textarea" rows="5" name="description">{{ $user->description }}</textarea>
                        </div>
                        <button class="btn btn-warning" type="submit">Update Profile</button>
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
