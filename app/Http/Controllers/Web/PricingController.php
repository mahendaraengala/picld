<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CloudServerSetting;
use App\Models\CloudStorageSetting;
use App\Models\GpuPricing;
use App\Models\KubernetesPricing;
use Exception;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * View Pricing
     *
     * @return mixed
     */
    public function viewPricing(): mixed
    {
        try {

            $pricing = CloudServerSetting::orderBy('id')->first();

            $top_gpu_servers = GpuPricing::take(4)->get();

            $high_on_demand = GpuPricing::where('gpu_card', 'NVIDIA A100')->first();

            return view('web.pages.pricing', [
                'pricing' => $pricing,
                'top_gpu_servers' => $top_gpu_servers,
                'high_on_demand' => $high_on_demand
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
    public function viewKubernetesPricing(): mixed
    {
        
        try {

            $top_kubernets_servers = KubernetesPricing::take(4)->get();
            return view('web.pages.kubernetes', [
                'top_kubernetes_servers' => $top_kubernets_servers
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View Pricing Cloud Storage
     *
     * @return mixed
     */
    public function viewPricingCloudStorage(): mixed
    {
        try {

            $pricing = CloudStorageSetting::orderBy('id')->first();

            $top_gpu_servers = GpuPricing::take(4)->get();

            $high_on_demand = GpuPricing::where('gpu_card', 'NVIDIA A100')->first();

            return view('web.pages.cloud-storage', [
                'pricing' => $pricing,
                'top_gpu_servers' => $top_gpu_servers,
                'high_on_demand' => $high_on_demand
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}
