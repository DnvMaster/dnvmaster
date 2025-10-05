@extends('dnvmaster.admin.layouts.app')
@section('title', 'DnvMaster | Инструменты')
@section('navbar')
    <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ __('Инструменты') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('DnvMaster') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Главная') }}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection