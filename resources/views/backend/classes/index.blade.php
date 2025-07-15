<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <style>
        body {
            direction: rtl;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #f9fafb;
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h2 {
            color: #4f46e5;
            font-weight: bold;
            font-size: 24px;
        }

        .btn-add {
            background-color: #10b981;
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background-color: #4f46e5;
            color: white;
        }

        .table th,
        .table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            text-align: center;
        }

        .badge {
            background-color: #e0e7ff;
            color: #4338ca;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 13px;
            display: inline-block;
            margin: 2px;
        }

        .actions a,
        .actions form {
            display: inline-block;
            margin-left: 5px;
        }

        .actions svg {
            width: 18px;
            height: 18px;
        }

        .btn-edit {
            color: #16a34a;
        }

        .btn-delete {
            color: #dc2626;
        }

        .btn-assign {
            color: #2563eb;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h2>📘 إدارة الصفوف الدراسية</h2>
            <a href="{{ route('classes.create') }}" class="btn-add">➕ صف جديد</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>عدد الطلاب</th>
                    <th>رموز المواد</th>
                    <th>المدرس</th>
                    <th>الخيارات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    <tr>
                        <td>{{ $class->class_numeric }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td>
                            <span class="badge">{{ $class->students_count }}</span>
                        </td>
                        <td>
                            @foreach ($class->subjects as $subject)
                                <span class="badge">{{ $subject->subject_code }}</span>
                            @endforeach
                        </td>
                        <td>{{ $class->teacher->user->name ?? '—' }}</td>
                        <td class="actions">
                            <a href="{{ route('classes.edit', $class->id) }}" title="تعديل" class="btn-edit">
                                🖊️
                            </a>

                            <form action="{{ route('classes.destroy', $class->id) }}" method="POST"
                                onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" title="حذف">🗑️</button>
                            </form>

                            <a href="{{ route('class.assign.subject', $class->id) }}" title="إسناد مواد" class="btn-assign">
                                📚
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $classes->links() }}
        </div>
    </div>

</body>

</html>