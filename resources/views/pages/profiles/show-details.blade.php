<div class="card">
    <div id="basic-form" class="card card card-default scrollspy">
        <div class="card-content">
            <h1 class="card-title">{{ __('Redes Sociais') }}</h1>
            <a class="waves-effect waves-light btn gradient-45deg-indigo-blue modal-trigger" href="#socialMediaInstagramLoginModal">
                <i class="fab fa-instagram"></i>
                {{ __('Sincronizar Instagram') }}
            </a>
        </div>
    </div>
</div>

  <!-- Modal Trigger -->
{{--  <a class="waves-effect waves-light btn modal-trigger" href="#socialMediaInstagramLoginModal">Modal</a>--}}

  <!-- Modal Structure -->
  <div id="socialMediaInstagramLoginModal" class="modal">
    <div class="modal-content">
      <h4>Autenticação com o Instagram</h4>
      <p>Você está em um ambiente totalmente seguro</p>
        <form class="login-form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="user" type="text" class=" @error('username_instagram') is-invalid @enderror" name="username_instagram"
            value="{{ old('username_instagram') }}"  autocomplete="username_instagram" autofocus>
          <label for="username_instagram" class="center-align">{{ __('Usuário') }}</label>
          @error('username_instagram')
          <small class="red-text ml-7">
            {{ $message }}
          </small>
          @enderror
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password_instagram" type="password" class="form-control @error('password_instagram') is-invalid @enderror"
            name="password_instagram"  autocomplete="current-password">
          <label for="password_instagram">{{ __('Senha') }}</label>
          @error('password_instagram')
          <small class="red-text ml-7" >
            {{ $message }}
          </small>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
            Acessar
          </button>
        </div>
      </div>
    </form>
    </div>
    <div class="modal-footer ">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        <button data-target="modal1" class="btn modal-trigger">Modal</button>
    </div>
  </div>

@section('page-script')
<script>
    // $('.modal').modal();
    $('.modal').modal();
    $('#modal1').modal('close');
</script>
@endsection