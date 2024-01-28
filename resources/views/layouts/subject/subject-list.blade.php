@extends('layouts.master')
@section('title','Subject')
@section('subject','active')
@section('content')
<div class="content-title">
    <h3>Subject List</h3>
    <div>
        <a href="{{url('subject/add')}}" class="btn btn-outline-primary"> <span data-feather="user-plus"></span> Add</a>
    </div>
    
</div>

<div class="table-responsive">
<table class="table table-striped table-sm">
  <thead>
    <tr style="text-align: center">
      <th>#</th>
      <th>Code</th>
      <th>Name</th>
      <th>Note</th>
      <th>Active</th>
      <th width="140px"></th>
    </tr>
  </thead>
  <tbody style="text-align: center">
    @foreach($subject as $subject)
     <tr>
      <td>{{$subject->id}}</td>
      <td>{{$subject->code}}</td>
      <td>{{$subject->name}}</td>
      <td>{{$subject->note}}</td>
      <td class="btn-action"> 
        <a href="{{url('subject/edit',$subject->id)}}"><span class="text-warning" data-feather="edit"></span>Edit</a>
        <a href="{{url('subject/show',$subject->id)}}"><span class="text-danger" data-feather="trash-2"></span>Delete</a> 
    </td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>
</div> 
@endsection