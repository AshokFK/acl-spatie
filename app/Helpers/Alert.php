<?php

namespace App\Helpers;

class Alert
{
    /**
     * Summary of flash
     * @param string $style can contain either of these ['success','warning','danger','info']
     * @param string $message flash message to display
     * @return void
     */
    public static function flash(string $style, string $message)
    {
        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', $style);
    }
}
