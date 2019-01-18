@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesion">
              
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
                 <b-form method="POST" action="{{ route('login') }}">
                      @csrf
                        <b-form-group id="emailgroup"
                        label="Correo electronico"
                        label-for="email">
                            <b-form-input id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}" required autofocus
                            placeholder="correo@correo.com">
                            </b-form-input>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </b-form-group>
                        <b-form-group id="passwordgroup"
                        label="Contraseña"
                        label-for="password">
                            <b-form-input id="password"
                            type="password"
                            name="password"
                            required 
                            placeholder="******">
                            </b-form-input>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </b-form-group>
                        <b-form-group >
                            <b-form-checkbox 
                            name="remember"
                            {{ old('remember') ? 'checked="true"' : '' }}>
                                recordar sesion
                            </b-form-checkbox>
                        </b-form-group>
                        <b-button type="submit" variant="primary">
                            Ingresar
                        </b-button>

                        <b-button variant="link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </b-button>
                    </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
