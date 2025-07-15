<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
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
            padding: 14px 16px;
            border-bottom: 1px solid #e5e7eb;
            text-align: center;
        }

        .badge {
            background-color: #e0e7ff;
            color: #4338ca;
            padding: 5px 10px;
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

        .btn-edit {
            color: #16a34a;
            font-weight: bold;
        }

        .btn-delete {
            color: #dc2626;
            font-weight: bold;
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
            <h2>👨‍🏫 إدارة المعلمين</h2>
            <a href="{{ route('teacher.create') }}" class="btn-add">➕ معلم جديد</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>رموز المواد</th>
                    <th>رقم الهاتف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->user->name }}</td>
                        <td>{{ $teacher->user->email }}</td>
                        <td>
                            @foreach ($teacher->subjects as $subject)
                                <span class="badge">{{ $subject->subject_code }}</span>
                            @endforeach
                        </td>
                        <td>{{ $teacher->phone }}</td>
                        <td class="actions">
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn-edit">🖊️</a>
                            <a href="{{ route('teacher.destroy', $teacher->id) }}"
                                data-url="{{ route('teacher.destroy', $teacher->id) }}" class="btn-delete deletebtn">🗑️</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $teachers->links() }}
        </div>

    </div>

    @push('scripts')
    <script>
        $(function () {
            $(".deletebtn").on("click", function (event) {
                event.preventDefault();
                $("#deletemodal").removeClass("hidden");
                var url = $(this).attr('data-url');
                $(".remove-record").attr("action", url);
            });

            $("#deletemodelclose").on("click", function (event) {
                event.preventDefault();
                $("#deletemodal").addClass("hidden");
            });
        });
    </script>

</body>

</html>