<aside id="sidebar">
    <div class="sidebar">
        <div class="space-y-7">
            <div class="flex items-center justify-between relative">
                <div class="md:text-center sm:text-left space-y-2 pt-10 px-10 w-full">
                    <div>
                        <h1 class="text-admin-ascent text-lg font-semibold">Pi-Cloud</h1>
                    </div>
                    <p class="text-xs text-slate-500">Administrator Panel</p>
                </div>
            </div>
            <div class="absolute top-3 right-0 lg:hidden md:hidden sm:block">
                <button onclick="toggleSidebar()"
                    class="h-[40px] w-[40px] bg-admin-ascent rounded-l-lg border-r-0 flex items-center justify-center transition duration-300 ease-in-out hover:ease-in-out">
                    <i data-feather="chevron-left" class="h-4 w-4 stroke-white stroke-[3px]"></i>
                </button>
            </div>
            <hr class="border-complement">
            <ul class="flex flex-col">

                <li class="sidebar-tab" id="dashboard-tab">
                    <a href="{{route('admin.view.dashboard')}}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-tab" id="user-tab">
                    <a href="{{route('admin.view.user.list')}}">
                        <i data-feather="users"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li class="sidebar-tab" id="order-tab">
                    <a href="{{route('admin.view.order.list')}}">
                        <i data-feather="clipboard"></i>
                        <span>Orders</span>
                    </a>
                </li>

                <li class="sidebar-tab" id="payment-transaction-tab">
                    <a href="{{route('admin.view.payment.transaction.list')}}">
                        <i data-feather="clipboard"></i>
                        <span>Payment Transactions</span>
                    </a>
                </li>

                <li class="sidebar-tab" id="contact-enquiry-tab">
                    <a href="{{route('admin.view.contact.enquiry.list')}}">
                        <i data-feather="message-square"></i>
                        <span>Contact Enquiries</span>
                    </a>
                </li>

                <li class="sidebar-tab" id="setting-tab">
                    <a href="{{route('admin.view.setting')}}">
                        <i data-feather="settings"></i>
                        <span>Settings</span>
                    </a>
                </li>
        
            </ul>
        </div>
    </div>
    <div class="sidebar-overlay">

    </div>
</aside>