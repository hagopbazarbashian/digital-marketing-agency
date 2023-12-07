@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('send-email.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Show All</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('send-email.update',$sendemail->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Email *</label>
                            <input type="text" class="form-control" name="email" value="{{$sendemail->email}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Title *</label>
                            <input type="text" class="form-control" name="title" value="{{$sendemail->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message *</label>
                            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5">{!! $sendemail->body !!}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Again</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
