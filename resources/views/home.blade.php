<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>لوحة التحكم - الترحيب</title>
    <style>
        /* Reset بسيط */
        * {
            margin: 0; padding: 0; box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            padding: 30px;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.3);
            background-color: rgba(0,0,0,0.3);
        }
        main {
            flex: 1;
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
        }
        .welcome-text {
            text-align: center;
            margin-bottom: 40px;
            font-size: 1.3rem;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
        }
        .card {
            background: rgba(255,255,255,0.15);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, background 0.3s ease;
            text-align: center;
            cursor: default;
        }
        .card:hover {
            transform: translateY(-10px);
            background: rgba(255,255,255,0.3);
        }
        .card h2 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 2px 6px rgba(0,0,0,0.4);
        }
        .card p {
            font-size: 1.1rem;
            font-weight: 500;
            color: #ddd;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        footer {
            text-align: center;
            padding: 15px;
            background: rgba(0,0,0,0.3);
            font-size: 0.9rem;
            color: #eee;
            box-shadow: 0 -3px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <header>
        مرحباً بك في لوحة تحكم النظام التعليمي
    </header>

    <main>
        <div class="welcome-text">
            <p>هنا تجد نظرة عامة على بيانات النظام في الوقت الحقيقي</p>
        </div>

        <div class="cards">
            <div class="card">
                <h2>{{ $studentsCount }}</h2>
                <p>الطلاب</p>
            </div>
            <div class="card">
                <h2>{{ $teachersCount }}</h2>
                <p>المعلمين</p>
            </div>
            <div class="card">
                <h2>{{ $parentsCount }}</h2>
                <p>أولياء الأمور</p>
            </div>
            <div class="card">
                <h2>{{ $classesCount }}</h2>
                <p>الفصول</p>
            </div>
            <div class="card">
                <h2>{{ $subjectsCount }}</h2>
                <p>المواد الدراسية</p>
            </div>
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} جميع الحقوق محفوظة لنظام الإدارة التعليمية
    </footer>
</body>

</html>
