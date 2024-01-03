@extends('welcome')
@section('content')
    <style>
        .tilt-in-fwd-tr {
            -webkit-animation: tilt-in-fwd-tr 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: tilt-in-fwd-tr 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        @-webkit-keyframes tilt-in-fwd-tr {
            0% {
                -webkit-transform: rotateY(20deg) rotateX(35deg) translate(300px, -300px) skew(-35deg, 10deg);
                transform: rotateY(20deg) rotateX(35deg) translate(300px, -300px) skew(-35deg, 10deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateY(0) rotateX(0deg) translate(0, 0) skew(0deg, 0deg);
                transform: rotateY(0) rotateX(0deg) translate(0, 0) skew(0deg, 0deg);
                opacity: 1;
            }
        }
        @keyframes tilt-in-fwd-tr {
            0% {
                -webkit-transform: rotateY(20deg) rotateX(35deg) translate(300px, -300px) skew(-35deg, 10deg);
                transform: rotateY(20deg) rotateX(35deg) translate(300px, -300px) skew(-35deg, 10deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateY(0) rotateX(0deg) translate(0, 0) skew(0deg, 0deg);
                transform: rotateY(0) rotateX(0deg) translate(0, 0) skew(0deg, 0deg);
                opacity: 1;
            }
        }

    </style>

    <div class="container">
        <div class="card mt-5 tilt-in-fwd-tr">
            <div class="card-body">
                <h1 class="text-center mt-3">Register form</h1>
        @if (session('registerSuccess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p style="color: rgb(128, 17, 0)">{{session('registerSuccess')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (session('linkExpiry'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p style="color: rgb(128, 17, 0)">{{session('linkExpiry')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p style="color: rgb(128, 17, 0)">{{session('message')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
        <form action="{{route('user.register.submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" value="{{old('fullName')}}"  id="fullName" name="fullName" class="form-control" >
                        @error('fullName')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" value="{{old('email')}}" id="email" name="email" class="form-control" >
                         @error('email')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" >
                         @error('password')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Information:</label>
                        <input type="number" value="{{old('contact')}}" id="contact" name="contact" class="form-control" >
                         @error('contact')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" value="{{old('address')}}" id="address" name="address" class="form-control" >
                         @error('address')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skills">Skills:</label>
                        <input type="text" id="skills" value="{{old('skills')}}" name="skills" class="form-control" >
                         @error('skills')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience:</label>
                        <select id="experience" name="experience" class="form-control"  >
                            <option value="" disabled selected>Select your experience</option>
                            <option value="Fresher">Fresher</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 years</option>
                            <option value="4">4+ years</option>
                        </select>
                        @error('experience')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="row">
                        <label for="education:">Education:</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="degree">Degree:</label>
                                <input type="text" id="degree" name="degree" value="{{old('degree')}}" class="form-control">
                                 @error('degree')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gYear">Graduated Year:</label>
                                <input type="text" id="gYear" value="{{old('gYear')}}" name="gYear" class="form-control">
                                 @error('gYear')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gpa">GPA:</label>
                                <input type="text" id="gpa" value="{{old('gpa')}}" name="gpa" class="form-control">
                                 @error('gpa')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="resume">Resume:</label>
                        <input type="file" id="resume" name="resume" class="form-control-file">
                         @error('resume')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profileImage">Profile Image:</label>
                        <input type="file" id="profileImage" name="profileImage" class="form-control-file" >
                         @error('profileImage')
                            <p style="color: red">{{$message}}</p>
                        @enderror
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
