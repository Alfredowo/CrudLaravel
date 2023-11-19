@extends('layouts.appPrincipal')
@section('container')
<h1 class="text-center">Registrarse</h1>
<div class="container w-75">
    <form action="{{route('RegistroStore')}}" method="post">
        @csrf
        <div class="from-group">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control"
            value="{{old('name')}}" placeholder="Escriba tu nombre">
            @error('name')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" name="username" id="username" class="form-control"
            value="{{old('username')}}" placeholder="Crea un usuario">
            @error('username')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control"
            value="{{old('email')}}" placeholder="Escribe tu emial">
            @error('email')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"
            placeholder="Escribe tu contraseña">
            @error('password')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="password_confirmation" class="form-label">Repetir contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
            placeholder="Repite tu contraseña">
            @error('password_confirmation')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group mt-2">
            <button for="submit" class="btn btn-primary">Registrarse</button>
            <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>
@endsection