@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-center text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="card">
        <div class="card-header">Create New Category</div>

        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection