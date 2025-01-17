@extends('layout')
@section('content')
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required placeholder="name">
        </div>
        <div>
            <label for="name">Phone</label>
            <input type="text" name="phone" required placeholder="phone">
        </div>
        <div>
            <label for="name">Class</label>
            <input type="text" name="class" required placeholder="class">
        </div>
        <div>
            <label for="name">DOB</label>
            <input type="date" name="dob" required placeholder="date of birth">
        </div>
        <fieldset>
            <legend>Status</legend>
            <div>
                <label for="Active">Active</label>
                <input type="radio" value="Active" name="status" required checked>
            </div>
            <div>
                <label for="Graduated">Graduated</label>
                <input type="radio" value="Graduated" name="status" required>
            </div>
        </fieldset>
        <button type="submit">Save</button>
    </form>
@endsection