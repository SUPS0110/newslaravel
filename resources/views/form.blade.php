@extends('layout/layout')
@section('news')
<form action="@if(! isset($data)){{"/savedata"}}  @else {{"/update-data"}} @endif" method="post">
    <div class="info">
     @if(isset($data))<input name="id" value="{{$data->id}}" type="number" hidden> @endif
        <label for="title">TITLE: </label>
        <input  type="text" name="title" value="@if(isset($data)){{$data->title}} @endif" placeholder="Enter the title">
    </div>
    <div class="info">
                <label>IMAGE URL: </label>
                <input type="url" name="image" value=" @if(isset($data)){{$data->image}} @endif "placeholder="Enter the image url">
            </div>
            <div class="info">
                <label>CONTENT: </label>
                <textarea name="content" placeholder="Notes">@if(isset($data)){{$data->content}} @endif </textarea>
            </div>
            @csrf
<div class="click"><button type="submit">ADD</button></div>
</form>
@endsection