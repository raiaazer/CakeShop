<?php

function adminAssets($path = '')
{
    return asset('admin_asset/'.$path);
}

function userAssets($path = '')
{
    return asset('theme_asset/'.$path);
}

function priceFormat($price,$currency = 'USD')
{
    return money($price * 100 , $currency);
}