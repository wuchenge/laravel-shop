<?php

/**
 * @Author: wuchenge
 * @Date: 2018-10-17 12:44:49
 */

function test_helper()
{
    return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
