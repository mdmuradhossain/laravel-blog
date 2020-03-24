@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->name}}</th>
                <td><a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('category.destroy',['id'=>$category->id])}}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>@mdo</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection