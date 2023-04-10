@extends('template')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <form class="form_add" action="login" method="POST">
        @csrf

        <div class="group">
            <label for="email">correo</label>
            <input type="email" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">
            @error('email')
                <small style="color : red" class="Errors">{{ $message }}</small>
            @enderror
        </div>
        <div class="group">
            <label for="password">password</label>
            <input type="password" name="password" placeholder="Ingrese su password" value="{{ old('password') }}">
            @error('password')
                <small style="color : red" class="Errors">{{ $message }}</small>
            @enderror
        </div>
        @error('error')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
        <div class="btns">
            <a class="btnCancel" href="{{ URL::previous() }}">Volver</a>
            <button type="submit" class="btn btn-primary"> Login</button>
        </div>

    </form>
@endsection
