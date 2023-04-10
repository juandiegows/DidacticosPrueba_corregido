@extends('admin.dashboard')

@section('content_dashboard')
    <div class="container">
        <h2 class="title">Lista de usuarios</h2>
        <div class="users">
            @foreach ($users as $user)
                <div class="user">
                    <p>{{ $user->role->name }}</p>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->last_name }}</p>
                    <p>{{ $user->email }}</p>
                    @if (Auth::user()->id != $user->id)
                        @if ($user->active)
                            <form action="/dashboard/user/{{ $user->id }}/suspend" method="POST">
                                @csrf
                                <input class="link" type="submit" value="Suspender">
                            </form>
                        @else
                            <form action="/dashboard/user/{{ $user->id }}/activate" method="POST">
                                @csrf
                                <input class="link" type="submit" value="activar">
                            </form>
                        @endif
                    @else
                        <a class="link link-disable">Admin</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
