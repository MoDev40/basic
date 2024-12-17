<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        margin: 5px;
        direction: none;
    }
    table {
        width: 50%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: start;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>
<body>
    <div>
        <div>
            <h1>Students</h1>
            <button><a href="/students/create">ADD</a></button>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>Class</th>
                <th>DOB</th>
                <th>STATUS</th>
            </tr>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>