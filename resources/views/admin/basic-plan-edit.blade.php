@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('basic-page.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Show All</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('basic-page.update',$page->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="{{$page->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Image *</label>
                            <input type="file" class="form-control" name="image">
                            <h1>Uploaded Image:</h1>
                            <h3><img src="{{asset('page/'.$page->image)}}" alt=""></h3>
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
