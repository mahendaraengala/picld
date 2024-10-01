@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.view.dashboard') }}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.contact.enquiry.list') }}">Contact Enquiries</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.contact.enquiry.preview', ['id' => $contact_enquiry->id]) }}">Preview Contact Enquiry</a></li>
        </ul>
        <h1 class="panel-title">Preview Contact Enquiry</h1>
    </div>
@endsection

@section('panel-body')
    <figure class="panel-card">
        <div class="panel-card-header">
            <div>
                <h1 class="panel-card-title">Preview Information</h1>
                <p class="panel-card-description">Please check all the information</p>
            </div>
            <div>
                <button type="button" class="btn-danger-sm flex items-center justify-center" onclick="handleDelete()">
                    <span class="lg:block md:block sm:hidden mr-2">Delete</span>
                    <i data-feather="trash"></i>
                </button>
            </div>
        </div>
        <div class="panel-card-body">


            <div class="space-y-5">
                <div>
                    <h1 class="title">Contact Enquiry Information</h1>
                </div>
                <div>
                    <table class="font-medium text-sm">
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Name</td>
                            <td class="pr-7 pb-3">{{ $contact_enquiry->name }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Email</td>
                            <td class="pr-7 pb-3">{{ $contact_enquiry->email }}</td>
                        </tr>
                        {{-- <tr>
                            <td class="pr-7 pb-3 text-gray-400">Phone</td>
                            <td class="pr-7 pb-3">{{ $contact_enquiry->phone }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Subject</td>
                            <td class="pr-7 pb-3">{{ $contact_enquiry->subject }}</td>
                        </tr> --}}
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400 align-top">Message</td>
                            <td class="pr-7 pb-3">{{ $contact_enquiry->message }}</td>
                        </tr>
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Date</td>
                            <td class="pr-7 pb-3">{{ date('D d M Y', strtotime($contact_enquiry->created_at)) }}</td>
                        </tr>
                        @if ($contact_enquiry->document)
                        <tr>
                            <td class="pr-7 pb-3 text-gray-400">Document</td>
                            <td class="pr-7 pb-3"><a class="link" target="_blank" href="{{asset('storage/'.$contact_enquiry->document )}}">View Document</a></td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>

        </div>
    </figure>
@endsection

@section('panel-script')
    <script>
        document.getElementById('contact-enquiry-tab').classList.add('active');

        const handleDelete = () => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this contact enquiry!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location =
                            "{{ route('admin.handle.contact.enquiry.delete', ['id' => $contact_enquiry->id]) }}";
                    }
                });
        }
    </script>
@endsection