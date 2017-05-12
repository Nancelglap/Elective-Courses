@extends('app')
@section('css')
    <style type="text/css"> 
        #body{
            margin-top: 230px;
            margin-right: auto;
            margin-left: auto;
            height: 150px;
            width: 400px;
            border: thin black solid;
            text-align: center;
            line-height: 150px;
            border-radius: 20px;
        }
        #header{
            font-family: STKaiti;
            font-size: 16px;
        }
        a:link{
            text-decoration: none;
            color: blue;
        }
        a:visited{
            color: blue;
        }

    </style> 
@stop

@section('content')
    <div id="header">
    <a href="{{ url('/elective') }}">撰写评论</a>|
    <a href="{{ url('elective/index') }}">随便看看</a>|
    关于
    </div>
    <div id="body">
    这是一篇关于此网站的来源的文章.
    </div>

@stop
