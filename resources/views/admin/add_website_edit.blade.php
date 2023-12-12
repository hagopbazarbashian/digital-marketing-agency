@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('website.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Show All</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('website.update',$addwebsiteform->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>name *</label>
                            <input type="text" class="form-control" name="name" value="{{$addwebsiteform->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Last Name *</label>
                            <input type="text" class="form-control" name="lastname" value="{{$addwebsiteform->lastname}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone Number*</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{$addwebsiteform->phonenumber}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Web Site Kind*</label>
                            <input type="text" class="form-control" name="websitekind" value="{{$addwebsiteform->websitekind}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message *</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5">{!! $addwebsiteform->message !!}</textarea>
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
