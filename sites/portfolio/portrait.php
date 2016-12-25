<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Michi Ganz - Anlässe</title>

    <?php 
        $version="3.0.0";
        $home="../../";
    ?>
    
    <?php include($home.'template/code/head.php');?>

<link rel="stylesheet" href="<?php echo $home;?>swipe/css/swipebox.css">
<link rel="stylesheet" href="<?php echo $home;?>sheet/portfolio.css">
<style type="text/css">
    #titlePicNorm:before { background-image: url("<?php echo $home;?>template/img/title_people.jpg"); }
</style>
<script src="<?php echo $home;?>swipe/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo $home;?>sheet/swipe.js"></script>

</head>

<body data-ajax="false">

    <?php include($home.'template/code/navi.php');?> 
    
    <div class="content">

        <div class="imageContainer">

        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-1.jpg);"> <a href="pic/portrait/portrait-1.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-2.jpg);"> <a href="pic/portrait/portrait-2.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-3.jpg);"> <a href="pic/portrait/portrait-3.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-4.jpg);"> <a href="pic/portrait/portrait-4.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-5.jpg);"> <a href="pic/portrait/portrait-5.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-6.jpg);"> <a href="pic/portrait/portrait-6.jpg" class="swipebox portfolio"></a> </span>

        <!--
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-7.jpg);"> <a href="pic/portrait/portrait-7.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-8.jpg);"> <a href="pic/portrait/portrait-8.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-9.jpg);"> <a href="pic/portrait/portrait-9.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-10.jpg);"> <a href="pic/portrait/portrait-10.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-11.jpg);"> <a href="pic/portrait/portrait-11.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-12.jpg);"> <a href="pic/portrait/portrait-12.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-13.jpg);"> <a href="pic/portrait/portrait-13.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-14.jpg);"> <a href="pic/portrait/portrait-14.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-15.jpg);"> <a href="pic/portrait/portrait-15.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-16.jpg);"> <a href="pic/portrait/portrait-16.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-17.jpg);"> <a href="pic/portrait/portrait-17.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-18.jpg);"> <a href="pic/portrait/portrait-18.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-19.jpg);"> <a href="pic/portrait/portrait-19.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-20.jpg);"> <a href="pic/portrait/portrait-20.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-21.jpg);"> <a href="pic/portrait/portrait-21.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-22.jpg);"> <a href="pic/portrait/portrait-22.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-23.jpg);"> <a href="pic/portrait/portrait-23.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-24.jpg);"> <a href="pic/portrait/portrait-24.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-25.jpg);"> <a href="pic/portrait/portrait-25.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-26.jpg);"> <a href="pic/portrait/portrait-26.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-27.jpg);"> <a href="pic/portrait/portrait-27.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-28.jpg);"> <a href="pic/portrait/portrait-28.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-29.jpg);"> <a href="pic/portrait/portrait-29.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-30.jpg);"> <a href="pic/portrait/portrait-30.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-31.jpg);"> <a href="pic/portrait/portrait-31.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-32.jpg);"> <a href="pic/portrait/portrait-32.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-33.jpg);"> <a href="pic/portrait/portrait-33.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-34.jpg);"> <a href="pic/portrait/portrait-34.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-35.jpg);"> <a href="pic/portrait/portrait-35.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-36.jpg);"> <a href="pic/portrait/portrait-36.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-37.jpg);"> <a href="pic/portrait/portrait-37.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-38.jpg);"> <a href="pic/portrait/portrait-38.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-39.jpg);"> <a href="pic/portrait/portrait-39.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/portrait/thumbs/portrait-40.jpg);"> <a href="pic/portrait/portrait-40.jpg" class="swipebox portfolio"></a> </span>
-->
        </div>
       
    </div>
    
    <?php include($home.'template/code/footer.php');?>
</body>
</html>
