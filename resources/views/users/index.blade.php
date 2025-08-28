@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users List</h1>
        
        @if ($users->count() > 0)
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
        @else
            <p>No users found.</p>
        @endif
    </div>
@endsection