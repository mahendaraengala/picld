<?php

namespace Database\Seeders;

use App\Enums\GpuPricingType;
use App\Models\GpuPricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GpuPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gpu_pricings = [
            [
                'gpu_card' => 'NVIDIA - RTX A5000',
                'os' => 'Cent OS 7',
                'gpu_memory' => '24 GB',
                'plan' => 'GDC.RTX-16.115GB',
                'vcpu' => '16',
                'ram' => '32',
                'ssd_storage' => '500 GB',
                'pi_monthly_mrc' => '31800',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
            [
                'gpu_card' => 'NVIDIA - A2',
                'os' => 'Rocky Linux - 8',
                'gpu_memory' => '16',
                'plan' => 'GDC.A280-32.112GB',
                'vcpu' => '16',
                'ram' => '32',
                'ssd_storage' => '500 GB',
                'pi_monthly_mrc' => '26500',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
            [
                'gpu_card' => 'NVIDIA - 2X L4',
                'os' => 'Rocky Linux - 8',
                'gpu_memory' => '48',
                'plan' => 'GDC3.2xL4-50.220GB',
                'vcpu' => '50',
                'ram' => '220',
                'ssd_storage' => '250 GB',
                'pi_monthly_mrc' => '26500',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::ON_REQUEST->value,
            ],
            [
                'gpu_card' => 'NVIDIA - A2',
                'os' => 'Ubuntu - 22.04',
                'gpu_memory' => '16',
                'plan' => 'GDC.A280-32.112GB',
                'vcpu' => '16',
                'ram' => '32',
                'ssd_storage' => '500 GB',
                'pi_monthly_mrc' => '26500',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
            [
                'gpu_card' => 'NVIDIA - A100 - 80',
                'os' => 'Cent OS 7',
                'gpu_memory' => '80',
                'plan' => 'GDC.A10080-16.115GB',
                'vcpu' => '16',
                'ram' => '115',
                'ssd_storage' => '1500 GB',
                'pi_monthly_mrc' => '148482',
                'pi_hourly_mrc' => null,
                'type' => GpuPricingType::BUY_NOW->value,
            ],
        ];

        foreach ($gpu_pricings as $key => $value) {
            $gpu_pricing = new GpuPricing();
            $gpu_pricing->gpu_card = $value['gpu_card'];
            $gpu_pricing->os = $value['os'];
            $gpu_pricing->gpu_memory = $value['gpu_memory'];
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
