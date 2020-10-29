<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('breadcrumbs.home'), route('home'));
});
