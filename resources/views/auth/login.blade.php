@extends('layout')
@section('content')
<form action="" method="POST">
    @csrf
    <div>
        <label for="name">Email</label>
        <input type="email" name="email" required placeholder="email">
    </div>
    <div>
        <label for="name">Password</label>
        <input type="password" name="password" required placeholder="password">
    </div>
    <button type="submit">Register</button>
</form>
@endsection