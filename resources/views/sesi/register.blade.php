<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body style="background-color: black">
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Register Image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('submit.register') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-4 me-3" style="font-size: 30px; color: #ffff"><strong>Register</strong></p>
                        </div>
                        <div class="mb-2" style="color: #eee">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ Session::get('name')}}" name="name" class="form-control @error('name')is-invalid @enderror">
                        </div>
                        <div class="mb-2" style="color: #eee">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" value="{{ Session::get('username')}}" name="username" class="form-control @error('username')is-invalid @enderror">
                        </div>
                        <div class="mb-2" style="color: #eee">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ Session::get('email')}}" name="email" class="form-control @error('email')is-invalid @enderror">
                        </div>
                        <div class="mb-2" style="color: #eee">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror">
                        </div>
                        <div class="mb-2" style="color: #eee">
                            <label for="re-password" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="re-password" class="form-control @error('re-password')is-invalid @enderror">
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0" style="color: #eee">Already have an account? <a href="{{ route('sesi-index')}}"
                                class="link-danger">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Tambahkan link ke Bootstrap JS (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
