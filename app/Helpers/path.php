<?php

function adminAssets($path = '')
{
    return asset('admin_asset/'.$path);
}

function userAssets($path = '')
{
    return asset('theme_asset/'.$path);
}
