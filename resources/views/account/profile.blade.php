@extends('layouts.vertical', ['page_title' => 'Profile', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/dropify/dist/css/dropify.min.css'])
    @vite(['node_modules/mohithg-switchery/dist/switchery.min.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'])
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active show mb-1 d-flex align-items-center" id="v-pills-home-tab"
                            data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                            aria-selected="true" style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-user-alt mr-2"
                                style="font-size: 1rem; margin-right:10px; margin-bottom:2px;"></i> Detail
                            Profile
                        </a>
                        <a class="nav-link mb-1 d-flex align-items-center" id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-user-edit" style="font-size: 1rem; margin-right:8px; margin-bottom:2px;"></i>
                            Personal Data</a>
                        <a class="nav-link mb-1 d-flex align-items-center" id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fab fa-cloudsmith" style="font-size: 1rem; margin-right:18px; margin-bottom:2px;"></i>
                            Social Media</a>
                        <a class="nav-link d-flex align-items-center" id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-key" style="font-size: 1rem; margin-right:16px; margin-bottom:2px;"></i>
                            Password</a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-9">
            <div class="card">
                <h5 class="card-header">

                    <i class="fas fa-user-circle me-2"></i> UPDATE PROFILE <!-- Updated icon to represent progress -->
                </h5>
                <div class="d-flex justify-content-center mt-4">
                    <img src="/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-thumbnail avatar-xxxl">
                </div>
                <div class="card-body">
                    <h4 class="header-title">Profile Picture</h4>
                    <p class="sub-header">
                        Ini adalah photo profile yang akan terlihat oleh semua mahasiswa.
                    </p>

                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                        data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                            <h3>Drop files here or click to upload.</h3>
                        </div>
                    </form>

                    <div class="alert alert-info mt-3 text-xl" role="alert">
                        <i class="mdi mdi-alert-circle-outline me-2"></i> Foto Profil disarankan memiliki rasio <strong>1 :
                            1</strong> atau berukuran tidak lebih dari 1MB
                    </div>

                    <!-- Preview -->
                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                    <!-- file preview template -->
                    <div class="d-none" id="uploadPreviewTemplate">
                        <div class="card mt-1 mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light"
                                            alt="">
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                        <p class="mb-0" data-dz-size></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                            <i class="dripicons-cross"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3"> <!-- Added horizontal line -->

                </div> <!-- end card-body-->
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationCustomFullName" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fas fa-user-circle"></i></span>
                                        <input type="text" class="form-control" id="validationCustomFullName"
                                            placeholder="Full Name" value="" required />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustomUsername" class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required />
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustomNIM" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="validationCustomNIM"
                                        placeholder="NIM" aria-describedby="inputGroupPrepend" required />
                                    <div class="invalid-feedback">
                                        Please enter .
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="validationCustomEmail" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="far fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="validationCustomEmail"
                                            placeholder="Email Address" aria-describedby="inputGroupPrepend" required />
                                        <div class="invalid-feedback">
                                            Please enter email.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustomPhone" class="form-label">Phone / WhatsApp</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fas fa-phone"></i></span>
                                        <input type="text" class="form-control" id="validationCustomPhone"
                                            placeholder="Phone Number" aria-describedby="inputGroupPrepend" required />
                                        <div class="invalid-feedback">
                                            Please enter email.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Group Cluster</label> <br />
                                    <select id="selectize-select">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Batu</option>
                                        <option value="2">Malang</option>
                                        <option value="3">Purwokerto</option>
                                        <option value="4">Banyumas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description-textarea" class="form-label">Deskripsi Diri</label>
                            <textarea class="form-control" id="description-textarea" rows="5"></textarea>
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
