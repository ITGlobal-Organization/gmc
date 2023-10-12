@extends('layouts.admin')
@section('content')
    <x-slot name="header">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>{{ trans('lang.create') }} {{ trans('lang.page') }}</h1>
                    </div>

                </div>
            </div>
        </section>
    </x-slot>

    <section class="content">
        <div class="container-fluid">
        </div>
    </section>
@endsection