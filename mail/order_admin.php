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
            padding: 10px;
            margin:0 0 0 0;
        }
        .content > h3
        {
            padding: 10px;
            margin:0 0 0 0;
        }
        .user-info > h3
        {
            padding: 10px;
            color: #0d5db8;
            margin:0 0 0 0;
        }
        .user-info > span
        {
            padding: 10px;
            margin:0 0 0 0;
            font-size: 16px;
            font-weight:bold;
        }
        .content > img
        {
            width: 600px;
            margin:0;
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
            color: #0d5db8;
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
        .type
        {
            padding: 10px;
            color: #0d5db8;
            margin:0 0 0 0;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }

    </style>
</head>
<body>
<div class="content">
    <img src="<?=$domains;?>/web/images/send_mail.png" alt="<?=$domains?>">
    <h2>On STIGL F.Z.E. the request to the manager is made.</h2>
    <h3>The user is waiting for an answer.</h3>
    <div class="user-info">
        <h3>User info: </h3>
        <span>Full Name: <?=$order->user_name?></span><br>
        <span>E-mail: <?=$order->email?></span><br>
        <span>Phone: <?=$order->phone?></span><br>
    </div>
    <?php if(isset($session['cart']['sale'])):?>
        <span class="type">Sale</span><br>
        <?php foreach ($session['cart']['sale'] as $id => $item):?>
            <?php foreach ($products as $prod):?>
                <?php if($prod['id']==$id):?>
                    <div class="product-wrap">
                        <a class="" href="<?=$domains;?>/page/product?id=<?=$id;?>">
                            <img src="<?=$domains;?>/<?=$prod -> getImage()->getUrl()?>" alt="<?= $item['name']?>">
                        </a>
                        <div class="product-info">
                            <a class="" href="<?=$domains;?>/page/product?id=<?=$id;?>">
                                <h3 class=""><?= $item['name']?></h3>
                            </a>
                            <p>Quantity: <?= $item['qty']?></p>
                        </div>
                    </div>
                <?endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
    <?php endif;?>
    <?php if(isset($session['cart']['rent'])):?>
        <span class="type">Rent</span><br>
        <?php foreach ($session['cart']['rent'] as $id => $item):?>
            <?php foreach ($products as $prod):?>
                <?php if($prod['id']==$id):?>
                    <div class="product-wrap">
                        <a class="" href="<?=$domains;?>/page/product?id=<?=$id;?>">
                            <img src="<?=$domains;?>/<?=$prod -> getImage()->getUrl()?>" alt="<?= $item['name']?>">
                        </a>
                        <div class="product-info">
                            <a class="" href="<?=$domains;?>/page/product?id=<?=$id;?>">
                                <h3 class=""><?= $item['name']?></h3>
                            </a>
                            <p>Quantity: <?= $item['qty']?></p>
                        </div>
                    </div>
                <?endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
    <?php endif;?>
    <div class="footer">
        <div class="address">Address: <?=$contacts['index_city'],', ', $contacts['city'],', ',$contacts['street'],', ',$contacts['number_home'];?></div>
        <div class="phone">Phone: <?=$contacts['number_f']?><br>E-Mail: <span class="email"><?=$contacts['mail'];?></span></div>
    </div>
</div>
</body>
</html>

