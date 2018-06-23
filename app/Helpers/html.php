<?php

# style tag with timestamp

function style_ts($path)
{
    try
    {
        $ts = '?v=' . File::lastModified(public_path() . $path);
    }
    catch (Exception $e)
    {
        $ts = '';
    }
    return '<link type="text/css" rel="stylesheet" href="' . $path . $ts . '">';
}

# script tag with timestamp

function script_ts($path)
{
    try
    {
        $ts = '?v=' . File::lastModified(public_path().$path);
    }
    catch (Exception $e)
    {
        $ts = '';
    }
    return '<script scr="' . $path . $ts . '"></script>';
}