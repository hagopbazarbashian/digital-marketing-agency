@extends('admin.layout.app')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>message</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key=>$contact)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->last }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->number }}</td>
                                        <td>{{ $contact->message }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
