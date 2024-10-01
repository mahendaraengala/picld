<?php

namespace Database\Seeders;

use App\Models\CloudServerSetting;
use App\Models\CloudStorageSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CloudStorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $disk_space = [
        //     [ "name" => "0", "value" => "0" ],
        //     [ "name" => "50", "value" => "200" ],
        //     [ "name" => "100", "value" => "400" ],
        //     [ "name" => "150", "value" => "600" ],
        //     [ "name" => "200", "value" => "800" ],
        //     [ "name" => "250", "value" => "1000" ],
        //     [ "name" => "300", "value" => "1200" ],
        //     [ "name" => "400", "value" => "1600" ],
        //     [ "name" => "600", "value" => "2400" ],
        //     [ "name" => "700", "value" => "2800" ],
        //     [ "name" => "800", "value" => "3200" ],
        //     [ "name" => "900", "value" => "3600" ],
        //     [ "name" => "1000", "value" => "4000" ],
        //     [ "name" => "1500", "value" => "6000" ],
        //     [ "name" => "2000", "value" => "8000" ],
        //     [ "name" => "3000", "value" => "12000" ],
        //     [ "name" => "4000", "value" => "16000" ],
        //     [ "name" => "5000", "value" => "20000" ],
        // ];

        $disk_space = [];

        for ($i = 0; $i <= 5000; $i++) 
        {
            if ($i % 50 == 0) {
                $name = $i;
                $value = $i * 200;
                array_push($disk_space, [
                    "name" => $name,
                    "value" => $value
                ]);
            }   
        }

        // $data_transfer = [
        //     [ "name" => "0", "value" => "0" ],
        //     [ "name" => "50", "value" => "500" ],
        //     [ "name" => "100", "value" => "500" ],
        //     [ "name" => "200", "value" => "500" ],
        //     [ "name" => "300", "value" => "500" ],
        //     [ "name" => "400", "value" => "500" ],
        //     [ "name" => "500", "value" => "500" ],
        //     [ "name" => "600", "value" => "1000" ],
        //     [ "name" => "700", "value" => "1000" ],
        //     [ "name" => "800", "value" => "1000" ],
        //     [ "name" => "900", "value" => "1000" ],
        //     [ "name" => "1000", "value" => "1500" ],
        //     [ "name" => "2000", "value" => "2200" ],
        //     [ "name" => "3000", "value" => "2800" ],
        //     [ "name" => "4000", "value" => "3400" ],
        //     [ "name" => "5000", "value" => "5000" ],
        //     [ "name" => "10000", "value" => "6500" ],
        // ];

        $data_transfer = [];

        for ($i = 0; $i <= 5000; $i++) 
        {
            if ($i % 50 == 0) {

                $name = $i;
                
                if ($i < 600) {
                    $value = 500;
                }
                else if ($i < 1000) {
                    $value = 1000;
                }
                else if ($i < 2000) {
                    $value = 1500;
                }
                else if ($i < 3000) {
                    $value = 2200;
                }
                else if ($i < 4000) {
                    $value = 2800;
                }
                else if ($i < 5000) {
                    $value = 3400;
                }
                else {
                    $value = 6500;
                }

                array_push($data_transfer, [
                    "name" => $name,
                    "value" => $value
                ]);
            }   
        }

        $storage_type = [
            [ "name" => "SAS 10K", "value" => "200" ],
            [ "name" => "SSD", "value" => "200" ],
        ];

        $dedicated_bandwidth = [];

        for ($i = 0; $i <= 50; $i++) 
        {
            $speed = $i . 'MBPS';
            $value = $i * 350;
            array_push($dedicated_bandwidth, [
                "name" => $speed,
                "value" => $value
            ]);
        }
    
        $payment_terms = [
            [ "name" => "Monthly Advance", "value" => "1" ],
            [ "name" => "Quarterly Advance", "value" => "3" ],
            [ "name" => "Half Year Advance", "value" => "6" ],
            [ "name" => "Full Year Advance", "value" => "12" ],
        ];

        $contract_period = [
            [ "name" => "1 Year", "value" => "0" ],
            [ "name" => "2 Year", "value" => "0" ],
            [ "name" => "3 Year", "value" => "0" ],
        ];

        if (count(CloudStorageSetting::all()) == 0) {
            $clous_storage_setting = new CloudStorageSetting();
            $clous_storage_setting->disk_space = json_encode($disk_space);
            $clous_storage_setting->data_transfer = json_encode($data_transfer);
            $clous_storage_setting->storage_type = json_encode($storage_type);
            $clous_storage_setting->dedicated_bandwidth = json_encode($dedicated_bandwidth);
            $clous_storage_setting->payment_terms = json_encode($payment_terms);
            $clous_storage_setting->contract_period = json_encode($contract_period);
            $clous_storage_setting->save();
        }
    }
}
