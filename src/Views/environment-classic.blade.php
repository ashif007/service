@extends('service::layouts.master')

@section('template_title')
{{ trans('service::message.environment.classic.templateTitle') }}
@endsection

@section('title')
<i class="fa fa-code fa-fw" aria-hidden="true"></i> {{ trans('service::message.environment.classic.title') }}
@endsection

@section('container')

<form method="post" action="{{ route('service::environmentSaveClassic') }}">
    {!! csrf_field() !!}
    <textarea class="textarea" name="envConfig">{{ $envConfig }}</textarea>
    <div class="buttons buttons--right">
        <button class="button button--light" type="submit">
            <i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i>
            {!! trans('service::message.environment.classic.save') !!}
        </button>
    </div>
</form>

@if( ! isset($environment['errors']))
<div class="buttons-container">
    <a class="button float-left" href="{{ route('service::environmentWizard') }}">
        <i class="fa fa-sliders fa-fw" aria-hidden="true"></i>
        {!! trans('service::message.environment.classic.back') !!}
    </a>
    <a class="button float-right" href="{{ route('service::database') }}">
        <i class="fa fa-check fa-fw" aria-hidden="true"></i>
        {!! trans('service::message.environment.classic.install') !!}
        <i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i>
    </a>
</div>
@endif

@endsection
