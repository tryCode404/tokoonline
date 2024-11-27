<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Online</title>
    <link rel="icon" type="image/png" sizes="1x1" href="{{ asset('image/tokoonline.png') }}">
    <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Add FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(1deg, #6B73FF 0%, #000DFF 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .auth-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.2);
            max-width: 430px;
            width: 10%;
        }

        .auth-box .db img {
            margin-bottom: 20px;
            animation: fadeIn 1.5s;
        }

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
        }

        .form-control:focus {
            border-color: #6B73FF;
            box-shadow: 0px 0px 8px rgba(107, 115, 255, 0.5);
        }

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

        .alert {
            border-radius: 8px;
            font-size: 14px;
        }

        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-box">
            <div id="loginform">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="{{ asset('image/tokoonline.png') }}" alt="logo" class="img-fluid" style="max-width: 120px;" /></span>
                    <h3 class="mt-3" style="color: #6B73FF; font-weight: bold;">Toko Online Shop</h3>
                    <p style="font-size: 14px; color: #555;">Silakan login untuk mengakses akun Anda</p>
                </div>
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form class="form-horizontal m-t-20" id="loginform" action="{{ route('backend.login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukkan Email" required>
                        @error('email')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
                        @error('password')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-center mt-3">
                        <button class="btn btn-info mb-2" id="to-recover" type="button">
                            <i class="fa fa-lock m-r-5"></i> Lupa Password?
                        </button>
                        <button class="btn btn-success mb-2" type="submit">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <p style="font-size: 14px; color: #555;">
                            Belum punya akun? <a href="{{ route('backend.register') }}" style="color: #6B73FF; font-weight: bold; text-decoration: none;">Register</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>