<?php
// Демон: непрерывно слушает Telegram, отвечает за 1–3 секунды
$_GET['action']='tgpoll_loop';
$CFG=require __DIR__.'/config.php';
$_GET['secret']=$CFG['tg_secret'];
require __DIR__.'/api.php';