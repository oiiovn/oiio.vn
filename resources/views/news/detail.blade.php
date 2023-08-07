@extends('layout')

@section('content')

<div class="container-slug" style="width:136%;display:flex;justify-content: center;align-items: center;">
    <div class="container-body" style="width:60.43%;">
        <div>
            <div></div>
            <div></div>
            <div>
                <span>
                    {{ $news->title }}
                </span>
            </div>
        </div>
        <div class="img-slug">
            <img src="{{ asset($news->avatar) }}" width="100%"/>
        </div>
        <div class="slug-body">
            {!! $news->content !!}
        </div>
    </div>
</div>
<style>
    #sidebarRight{
        display:none;
    }
</style>
@endsection