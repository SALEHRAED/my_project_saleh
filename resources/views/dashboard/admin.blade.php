<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>لوحة تحكم المدير</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
        }

        .header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .logout-btn {
            position: absolute;
            left: 20px;
            top: 20px;
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }

        .card {
            background-color: white;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            margin: 0;
            font-size: 1.4rem;
            color: #4f46e5;
        }

        .card p {
            color: #555;
            margin-top: 8px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="header">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">تسجيل الخروج</button>
        </form>
        <h1>👨‍💼 لوحة تحكم المدير</h1>
    </div>

    <div class="container">
        <div class="cards">
            <div class="card" onclick="location.href='{{ route('student.index') }}'">
                <h2>👨‍🎓 الطلاب</h2>
                <p>إدارة بيانات الطلاب</p>
            </div>
            <div class="card" onclick="location.href='{{ route('classes.index') }}'">
                <h2>🏫 الصفوف</h2>
                <p>عرض وإضافة الصفوف</p>
            </div>
            <div class="card" onclick="location.href='{{ route('teacher.index') }}'">
                <h2>👨‍🏫 المعلمون</h2>
                <p>إدارة بيانات المعلمين</p>
            </div>
            <div class="card">
                <h2>📅 جدول الحصص</h2>
                <p>تخطيط وإدارة الجداول</p>
            </div>
            <div class="card">
                <h2>📝 الإمتحانات</h2>
                <p>إضافة ومتابعة الامتحانات</p>
            </div>
            <div class="card">
                <h2>📢 الإعلانات</h2>
                <p>نشر الإعلانات للطلاب والمعلمين</p>
            </div>
        </div>
    </div>

</body>

</html>