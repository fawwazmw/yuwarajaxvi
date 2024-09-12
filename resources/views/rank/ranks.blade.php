@extends('layouts.vertical', ['page_title' => 'Rank Mahasiswa', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/tablesaw/dist/tablesaw.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Rank Mahasiswa</h4>
                    <p class="sub-header">
                        Berikut adalah peringkat mahasiswa berdasarkan total grade.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                            <tr>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                    Nama Mahasiswa
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                    data-tablesaw-priority="3">Rank
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Prodi</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Cluster
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Task Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rankedUsers as $rank => $user)
                                @if ($user->role === 'student')
                                    <tr>
                                        <td>
                                            <img src="{{ $user->profile_image ? asset($user->profile_image) : asset('/images/users/user-1.jpg') }}"
                                                alt="{{ $user->name }}" class="img-thumbnail" width="50">
                                            {{ $user->name }}
                                        </td>
                                        <td>{{ $rank + 1 }}</td>
                                        <td>{{ $user->prodi_names }}</td>
                                        <td>{{ $user->class_names }}</td>
                                        <td>{{ $user->total_grade }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/tablesaw.init.js'])
@endsection
