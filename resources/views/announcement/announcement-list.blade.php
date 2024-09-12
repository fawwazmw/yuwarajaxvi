@extends('layouts.vertical', ['page_title' => 'Announcement List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    <!-- Quill css -->
    @vite(['node_modules/custombox/dist/custombox.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body taskboard-box">

                    <h4 class="header-title mt-0 mb-3 text-primary">Announcement</h4>

                    <ul class="sortable-list list-unstyled taskList" id="upcoming">
                        @foreach ($announcements as $announcement)
                            <li>
                                <div class="kanban-box">
                                    <div class="kanban-detail">
                                        <h5 class="mt-0">
                                            <a href="{{ route('announcements.show', $announcement->id) }}"
                                                class="text-dark">
                                                {{ $announcement->title }}
                                            </a>
                                        </h5>
                                        <ul class="list-inline">
                                            <p>{{ strlen($announcement->content) > 300 ? substr($announcement->content, 0, 300) : $announcement->content }}</p>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div><!-- end col -->

    </div><!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/kanban.init.js'])
@endsection
