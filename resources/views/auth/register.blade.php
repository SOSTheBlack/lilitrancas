{{-- layout --}}
@extends('layouts.fullLayoutMaster')

{{-- page title --}}
@section('title','User Register')

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/register.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <div id="register-page" class="row">
        <div class="col s12 m10 l10 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <h5 class="ml-4">{{ __('Registra-se') }}</h5>
                        <p class="ml-4">{{ __('Quer ser cliente ou Influencer ' . config('app.name')) . ', cadastre-se aqui!' }}</p>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">mood</i>
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}"
                               autocomplete="name" autofocus>
                        <label for="name" class="center-align">{{ __('Nome completo') }}</label>
                        @error('name')
                        <small class="red-text ml-7" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s6">
                        <i class="material-icons prefix pt-2">person_outline</i>
                        <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username"
                               value="{{ old('username') }}"
                               autocomplete="username" autofocus>
                        <label for="username" class="center-align">{{ __('Nome de usuário') }}</label>
                        @error('username')
                        <small class="red-text ml-7" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix pt-2">mail_outline</i>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" autocomplete="email">
                        <label for="email">{{ __('Email') }}</label>
                        @error('email')
                        <small class="red-text ml-7" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s6">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                               name="password"
                               autocomplete="new-password">
                        <label for="password">{{ __('Senha') }}</label>
                        @error('password')
                        <small class="red-text ml-7" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password-confirm" type="password" name="password_confirmation"
                               autocomplete="new-password">
                        <label for="password-confirm">{{ __('Senha novamente') }}</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        {{ __('Cadastrar-se como') }}
                        <p>
                            <label>
                                <input name="role" type="radio" value="influencer" checked/>
                                <span>{{ __('Influenciador(a)') }}</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="role" type="radio" value="enterpriser"/>
                                <span>{{ __('Empresa') }}</span>
                            </label>
                        </p>

                    </div>
                    @error('role')
                        <small class="red-text ml-7" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <button type="submit"
                                class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">{{ __('Registrar-se') }}</button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <p class="margin medium-small"><a
                                    href="{{ route('login')}}">{{ __('Já tem uma conta? Entre') }}</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

{{-- page script --}}
@section('page-script')
    <script>
    </script>
@endsection
