<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; 2016 - {{ now()->year }} <a href="https://www.instagram.com/LiliTrancas_BoxBraids/"
          target="_blank">@LiliTrancas</a> {{ __('Todos os direitos reservados') }}.
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->