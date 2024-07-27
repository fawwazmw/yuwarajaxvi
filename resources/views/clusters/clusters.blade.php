@extends('layouts.vertical', ['page_title' => 'Clusters', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="container-fluid">
        @if ($classes->isEmpty())
            <div class="row">
                <div class="col-sm-4">
                    <button class="btn btn-purple rounded-pill w-md waves-effect waves-light mb-3" data-bs-toggle="modal"
                        data-bs-target="#joinClusterModal">
                        <i class="mdi mdi-plus"></i> Join Cluster
                    </button>
                </div>
            </div>
            <div class="row justify-content-center align-items-center" style="padding-top: 250px;">
                <div class="col-xl-4">
                    <div class="alert alert-danger" role="alert">
                        Anda belum join cluster, silahkan masukan code cluster anda.
                    </div>
                </div>
            </div>
        @else
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                @foreach ($classes as $class)
                    <div class="col-xl-4 mb-4">
                        <div class="card">
                            <div class="card-body project-box">
                                <h4 class="mt-0"><a href="#" class="text-dark">Cluster {{ $class->name }}
                                    </a></h4>
                                <p class="text-success text-uppercase font-13">{{ $class->teacher_name }}</p>
                                <p class="text-muted font-13">{{ Str::limit($class->description, 100, '...') }}<a
                                        href="#" class="text-primary"> View more</a></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0">{{ $class->students_count }}</h4>
                                        <p class="text-muted">Members</p>
                                    </li>
                                    <li class="list-inline-item me-4">
                                        <h4 class="mb-0">{{ $class->assignments_count }}</h4>
                                        <p class="text-muted">Tasks</p>
                                    </li>
                                </ul>
                                <form action="{{ route('user.clusters.leave', $class->id) }}" method="POST" class="mt-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Leave Cluster</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- end col-->
                @endforeach
            </div><!-- end row -->
        @endif

        <!-- Join Cluster Modal -->
        <div class="modal fade" id="joinClusterModal" tabindex="-1" aria-labelledby="joinClusterModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="joinClusterModalLabel">Join Cluster</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="joinClusterForm" action="{{ route('user.clusters.join') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="class_code" class="form-label">Class Code</label>
                                <input type="text" class="form-control" id="class_code" name="class_code" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Join</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

    </div><!-- end container -->
@endsection
