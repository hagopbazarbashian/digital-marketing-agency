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
                                <th>name</th>
                                <th>Phone Number</th>
                                <th>last Name</th>
                                <th>Web Site Kind</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($myusers as $key=>$myuser)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $myuser->name }}</td>
                                        <td>{{ $myuser->lastname }}</td>
                                        <td>{{ $myuser->phonenumber }}</td>
                                        <td>{{ $myuser->websitekind }}</td>
                                        <td>{{ $myuser->message }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{route('website.edit',$myuser->id)}}" class="btn btn-primary btn-sm">Send Message To User</a>
                                            <form method="POST" action="{{route('website.destroy',$myuser->id)}}">
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
