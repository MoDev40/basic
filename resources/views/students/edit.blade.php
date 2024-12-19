@extends('layout')
@section('content')
    <form action="{{route('students.update',$student)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" value="{{$student->name}}" name="name" required placeholder="name">
        </div>
        <div>
            <label for="name">Phone</label>
            <input type="text" value="{{$student->phone}}" name="phone" required placeholder="phone">
        </div>
        <div>
            <label for="name">Class</label>
            <input type="text" value="{{$student->class}}" name="class" required placeholder="class">
        </div>
        <div>
            <label for="name">DOB</label>
            <input type="date" value="{{$student->dob}}" name="dob" required placeholder="date of birth">
        </div>
        <fieldset>
            <legend>Status</legend>
            <div>
                <label for="Active">Active</label>
                <input type="radio" value="Active" name="status" {{$student->status == 'Active' ? 'checked' : ''}} required>
            </div>
            <div>
                <label for="Graduated">Graduated</label>
                <input type="radio" value="Graduated" name="status" {{$student->status == 'Graduated' ? 'checked' : ''}} required>
            </div>
        </fieldset>
        <button type="submit">Update</button>
    </form>
@endsection