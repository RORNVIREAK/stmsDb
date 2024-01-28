@extends('layouts.master')
@section('title','Student')
@section('student','active')
@section('content')
    <div class="content-title">
        <h3>Student List</h3>
        <div>
            <button type="button" class="btn btn-outline-primary"> <span data-feather="user-plus"></span> Add</button>
        </div>
        
    </div>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr style="text-align: center">
          <th>#</th>
          <th>FullName</th>
          <th>Gender</th>
          <th>DOB</th>
          <th>Phone</th>
          <th>Subject</th>
          <th width="140px"></th>
        </tr>
      </thead>
      <tbody>
        <tr style="text-align: center">
          <td>1</td>
          <td>Rorn Vireak</td>
          <td>Male</td>
          <td>2001-07-01</td>
          <td>011704958</td>
          <td>Hacker</td>
          <td class="btn-action"> 
            <a href="#"><span class="text-warning" data-feather="edit"></span>Edit</a>
            <a href="#"><span class="text-danger" data-feather="trash-2"></span>Delete</a> 
        </td>
        </tr>
        
      </tbody>
    </table>
  </div> 
@endsection