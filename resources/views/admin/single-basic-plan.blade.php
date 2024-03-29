@extends('admin.layout.app')
@section('main_content')
@section('button')
<div>
    <a href="{{ route('single-basic-plan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Add New</a>
</div>
@endsection
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
                                <th>Page name</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($singlebasicpages as $key=>$singlebasicpage)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $singlebasicpage->page->name }}</td>
                                        <td>{{ $singlebasicpage->name }}</td>
                                        <td>{{ $singlebasicpage->icon }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('single-basic-plan.edit',$singlebasicpage->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('single-basic-plan.destroy', $singlebasicpage->id) }}">
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

