<?php

namespace Database\Seeders;

use App\Enums\SettingKeys;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Setting::where('key', SettingKeys::GST_PERCENTAG->value)->doesntExist()) {
            $setting = new Setting();
            $setting->key = SettingKeys::GST_PERCENTAG;
            $setting->value = 18;
            $setting->save();
        }

        if (Setting::where('key', SettingKeys::CONVENIENCE_FEES_PERCENTAGE->value)->doesntExist()) {
            $setting = new Setting();
            $setting->key = SettingKeys::CONVENIENCE_FEES_PERCENTAGE;
            $setting->value = 6;
            $setting->save();
        }
    }
}
