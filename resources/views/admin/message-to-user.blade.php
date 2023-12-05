@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('send-email.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Send New Message</a>
</div>
@endsection
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
                                <th>Email</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($sendemails as $key=>$sendemail)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $sendemail->email }}</td>
                                        <td>{{ $sendemail->title }}</td>
                                        <td>{{ $sendemail->body }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{route('send-email.edit',$sendemail->id)}}" class="btn btn-primary btn-sm">Send Again</a>
                                            <form method="POST" action="{{route('send-email.destroy',$sendemail->id)}}">
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
