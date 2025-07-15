<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>نظام إدارة المدرسة - الصفحة الرئيسية</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4f46e5, #3b82f6);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        header .logo {
            font-size: 1.6rem;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: default;
        }

        header nav a {
            color: #e0e7ffcc;
            margin-left: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #c7d2fe;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px 40px;
        }

        .content {
            max-width: 1200px;
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: right;
        }

        .text-area {
            max-width: 550px;
        }

        .text-area h1 {
            font-size: 3.2rem;
            margin-bottom: 20px;
            font-weight: 900;
            line-height: 1.2;
        }

        .text-area p {
            font-size: 1.3rem;
            margin-bottom: 35px;
            color: #e0e7ffcc;
            line-height: 1.6;
        }

        .btn-primary {
            background-color: #e0e7ff;
            color: #3b82f6;
            padding: 15px 40px;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #c7d2fe;
        }

        .image-area img {
            max-width: 450px;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        /* Responsive */
        @media (max-width: 900px) {
            .content {
                flex-direction: column-reverse;
                text-align: center;
            }

            .text-area {
                max-width: 100%;
            }

            .image-area img {
                max-width: 300px;
                margin-bottom: 30px;
            }

            header {
                padding: 15px 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">مدرستي</div>
        <nav>
            <a href="#features">المميزات</a>
            <a href="#about">حول</a>
            <a href="#contact">تواصل</a>
            <a href="/login">تسجيل الدخول</a>
        </nav>
    </header>

    <main>
        <div class="content">
            <div class="text-area">
                <h1>نظام إدارة المدرسة بكل سهولة واحترافية</h1>
                <p>نساعدك على تنظيم الطلاب والمعلمين والفصول الدراسية مع واجهة مستخدم سهلة وأداء عالي.</p>
                <a href="/register" class="btn-primary">ابدأ الآن</a>
            </div>
            <div class="image-area">
                <img src="{{ asset('images/school.jpg') }}" alt="مدرسة" />
            </div>
        </div>
    </main>

</body>

</html>