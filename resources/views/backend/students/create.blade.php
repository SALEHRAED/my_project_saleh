<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            direction: rtl;
        }

        .form-container h2 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 10px 15px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #4f46e5;
            outline: none;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #4f46e5;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4338ca;
        }
    </style>

</head>

<body>
    <div class="form-container">
        <h2>➕ إضافة طالب جديد</h2>
        <form method="POST" action="{{ route('student.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">الاسم الكامل:</label>
                <input type="text" id="name" name="name" required />
            </div>

            <div class="form-group">
                <label for="age">العمر:</label>
                <input type="number" id="age" name="age" required />
            </div>

            <div class="form-group">
                <label for="class_id">الصف الدراسي:</label>
                <select name="class_id" id="class_id" required>
                    <option value="">اختر الصف</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit">📥 حفظ الطالب</button>
        </form>
    </div>
</body>

</html>