<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>تعديل طالب</title>
</head>

<body>
    <h2>✏️ تعديل بيانات الطالب</h2>
    <form method="POST" action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('PUT')
        <label>الاسم:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br><br>

        <label>البريد الإلكتروني:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br><br>

        <label>العمر:</label>
        <input type="number" name="age" value="{{ $student->age }}" required><br><br>

        <button type="submit">تحديث</button>
    </form>
</body>

</html>