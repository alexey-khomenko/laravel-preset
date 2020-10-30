<?php

// Profile
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push(__('user::breadcrumbs.profile'), route('profile'));
});

// Login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push(__('user::breadcrumbs.login'), route('login'));
});

// Register
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push(__('user::breadcrumbs.register'), route('register'));
});

// Profile
Breadcrumbs::for('reset', function ($trail) {
    $trail->parent('home');
    $trail->push(__('user::breadcrumbs.reset'), route('reset'));
});
