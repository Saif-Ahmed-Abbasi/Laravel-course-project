@extends('layouts.auth')


@section('content')

<h2>Login</h2>

<form method="POST" action="#">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Password">

    <button type="submit">Login</button>

</form>

@endsection