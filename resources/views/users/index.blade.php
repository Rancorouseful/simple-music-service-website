@extends('layouts.main')

@section('content')
    <h1>Список пользователей</h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->id }}</li>
        @endforeach
    </ul>
@endsection
