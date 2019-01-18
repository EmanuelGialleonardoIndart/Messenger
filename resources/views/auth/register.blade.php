@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
        <b-card title="Registro">
        @if($errors->any())
              <b-alert show variant="danger">
                 <ul class="mb-0">
                 @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach    
                 </ul>
              </b-alert>
              @else
              <b-alert show>Ingresa tus datos</b-alert>
              @endif
                 <b-form method="POST" action="{{ route('register') }}">
                      @csrf
                        <b-form-group id="namegroup" label="Username" label-for="name">
                            <b-form-input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="emailgroup" label="Correo electronico" label-for="email">
                            <b-form-input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="correo@correo.com">
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="passwordgroup" label="Contraseña" label-for="password">
                            <b-form-input id="password" type="password" name="password" required placeholder="******">
                            </b-form-input>
                        </b-form-group>
                        <b-form-group id="password-confgroup" label="Confirmar contraseña" label-for="password-conf">
                            <b-form-input id="password-conf" type="password" name="password_confirmation" required placeholder="******">
                            </b-form-input>
                        </b-form-group>
                        <b-button type="submit" variant="primary">
                            Registrarse
                        </b-button>
                        <b-button variant="link" href="{{ route('login') }}">
                            ¿ya estas registrado?
                        </b-button>
                    </b-form>
            </b-card> 
        </b-col>
    </b-row>
</b-container>

@endsection
