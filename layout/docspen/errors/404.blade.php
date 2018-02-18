@extends('partials.simple-footer')

@section('content')

<div class="container">

    <p>&nbsp;</p>

    <div class="card" style="background-color:transparent;box-shadow:none">
        <div class="body">
            <center>
                <img src="{{ cdn('imgs/404.gif') }}" class="error-404">
                <p><a href="{{ baseUrl('/') }}" class="button outline" style="margin-top:34px">{{ trans('errors.return_home') }}</a></p>
            </center>
        </div>
    </div>

    @if (setting('app-public') || !user()->isDefault())
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="text-muted">@icon('page') {{ trans('entities.pages_popular') }}</h3>
                    @include('partials.entity-list', [
                        'entities' => Views::getPopular(10, 0, [\DocsPen\Page::class]),
                        'style' => 'compact'
                    ])
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h3 class="text-muted">@icon('book') {{ trans('entities.books_popular') }}</h3>
                    @include('partials.entity-list', [
                        'entities' => Views::getPopular(10, 0, [\DocsPen\Book::class]),
                        'style' => 'compact'
                    ])
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h3 class="text-muted">@icon('chapter') {{ trans('entities.chapters_popular') }}</h3>
                    @include('partials.entity-list', [
                        'entities' => Views::getPopular(10, 0, [\DocsPen\Chapter::class]),
                        'style' => 'compact'
                    ])
                </div>
            </div>
        </div>
    @endif
</div>

@stop
