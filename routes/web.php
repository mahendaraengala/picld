<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\ContactEnquiryController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\PaymentController;
use App\Http\Controllers\Web\PricingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('web.pages.pi-ai-coe');
})->name('web.view.pi-ai-coe');

Route::get('picloud', function () {
    return view('web.pages.home');
})->name('web.view.home');

Route::get('contact', function () {
    return view('web.pages.contact');
})->name('web.view.contact');


Route::post('contact-enquiry', [ContactEnquiryController::class, 'handleCreateContactEnquiry'])
    ->name('handle.contact.enquiry.create');

Route::post('brochure-form', [ContactEnquiryController::class, 'handleBrochureFormEnquiry'])
    ->name('handle.brochure.form.enquiry');

Route::post('kubernet-form', [ContactEnquiryController::class, 'handleKubernetFormEnquiry'])
    ->name('handle.kubernet.form.enquiry');

Route::post('whitepapers-form', [ContactEnquiryController::class, 'handleWhitepaperFormEnquiry'])
    ->name('handle.whitepapers.form.enquiry');

Route::get('about', function () {
    return view('web.pages.about');
})->name('view.about');


Route::get('cloud', function () {
    return view('web.pages.cloud');
})->name('view.cloud');

Route::get('sap', function () {
    return view('web.pages.sap');
})->name('view.sap');

Route::get('policy', function () {
    return view('web.pages.policies');
})->name('view.policy');

Route::get('public-cloud', function () {
    return view('web.pages.public-cloud');
})->name('view.public-cloud');

Route::get('private-cloud', function () {
    return view('web.pages.private-cloud');
})->name('view.private-cloud');

Route::get('industry-solutions', function () {
    return view('web.pages.industry-solutions');
})->name('view.industry-solutions');

Route::get('pi-ai-coe', function () {
    return view('web.pages.pi-ai-coe');
})->name('view.pi-ai-coe');

Route::get('certifications', function () {
    return view('web.pages.certifications');
})->name('view.certifications');

Route::get('ai-resources', function () {
    return view('web.pages.ai-resources');
})->name('view.ai-resources');

Route::get('whitepapers/decoding-gpu-global-shortage', function () {
    return view('web.pages.decoding-gpu-global-shortage');
})->name('view.decoding-gpu-global-shortage');

Route::get('firewall-as-a-service', function () {
    return view('web.pages.firewall-as-a-service');
})->name('view.firewall-as-a-service');

Route::get('load-balancer-as-a-service', function () {
    return view('web.pages.load-balancer-as-a-service');
})->name('view.load-balancer-as-a-service');

Route::get('palo-alto-firewall-as-a-service', function () {
    return view('web.pages.palo-alto-firewall-as-a-service');
})->name('view.palo-alto-firewall-as-a-service');

Route::get('fortinet-firewall-as-a-service', function () {
    return view('web.pages.fortinet-firewall-as-a-service');
})->name('view.fortinet-firewall-as-a-service');

Route::get('backup-as-a-service', function () {
    return view('web.pages.backup-as-a-service');
})->name('view.backup-as-a-service');

Route::get('disaster-recovery-as-a-service', function () {
    return view('web.pages.disaster-recovery-as-a-service');
})->name('view.disaster-recovery-as-a-service');

Route::get('container-as-a-service', function () {
    return view('web.pages.container-as-a-service');
})->name('view.container-as-a-service');

Route::get('network-as-a-service', function () {
    return view('web.pages.network-as-a-service');
})->name('view.network-as-a-service');

Route::get('storage-as-a-service', function () {
    return view('web.pages.storage-as-a-service');
})->name('view.storage-as-a-service');

Route::get('security-as-a-service', function () {
    return view('web.pages.security-as-a-service');
})->name('view.security-as-a-service');

Route::get('thank-you', function () {
    return view('web.pages.thank-you');
})->name('view.thank-you');


