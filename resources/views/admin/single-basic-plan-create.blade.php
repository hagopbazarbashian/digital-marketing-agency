 @extends('admin.layout.app')

@section('button')
<div>
    <a href="{{ route('single-basic-plan.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Show All</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('single-basic-plan.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="select-option">Choose an option:</label>
                            <select id="select-option" name='page'>
                                @foreach ($pages as $page)
                                <option value="{{$page->id}}">{{$page->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="icon">
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
