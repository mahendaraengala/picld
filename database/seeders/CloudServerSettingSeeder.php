<?php

namespace Database\Seeders;

use App\Models\CloudServerSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CloudServerSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cpu_cors = [
        //     [ "name" => "0", "value" => "0" ],
        //     [ "name" => "2", "value" => "600" ],
        //     [ "name" => "4", "value" => "1200" ],
        //     [ "name" => "6", "value" => "1800" ],
        //     [ "name" => "8", "value" => "2400" ],
        //     [ "name" => "10", "value" => "3000" ],
        //     [ "name" => "12", "value" => "3600" ],
        //     [ "name" => "14", "value" => "4200" ],
        //     [ "name" => "16", "value" => "4800" ],
        //     [ "name" => "18", "value" => "5400" ],
        //     [ "name" => "20", "value" => "6000" ],
        //     [ "name" => "22", "value" => "6600" ],
        //     [ "name" => "24", "value" => "7200" ],
        //     [ "name" => "26", "value" => "7800" ],
        //     [ "name" => "28", "value" => "8400" ],
        //     [ "name" => "30", "value" => "9000" ],
        //     [ "name" => "32", "value" => "9600" ],
        //     [ "name" => "48", "value" => "14400" ],
        //     [ "name" => "64", "value" => "19200" ],
        // ];

        $cpu_cors = [];

        for ($i = 0; $i <= 32; $i++) 
        {
            if ($i % 2 == 0) {
                $name = $i;
                $value = $i * 300;
                array_push($cpu_cors, [
                    "name" => $name,
                    "value" => $value
                ]);
            }   
        }


        // $ram = [
        //     [ "name" => "0", "value" => "0" ],
        //     [ "name" => "2", "value" => "350" ],
        //     [ "name" => "4", "value" => "700" ],
        //     [ "name" => "6", "value" => "1050" ],
        //     [ "name" => "8", "value" => "1400" ],
        //     [ "name" => "12", "value" => "2100" ],
        //     [ "name" => "16", "value" => "2800" ],
        //     [ "name" => "20", "value" => "3500" ],
        //     [ "name" => "24", "value" => "4200" ],
        //     [ "name" => "28", "value" => "4900" ],
        //     [ "name" => "32", "value" => "5600" ],
        //     [ "name" => "40", "value" => "7000" ],
        //     [ "name" => "48", "value" => "8400" ],
        //     [ "name" => "64", "value" => "11200" ],
        // ];

        $ram = [];

        $ram_count = 0;

        for ($i = 0; $i <= 40; $i++) 
        {
            if ($i % 4 == 0) {
                $ram_count++;
                $name = $i;
                $value = $i * 175;
                array_push($ram, [
                    "name" => $name,
                    "value" => $value
                ]);
            }   
        }

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

        $disk_space_count = 0;

        for ($i = 0; $i <= 5000; $i++) 
        {
            if ($i % 50 == 0) {
                $disk_space_count++;
                $name = $i;
                $value = $i * 4;
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

        $operating_system = [
            [ "name" => "Cent OS", "value" => "0" ],
            [ "name" => "Debian", "value" => "0" ],
            [ "name" => "Ubuntu", "value" => "0" ],
            [ "name" => "Windows Server Standard", "value" => "791" ],
            [ "name" => "Windows Server Database", "value" => "1718" ],
            [ "name" => "Windows Server Essentials", "value" => "2780" ],
            [ "name" => "RHEL", "value" => "6142" ],
            [ "name" => "SLES", "value" => "5000" ],
            [ "name" => "SLES for SAP Application", "value" => "10000" ],
        ];

        $storage_type = [
            [ "name" => "SAS 10K", "value" => "200" ],
            [ "name" => "SSD", "value" => "400" ],
        ];

        $database = [
            [ "name" => "MS SQL Express Edition", "value" => "0" ],
            [ "name" => "Mongo DB", "value" => "0" ],
            [ "name" => "Apache Cassandra", "value" => "0" ],
            [ "name" => "Druid", "value" => "0" ],
            [ "name" => "MS SQL Standard Edition", "value" => "1709" ],
            [ "name" => "MS SQL Enterprise Edition", "value" => "48326" ],
            [ "name" => "MS SQL Web Edition", "value" => "959" ],
            [ "name" => "MY SQL Community Edition", "value" => "0" ],
        ];

        $public_ip = [
            [ "name" => "0", "value" => "0" ],
            [ "name" => "1", "value" => "425" ],
            [ "name" => "2", "value" => "850" ],
            [ "name" => "3", "value" => "1275" ],
            [ "name" => "4", "value" => "1700" ],
            [ "name" => "5", "value" => "2125" ],
            [ "name" => "6", "value" => "2550" ],
            [ "name" => "7", "value" => "2975" ],
            [ "name" => "8", "value" => "3400" ],
            [ "name" => "9", "value" => "3825" ],
            [ "name" => "10", "value" => "4250" ],
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

        $backup_storage = [
            [ "name" => "0GB", "value" => "0" ],
            [ "name" => "50GB", "value" => "100" ],
            [ "name" => "100GB", "value" => "200" ],
            [ "name" => "200GB", "value" => "400" ],
            [ "name" => "300GB", "value" => "600" ],
            [ "name" => "400GB", "value" => "800" ],
            [ "name" => "500GB", "value" => "1000" ],
            [ "name" => "600GB", "value" => "1200" ],
            [ "name" => "700GB", "value" => "1400" ],
            [ "name" => "800GB", "value" => "1600" ],
            [ "name" => "900GB", "value" => "1800" ],
            [ "name" => "1000GB", "value" => "2000" ],
        ];
        
        $backup_licence = [
            [ "name" => "VM Level", "value" => "950" ],
            [ "name" => "File/Folder", "value" => "920" ],
            [ "name" => "Database Level", "value" => "950" ]
        ];

        $antivirus = [
            [ "name" => "Anti-Malware", "value" => "300" ],
            [ "name" => "Network Security (HIPS)", "value" => "377" ]
        ];

        $two_factor_authentication = [
            [ "name" => "0", "value" => "0" ],
            [ "name" => "5", "value" => "2500" ],
            [ "name" => "10", "value" => "5000" ],
            [ "name" => "11", "value" => "5500" ],
            [ "name" => "12", "value" => "6000" ],
            [ "name" => "13", "value" => "6500" ],
            [ "name" => "14", "value" => "7000" ],
            [ "name" => "15", "value" => "7500" ],
            [ "name" => "16", "value" => "8000" ],
            [ "name" => "17", "value" => "8500" ],
            [ "name" => "18", "value" => "9000" ],
            [ "name" => "19", "value" => "9500" ],
            [ "name" => "20", "value" => "10000" ],
            [ "name" => "21", "value" => "10500" ],
            [ "name" => "22", "value" => "11000" ],
            [ "name" => "23", "value" => "11500" ],
            [ "name" => "24", "value" => "12000" ],
            [ "name" => "25", "value" => "12500" ],
        ];
        
        $elastic_load_balancer = [];

        for ($i = 0; $i <= 25; $i++) 
        {
            $name = $i;
            $value = $i * 2500;
            array_push($elastic_load_balancer, [
                "name" => $name,
                "value" => $value
            ]);
        }

        $otc = [];

        for ($i = 0; $i <= 25; $i++) 
        {
            $name = $i;
            $value = $i * 23430;
            array_push($otc, [
                "name" => $name,
                "value" => $value
            ]);
        }

        $dr_replication_tool = [];

        for ($i = 0; $i <= 25; $i++) 
        {
            $name = $i;
            $value = $i * 4000;
            array_push($dr_replication_tool, [
                "name" => $name,
                "value" => $value
            ]);
        }

        $ms_rdp_call_license = [
            [ "name" => "User CAL License", "value" => "650" ],
            [ "name" => "Device CAL License (HIPS)", "value" => "500" ]
        ];

        $web_panel  = [
            [ "name" => "cPanel Solo (1 account)", "value" => "1613" ],
            [ "name" => "cPanel Admin (upto 5 accounts)", "value" => "2822" ],
            [ "name" => "cPanel Pro (Upto 30 accounts)", "value" => "4032" ],
            [ "name" => "cPanel Premier (Upto 100 accounts)", "value" => "6048" ],
            [ "name" => "Plesk Web Admin VPS (10 domains)", "value" => "1361" ],
            [ "name" => "Plesk Web Pro VPS (30 domains)", "value" => "2066" ],
            [ "name" => "Plesk Web Host VPS (unlimited domains)", "value" => "3578" ]
        ];

        $dedicated_firewall = [
            [ "name" => "Dedicated Firewall with 2 ports", "value" => "12500" ],
            [ "name" => "Dedicated Firewall (HA) with 4 ports", "value" => "20000" ]
        ];

        $vpn = [
            [ "name" => "Site-to-Site", "value" => "3000" ],
            [ "name" => "Client", "value" => "300" ],
            [ "name" => "SSL VPN (Pi HySecure)", "value" => "650" ]
        ];

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

        if (count(CloudServerSetting::all()) == 0) {
            $clous_server_setting = new CloudServerSetting();
            $clous_server_setting->cpu_cors = json_encode($cpu_cors);
            $clous_server_setting->ram = json_encode($ram);
            $clous_server_setting->disk_space = json_encode($disk_space);
            $clous_server_setting->data_transfer = json_encode($data_transfer);
            $clous_server_setting->operating_system = json_encode($operating_system);
            $clous_server_setting->storage_type = json_encode($storage_type);
            $clous_server_setting->database = json_encode($database);
            $clous_server_setting->public_ip = json_encode($public_ip);
            $clous_server_setting->dedicated_bandwidth = json_encode($dedicated_bandwidth);
            $clous_server_setting->backup_storage = json_encode($backup_storage);
            $clous_server_setting->backup_licence = json_encode($backup_licence);
            $clous_server_setting->antivirus = json_encode($antivirus);
            $clous_server_setting->two_factor_authentication = json_encode($two_factor_authentication);
            $clous_server_setting->elastic_load_balancer = json_encode($elastic_load_balancer);
            $clous_server_setting->otc = json_encode($otc);
            $clous_server_setting->dr_replication_tool = json_encode($dr_replication_tool);
            $clous_server_setting->ms_rdp_call_license = json_encode($ms_rdp_call_license);
            $clous_server_setting->web_panel = json_encode($web_panel);
            $clous_server_setting->dedicated_firewall = json_encode($dedicated_firewall);
            $clous_server_setting->vpn = json_encode($vpn);
            $clous_server_setting->payment_terms = json_encode($payment_terms);
            $clous_server_setting->contract_period = json_encode($contract_period);
            $clous_server_setting->save();
        }
        
    }
}
