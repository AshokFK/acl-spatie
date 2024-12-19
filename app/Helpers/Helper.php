<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class Helper
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

    /** 
     * get all available models in the app/Models directory
     * @return array list of available models
     */
    public static function getAvailableModels()
    {

        $models = [];
        $modelsPath = app_path('Models');
        $modelFiles = File::allFiles($modelsPath);
        foreach ($modelFiles as $modelFile) {
            $models[] = $modelFile->getFilenameWithoutExtension();
        }

        return $models;
    }
}
