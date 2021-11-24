@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Please pick the Credentials for Login</h1>
    @php
        $users = \App\Models\User::get();
    @endphp
    <ul>
        @foreach($users as $key => $user)
            <li>Email : {{$user->email}} <a href="{{route('check_credential',['email'=>$user->email,'password' => $user->real_password])}}">Use This</a></li>
        @endforeach
    </ul>
</div>

@endsection