<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Teacher Dashboard</title>
    <style>
        /* هنا تضع نفس الـ CSS السابق */
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 20px;
            color: #333;
        }

        .stats-container {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .stat-box {
            background: #e2e8f0;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 20px;
            width: 220px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .stat-box svg {
            width: 40px;
            height: 40px;
            fill: #4a5568;
            margin-bottom: 10px;
        }

        .stat-number {
            font-size: 36px;
            font-weight: bold;
            color: #2d3748;
        }

        .stat-label {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #718096;
        }

        .list-section {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .list-box {
            background: #fff;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .list-header {
            background: #4a5568;
            color: white;
            padding: 10px 15px;
            font-weight: bold;
            text-transform: uppercase;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .list-content {
            padding: 15px;
        }

        .list-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 10px 0;
            font-weight: 600;
        }

        .list-item:last-child {
            border-bottom: none;
        }

        .manage-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 12px;
            background-color: #38a169;
            color: white;
            font-size: 12px;
            border-radius: 6px;
            text-decoration: none;
        }

        .manage-btn:hover {
            background-color: #2f855a;
        }
    </style>
</head>

<body>

    <!-- إحصائيات المعلم -->
    <div class="stats-container">
        <div class="stat-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
            </svg>
            <div class="stat-number">{{ $teacher->classes->count() }}</div>
            <div class="stat-label">صفوف</div>
        </div>

        <div class="stat-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
            </svg>
            <div class="stat-number">{{ $teacher->subjects->count() }}</div>
            <div class="stat-label">مواد</div>
        </div>

        <div class="stat-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z" />
            </svg>
            <div class="stat-number">{{ $teacher->students_count ?? 0 }}</div>
            <div class="stat-label">طلاب</div>
        </div>
    </div>

    <!-- قوائم الصفوف والمواد -->
    <div class="list-section">
        <div class="list-box">
            <div class="list-header">قائمة الصفوف</div>
            <div class="list-content">
                @foreach ($teacher->classes as $class)
                    <div class="list-item">
                        {{ $class->class_name }}
                        <br>
                        <a href="{{ route('teacher.attendance.create', $class->id) }}" class="manage-btn">إدارة الحضور</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="list-box">
            <div class="list-header">قائمة المواد</div>
            <div class="list-content">
                @foreach ($teacher->subjects as $subject)
                    <div class="list-item">كود المادة: {{ $subject->subject_code }} - {{ $subject->name }}</div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>