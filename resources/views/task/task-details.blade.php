@extends('layouts.vertical', ['page_title' => 'Task Details', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    <!-- Quill css -->
    @vite(['node_modules/dropzone/dist/min/dropzone.min.css', 'node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css', 'node_modules/multiselect/css/multi-select.css', 'node_modules/select2/dist/css/select2.css', 'node_modules/selectize/dist/css/selectize.bootstrap3.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body task-detail">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64"
                            src="/images/users/user-2.jpg">
                        <div class="flex-grow-1">
                            <h4 class="media-heading mt-0">Fawwaz Mufid Wardaya</h4>
                            <span class="badge bg-danger">1 Day left</span>
                        </div>
                    </div>

                    <h4>Membuat Paragraph tentang Vokasi UB</h4>

                    <p class="text-muted">
                        Buatakan minimal 1000 kata untuk paragraph yang menggambarkan tentang Vokasi UB, tidak diperbolehkan
                        menggunakan AI, jika ketahuan akan gagal dalam Yuwaraja XVI
                    </p>

                    <p class="text-muted">
                        Aspek penilaian, dinilai dari bagaimana kalian menjelaskan dengan baik dan juga sesuai dengan data
                        yang sebenarnya di Vokasi UB
                    </p>

                    <div class="row task-dates mb-0 mt-2">
                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Task Created</h5>
                            <p> 16 July 2024 <small class="text-muted">1:00 PM</small></p>
                        </div>

                        <div class="col-lg-6">
                            <h5 class="font-600 m-b-5">Due Date</h5>
                            <p> 20 July 2024 <small class="text-muted">12:00 PM</small></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="attached-files mt-3">
                        <h5>Attached Files </h5>
                        <ul class="list-inline files-list">
                            <li class="list-inline-item file-box">
                                <a href=""><img src="/images/attached-files/img-1.jpg"
                                        class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                <p class="font-13 mb-1 text-muted"><small>File one</small></p>
                            </li>
                            <li class="list-inline-item file-box">
                                <a href=""><img src="/images/attached-files/img-2.jpg"
                                        class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                <p class="font-13 mb-1 text-muted"><small>Attached-2</small></p>
                            </li>
                            <li class="list-inline-item file-box">
                                <a href=""><img src="/images/attached-files/img-3.jpg"
                                        class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                <p class="font-13 mb-1 text-muted"><small>Dribbble shot</small></p>
                            </li>
                            <li class="list-inline-item file-box ms-2">
                                <div class="fileupload add-new-plus">
                                    <span><i class="mdi-plus mdi"></i></span>
                                    <input type="file" class="upload">
                                </div>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light me-1">
                                        Save
                                    </button>
                                    <button type="button" class="btn btn-light waves-effect waves-button-input me-1"
                                        onclick="window.history.back();">Cancel</button>
                                </div>
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
@endsection
