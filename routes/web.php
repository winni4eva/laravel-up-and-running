<?php

$router->get('/users/{user}', function ($resolvedUser) {
    $users = $resolvedUser->load('posts');
    dd($users);
});