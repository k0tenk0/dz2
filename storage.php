<?php
//создание пользователей
$users = [];
for ($i=1; $i <= 110; $i++) {
    $users[] = ['login' => 'user' . $i, 'password' => 'pass' . $i];
}
return $users;