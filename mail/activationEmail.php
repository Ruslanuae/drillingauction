<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="image/png" />
    <meta http-equiv="Cache-Control" content="no-cache, max-age=0" />
    <script type="text/javascript" src="">
    </script>
    <style type="text/css">
        .content
        {
            width: 600px;
            margin: 0 auto;
            background: #fcfcfc;
        }
        .content h2
        {
            background: #0d5db8;
            color: white;
            padding: 10px;
            margin:-4px 0 0 0;
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
        .pass-info
        {
            font-size: 26px;
            color: black;
            font-weight: bold;
            text-align: center;
            margin: 15px 0 15px 15px;
        }
        .pass-info > a
        {
            text-decoration: none;
            color: #0d5db8;
        }
        .pass-info > a:hover
        {
            text-decoration: underline;
            color: #0d5db8;
        }
        .pass-info > p, .pass-info > a > h3
        {
            margin: 2px 0;
        }
        .support-info > span
        {
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 5px;
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
    <div class="pass-info">
        <p> <?php echo 'Hello, '.Html::encode($user->user_name).'. ';
            echo 'To activate your account, please click '.Html::a(' here.', Yii::$app->urlManager->createAbsoluteUrl(
                    [
                        '/page/activate-account',
                        'key' => $user->secret_key
                    ]));?>
        </p>
    </div>
    <div class="support-info"><span>This link expires in 1 hour, so use it right now. If you did not do this, please contact support.</span></div>
    <div class="footer">
        <div class="address">Address: <?=$contacts['index_city'],', ', $contacts['city'],', ',$contacts['street'],', ',$contacts['number_home'];?></div>
        <div class="phone">Phone: <?=$contacts['number_f']?><br><span class="email">E-Mail: <?=$contacts['mail'];?></span></div>
        <div class="unsubscribe"><a href="<?=$domains?>/page/unsubscribe?mail=<?=$user['email'];?>">Unsubscribe</a></div>
    </div>
</div>
</body>
</html>
