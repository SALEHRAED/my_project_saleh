<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>إدارة الطلاب</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 30px;
        }

        .add-btn {
            display: block;
            width: 160px;
            margin: 0 auto 20px auto;
            padding: 12px;
            background-color: #4f46e5;
            color: white;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f3f4f6;
        }

        .action-btns a {
            margin: 0 5px;
            padding: 6px 10px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .edit-btn {
            background-color: #10b981;
        }

        .delete-btn {
            background-color: #ef4444;
        }
    </style>
</head>

<body>

    <h1>📚 إدارة الطلاب</h1>

    <a href="{{ route('student.create') }}" class="add-btn">➕ إضافة طالب</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>الاسم</th>
                <th>البريد</th>
                <th>العمر</th>
                <th>إجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td class="action-btns">
                        <a href="{{ route('student.edit', $student->id) }}" class="edit-btn">تعديل</a>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn"
                                onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>