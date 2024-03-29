@extends('admin.index')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Jobs List</li>
          </ol>
        </nav>
      </div>
      <div class="card" id="div1">
      <table class="table .table-borderless">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Job Title</th>
            <th scope="col-3">Description</th>
            <th scope="col">Experience</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
            <th scope="col">Deadline</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($jobs as $data)
            <td>{{$i++}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->desc}}</td>
            <td>{{$data->experience}}</td>
            <td>{{$data->salary}}</td>
            <td>{{$data->job_type}}</td>
            <td>{{$data->deadline}}</td>
            <td>
                <a href="#"><button type="button" class="btn btn-warning rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal">Update</button></a>
                {{-- <button type="button" class="btn btn-info rounded-pill">Delete</button> --}}
                <form action="">
                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Job</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         <label for=""></label>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </td>
        </tbody>
        @endforeach
      </table>
      </div>
  </main

@endsection