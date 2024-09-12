@extends('layouts.vertical', ['page_title' => 'Task List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/custombox/dist/custombox.min.css'])
@endsection

@section('content')
    <div class="row">
        @foreach (['assigned', 'under review', 'approved'] as $status)
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body taskboard-box">
                        <h4
                            class="header-title mt-0 mb-3
                            @if ($status == 'assigned') text-primary
                            @elseif ($status == 'under review') text-warning
                            @elseif ($status == 'approved') text-success @endif">
                            {{ ucfirst($status) }}
                        </h4>
                        <ul class="sortable-list list-unstyled taskList"
                            id="task-list-{{ strtolower(str_replace(' ', '-', $status)) }}">
                            @foreach ($userAssignments as $userAssignment)
                                @if ($userAssignment->status == $status)
                                    <li>
                                        <div class="kanban-box">
                                            <div class="icon-wrapper float-start">
                                                <i class="fas fa-tasks text-info" aria-label="Warning Icon"></i>
                                                <label class="ms-2"></label>
                                            </div>
                                            <div class="kanban-detail">
                                                <span
                                                    class="badge float-end
                                                    @if ($status == 'assigned') bg-danger
                                                    @elseif ($status == 'under review') bg-warning
                                                    @elseif ($status == 'approved') bg-success @endif">
                                                    @if ($status == 'under review')
                                                        Under Review
                                                    @elseif ($status == 'approved')
                                                        Approved
                                                    @else
                                                        {{ $userAssignment->assignment->due_date->diffForHumans() }}
                                                    @endif
                                                </span>
                                                <h5 class="mt-0">
                                                    <a href="{{ route('tasks.show', Crypt::encryptString($userAssignment->assignment->id)) }}"
                                                        class="text-dark">{{ $userAssignment->assignment->title }}</a>
                                                </h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="{{ $userAssignment->assignment->classRoom->teacher->name }}">
                                                            <img src="{{ $userAssignment->assignment->classRoom->teacher->profile_image ? asset($userAssignment->assignment->classRoom->teacher->profile_image) : asset('/images/users/user-1.jpg') }}" title="{{ $userAssignment->assignment->classRoom->teacher->name }}"
                                                                alt="img" class="avatar-sm rounded-circle">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/kanban.init.js'])
@endsection
