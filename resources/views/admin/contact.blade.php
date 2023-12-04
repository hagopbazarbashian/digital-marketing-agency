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
                                        <td class="pt_10 pb_10">
                                            <form method="POST" action="{{route('admin.destroy',$contact->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
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
