<!DOCTYPE html>
<html>
<head>
<link href="http://ququplay.github.io/jquery-mobile-flat-ui-theme/css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
<style type="text/css">
* {
padding: 0;
margin: 0;
font-size: 16px;
font-family: Arial, 'Microsoft YaHei';
}
    .info{
        float: right;
        width: 60%;
        margin: auto;
    }
    .info h2{float:left;color:orange;}
    .price{
        float: left;
        margin: 10px;
        color:red;
    }
    .span_btn{
        border: 1px solid orange;
        float: right;
        padding: 6px;
        color: #FFF;
        background-color: orange;
        margin-top:15px;
    }

</style>
</head>
<body>
  <div data-role="page">

        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li><a class="ui-btn-active ui-state-persist" href="#" data-icon="gear">最新活动</a></li>
                <li><a href="#" data-icon="alert">每周特惠</a></li>
                <li><a href="#" data-icon="info">加入会员</a></li>
            </ul>
        </div><!-- /navbar -->
        <h1>新品推荐</h1>
        <div data-role="content">
           <ul data-role="listview" data-divider-theme="b" data-inset="true">
            <li data-theme="c">
                <a href="#" data-transition="slide">
                    <img src="http://ww2.sinaimg.cn/bmiddle/d963426fjw1e89enqnz6oj20bm09ddha.jpg"/>
                    <div class="info">
                        <h2>特惠下午茶</h2>
                        <span class="price">20$</span>
                        <div class="span_btn">即将开始</div>
                    </div>
                </a>
            </li>
            <li data-theme="c">
                <a href="#" data-transition="slide">
                    <img src="http://ww2.sinaimg.cn/bmiddle/d963426fjw1e89enqnz6oj20bm09ddha.jpg"/>
                    <div class="info">
                        <h2>特惠下午茶</h2>
                        <span class="price">20$</span>
                        <div class="span_btn">即将开始</div>
                    </div>
                </a>
            </li>
            <li data-theme="c">
                <a href="#" data-transition="slide">
                    <img src="http://ww2.sinaimg.cn/bmiddle/d963426fjw1e89enqnz6oj20bm09ddha.jpg"/>
                    <div class="info">
                        <h2>特惠下午茶</h2>
                        <span class="price">20$</span>
                        <div class="span_btn">即将开始</div>
                    </div>
                </a>
            </li>
        </ul>
        </div>
 
    </div><!-- /page -->
</body>
</html>