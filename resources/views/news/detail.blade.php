@extends('layout')

@section('content')

<div class="container-slug" style="width:136%;display:flex;justify-content: center;align-items: center;">
        <div class="slug-header" style="width:60.43%;padding:15px 20px;">
            <div style="display:block;margin-bottom:25px;">
                <div class="title" style="display:flex;gap:5px;">
                    <a href="{{ route('news.index')}}"><span style="width:100%;color: #848484;font-family: 'Lato'sans-serif;font-size: 18px;font-style: normal;font-weight: 600;line-height: normal;">Tin tức</span>
                    <img src="{{ asset('viewsCustom/assets/images/right-small.svg') }}" alt=""></a>
                </div>
                <div class="slug-title">
                    <span style="width:100%;color: #000;font-family: 'Lato'sans-serif;font-size: 18px;font-style: normal;font-weight: 400;line-height: normal;">
                        {{ $news->title }}
                    </span>
                </div>
            </div>
            <div class="slug-title-date" style="display: flex;justify-content: space-between;margin-bottom:25px;width: 95%;">
                    <span style="color: #E0793F;font-family: 'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 800;line-height: normal;">Xu hướng</span>
                    <span style="color: #A6A4A4;font-family: 'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">1 giờ trước</span>
                </div>
            <!-- <div class="img-slug">
                <img src="{{ asset($news->avatar) }}" width="100%"/>
            </div> -->
            <div class="slug-body">
                {!! $news->content !!}
            </div>
            <div class="vote" style="width:100%; height: 83px; background: rgba(195, 195, 195, 0.15); border-radius: 5px; border: 0.50px rgba(48, 48, 48, 0.20) solid;display:flex;justify-content: space-between;padding:15px 20px;align-items: center;">
                <div style="color: black; font-size: 16px; font-family: Lato; font-weight: 400; word-wrap: break-word">Bài viết này có hữu ích đối với bạn không?</div>
                    <div style="display:flex;align-items: flex-start;gap: 40px;">
                        <div style="display: flex;gap:7px;align-items: center;">
                            <a class="vote-slug"href="#"><img src="{{ asset('viewsCustom/assets/images/happy-face.svg') }}" alt="">
                            <span>Có nha</span></a>
                        </div>
                        <div style="display: flex;gap:7px;align-items: center;">
                            <a class="vote-slug"href="#"><img src="{{ asset('viewsCustom/assets/images/unhappy-face.svg') }}" alt="">
                            <span>Không hẳn</span></a>
                        </div>
                    </div>
            </div>
        </div>

</div>
<style>
    @media (max-width:768px) {
        .container-slug{
            width: 100% !important;
        }
        #row{
            margin-left:0 !important;
            margin-top:0 !important; 
        }
        .slug-header{
            width:100% !important;
        }
        .vote{
            display: block !important;
            height: auto !important;
        }
        .vote-slug{
            margin-top:15px !important;
        }
        .slug-body h2 strong{
            font-size: 22px !important;
        }
        .slug-body h3 strong{
            font-size: 18px !important;
        }
    }
    body{
        margin-bottom:68px;
    }
    #sidebarRight{
        display:none;
    }
    .title a span:hover{
        color:#E0793F !important;
    }
    .slug-body{
      width:100% !important;
    }
    .slug-body h2 strong{
        color: #000;
        font-family: 'Lato' sans-serif;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .slug-body h2{
        text-align: left !important;
        margin-bottom:30px !important;
    }
    .slug-body h3 strong{
        color: #E0793F;
        font-family: 'Lato' sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        text-align: left !important;
        line-height: normal;
    }
    .slug-body p{
        text-align: left !important;
        color: #000;
        font-family: 'Lato' sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 25px;
    }
    .vote-slug:hover{
        color:#E0793F;
    }
</style>
@endsection