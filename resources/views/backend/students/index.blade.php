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
            cursor: pointer;
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

        .action-btns a,
        .action-btns button {
            margin: 0 5px;
            padding: 6px 10px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #10b981;
        }

        .delete-btn {
            background-color: #ef4444;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            right: 0;
            left: 0;
            top: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: 100px auto;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            left: 15px;
            font-size: 24px;
            cursor: pointer;
            color: red;
        }

        .modal input,
        .modal select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .modal button {
            background-color: #4f46e5;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>📚 إدارة الطلاب</h1>

    <div class="add-btn" onclick="openModal()">➕ إضافة طالب</div>

    <div id="addStudentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>➕ إضافة طالب</h2>
            <form method="POST" action="{{ route('student.store') }}">
                @csrf
                <label>الاسم:</label>
                <input type="text" name="name" required>

                <label>العمر:</label>
                <input type="number" name="age" required>

                <label>الصف الدراسي:</label>
                <select name="class_id" required>
                    <option disabled selected>اختر الصف</option>
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>

                <button type="submit">💾 حفظ الطالب</button>
            </form>
        </div>
    </div>

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

    <script>
        function openModal() {
            document.getElementById('addStudentModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('addStudentModal').style.display = 'none';
        }

        window.onclick = function (event) {
            let modal = document.getElementById('addStudentModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>