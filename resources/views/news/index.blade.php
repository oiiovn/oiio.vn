@extends('layout')

@section('content')

<div class="container-news" style="width:136%;">
    <div class="container-title-news" style="margin-bottom:40px;">
        <span class="title-news" style="color: #000;font-family:'Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">
            Tin tức
        </span>
    </div>
    <div class="container-body-news" style="width: 100%;">
            <div class="list-news"style="margin-bottom:10px;">
                <ul style="display:flex;gap:13px;">
                    <li style="border-radius: 5px;background: #E0793F;display: flex;padding: 5px 15px;justify-content: center;align-items: center;">
                    <a style="color: #FFFFFF;font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: 22px;" href="#" class="active">Tất cả</a></li>
                    <li style="display: flex;padding: 5px 15px;justify-content: center;align-items: center;border-radius: 5px;background: rgba(195, 195, 195, 0.36);">
                    <a style="color: rgba(0, 0, 0, 0.50);font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: 22px;" href="#">Bản tin</a></li>
                    <li style="display: flex;padding: 5px 15px;justify-content: center;align-items: center;border-radius: 5px;background: rgba(195, 195, 195, 0.36);">
                    <a style="color: rgba(0, 0, 0, 0.50);font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: 22px;" href="#">Cộng tác viên kinh nghiệm</a></li>
                    <li style="display: flex;padding: 5px 15px;justify-content: center;align-items: center;border-radius: 5px;background: rgba(195, 195, 195, 0.36);">
                    <a style="color: rgba(0, 0, 0, 0.50);font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: 22px;" href="#">Xu hướng</a></li>
                </ul>
            </div>
            <div class="body-news" style="display: flex;gap:21px;">
                @foreach($news as $value)
                <div class="col-news" style="width:23.65%;background: #fff;border-radius:5px;box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.15);border:none;margin-bottom:15px;">
                    <a href="{{ route('news.detail', $value->slug) }}">
                    <img class="img-news" style="border:none;" src="{{ asset($value->avatar) }}" width="100%" height="160px" />
                        <div style="display: block;padding-left:12px; padding-right:12px;padding-bottom:10px;">
                            <div style="color: #E0793F;font-family: 'Lato' sans-serif;font-size: 12px;font-style: normal;font-weight: 700;line-height: 22px;">Xu hướng</div>
                            <div class="content-news"style="border:none;margin-bottom:10px;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 400;line-height: 22px;">
                                {{ $value->title }}
                            </div>
                            <div class="date-news">
                                <span style="color: #A6A4A4;font-family: 'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">{{ format_datetime($value->created_at) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </div>
</div>
<style>
    @media (max-width:768px) {
        .container-news{
            width:100% !important;
            padding-left: 5% !important;
        }
        #row{
            margin-left:0 !important;
            margin-top:0 !important;
        }
        .list-news{
            width:100% !important;
            overflow-x:scroll;
        }
        .list-news ul{
            width: 150% !important;
        }
        .body-news{
            display: block !important;
        }
        .col-news{
            width: 95% !important;
            margin-bottom:15px !important;
        }
        ::-webkit-scrollbar{
            height:7px;
        }
    }
    body{
        margin-bottom:68px;
    }
    #sidebarRight{
        display: none;
    }
    #sidebar-left{
        height:1500px;
    }
    .col-news{
        transition:.3s;
    }
    .col-news:hover{
       border:1.5px solid #E0793F !important;
       transform:translateY(-5px);
    }
</style>
@endsection
