<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8" />
 <title>
  @yield('title')
 </title>
 <meta name="author" content="DeathGhost" />
 <link rel="stylesheet" type="text/css" href="/admin/css/style.css">
 <!--[if lt IE 9]>
 <script src="/admin/js/html5.js">
 </script>
 <![endif]-->
 <script src="/admin/js/jquery.js">
 </script>
 <script src="/admin/js/jquery.mCustomScrollbar.concat.min.js">
 </script>
 <script>
     (function($) {
         $(window).load(function() {

             $("a[rel='load-content']").click(function(e) {
                 e.preventDefault();
                 var url = $(this).attr("href");
                 $.get(url,
                     function(data) {
                         $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                         //scroll-to appended content
                         $(".content").mCustomScrollbar("scrollTo", "h2:last");
                     });
             });

             $(".content").delegate("a[href='top']", "click",
                 function(e) {
                     e.preventDefault();
                     $(".content").mCustomScrollbar("scrollTo", $(this).attr("href"));
                 });

         });
     })(jQuery);
 </script>
</head>

<body>
<!--header-->
<header>
 <h1>
  <img src="images/admin_logo.png" />
 </h1>
 <ul class="rt_nav">
  <li>
   <a href="http://www.mycodes.net" target="_blank" class="website_icon">
    站点首页
   </a>
  </li>
  <li>
   <a href="#" class="clear_icon">
    清除缓存
   </a>
  </li>
  <li>
   <a href="#" class="admin_icon">
    DeathGhost
   </a>
  </li>
  <li>
   <a href="#" class="set_icon">
    账号设置
   </a>
  </li>
  <li>
   <a href="login.html" class="quit_icon">
    安全退出
   </a>
  </li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2>
  <a href="index.html">
   起始页
  </a>
 </h2>
 <ul>
  <li>
   <dl>

    <!--当前链接则添加class:active-->
    <dd>
     <a href="product_list.html" class="active">
      用户管理
     </a>
    </dd>

    <dd>
     <a href="recycle_bin.html">
      用户列表
     </a>
    </dd>
   </dl>
  </li>
 </ul>
</aside>
<style>
 .dataStatistic{width:400px;height:200px;border:1px solid #ccc;margin:0
 auto;margin:10px;overflow:hidden} #cylindrical{width:400px;height:200px;margin-top:-15px}
 #line{width:400px;height:200px;margin-top:-15px} #pie{width:400px;height:200px;margin-top:-15px}
</style>
<section class="rt_wrap content mCustomScrollbar">
 @section('content')
 @show
</section>
<script src="/admin/js/amcharts.js" type="text/javascript">
</script>
<script src="/admin/js/serial.js" type="text/javascript">
</script>
<script src="/admin/js/pie.js" type="text/javascript">
</script>
</body>

</html>