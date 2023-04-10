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
                            <a class="link" href="/dashboard/user/{{$user->id}}/suspend">Suspender</a>
                        @else
                            <a class="link" href="/dashboard/user/{{$user->id}}/activate" >activar</a>
                        @endif
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
