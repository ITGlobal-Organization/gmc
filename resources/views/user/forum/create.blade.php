@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
    <div class="middle mtb-60">

<h1 class="text-center mb-25">{{ trans('messages.add_new_msg',[
    'attribute' => trans('lang.post')
]) }}</h1>

<div class="contact-success"></div>
<div class="contact-error"></div>
<form action="#" class="store">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
            <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20 topic-con">
                <label for="topic">{{ trans('lang.topic')}}</label>
           
                <select class="topic select_search serch-input">
                    <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.topic')]) }}</option>
                @foreach($Topics as $Topic)
                    <option value="{{ $Topic->id }}">{{ $Topic->text }}</option>
                @endforeach
                </select>
                <div class="error-topic"></div>
                <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                <label for="title">{{ trans('lang.title')}}</label>
                <input type="text" class="serch-input title" id="title" value="" placeholder="{{ trans('lang.title') }}"
                    name="title">
                <div class="error-title"></div>
                <div class="clr"></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                <label for="description">{{ trans('lang.description')}}</label>
                <textarea id="w3review" class="text-area" rows="4" name="description" value=""></textarea>
                <div class="error-description"></div>
                <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                <input type="submit" class="ct-submit" value="Submit">
            </div>
        </div>
    </div>




</form>
<div class="clr"></div>
</div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
        @include('user.forum.right-sidebar')
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $('.topic').select2();
    });

    ClassicEditor
            .create(document.querySelector('#w3review'))
            .catch(error => {
                console.error(error);
            });
    $('.store').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            ajaxPost("{{ prefix_route('forum.store') }}", form, '.contact-success', '.contact-error');


        });
</script>
@endsection