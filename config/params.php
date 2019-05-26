<?php

return [
	require_once(__DIR__ . '/functions.php'),
    'adminEmail' => ' support@oildrillingcorp.com',
    'supportEmail' => 'admin@oildrillingcorp.com', //автоматическая отправка почты с данного эмайла
    'secretKeyExpire' => 60* 60, //время хранения секретного ключа 1 час
    'emailActivation' => false, //Если true то активация будет через почту
    'myEmail' => 'support@oildrillingcorp.com',
    'myPass' => 'qwerty123',
    'domains' => 'http://srv19110.hostiman.com',
    'admins' => [
        'alexandr.shvets96@gmail.com',
        '969868767@mail.ru',
        'kolesnykov.roma@gmail.com',
        'hostmas@bk.ru',
    ],
    'mainAdmin' => 'alexandr.shvets96@gmail.com',
    'mainAdmin2' => '969868767@mail.ru',
    'mainAdmin3' => 'kolesnykov.roma@gmail.com',
    'mainAdmin4' => 'hostmas@bk.ru',
    'order_p' => array(
        'manufacturer_asc'=>array('Manufacturer', 'manufacturer ASC', 'ASC', 'manufacturer'),
        'manufacturer_desc'=>array('Manufacturer', 'manufacturer DESC', 'DESC', 'manufacturer'),
        'model_asc'=>array('Model', 'model ASC', 'ASC', 'model'),
        'model_desc'=>array('Model', 'model DESC', 'DESC', 'model'),
        'company_asc'=>array('Company', 'company ASC', 'ASC', 'company'),
        'company_desc'=>array('Company', 'company DESC', 'DESC', 'company'),
        'location_asc'=>array('Location', 'location ASC', 'ASC', 'location'),
        'location_desc'=>array('Location', 'location DESC', 'DESC', 'location')
    )
];
