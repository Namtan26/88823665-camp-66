@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" method="post" onsubmit="return myfunction(event)">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Full Name">
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-name">
                                กรุณาระบุข้อมูล name
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="invalid-feedback" id="invalid-pass">
                                รหัสผ่านต้องมีตัวเลข, ตัวพิมพ์เล็ก, ตัวพิมพ์ใหญ่ และมีอย่างน้อย 8 ตัวอักษร
                            </div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="mycheckbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">

                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                        <!-- /.social-auth-links -->
                    </form>
                    <button class="btn" onclick="myfunction()">Click Me</button>
                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        // let $myval
        // var myval2 = "value of myval2"
        // const myval3 = ""

        // console.log("Hello World!")

        // alert("Hellow World!")
        // ALERT("Hellow World!") error

        function myfunction(event) {
        event.preventDefault(); // ป้องกันการ Submit ฟอร์ม ถ้าข้อมูลผิด

        let name = document.getElementById('name');
        let email = document.getElementById('email');
        let password = document.getElementById('password');
        let mycheckbox = document.getElementById('mycheckbox');
        let passError = document.getElementById('invalid-pass');

        let isValid = true; // ใช้เก็บสถานะการตรวจสอบ

        // ตรวจสอบ name
        if (name.value.trim() === "") {
            name.classList.add('is-invalid');
            document.getElementById('invalid-name').innerHTML = "กรุณากรอกชื่อของคุณ";
            isValid = false;
        } else {
            name.classList.remove('is-invalid');
        }

        // ตรวจสอบ email
        if (!email.value.includes('@') || !email.value.includes('.')) {
            email.classList.add('is-invalid');
            alert("กรุณากรอกอีเมลที่ถูกต้อง");
            isValid = false;
        } else {
            email.classList.remove('is-invalid');
        }

        // ตรวจสอบ password
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        if (!passwordPattern.test(password.value)) {
            password.classList.add('is-invalid');
            passError.style.display = "block";
            passError.innerHTML = "รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร ประกอบด้วยตัวพิมพ์เล็ก, ตัวพิมพ์ใหญ่ และตัวเลข";
            isValid = false;
        } else {
            password.classList.remove('is-invalid');
            passError.style.display = "none";
        }

        // ตรวจสอบ checkbox
        if (!mycheckbox.checked) {
            alert("กรุณายอมรับเงื่อนไขก่อนสมัครสมาชิก");
            isValid = false;
        }

        if (isValid) {
            document.querySelector("form").submit();
        }

        return isValid;
    }
        myfunction()
    </script>
@endsection
