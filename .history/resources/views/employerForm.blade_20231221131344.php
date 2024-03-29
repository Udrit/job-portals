@extends('welcome')
@section('content')

<div class="container">
    <div class="card-body">
        <h1 style="text-align: center; margin-top: 3%" >Company Register form</h1>
        @if (session('companyregisterSuccess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p style="color: rgb(128, 17, 0)8, 28, 0)">{{session('companyregisterSuccess')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <form action="{{route('company.register.submit')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cName">Company Name:</label>
                        <input type="text" id="cName" name="cName" class="form-control" >
                        @error('fullName')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Company Email:</label>
                        <input type="email" id="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="password">PAN No:</label>
                        <input type="text" id="panNo" name="panNo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Information:</label>
                        <input type="number" id="contact" name="contact" class="form-control" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Company Location:</label>
                        <input type="text" id="address" name="address" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="c_desc">Company Description:</label>
                        <textarea id="c_desc" name="c_desc" class="form-control" rows="3" ></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
