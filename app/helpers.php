<?php

function route_class()
{
    // str_replace can routename to classname
    return str_replace('.', '-', Route::currentRouteName());
}