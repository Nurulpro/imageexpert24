
@php
$contactus=DB::table('contactus')->get();

@endphp

@extends('dashboard')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
 
  
      <div class="card pd-10 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Contact Form<a href="" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Contact Form</a>
        </h6>


        <div class="table-wrapper">
          <table id="datatable2" class="table display responsive nowrap">
            <thead>
              <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-10p"> Name</th>
                  <th class="wd-10p">Email</th>
                  <th class="wd-10p">Phone</th>
                  <th class="wd-10p">Subject</th>
                  <th class="wd-10p">Message</th>
                   <th class="wd-10p">Action</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach($contactus as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->name }}</td>
                 
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->subject }}</td>
                  <td>{{ $row->message }}</td>
                
              <td>

                  <a href="#" class="btn btn-sm btn-info">Edit</a>
                  <a href="#" class="btn btn-sm btn-danger" id="delete">Delete</a>
                </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
        
  



@endsection