@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('portfolio-admin.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Show All</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('portfolio-admin.update',$portfolio->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Image *</label>
                            <input type="file" class="form-control" name="image">
                            <h1>Uploaded Image:</h1>
                            <h3><img src="{{asset('portfolio/'.$portfolio->image)}}" style="width: 100%;" alt=""></h3>
                        </div>
                        <div class="form-group mb-3">
                            <label>Title *</label>
                            <input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Link *</label>
                            <input type="text" class="form-control" name="link" value="{{$portfolio->link}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
