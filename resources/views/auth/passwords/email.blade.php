{{-- layout --}}
@extends('layouts.fullLayoutMaster')

{{-- page title --}}
@section('title','Recuperar sua senha')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/forgot.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="forgot-password" class="row">
  <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
    {{-- success status --}}
    @if (session('status'))
    <div class="card-alert card green lighten-5">
      <div class="card-content green-text">
        <p>{{ session('status') }}</p>
      </div>
      <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    @endif
    <form class="login-form" method="POST" action="{{ route('password.email') }}">
      @csrf

      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">{{ __('Esqueceu a senha?') }}</h5>
          <p class="ml-4">{{ __('Você pode redefinir sua senha ') }}</p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" autocomplete="email" autofocus>
          <label for="email" class="center-align">{{ __('Email') }}</label>
          @error('email')
          <small class="red-text ml-7" role="alert">
            <strong>{{ $message }}</strong>
          </small>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit"
            class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1">{{ __('Redefinir senha') }}</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="{{ route('login')}}">{{ __('Entrar') }}</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="{{route('register')}}">{{ __('Registrar-se') }}</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection


{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/ui-alerts.js')}}"></script>
@endsection
