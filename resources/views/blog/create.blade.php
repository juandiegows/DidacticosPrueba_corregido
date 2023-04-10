@extends('admin.dashboard')

@section('content_dashboard')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <form class="form_add" action="/dashboard/blog" method="POST"   onsubmit="return confirm('¿Está seguro de que desea guardar ?')">
        @csrf

        <div class="group">
            <label for="title">Titulo</label>
            <input type="text" name="title" placeholder="Ingrese el titulo" value="{{ old('title') }}">
            @error('title')
                <small style="color : red" class="Errors">{{ $message }}</small>
            @enderror
        </div>
        <div class="group">
            <label for="content">descripcion</label>
            <textarea name="content" rows="10" cols="50"></textarea>
            @error('content')
                <small style="color : red" class="Errors">{{ $message }}</small>
            @enderror
        </div>
        @error('error')
            <small style="color : red" class="Errors">{{ $message }}</small>
        @enderror
        <div class="btns">
            <a class="btnCancel" href="{{ URL::previous() }}">Volver</a>
            <button type="submit" class="btn btn-primary"> guardar</button>
        </div>

    </form>
@endsection
