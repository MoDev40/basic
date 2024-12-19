@extends('layout')
@section('content')
<style>
    *{
        margin: 5px;
        direction: none;
    }
    table {
        width: 100%;
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
<body>
    <div>
        <div>
            <h1>Students</h1>
            @auth
            <button><a href="{{route('students.create')}}">ADD</a></button>
            @endauth
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>CLASS</th>
                <th>DOB</th>
                <th>STATUS</th>
                <th>ACTIONS</th>
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
                        <td>
                            <a href="{{route('students.edit',$student)}}">
                                <button>Edit</button>
                            </a>
                            <form action="{{route('students.destroy',$student)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection