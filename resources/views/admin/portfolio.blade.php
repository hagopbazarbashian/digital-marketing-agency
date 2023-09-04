@extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('portfolio-admin.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Add New Portfolio</a>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $key=>$portfolio)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="portfolio/{{ $portfolio->image }}" style="width:100%"></td>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>{{ $portfolio->link }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{route('portfolio-admin.edit',$portfolio->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{route('portfolio-admin.destroy',$portfolio->id)}}">
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
