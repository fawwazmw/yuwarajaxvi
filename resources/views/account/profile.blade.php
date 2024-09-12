@extends('layouts.vertical', ['page_title' => 'Profile', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/dropify/dist/css/dropify.min.css'])
    @vite(['node_modules/mohithg-switchery/dist/switchery.min.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'])
    <style>
        .avatar-xxxl {
            width: 150px;
            /* Adjust size as needed */
            height: 150px;
            /* Adjust size as needed */
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active mb-1 d-flex align-items-center" id="v-pills-home-tab"
                            href="{{ route('profile.edit') }}" role="tab" aria-selected="true"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-user-alt mr-2"
                                style="font-size: 1rem; margin-right:10px; margin-bottom:2px;"></i> Detail Profile
                        </a>
                        <a class="nav-link d-flex align-items-center" id="v-pills-password-tab"
                            href="{{ route('password.edit') }}" role="tab" aria-selected="false"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-key" style="font-size: 1rem; margin-right:16px; margin-bottom:2px;"></i>
                            Password
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-9">
            <div class="card">
                <h5 class="card-header">
                    <i class="fas fa-user-circle me-2"></i> UPDATE PROFILE
                </h5>
                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ $user->profile_image ? asset($user->profile_image) : asset('/images/users/user-1.jpg') }}"
                        alt="user-img" title="{{ $user->name }}" class="rounded-circle img-thumbnail "
                        style="width: 150px; height: 150px; object-fit: cover;">
                </div>
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
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="profile_image" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control dropify" id="profile_image" name="profile_image"
                                data-default-file="{{ $user->profile_image ? asset($user->profile_image) : asset('/images/users/user-1.jpg') }}" />
                            <div class="form-text">Disarankan memiliki rasio 1 : 1 atau berukuran tidak lebih dari 2MB</div>
                            <div class="alert alert-danger invalid-feedback" role="alert" id="profile_image_error">
                                <i class="mdi mdi-alert-outline me-2"></i> Ukuran File lebih dari <strong>2MB</strong>
                                compress atau ganti image untuk ubah profile image
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationCustomFullName" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fas fa-user-circle"></i></span>
                                        <input type="text" class="form-control" id="validationCustomFullName"
                                            name="name" placeholder="Full Name" value="{{ $user->name }}" required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustomUsername" class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            value="{{ explode('@', $user->email)[0] }}" disabled />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustomNIM" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="validationCustomNIM" name="nim"
                                        placeholder="NIM" value="{{ $user->nim }}" required />
                                    <div class="invalid-feedback">
                                        Please enter a valid NIM.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationCustomEmail" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="far fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="validationCustomEmail"
                                            name="email" placeholder="Email Address" value="{{ $user->email }}"
                                            required />
                                        <div class="invalid-feedback">
                                            Please enter a valid email.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustomPhone" class="form-label">Phone / WhatsApp</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fas fa-phone"></i></span>
                                        <input type="text" class="form-control" id="validationCustomPhone"
                                            name="phone" placeholder="Phone Number" value="{{ $user->phone }}"
                                            required />
                                        <div class="invalid-feedback">
                                            Please enter a valid phone number.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Program Studi</label> <br />
                                    <select class="form-select" name="prodi_id">
                                        <option value="">Nothing</option>
                                        @foreach ($prodi as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $user->prodi->contains($item->id) ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
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
    <script>
        document.getElementById('profile_image').addEventListener('change', function() {
            const file = this.files[0];
            const errorElement = document.getElementById('profile_image_error');
            if (file.size > 2 * 1024 * 1024) {
                errorElement.style.display = 'block';
                this.value = ''; // Clear the file input
            } else {
                errorElement.style.display = 'none';
            }
        });
    </script>
@endsection