Route::prefix('blog')->group(function () {

    Route::get('what-is-ai-and-why-is-it-a-buzzword', function () {
        return view('web.pages.blogs.what-is-ai-and-why-is-it-a-buzzword');
    })->name('view.what-is-ai-and-why-is-it-a-buzzword');

    Route::get('the-next-big-things-in-artificial-intelligence-in-2024-and-what-they-mean-for-businesses', function () {
        return view('web.pages.blogs.the-next-big-things-in-artificial-intelligence-in-2024-and-what-they-mean-for-businesses');
    })->name('view.the-next-big-things-in-artificial-intelligence-in-2024-and-what-they-mean-for-businesses');

    Route::get('the-role-of-artificial-intelligence-in-business', function () {
        return view('web.pages.blogs.the-role-of-artificial-intelligence-in-business');
    })->name('view.the-role-of-artificial-intelligence-in-business');

    Route::get('the-evolution-of-artificial-intelligence-from-inception-to-the-present-day', function () {
        return view('web.pages.blogs.the-evolution-of-artificial-intelligence-from-inception-to-the-present-day');
    })->name('view.the-evolution-of-artificial-intelligence-from-inception-to-the-present-day');

    Route::get('does-all-ai-workload-requires-gpus-an-exploration-of-cost-effective-alternatives', function () {
        return view('web.pages.blogs.does-all-ai-workload-requires-gpus-an-exploration-of-cost-effective-alternatives');
    })->name('view.does-all-ai-workload-requires-gpus-an-exploration-of-cost-effective-alternatives');

    Route::get('what-is-gpu-on-cloud-how-are-they-shaping-the-future-of-computing', function () {
        return view('web.pages.blogs.what-is-gpu-on-cloud-how-are-they-shaping-the-future-of-computing');
    })->name('view.what-is-gpu-on-cloud-how-are-they-shaping-the-future-of-computing');

    Route::get('what-is-a-gpu-why-does-it-matter-in-the-present-day', function () {
        return view('web.pages.blogs.what-is-a-gpu-why-does-it-matter-in-the-present-day');
    })->name('view.what-is-a-gpu-why-does-it-matter-in-the-present-day');

    Route::get('cloud-service-providers-in-india-driving-growth-in-the-digital-landscape', function () {
        return view('web.pages.blogs.cloud-service-providers-in-india-driving-growth-in-the-digital-landscape');
    })->name('view.cloud-service-providers-in-india-driving-growth-in-the-digital-landscape');

    Route::get('what-is-cloud-computing-a-comprehensive-exploration', function () {
        return view('web.pages.blogs.what-is-cloud-computing-a-comprehensive-exploration');
    })->name('view.what-is-cloud-computing-a-comprehensive-exploration');

    Route::get('what-is-multi-cloud-services', function () {
        return view('web.pages.blogs.what-is-multi-cloud-services');
    })->name('view.what-is-multi-cloud-services');
    Route::get('rise-of-ai-transforming-customer-journeys-in-manufacturing', function () {
        return view('web.pages.blogs.rise-of-ai-transforming-customer-journeys-in-manufacturing');
    })->name('view.rise-of-ai-transforming-customer-journeys-in-manufacturing');

    Route::get('private-cloud-a-secure-solution-for-businesses', function () {
        return view('web.pages.blogs.private-cloud-a-secure-solution-for-businesses');
    })->name('view.private-cloud-a-secure-solution-for-businesses');

    Route::get('how-gpus-revolutionize-computing', function () {
        return view('web.pages.blogs.how-gpus-revolutionize-computing');
    })->name('view.how-gpus-revolutionize-computing');

    Route::get('public-cloud-vs-private-cloud-evaluating-the-best-fit-for-your-business', function () {
        return view('web.pages.blogs.public-cloud-vs-private-cloud-evaluating-the-best-fit-for-your-business');
    })->name('view.public-cloud-vs-private-cloud-evaluating-the-best-fit-for-your-business');

    Route::get('from-vision-to-reality-how-pi-ai-coe-guides-your-generative-ai-journey', function () {
        return view('web.pages.blogs.from-vision-to-reality-how-pi-ai-coe-guides-your-generative-ai-journey');
    })->name('view.from-vision-to-reality-how-pi-ai-coe-guides-your-generative-ai-journey');


    Route::get('from-automation-to-transformation-how-ai-managed-services-impact-business-success', function () {
        return view('web.pages.blogs.from-automation-to-transformation-how-ai-managed-services-impact-business-success');
    })->name('view.from-automation-to-transformation-how-ai-managed-services-impact-business-success');
});

