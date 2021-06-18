@extends('layouts.fullLayoutMaster')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-content">
        <div class="card-title">{{ __('Verifique seu endereço de e-mail') }}</div>
          @if (session('resent'))
          <div class="card-alert card green lighten-5" role="alert">
              <div class="card-content green-text">
                {{ __('Um novo link de verificação foi enviado para o seu endereço de e-mail.') }}
              </div>
          </div>
          @endif

          {{ __('Antes de continuar, verifique seu e-mail para obter um link de verificação.') }}
          {{ __('Se você não recebeu o email') }},
          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit"
                  class="waves-effect waves-light btn">{{ __('clique aqui para solicitar outro') }}</button>.
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
