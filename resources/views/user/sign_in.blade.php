
@extends('template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<form class="form_add" action="user/create" method="POST"
    onsubmit="return confirm('¿Está seguro de que desea guardar este usuario?')">
    @csrf
    <div class="group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" value="{{ old('name') }}">
        @error('name')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror

    </div>
    <div class="group">
        <label for="last_name">apellido</label>
        <input type="text" name="last_name" placeholder="Ingrese su apellido" value="{{ old('last_name') }}">
        @error('last_name')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
    </div>

    <div class="group">
        <label for="email">correo</label>
        <input type="email" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">
        @error('email')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
    </div>
    <div class="group">
        <label for="password">password</label>
        <input type="password" name="password" placeholder="Ingrese su password" value="{{old('password')}}">
        @error('password')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
    </div>
      <div class="group">
        <label for="password">confirmacion</label>
        <input type="password" name="password_confirmation" placeholder="Ingrese su confirmacion" value="{{old('password_confirmation')}}">
        @error('password_confirmation')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
    </div>
    <div class="group">
        <label for="birth_day">Fecha Nacimiento</label>
        <input type="date" name="birth_day" placeholder="Ingrese su fecha nacimiento" value="{{old('birth_day')}}">
         @error('birth_day')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
    </div>
    <div class="btns">
        <a class="btnCancel" href="{{ URL::previous() }}">Volver</a>
        <button type="submit" class="btn btn-primary"> Registrar</button>
    </div>

</form>

@endsection
