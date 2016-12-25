<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Michi Ganz - People</title>

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

        <span class="port" style="background-image: url(pic/people/thumbs/people-1.jpg);"> <a href="pic/people/people-1.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-2.jpg);"> <a href="pic/people/people-2.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-3.jpg);"> <a href="pic/people/people-3.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-4.jpg);"> <a href="pic/people/people-4.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-5.jpg);"> <a href="pic/people/people-5.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-6.jpg);"> <a href="pic/people/people-6.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-7.jpg);"> <a href="pic/people/people-7.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-8.jpg);"> <a href="pic/people/people-8.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-9.jpg);"> <a href="pic/people/people-9.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-10.jpg);"> <a href="pic/people/people-10.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-11.jpg);"> <a href="pic/people/people-11.jpg" class="swipebox portfolio"></a> </span>

        <!--
        <span class="port" style="background-image: url(pic/people/thumbs/people-12.jpg);"> <a href="pic/people/people-12.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-13.jpg);"> <a href="pic/people/people-13.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-14.jpg);"> <a href="pic/people/people-14.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-15.jpg);"> <a href="pic/people/people-15.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-16.jpg);"> <a href="pic/people/people-16.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-17.jpg);"> <a href="pic/people/people-17.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-18.jpg);"> <a href="pic/people/people-18.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-19.jpg);"> <a href="pic/people/people-19.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-20.jpg);"> <a href="pic/people/people-20.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-21.jpg);"> <a href="pic/people/people-21.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-22.jpg);"> <a href="pic/people/people-22.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-23.jpg);"> <a href="pic/people/people-23.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-24.jpg);"> <a href="pic/people/people-24.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-25.jpg);"> <a href="pic/people/people-25.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-26.jpg);"> <a href="pic/people/people-26.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-27.jpg);"> <a href="pic/people/people-27.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-28.jpg);"> <a href="pic/people/people-28.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-29.jpg);"> <a href="pic/people/people-29.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-30.jpg);"> <a href="pic/people/people-30.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-31.jpg);"> <a href="pic/people/people-31.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-32.jpg);"> <a href="pic/people/people-32.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-33.jpg);"> <a href="pic/people/people-33.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-34.jpg);"> <a href="pic/people/people-34.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-35.jpg);"> <a href="pic/people/people-35.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-36.jpg);"> <a href="pic/people/people-36.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-37.jpg);"> <a href="pic/people/people-37.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-38.jpg);"> <a href="pic/people/people-38.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-39.jpg);"> <a href="pic/people/people-39.jpg" class="swipebox portfolio"></a> </span>
        <span class="port" style="background-image: url(pic/people/thumbs/people-40.jpg);"> <a href="pic/people/people-40.jpg" class="swipebox portfolio"></a> </span>
-->
        </div>
       
    </div>
    
    <?php include($home.'template/code/footer.php');?>
</body>
</html>
