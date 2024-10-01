<?php

namespace Database\Seeders;

use App\Enums\GpuPricingType;
use App\Models\KubernetesPricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KubernetesPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gpu_pricings = [
            [
                'plan' => 'C4.M8',
                'vcpu' => '4',
                'ram' => '8 GB',
                'ssd_storage' => '100 GB',
                'pi_monthly_mrc' => '2200',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
            [
                'plan' => 'C8.M16',
                'vcpu' => '8',
                'ram' => '16 GB',
                'ssd_storage' => '150 GB',
                'pi_monthly_mrc' => '4400',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
            [
                'plan' => 'C16.M32',
                'vcpu' => '16',
                'ram' => '32 GB',
                'ssd_storage' => '200 GB',
                'pi_monthly_mrc' => '8800',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::ON_REQUEST->value,
            ]
        ];

        foreach ($gpu_pricings as $key => $value) {
            $gpu_pricing = new KubernetesPricing();
            $gpu_pricing->plan = $value['plan'];
            $gpu_pricing->vcpu = $value['vcpu'];
            $gpu_pricing->ram = $value['ram'];
            $gpu_pricing->ssd_storage = $value['ssd_storage'];
            $gpu_pricing->pi_monthly_mrc = $value['pi_monthly_mrc'];
            $gpu_pricing->pi_hourly_mrc = $value['pi_hourly_mrc'];
            $gpu_pricing->type = $value['type'];
            $gpu_pricing->save();
        }
    }
}
