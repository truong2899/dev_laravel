@extends('layouts.app')
@section('content')
<h1>Danh sach</h1>
@foreach($role as $role)
{{$role->name}}
@endforeach
@foreach($news as $new)
<div>{{$new->title}}</div>
<div>{{$new->content}}</div>

@endforeach
<div>{{$news->links()}}</div>
@endsection