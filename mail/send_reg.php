<?php
use yii\helpers\Url;
use yii\helpers\Html;
//$headers->addTextHeader('List-Unsubscribe', '<'.$domains.'/page>');
//$headers->addListHeader ( ' List-Unsubscribe ' , $domains );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="image/png" />
    <meta http-equiv="Cache-Control" content="no-cache, max-age=0" />
    <style type="text/css">
        .content
        {
            width: 600px;
            margin: 0 auto;
            background: #fcfcfc;
        }
        .content h2
        {
            color: #0d5db8;
            padding: 10px;
            margin:-4px 0 0 0;
        }
        .content > img
        {
            width: 600px;
            margin:0;
        }
        .content > a
        {
            text-decoration: none;
            color: #0d5db8;
        }
        .content > a:hover
        {
            text-decoration: underline;
            color: #0d5db8;
        }
        .product-wrap
        {
            position: relative;
            display:flex;
            padding: 10px;
        }
        .product-wrap > a
        {

        }
        .product-wrap > a > img
        {
            width: 120px;
        }
        .product-info
        {
            margin: 0 0 0 10px;
        }
        .product-info > a
        {
            text-decoration: none;
            color: #0d5db8;
        }
        .product-info > a:hover
        {
            text-decoration: underline;
            color: #0d5db8;
        }
        .product-info > p, .product-info > a > h3
        {
            margin: 2px 0;
        }
        .product-info > h3
        {
            color:black;
        }
        .footer
        {
            background: #0d5db8;
            color: white;
            padding: 10px;
            min-height: 50px;
        }
        .footer > .address, .footer > .phone
        {
            width: 49%;
            float:left;
            padding: 5px;
            box-sizing: border-box;
            font-size: 18px;
        }
        .footer > .unsubscribe
        {
            width: 99%;
            clear: both;
            text-align: center;
            display: inline-block;
            font-size: 14px;


        }
        .footer > .unsubscribe > a
        {
            color: white;
            text-decoration: none;
        }
        .footer > .unsubscribe >  a:hover
        {
            color: white;
            text-decoration: underline;
        }
        .email > a
        {
            color: white;
            text-decoration: none;
        }
        .email > a:hover
        {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="content">
    <img src="<?=$domains;?>/web/images/send_mail.png" alt="<?=$domains?>">
    <a class="" href="<?=$domains;?>"><h2><?=$send_mes['heading'];?></h2></a>
        <div class="product-wrap">
            <div class="product-info">
                <h3><?=$send_mes['description']?></h3>
            </div>
        </div>
    <div class="footer">
        <div class="address">Address: <?=$contacts['index_city'],', ', $contacts['city'],', ',$contacts['street'],', ',$contacts['number_home'];?></div>
        <div class="phone">Phone: <?=$contacts['number_f']?><br>E-Mail: <span class="email"><?=$contacts['mail'];?></span></div>
        <div class="unsubscribe"><a href="<?=$domains?>/page/unsubscribe?mail=<?=$user['email'];?>">Unsubscribe</a></div>
    </div>
</div>
</body>
</html>