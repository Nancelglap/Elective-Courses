<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>上选修</title>
    <style type="text/css"> 
        #main{
                border: thin black solid;
                font-family: Heiti TC;
                width: 700px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                border-radius: 10px;
                font-size: 100%;
            }

        #page{
               width: 700px;
               margin-left: auto;
               margin-right: auto;
            }

        a:visited{
               color: blue;
            }

        a:link{
               text-decoration: none;
            }

        body{
               font-family: STKaiti;
               -moz-font-size: 40px;
               font-size: 16px;
            }
        #test{
               font-family: STKaiti;
               font-size: ;
            }
    </style> 
</head>
<body>
<?php
    $cur_page = isset($cur_page) ? $cur_page : 1;
    $num_pages = ceil($total / 5);
?>
    <a href="{{ url('/elective') }}">撰写评论</a>
    |随便看看|<a href="{{ url('/elective/about') }}">关于</a>

    {!! Form::open(['url' => '/elective/search']) !!}
        {!! Form::text('search_text', null, ['placeholder' => '搜索内容']) !!}
        <select  class="styledselect" name="select">
            <option value="class">课程</option>
            <option value="teacher">老师</option>
        </select> 
         
        </td>
        <td>
        {!! Form::submit('搜索') !!}
    {!! Form::close() !!}

    @foreach($info as $in)
    <div id='main'>
        &nbsp&nbsp<用户>{{ $in -> uname }}<br>
        &nbsp&nbsp<标题>{{ $in -> title }}<br>
        &nbsp&nbsp<课程名称>{{ $in ->cname }}<br>
        &nbsp&nbsp<老师>{{ $in -> tname }}<br>
        &nbsp&nbsp<font color="red"><点名频率></font>
<?php
    switch($in->frequent)
    {
        case "1":
            echo "每节课都点名<br>";
            break;
        case "2":
            echo "每节课都签到<br>";
            break;
        case "3":
            echo "偶尔点名<br>";
            break;
        case "4":
            echo "从来不点名<br>";
            break;
    }
?>
        &nbsp&nbsp<课程评分>{{ $in -> grade }}<br>
        &nbsp&nbsp<评论>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $in -> comment }}<br>
    <br>
    </div>
    @endforeach

    <?php echo $info -> render(); ?>

</body>
</html>