Route::prefix('managed-services')->group(function () {
    Route::get('/', function () {
        return view('web.pages.managed-services.index');
    })->name('view.index');
    Route::get('multicloud-managed-services', function () {
        return view('web.pages.managed-services.multicloud-managed-services');
    })->name('view.multicloud-managed-services');
    Route::get('security-operations-center', function () {
        return view('web.pages.managed-services.security-operations-center');
    })->name('view.security-operations-center');
    Route::get('devops-as-a-services', function () {
        return view('web.pages.managed-services.devops-as-a-services');
    })->name('view.devops-as-a-services');
    Route::get('network-operating-center', function () {
        return view('web.pages.managed-services.network-operating-center');
    })->name('view.network-operating-center');
    Route::get('remote-infrastructure-management', function () {
        return view('web.pages.managed-services.remote-infrastructure-management');
    })->name('view.remote-infrastructure-management');
    Route::get('ai-managed-services', function () {
        return view('web.pages.ai-managed-services');
    })->name('view.ai-managed-services');
    Route::get('professional-services', function () {
        return view('web.pages.professional-services');
    })->name('view.professional-services');
});
Route::get('/kubernetes', [PricingController::class, 'viewKubernetesPricing'])->name('web.view.kubernetes');
Route::get('/pricing/cloud-servers', [PricingController::class, 'viewPricing'])->name('web.view.pricing');
Route::get('/pricing/cloud-storage', [PricingController::class, 'viewPricingCloudStorage'])->name('web.view.pricing.cloud.storage');
Route::get('/payment/request/{order_id}', [PaymentController::class, 'handlePaymentRequest'])->name('web.handle.payment.request');
Route::any('/payment/response/{token}', [PaymentController::class, 'handlePaymentResponse'])->name('web.handle.payment.response');
Route::get('/regenerate/payment/request/{order_id}', [PaymentController::class, 'handleReGeneratePaymentRequest'])->name('web.handle.payment.request.regenerate');

/*
|--------------------------------------------------------------------------
| Artisan Routes
|--------------------------------------------------------------------------
*/

Route::prefix('artisan')->group(function () {
    Route::get('optimize', function () {
        Artisan::call('optimize:clear');
        dd('Application optimized');
    });
    Route::get('migrate', function () {
        Artisan::call('migrate');
        dd('Database migrated');
    });
    Route::get('migrate/fresh', function () {
        Artisan::call('migrate:fresh');
        dd('Database migrated');
    });
    Route::get('seed', function () {
        Artisan::call('db:seed');
        dd('Database seeded');
    });
    Route::get('storage/link', function () {
        Artisan::call('storage:link');
        dd('Storage Linked');
    });
});

/*
|--------------------------------------------------------------------------
| Guest Auth Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['guest'])->group(function () {

    Route::get('login', [AuthController::class, 'viewLogin'])
        ->name('web.view.login');
    Route::post('login', [AuthController::class, 'handleLogin'])
        ->name('web.handle.login');

    Route::get('register', [AuthController::class, 'viewRegister'])
        ->name('web.view.register');
    Route::post('register', [AuthController::class, 'handleRegister'])
        ->name('web.handle.register');

    Route::get('/forgot-password', [AuthController::class, 'viewForgotPassword'])
        ->name('web.view.forgot.password');
    Route::post('/forgot-password', [AuthController::class, 'handleForgotPassword'])
        ->name('web.handle.forgot.password');

    Route::get('/reset-password/{token}', [AuthController::class, 'viewResetPassword'])
        ->name('web.view.reset.password');
    Route::post('/reset-password/{token}', [AuthController::class, 'handleResetPassword'])
        ->name('web.handle.reset.password');
});

Route::get('/verify/email/{token}', [AuthController::class, 'viewEmailVerified'])
    ->name('web.view.verify.email');

/*
|--------------------------------------------------------------------------
| Authorized Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:web'])->group(function () {

    Route::post('logout', function () {
        Auth::logout();
        // return redirect()->route('web.view.home');
        return redirect()->route('web.view.pi-ai-coe');
    })->name('web.handle.logout');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'viewDashboard')
            ->name('web.view.dashboard');
        Route::get('/dashboard/setting', 'viewDashboardSetting')
            ->name('web.view.dashboard.setting');
        Route::post('/update/account-setting', 'handleAccountPasswordUpdate')
            ->name('web.handle.update.account.password');
        Route::post('/update/password', 'handleAccountInformationUpdate')
            ->name('web.handle.update.account.information');
        Route::get('/orders', 'viewOrderList')
            ->name('web.view.order.list');
        Route::get('/order/{uuid}', 'viewOrderDetails')
            ->name('web.view.order.details');

        Route::get('/verify/email', 'handleSendEmailVerificationLink')
            ->name('web.handle.send.email.verification.link');

        Route::get('/order/invoice/{uuid}', 'handleDownloadInvoice')
            ->name('web.handle.download.order.invoice');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'viewCheckout')
            ->name('web.view.checkout');
        Route::post('/checkout', 'handleCheckout')
            ->name('web.handle.checkout');
    });
});
