<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Clineva Research Laboratories</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('icons/icomoon/style.css') }}">
    <style>
        :root {
            --primary: #0077C8;
            --primary-hover: #005FA3;
            --dark: #0A1C32;
            --bg-body: #0B192C;
            --card-bg: #FFFFFF;
            --border-color: #E2E8F0;
            --text-main: #1E293B;
            --text-muted: #64748B;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0A1C32 0%, #102B4D 60%, #005FA3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .login-card {
            width: 100%;
            max-width: 440px;
            background: #FFFFFF;
            border-radius: 20px;
            padding: 44px 38px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0077C8, #00A3E0);
        }

        .login-header {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-logo {
            display: inline-block;
            margin-bottom: 18px;
        }

        .login-logo img {
            height: 44px;
            width: auto;
        }

        .login-title {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .login-subtitle {
            font-size: 13.5px;
            color: var(--text-muted);
        }

        .alert-error {
            background: #FEF2F2;
            border: 1px solid #FECACA;
            color: #991B1B;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 13.5px;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .alert-success {
            background: #ECFDF5;
            border: 1px solid #A7F3D0;
            color: #065F46;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 13.5px;
            margin-bottom: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i.input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94A3B8;
            font-size: 16px;
        }

        .form-control {
            width: 100%;
            padding: 13px 14px 13px 42px;
            font-size: 14px;
            border-radius: 10px;
            border: 1px solid var(--border-color);
            background: #F8FAFC;
            color: var(--text-main);
            transition: all 0.2s ease;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary);
            background: #FFFFFF;
            box-shadow: 0 0 0 4px rgba(0, 119, 200, 0.12);
        }

        .form-control.is-invalid {
            border-color: #EF4444;
            background: #FEF2F2;
        }

        .form-extra {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            font-size: 13px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #475569;
            cursor: pointer;
            font-weight: 500;
        }

        .remember-label input[type="checkbox"] {
            accent-color: var(--primary);
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #0077C8 0%, #0096C7 100%);
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 8px 20px rgba(0, 119, 200, 0.3);
            transition: all 0.25s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(0, 119, 200, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .login-footer {
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            text-align: center;
            font-size: 12.5px;
            color: var(--text-muted);
        }

        .login-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .credentials-pill {
            background: #F1F5F9;
            border: 1px dashed #CBD5E1;
            padding: 10px 12px;
            border-radius: 8px;
            font-size: 12px;
            color: #475569;
            margin-bottom: 20px;
            text-align: center;
        }

        .credentials-pill code {
            color: var(--primary);
            font-weight: 700;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <a href="{{ route('home') }}" class="login-logo">
                <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva">
            </a>
            <h2 class="login-title">Admin Console</h2>
            <p class="login-subtitle">Sign in to manage Clineva Research Laboratories</p>
        </div>

        @if(session('error'))
            <div class="alert-error">
                ✕ {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert-error">
                ✕ {{ $errors->first() }}
            </div>
        @endif

        <div class="credentials-pill">
            Admin: <code>admin@clineva.in</code> &bull; Password: <code>admin123</code>
        </div>

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="email">Admin Email</label>
                <div class="input-wrap">
                    <i class="icon-envelope input-icon"></i>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@clineva.in') }}" placeholder="admin@clineva.in" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="input-wrap">
                    <i class="icon-lock input-icon"></i>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" required>
                </div>
            </div>

            <div class="form-extra">
                <label class="remember-label">
                    <input type="checkbox" name="remember" value="1" checked>
                    <span>Remember this session</span>
                </label>
            </div>

            <button type="submit" class="btn-submit">
                <span>Sign in to Dashboard</span>
                <i class="icon-arrow-right"></i>
            </button>
        </form>

        <div class="login-footer">
            <a href="{{ route('home') }}">&larr; Return to Public Website</a>
        </div>
    </div>

</body>
</html>
