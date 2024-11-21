<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Perpustakaan - Register</title>
    <style>
        /* Latar belakang body */
        body {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Kotak form register */
        .auth-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 410px;
            width: 90%;
            margin-bottom: 10px;
        }

        /* Gaya elemen input */
        .input-group .input-group-text {
            border-radius: 12px 0 0 12px;
            background-color: #6B73FF;
            color: #fff;
            border: none;
        }

        .form-control {
            border-radius: 0 12px 12px 0;
            border: 1px solid #ddd;
            padding: 10px 15px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .form-control:focus {
            border-color: #6B73FF;
            box-shadow: 0px 0px 8px rgba(107, 115, 255, 0.5);
        }

        /* Gaya tombol */
        .btn {
            border-radius: 12px;
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn-success {
            background: linear-gradient(45deg, #6B73FF, #000DFF);
            border: none;
            transition: background 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #000DFF, #6B73FF);
        }
    </style>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-box">
            <div class="text-center">
                <span class="db"><img src="{{ asset('backend/images/admin.png') }}" alt="logo" class="img-fluid" style="max-width: 120px;" /></span>
                <h3 class="mt-3" style="color: #6B73FF; font-weight: bold;">Buat Akun Baru</h3>
                <p>Isi form di bawah untuk mendaftar</p>
            </div>
            <form id="registerform" action="{{ route('backend.register.submit') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                        placeholder="Nama Lengkap" required>
                    @error('name')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        placeholder="Email" required>
                    @error('email')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password"
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        placeholder="Password" required>
                    @error('password')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password_confirmation"
                        class="form-control form-control-lg"
                        placeholder="Konfirmasi Password" required>
                </div>

                <div class="form-group text-center mt-3">
                    <button class="btn btn-success btn-lg btn-block mb-2" type="submit">
                        <i class="fas fa-user-plus"></i> Register
                    </button>
                </div>

                <div class="text-center mt-3">
                    <p>Sudah punya akun? <a href="{{ route('backend.login') }}" style="color: #6B73FF; font-weight: bold;">Login</a></p>
                </div>
            </form>


        </div>
    </div>
</body>

</html>