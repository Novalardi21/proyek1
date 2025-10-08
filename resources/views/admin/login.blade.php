<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        :root {
            --teal: #008080;
            --accent: #ffd400;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: var(--teal);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* kartu login */
        .login-card {
            width: 420px;
            background: #ffffff;
            border-radius: 14px;
            padding: 34px 36px;
            box-shadow: 0 10px 30px rgba(2, 6, 23, 0.35);
            border: 1px solid rgba(0, 0, 0, 0.06);
        }

        .login-card h4 {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 6px;
            text-align: center;
        }

        .login-sub {
            color: #8a8a8a;
            font-size: 13px;
            text-align: center;
            margin-bottom: 22px;
            line-height: 1.45;
        }

        .form-control {
            border-radius: 6px;
            background: #f2f6fb;
            height: 48px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            padding: 10px 12px;
            box-shadow: none;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: rgba(0, 128, 128, 0.6);
        }

        .field-with-icon {
            position: relative;
        }

        .field-with-icon .toggle-visibility {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            padding: 6px;
            cursor: pointer;
            color: #444;
        }

        .forgot-link {
            font-size: 13px;
            color: #444;
        }

        .btn-primary-cta {
            display: block;
            width: 170px;
            margin: 18px auto 8px;
            background: var(--accent);
            color: #111;
            border: none;
            padding: 10px 18px;
            font-weight: 700;
            border-radius: 8px;
            box-shadow: 0 6px 14px rgba(255, 212, 0, 0.18);
        }

        .small-note {
            text-align: center;
            font-size: 13px;
            color: #9a9a9a;
            margin-top: 8px;
        }

        /* responsive */
        @media (max-width: 768px) {
            .login-card {
                width: 90%;
                padding: 26px;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h4>Admin Login</h4>
        <p class="login-sub">Halo, masukkan detail Anda di sini untuk masuk ke dasboard</p>

        <form action="#" method="post" onsubmit="event.preventDefault(); alert('submit simulated');">
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-2 field-with-icon">
                <input id="passwordInput" type="password" class="form-control" placeholder="Password" required>
                <button type="button" class="toggle-visibility" aria-label="toggle password"
                    onclick="togglePassword()">
                    <svg id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#222"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </button>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div></div>
                <a href="#" class="forgot-link">Lupa password?</a>
            </div>

            <button type="submit" class="btn btn-primary-cta">Masuk</button>

            <p class="small-note">Tidak punya akun?
                <a href="#" style="color: #008080; text-decoration: none; font-weight:600">Ajukan sekarang</a>
            </p>
        </form>
    </div>

    <script>
        function togglePassword() {
            const pw = document.getElementById('passwordInput');
            const eye = document.getElementById('eyeIcon');
            if (pw.type === 'password') {
                pw.type = 'text';
                eye.innerHTML =
                    '<path d="M17.94 17.94C16.03 19.1 13.6 20 11 20 4 20 1 12 1 12s1.1-2.4 3.06-4.7M9.5 9.5a3 3 0 0 0 4 4"/><path d="M1 1l22 22"/>';
            } else {
                pw.type = 'password';
                eye.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/><circle cx="12" cy="12" r="3"/>';
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
