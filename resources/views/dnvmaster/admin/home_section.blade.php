@extends('dnvmaster.admin.layouts.app')
@section('title', 'Редактирование секции')
@section('navbar')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Администрирование') }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">{{ __('Инструменты') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.section') }}">{{ __('Редактирование') }}</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Редактирование секции') }}</h4>
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <p class="card-title-desc">{{ __('Редактирование секции главной страницы сайта.') }}</p>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('Заголовок') }}</label>
                             <div class="col-sm-9">
                                 <input class="form-control" type="text" name="title" placeholder="{{ $home->title }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('Описание') }}</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="description" placeholder="{{ $home->description }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('Видеофайл') }}</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="video" placeholder="{{ $home->video }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> {{ __('Изображение') }}</label>
                            <div class="col-sm-9">
                                <input name="image" class="form-control" type="file" id="show_image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-9">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($home->image)) ? url($home->image) : url('upload/no_image.jpg') }}" alt="Home-section">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>

     <script type="text/javascript">
        $(document).ready(function() {
            $('#show_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection