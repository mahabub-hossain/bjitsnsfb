<?php
if (!session_id()) {
    session_start();
}
return $config = [
    'facebook' => [
        'app_id' => '173467900711404',
        'app_secret' => '6fca77af9889374fa41beaf17e900281',
        'default_graph_version' => 'v7.0',
        'callback' => 'http://localhost/snlapi/index.php'
    ]
];