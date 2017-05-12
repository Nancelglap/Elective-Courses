<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 

<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $('input').checkBox();
    $('#toggle-all').click(function(){
    $('#toggle-all').toggleClass('toggle-checked');
    $('#mainform input[type=checkbox]').checkBox('toggle');
    return false;
    });
});
</script>  


<![if !IE 7]>

<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>



<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
    $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>


<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>


<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
    $("input.file_1").filestyle({ 
    image: "images/forms/upload_file.gif",
    imageheight : 29,
    imagewidth : 78,
    width : 300
    });
});
</script>


<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 

<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $('a.info-tooltip ').tooltip({
        track: true,
        delay: 0,
        fixPNG: true, 
        showURL: false,
        showBody: " - ",
        top: -35,
        left: 5
    });
});
</script> 


<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{


$('#date-pick')
    .datePicker(
     
        {
            createButton:false,
            startDate:'01/01/2005',
            endDate:'31/12/2020'
        }
    ).bind(
  
        'click',
        function()
        {
            updateSelects($(this).dpGetSelected()[0]);
            $(this).dpDisplay();
            return false;
        }
    ).bind(
       
        'dateSelected',
        function(e, selectedDate, $td, state)
        {
            updateSelects(selectedDate);
        }
    ).bind(
        'dpClosed',
        function(e, selected)
        {
            updateSelects(selected[0]);
        }
    );
    
var updateSelects = function (selectedDate)
{
    var selectedDate = new Date(selectedDate);
    $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
    $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
    $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}

$('#d, #m, #y')
    .bind(
        'change',
        function()
        {
            var d = new Date(
                        $('#y').val(),
                        $('#m').val()-1,
                        $('#d').val()
                    );
            $('#date-pick').dpSetSelected(d.asString());
        }
    );


var today = new Date();
updateSelects(today.getTime());


$('#d').trigger('change');
});
</script>

<
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 

<div id="page-top-outer">    


<div id="page-top">

   
    <div id="logo">
    <font size="6" color="white" face="STKaiti">上选修</font>
    </div>

    <div id="top-search">
        <table border="0" cellpadding="0" cellspacing="0">
        <tr>
         {!! Form::open(['url' => '/elective/search']) !!}
         <td><input type="text" value="" onblur="if (this.value=='') { this.value='Search'; }" onfocus="if (this.value=='Search') { this.value=''; }" class="top-search-inp" placeholder="搜索内容" name="search_text"></td>
        <td>
        <select  class="styledselect" name="select">
            <option value="class">课程</option>
            <option value="teacher">老师</option>
        </select> 
         
        </td>
        <td>
        {!! Form::submit('搜索') !!}
        {!! Form::close() !!}
        </td>
        </tr>
        </table>
    </div>
    <div class="clear"></div>

</div>


</div>

    
<div class="clear">&nbsp;</div>
 

<div class="nav-outer-repeat"> 


<div class="nav-outer"> 

        <div class="nav">
        <div class="table">
                            
        <ul class="current"><li><a href=""><b>撰写评论</b></a>
    
        </li>
        </ul>
        
        <div class="nav-divider">&nbsp;</div>
        
        <ul class="select"><li><a href="{{ url('elective/index') }}"><b>随便看看</b></a>
    
        </li>
        </ul>
        
        <div class="nav-divider">&nbsp;</div>
        
        <ul class="select"><li><a href="{{ url('/elective/about') }}"><b>关于</b></a>

        </li>
        </ul>

        </li>
        </ul>
        

        <div class="clear"></div>
        </div>


</div>
<div class="clear"></div>

</div>

 
 <div class="clear"></div>
 

<div id="content-outer">

<div id="content">


<div id="page-heading"><h1>撰写评论</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>

    <div id="content-table-inner">
    
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
    <tr valign="top">
    <td>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
            <th valign="top"><font size="2">撰写者:</font></th>
            {!! Form::open(['url' => '/elective']) !!}
            <td>{!! Form::text('uname', null, ['class'=>'inp-form', 'maxlength'=>'10', 'require']) !!}</td>
            <td>
            <div class="bubble-left"></div>
            <div class="bubble-inner"><font size="2">不填此项默认为匿名用户&nbsp&nbsp</font></div>
            </td>
        </tr>
        <tr>
            <th valign="top"><font size="2">标题:</font></th>
            <td>{!! Form::text('title', null, ['class'=>'inp-form', 'maxlength'=>'10']) !!}</td>
            <td></td>
        </tr>
        <tr>
            <th valign="top"><font size="2">课程名字:</font></th>
            <td>{!! Form::text('cname', null, ['class'=>'inp-form', 'maxlength'=>'10']) !!}</td>
        </tr>
        <tr>
            <th valign="top"><font size="2">老师名字:</font></th>
            <td>{!! Form::text('tname', null, ['class'=>'inp-form', 'maxlength'=>'10']) !!}</td>
            <td>
            <div class="bubble-left"></div>
            <div class="bubble-inner"><font size="2">选填&nbsp&nbsp</font></div>
            </td>
        </tr>
        <tr>
        <th valign="top"><font size="2">点名频率:</font></th>
        <td>    
        <select  class="styledselect_form_1" name="frequent">
            <option value="1">每节课都点名</option>
            <option value="2">每节课都签到</option>
            <option value="3">偶尔点名</option>
            <option value="4">从来不点名</option>
        </select>
        </td>
        <td></td>
        </tr>
        <tr>
        <th valign="top"><font size="2">课程评分:</font></th>
        <td>    
        <select  class="styledselect_form_1" name="grade">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        </td>
        
        </tr> 
        
    <tr>
        <th valign="top"><font size="2">评论:</font></th>
      
        <td>{!! Form::textarea('comment',null, ['class'=>'form-textarea', 'maxlength'=>'200']) !!}</td>
        <td></td>
    </tr>
    <tr>
        <td>{!! Form::label('published_at', '发布日期') !!}</td>
        <td>{!! Form::input('date', 'published_at', date('Y-m-d')) !!}</td>
    </tr>

    <tr>
        <th>&nbsp;</th>
        <td valign="top">
            {!! Form::submit('提交',['class'=>'form-submit']) !!}
            
        </td>
        <td></td>
    </tr>
    {!! Form::close() !!}
    </table>
    </td>
    <td>
</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>

</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
<div class="clear">&nbsp;</div>

</div>
<div class="clear">&nbsp;</div>
</div>

<div class="clear">&nbsp;</div>
    
  
<div id="footer">
    <div id="footer-left">
    Admin Skin &copy; Copyright Internet Dreams Ltd. <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>

    <div class="clear">&nbsp;</div>
</div>
</body>
</html>