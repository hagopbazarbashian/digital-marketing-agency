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
                    <form action="{{ route('basic-page.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Image *</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
