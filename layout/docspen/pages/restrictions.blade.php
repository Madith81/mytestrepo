@extends('simple-layout')

@section('toolbar')
    <div class="col-sm-12 faded">
        @include('pages._breadcrumbs', [
            'page' => $page
        ])
    </div>
@stop

@section('body')
    <div class="container">
        <p>&nbsp;</p>
        <div class="card">
            <h3><i class="zmdi zmdi-lock-outline"></i> {{ trans('entities.pages_permissions') }}</h3>
            <div class="body">
                @include('form.restriction-form', [
                    'model' => $page
                ])
            </div>
        </div>
    </div>
@stop
