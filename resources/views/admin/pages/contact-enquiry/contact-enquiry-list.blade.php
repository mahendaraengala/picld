@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{route('admin.view.dashboard')}}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{route('admin.view.contact.enquiry.list')}}">Contact Enquiries</a></li>
        </ul>
        <h1 class="panel-title">Contact Enquiries</h1>
    </div>
@endsection


@section('panel-body')
<figure class="panel-card">
    <div class="panel-card-header">
        <div>
            <h1 class="panel-card-title">Contact Enquiries</h1>
            <p class="panel-card-description">List of all contact enquiries in the system</p>
        </div>
    </div>
    <div class="panel-card-body">
        <div class="panel-card-table">
            <table class="data-table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th>Phone</th> --}}
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($contact_enquiries as $contact_enquiry)
                        <tr>
                            <td>{{ $contact_enquiry->id }}</td>
                            <td>{{ $contact_enquiry->name }}</td>
                            <td>{{ $contact_enquiry->email }}</td>
                            {{-- <td>{{ $contact_enquiry->phone }}</td> --}}
                            <td>{{ date('D d M Y', strtotime($contact_enquiry->created_at)) . " at " .date('H:i A', strtotime($contact_enquiry->created_at)) }}</td>
                            <td>
                                <label class="toggler-switch">
                                    <input onchange="handleUpdateStatus({{$contact_enquiry->id}})" @checked($contact_enquiry->is_read) type="checkbox">
                                    <div class="slider"></div>
                                </label>
                            </td>
                            <td>
                                <div class="table-dropdown">
                                    <button>Options<i data-feather="chevron-down" class="ml-1 toggler-icon"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="{{route('admin.view.contact.enquiry.preview',['id' => $contact_enquiry->id])}}" class="dropdown-link-primary"><i data-feather="external-link" class="mr-1"></i> Preview Enquiry</a></li>
                                            <li><a href="javascript:handleDelete({{$contact_enquiry->id}});" class="dropdown-link-danger"><i data-feather="trash-2" class="mr-1"></i> Delete Enquiry</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</figure>

@endsection

@section('panel-script')
<script>
    document.getElementById('contact-enquiry-tab').classList.add('active');

    const handleUpdateStatus = (id) => {
            fetch("{{ route('admin.handle.contact.enquiry.status') }}", {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    contact_enquiry_id: id,
                    _token: "{{ csrf_token() }}"
                })
            }).then((response) => {
                return response.json();
            }).catch((error) => {
                swal({
                    title: "Internal server error",
                    text: "An error occured, please try again",
                    icon: "error",
                })
            });
        }

        const handleDelete = (id) => {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this contact enquiry!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = `{{ url('admin/contact-enquiry/delete') }}/${id}`;
                    }
                });
        }

</script>
@endsection