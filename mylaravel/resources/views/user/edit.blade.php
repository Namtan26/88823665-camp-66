@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href=""><b>Edit</b>User</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Edit User</p>
                    <form action="{{ url('/users') }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="input-group mb-3">
                            <input type="text" value="{{ $user->name }}" name="name" class="form-control"
                                placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" value="{{ $user->email }}" name="email" class="form-control"
                                placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" onclick="confirm_edit()">Save</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                </div>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function confirm_edit() {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "User updated successfully!",
                showConfirmButton: false,
                timer: 1500
            });then(() => {
                document.getElementById('editForm').submit();
            });
        }
    </script>
@endsection
