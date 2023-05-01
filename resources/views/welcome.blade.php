@extends('layout/layout')
@section('news')
<div class="box">
    @if(count($data)>0)
 @foreach ($data as $item)
    <div class="list">
<div><h3>{{$item->title}}</h3></div>
<div class="img"><img src="{{$item->image}}" alt="image"></div>
<div class="content">{{$item->content}}</div>
<div class="date">
   <div class="created">Created date: {{$item->created_at}}</div>
    <div class="updated">Updated date: {{$item->updated_at}}</div>
</div>
<div class="update">
    <div class="edit"><a href="{{'/edit/'.$item->id}}">EDIT</a></div>
<div class="delete"> <a href="{{'/delete/'.$item->id}}">DELETE</a></div>
</div>
    </div>
@endforeach
@else
            <h1>Data not found</h1>
 @endif
</div>
@endsection