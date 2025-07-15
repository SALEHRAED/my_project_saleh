<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>تسجيل الدخول</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        .login-container h2 {
            margin-bottom: 25px;
            text-align: center;
            color: #4f46e5;
            font-weight: 700;
            font-size: 1.8rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            color: #374151;
        }

        input[type="email"],
        input[type="password"] {
            padding: 12px 15px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4f46e5;
            outline: none;
        }

        button {
            margin-top: 10px;
            padding: 14px;
            background-color: #4f46e5;
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4338ca;
        }

        .footer-text {
            margin-top: 15px;
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .footer-text a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com" required />

            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" placeholder="********" required />

            <button type="submit">دخول</button>
        </form>
        <p class="footer-text">
            ليس لديك حساب؟
            <a href="/register">إنشاء حساب جديد</a>
        </p>
    </div>

</body>

</html>