<?php

namespace app\controllers;

use app\servers\AppServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Server\IoServer;
use yii\web\Controller;

class AppController extends Controller
{
    public $io_port = 8088;

    function setInstance()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                new AppServer()
                )
            ),
            $this->io_port
        );
        $server->run();
    }
}