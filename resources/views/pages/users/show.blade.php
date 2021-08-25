{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', $pageTitle)

{{-- vendor styles --}}
@section('vendor-style')
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')

    <div class="section users-view">
        <!-- users view media object start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m7">
                    <div class="display-flex media">
                        <a href="#" class="avatar">
                            <img src="{{ $user->profile->avatar }}" alt="users view avatar" class="z-depth-4 circle"
                                 height="64" width="64">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading">
                                <span class="users-view-name">{{ $user->name }}</span>
                                {{--                                <span class="grey-text">@</span>--}}
                                {{--                                <span class="users-view-username grey-text">{{ $user->owner->name }}</span>--}}
                            </h6>
                            <span class=" users-view-status chip {{ $user->active ? 'green' : 'red' }} lighten-5 green-text">{{ $user->active ? __('Ativo') : __('Inativo') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
                    @can('user.show.'.$user->user_id)
                        <a href="{{ route('user.show', [ $user->id]) }}"
                           class="btn-small btn-light-indigo">{{ __('Administrador') }}</a>
                    @endcan
                    @can('enterprise.edit.'.$user->id)
                        <a href="{{ route('enterprise.edit', [$user->id]) }}" class="btn-small indigo">Edit</a>
                    @endcan
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12">
                    <h6><span class="grey-text">{{ $user->profile->bio }}</span></h6>
                </div>
            </div>
        </div>
        <!-- users view card details ends -->
    </div>
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col m3"><a href="#influencer">{{ __('Influenciador(a)') }}</a></li>
          <li class="tab col m3"><a href="#enterprise">{{ __('Empresa') }}</a></li>
          <li class="tab col m3"><a href="#security">Segurança</a></li>
          <li class="tab col m3"><a href="#test4">Test 4</a></li>
        </ul>
      </div>
      <div id="influencer" class="col s12"><div class="car-content">@include('pages.profiles.show-details')</div></div>
      <div id="enterprise" class="col s12">@include('pages.enterprises.show-details', ['enterprise' => $user->enterprise])</div>
      <div id="security" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
@endsection

{{-- page script --}}
@section('page-script')
@endsection