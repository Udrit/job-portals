@extends('admin.adminfiles.index')
@section('content')

@if (Auth::check() && Auth::user()->usertype == 'admin')
<h1>Hello Admin</h1>
      @elseif (Auth::check() && Auth::user()->usertype == 'employer')
      <h1>Hello {{Auth::user()->name}}</h1>
      @endf
@endsection