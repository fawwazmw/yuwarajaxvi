@extends('layouts.vertical', ['page_title' => 'Clusters', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <a href="#" class="btn btn-purple rounded-pill w-md waves-effect waves-light mb-3"><i
                        class="mdi mdi-plus"></i> Join Cluster</a>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center align-items-center" style="padding-top: 150px;">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body project-box">
                        <h4 class="mt-0"><a href="#" class="text-dark">Cluster Batu (20)</a></h4>
                        <p class="text-success text-uppercase font-13">Fawwaz Mufid Wardaya</p>
                        <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular
                            than that of the individual languages...<a href="#" class="text-primary">View more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item me-4">
                                <h4 class="mb-0">20</h4>
                                <p class="text-muted">Members</p>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="mb-0">5</h4>
                                <p class="text-muted">Tasks</p>
                            </li>
                        </ul>
                        <div class="project-members mb-2">
                            <h5 class="float-start me-3">Member :</h5>
                            <div class="avatar-group">
                                <a href="#" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Mat Helme">
                                    <img src="/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                </a>

                                <a href="#" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Michael Zenaty">
                                    <img src="/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                </a>

                                <a href="#" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="James Anderson">
                                    <img src="/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                </a>

                                <a href="#" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Mat Helme">
                                    <img src="/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="friend" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-->
        </div>
        <!-- end row -->
    </div><!-- end container -->
@endsection
