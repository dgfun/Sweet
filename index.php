<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>捣鼓之乐</title>
    <link href="static/32.png" rel="icon" sizes="32x32"/>
    <link href="static/192.png" rel="icon" sizes="192x192"/>
    <link href="static/paul.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image: url('static/background-<?php echo rand(1, 6);?>.jpg');">
<div id="loader">
    <figure>
        <img src="./static/avatar.jpg"/>
    </figure>
</div>
<main>
    <div class="content">
        <figure class="me">
            <img class="avatar" src="./static/avatar.jpg"/>
            <h2 class="name">捣鼓之乐</h2>
        </figure>
        <section id="main" class="active">
            <a href="https://daogu.fun"><i class="fa fa-home"></i><span class="title">博客</span></a>
            <a href="https://pan.daogu.fun" target="_blank"><i class="fa fa-home"></i><span class="title">云盘</span></a>
            <a href="https://pay.daogu.fun" target="_blank"><i class="fa fa-flag"></i><span class="title">商店</span></a>
        </section>
        <section id="articles">
<?php
error_reporting(0);

// 设置你的博客 RSS 地址（WordPress、Typecho 均可）
define("BLOG_URL", "https://paugram.com/feed");

$file = simplexml_load_file(BLOG_URL) -> channel -> item;

if(isset($file)){
    for($i = 0; $i < 6; $i++){
        $timestamp = strtotime($file[$i] -> pubDate);
        $timestamp = date("y-m-d", $timestamp);

        if($file[$i]){
            echo '<a href="' . $file[$i] -> link . '" target="_blank">' .$file[$i] -> title . '<span class="meta">' . $timestamp . "</span></a>";
            echo "\n";
        }
        else{
            break;
        }
    }
}
else{
    echo "<a>博客连接失败<span class='meta'>请检查</span></a>";
}

?>
        </section>
        <section id="products">
            <a class="item" href="https://kico.binkic.com/style" target="_blank">Kico Style<span class="meta">极简前端框架</span></a>
            <a class="item" href="https://kico.binkic.com/player" target="_blank">Kico Player<span class="meta">极简音乐播放器</span></a>
            <a class="item" href="javascript:alert('没做好啊，来打我啊~');">Kico Tools<span class="meta">在线时钟小程序</span></a>
        </section>
        <section id="about">
            <p>待加工<a href="https://daogu.fun/about.html" target="_blank">详细阅读</a></p>
        </section>
        <div class="actions">
            <div class="item home active">
                <i class="fa fa-star"></i>
                <span class="title">首页</span>
            </div>
            <div class="item article">
                <i class="fa fa-book"></i>
                <span class="title">文章</span>
            </div>
            <div class="item product">
                <i class="fa fa-trophy"></i>
                <span class="title">作品</span>
            </div>
            <div class="item about">
                <i class="fa fa-graduation-cap"></i>
                <span class="title">关于我</span>
            </div>
        </div>
    </div>
</main>
<footer>
    <p>About <?php echo date(Y)?> <a href="https://daogu.fun">Amos</a>.</p>
</footer>

<script src="static/paul.js"></script>

</body>
</html>
