<?php 

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');


$user = new User(['name' => 'Luan', 'email' => 'luan.luan@luan.com']);
print_r($user->name);

$user->email = 'luan.lima@lima.com.br'
?>