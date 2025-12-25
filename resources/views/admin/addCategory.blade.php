@extends('admin.maindesign')

@section('add_category')
    <div class="container-fluid">
        <form action="{{route('admin.postaddcategory')}}" method="POST">
            <input type="text" name="category" placeholder="Category Name">
            <input type="submit" value="Add Category">
        </form>
    </div>
@endsection
