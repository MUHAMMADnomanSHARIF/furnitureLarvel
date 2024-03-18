<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class GlobalHelper

{
    public static function getSettings(): array
    {
        $settings = cache()->rememberForever('settings', function () {
            return Setting::all()->toArray();
        });

        // Convert color codes to RGB format if necessary
        foreach ($settings as &$setting) {
            if (isset($setting['color_code'])) {
                $setting['color_code'] = self::hexToRgb($setting['color_code']);
            }
            // You might need to adjust the key 'color_code' based on your actual setting structure
        }

        return $settings;
    }
    public static function hexToRgb($hex)
    {
        // Remove the # if it's there
        $hex = str_replace('#', '', $hex);

        // Convert hex to RGB
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        return "rgb($r, $g, $b)";
    }

    public static function getSettingModel(): ?Setting
    {
        $settings = self::getSettings();
        return !empty($settings) ? new Setting($settings[0]) : null;
    }

    public static function hasImages(): bool
    {
        $settingModel = self::getSettingModel();

        // Check if the model exists and has the 'images' collection
        return $settingModel && $settingModel->hasMedia('settings.logo');
    }

    public static function hasDocuments(): bool
    {
        $settingModel = self::getSettingModel();

        // Check if the model exists and has the 'documents' collection
        return $settingModel && $settingModel->hasMedia('settings.favicon');
    }

    public static function getSettingValue(string $columnName): string
    {
        $settingModel = self::getSettingModel();

        // Check if the model exists before accessing the media
        if ($settingModel) {
            // Get the media items from the 'images' collection
            $imagesMedia = $settingModel->getMedia('images');
            // Get the media items from the 'documents' collection
            $documentsMedia = $settingModel->getMedia('documents');

            // Do something with $imagesMedia and $documentsMedia
        }

        return $settingModel ? $settingModel->$columnName : '';
    }

    public static function processAllSettings(): array
    {
        $settings = self::getSettings();

        // Process the settings array, modify or format the data as needed
        foreach ($settings as &$setting) {
            // Process each setting, if necessary
        }

        return $settings;
    }

    public static function getAllSettings(): array
    {
            return self::processAllSettings();
     }
}
