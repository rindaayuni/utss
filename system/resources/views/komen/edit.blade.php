@extends('template.admin')

@section('content')
<style>
    *{
        
    }
    body{
        background-color:#abd9e9;
        font-family:Arial;
    }
    #container{
        width:100%;
        background:#eff3f7;
        margin:0 auto;
        font-size:0;
        border-radius:5px;
        overflow:hidden;
    }
    aside{
        widows: 300px;
        background-color:#3b3e49;
        display:inline-block;
        font-size:15px;
        vertical-align:top;
    }
    main{
        width:100%;
        
        display:inline-block;
        font-size:15px;
        vertical-align:top;
    }

    aside header{
        padding:30px 20px;
    }
    aside input{
        width:100%;
        
        line-height:50px;
        padding:0 50px 0 20px;
        background-color:#5e616a;
        border:none;
        border-radius:3px;
        color:#fff;
        background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_search.png);
        background-repeat:no-repeat;
        background-position:170px;
        background-size:40px;
    }
    aside input::placeholder{
        color:#fff;
    }
    aside ul{
        padding-left:0;
        margin:0;
        list-style-type:none;
        overflow-y:scroll;
        height:690px;
    }
    aside li{
        padding:10px 0;
    }
    aside li:hover{
        background-color:#5e616a;
    }
    h2,h3{
        margin:0;
    }
    aside li img{
        border-radius:50%;
        margin-left:20px;
        margin-right:8px;
    }
    aside li div{
        display:inline-block;
        vertical-align:top;
        margin-top:12px;
    }
    aside li h2{
        font-size:14px;
        color:#fff;
        font-weight:normal;
        margin-bottom:5px;
    }
    aside li h3{
        font-size:12px;
        color:#7e818a;
        font-weight:normal;
    }

    .status{
        width:8px;
        height:8px;
        border-radius:50%;
        display:inline-block;
        margin-right:7px;
    }
    .green{
        background-color:#58b666;
    }
    .orange{
        background-color:#ff725d;
    }
    .blue{
        background-color:#6fbced;
        margin-right:0;
        margin-left:7px;
    }

    main header{
        height: 100%;
    }
    main header > *{
        display:inline-block;
        vertical-align:top;
    }
    main header img:first-child{
        border-radius:50%;
    }
    main header img:last-child{
        width:24px;
        margin-top:8px;
    }
    main header div{
        margin-left:10px;
        margin-right:145px;
    }
    main header h2{
        font-size:16px;
        margin-bottom:5px;
    }
    main header h3{
        font-size:14px;
        font-weight:normal;
        color:#7e818a;
    }

    #chat{
        padding-left:20;
        margin:0;
        list-style-type:none;
        overflow-y:scroll;
        height:535px;
        border-top:2px solid #fff;
        border-bottom:2px solid #fff;
    }
    #chat li{
        padding:10px 30px;
    }
    #chat h2,#chat h3{
        display:inline-block;
        font-size:13px;
        font-weight:normal;
    }
    #chat h3{
        color:#bbb;
    }
    #chat .entete{
        margin-bottom:5px;
    }
    #chat .message{
        padding:20px; 
        color:#fff;
        line-height:25px;
        max-width:90%;
        display:inline-block;
        text-align:left;
        border-radius:5px;
    }
    #chat .me{
        text-align:right;
    }
    #chat .you .message{
        background-color:#58b666;
    }
    #chat .me .message{
        background-color:#6fbced;
    }
    #chat .triangle{
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 10px 10px 10px;
    }
    #chat .you .triangle{
            border-color: transparent transparent #58b666 transparent;
            margin-left:15px;
    }
    #chat .me .triangle{
            border-color: transparent transparent #6fbced transparent;
            margin-left:1000px;
    }

    main footer{
        height:155px;
        width: 100%;
        margin-left: 100%;
        padding:20px 30px 10px 20px;
    }
    main footer textarea{
        resize:none;
        border:none;
        display:block;
        width:100%;
        height:80px;
        border-radius:3px;
        padding:20px;
        font-size:13px;
        margin-bottom:13px;
    }
    main footer textarea::placeholder{
        color:#ddd;
    }
    main footer img{
        height:30px;
        cursor:pointer;
    }
    main footer a{
        text-decoration:none;
        text-transform:uppercase;
        font-weight:bold;
        color:#6fbced;
        vertical-align:top;
        margin-left:333px;
        margin-top:5px;
        display:inline-block;
    }
    .send_btn{
        background: #05728f none repeat scroll 0 0;
        border: none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        height: 35px;
        position: absolute;
        right: 20;
        top: 60px;
        width: 40px;
    }

        .reply {
  height: 60px;
  width: 100%;
  background-color: #f5f1ee;
  padding: 10px 5px 10px 5px !important;
  margin: 0 !important;
  z-index: 1000;
    }

    .reply-emojis {
      padding: 5px !important;
    }

    .reply-emojis i {
      text-align: center;
      padding: 5px 5px 5px 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-recording {
      padding: 5px !important;
    }

    .reply-recording i {
      text-align: center;
      padding: 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-send {
      padding: 5px !important;
    }

    .reply-send i {
      text-align: center;
      padding: 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-main {
      padding: 2px 5px !important;
    }

    .reply-main textarea {
      width: 100%;
      resize: none;
      overflow: hidden;
      padding: 5px !important;
      outline: none;
      border: none;
      text-indent: 5px;
      box-shadow: none;
      height: 100%;
      font-size: 16px;
    }

    .reply-main textarea:focus {
      outline: none;
      border: none;
      text-indent: 5px;
      box-shadow: none;
    }
</style>

    <div id="container">
    
    <main>
        <header style="margin-left: 30px; margin-top: 20px;">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
            <div>
                <h2>{{$pengguna->nama}}</h2>
                <h3>{{date('d - F - yy')}}</h3>

            </div>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
        </header> 
        <ul id="chat">
        @foreach($komen as $komen)
        @if($pengguna->id_user == $komen->id_user)
            @if($komen->sender == '2')
                <li class="you">
                    <div class="entete">
                        <span class="status green"></span>
                        <h2 style="font-size: 15px; color: #6fbced">{{$komen->pengguna->nama}}</h2>
                        <h3 style="font-size: 15px; color: #6fbced">10:12AM, Today</h3>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                       {{$komen->isi}} 
                    </div>
                </li>
           @elseif($komen->sender == '1')
                <li class="me">
                    <div class="entete">
                        <h2 style="font-size: 15px; color: #6fbced"></h2>
                        <h3 style="font-size: 15px; color: #6fbced">10:12AM, Today</h3>
                        <span class="status blue"></span>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        {{$komen->isi}}
                    </div>
                </li>
            @endif 
            @endif
        @endforeach
        </ul>
        <form action="{{url('komen/store')}}" method="post">
        @csrf
        <div class="row reply">
            <div class="col-sm-1 col-xs-1 reply-emojis">
              <i class="fa fa-smile-o fa-2x"></i>
            </div>
                <div class="col-sm-9 col-xs-9 reply-main">
                    <input type="text" name="id_user" value="{{$pengguna->id_user}}" hidden="">
                    <textarea class="form-control" style="border-radius: 30px;" rows="1" id="comment" name="isi"></textarea>
                </div>
            <div class="col-sm-1 col-xs-1 reply-recording">
              <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-sm-1 col-xs-1 reply-send">
              <button type="submit"><i class="fas fa-save" aria-hidden="true"></i></button>
            </div>
        </div>
        </form>
    </main>
</div>

    
@endsection