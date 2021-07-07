@php
$subscriber=DB::table('subscriber')->get();

@endphp

@extends('admin.adminlayouts')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>brand Table</h5>




      <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">brand List

          <a href="" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Subscriber Add</a>
        </h6>


        <div class="table-wrapper">
          <table id="datatable2" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Email</th>

                <th class="wd-20p">Action</th>

              </tr>
            </thead>
            </thead>
            <tbody>
              @foreach($subscriber as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->email }}</td>


                <td>

                  <a href="#" class="btn btn-sm btn-info">Edit</a>
                  <a href="#" class="btn btn-sm btn-danger" id="delete">Delete</a>
                </td>

              </tr>

              @endforeach
            </tbody>
          </table>
      
        @endsection