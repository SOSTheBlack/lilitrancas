{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('Marketplace para Influenciadores'))

{{-- vendor styles --}}
@section('vendor-style')
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
    <div class="card">
        <div class="card-content">
            <p class="caption mb-1">
                Aqui se encontra todos as empresas que estão procurando exatamente o seu perfil.
            </p>
            <p class="mb-1">
                Explore as empresas e seus benefícios, a que mais se sentir confiante afilia-se!
            </p>
            <p class="mb-0">
                Um mundo de oportunidades está bem na sua frente
            </p>
        </div>
    </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
@endsection

{{-- page script --}}
@section('page-script')
@endsection