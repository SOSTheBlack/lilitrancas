{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('Marketplace para Influenciadores'))

{{-- vendor styles --}}
@section('vendor-style')
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <div class="section">
        <div class="card">
            <div class="card-content">
                <p class="caption mb-1">
                    {{ __('Aqui se encontra todos as empresas que estão procurando exatamente o seu perfil.') }}
                </p>
                <p class="mb-1">
                    {{ __('Explore as empresas e seus benefícios, a que mais se sentir confiante afilia-se!') }}
                </p>
                <p class="mb-0">
                    {{ __('Um mundo de oportunidades está bem na sua frente') }}
                </p>
            </div>
        </div>
    </div>
    <!--Enterprise-->
    <div id="card-panel-type1" class="section ">
        <h4 class="header">{{ __('Vitrine de possibilidades') }}</h4>
        <div class="row">
            @forelse($enterprises as $enterprise)
                <div class="col s12 m6 l3 card-width">
                <div class="card card-border center-align gradient-45deg-indigo-purple">
                    <div class="card-content white-text">
                        <a class="col s12"><i class="material-icons right">favorite_border</i></a>
                        <a class="col s12"><i class="material-icons right">favorite</i></a>
                        <img class="responsive-img circle z-depth-4" width="100"
                             src="{{ $enterprise->logo }}" alt=""/>
                        <h5 class="white-text mb-1">{{ $enterprise->name }}</h5>
                        <h5 class="white-text mb-2">{{ $enterprise->username }}</h5>
                        <p class="m-0">Trancista</p>
                        <p class="m-0">{{ $enterprise->city }}</p>
                        <p class="m-0">{{ $enterprise->country }}</p>
                        <p class="mt-8">
                            {{ Str::limit($enterprise->description) }}
                        </p>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-orange-orange border-round mt-7 z-depth-4">{{ __('Ser Influenciadora') }}</a>
                        <div class="row mt-5">
                            <a href="#" class="col s4">
                                <h5 class="gradient-45deg-indigo-light-blue icon-background circle white-text z-depth-3 mx-auto">
                                    <i class="fab fa-behance"></i>
                                </h5>
                                <p class="white-text"><b>12.8k</b></p>
                                <p class="white-text">Followers</p>
                            </a>
                            <a href="#" class="col s4">
                                <h5 class="icon-background circle gradient-45deg-indigo-blue white-text z-depth-3 mx-auto">
                                    <i class="fab fa-linkedin-in"></i>
                                </h5>
                                <p class="white-text"><b>10.1k</b></p>
                                <p class="white-text">Followers</p>
                            </a>
                            <a href="#" class="col s4">
                                <h5 class="icon-background circle gradient-45deg-red-pink white-text z-depth-3 mx-auto">
                                    <i class="fab fa-pinterest-p"></i>
                                </h5>
                                <p class="white-text"><b>8.23k</b></p>
                                <p class="white-text">Followers</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div>
                    <span class="grey-text border-radius-5"> {{ __('Não existe empresas disponíveis no momento') }}</span>
                </div>
            @endforelse
        </div>
    </div>
    </div>
    </div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
    <script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('fonts/fontawesome/js/all.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{asset('js/scripts/cards-extended.js')}}"></script>
    <script src="{{asset('js/custom/custom-script.js')}}"></script>
@endsection