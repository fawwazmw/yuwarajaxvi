@extends('layouts.vertical', ['page_title' => 'Update Password'])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link d-flex align-items-center" href="{{ route('profile.edit') }}" role="tab"
                            style="height: 50px; font-size: 1rem;">
                            <i class="fas fa-user-alt" style="font-size: 1rem; margin-right:10px; margin-bottom:2px;"></i>
                            Detail Profile
                        </a>
                        <a class="nav-link active d-flex align-items-center" href="{{ route('password.edit') }}"
                            role="tab" style="height: 50px; font-size: 1rem;">
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
                    <i class="fas fa-key me-2"></i> UPDATE PASSWORD
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
                    <form action="{{ route('password.update') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="current_password" class="form-control"
                                    placeholder="Enter your password" name="current_password" required>
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                                <div class="invalid-feedback">
                                    Please enter your current password.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="new_password" class="form-control"
                                    placeholder="Enter your password" name="new_password" required>
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                                <div class="invalid-feedback">
                                    Please enter your current password.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="new_password_confirmation" class="form-control"
                                    placeholder="Enter your password" name="new_password_confirmation" required>
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                                <div class="invalid-feedback">
                                    Please enter your current password.
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-warning" type="submit">Update Password</button>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/widgets.init.js'])
@endsection
