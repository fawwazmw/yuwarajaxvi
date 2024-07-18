@extends('layouts.vertical', ['page_title' => 'Task List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    <!-- Quill css -->
    @vite(['node_modules/custombox/dist/custombox.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body taskboard-box">
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

                    <h4 class="header-title mt-0 mb-3 text-primary">Assigned</h4>

                    <ul class="sortable-list list-unstyled taskList" id="upcoming">
                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-tasks text-info" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-danger float-end">1 Day left</span>
                                    <h5 class="mt-0"><a href="{{ route('second', ['task', 'task-details']) }}"
                                            class="text-dark">Membuat Paragraph
                                            tentang Vokasi UB</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-2.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-tasks text-info" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">3 Day left</span>
                                    <h5 class="mt-0"><a href="" class="text-dark">Membuat A Day in my life kegiatan
                                            PKKMB 2024</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-3.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-tasks text-info" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">7 Day left</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Membuat Twibbon di
                                            Instagram</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-4.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-tasks text-info" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">14 Day left</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Membuat Video
                                            Cinematic tentang Vokasi UB</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-5.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div><!-- end col -->


        <div class="col-xl-4">
            <div class="card">
                <div class="card-body taskboard-box">
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

                    <h4 class="header-title mt-0 mb-3 text-warning">Under Review</h4>

                    <ul class="sortable-list list-unstyled taskList" id="inprogress">
                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-exclamation-triangle text-warning" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">Pending</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Membuat Paragraph
                                            tentang Vokasi UB</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-6.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-exclamation-triangle text-warning" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">Pending</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Membuat Video
                                            Cinematic tentang Vokasi UB</a> </h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Username">
                                                    <img src="/images/users/user-7.jpg" alt="img"
                                                        class="avatar-sm rounded-circle">
                                                </a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-exclamation-triangle text-warning" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-warning float-end">Pending</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Membuat Twibbon di
                                            Instagram</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-8.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div><!-- end col -->


        <div class="col-xl-4">
            <div class="card">
                <div class="card-body taskboard-box">
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

                    <h4 class="header-title mt-0 mb-3 text-success">Approve</h4>
                    </h4>

                    <ul class="sortable-list list-unstyled taskList" id="completed">
                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-check-circle text-success" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-success float-end">Completed</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Follow Instagram
                                            Vokasi UB</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-9.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-check-circle text-success" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-success float-end">Completed</span>
                                    <h5><a href="task-details.html" class="text-dark">Membuat papermob</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-1.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-check-circle text-success" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-success float-end">Completed</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Mengerjakan
                                            absensi</a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-2.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="kanban-box">
                                <div class="icon-wrapper float-start">
                                    <i class="fas fa-check-circle text-success" aria-label="Warning Icon"></i>
                                    <label class="ms-2"></label>
                                    <!-- Menggunakan kelas ms-2 untuk memberikan margin kiri ke label -->
                                </div>

                                <div class="kanban-detail">
                                    <span class="badge bg-success float-end">Completed</span>
                                    <h5 class="mt-0"><a href="task-details.html" class="text-dark">Terhubung dengan
                                            Linkedin Vokasi UB</a></a> </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Username">
                                                <img src="/images/users/user-3.jpg" alt="img"
                                                    class="avatar-sm rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div><!-- end col -->

    </div><!-- end row -->
@endsection


@section('script')
    @vite(['resources/js/pages/kanban.init.js'])
@endsection
