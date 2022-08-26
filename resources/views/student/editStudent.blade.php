@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{route('updateStudent',['id' => $student->id]) }}">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Student Name</label>
                  <input type="text" class="form-control" value="{{$student->studentname}}" name="studentname" id="" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" value="{{$student->dob}}" id="" name="dob">
                </div>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="Radio" name="gender" id="" value="2" {{ ($student->gender=="2")? "checked" : "" }}>
                        <label class="form-check-label" for="inlineCheckbox1">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="Radio" name="gender" id="" value="1" {{ ($student->gender=="1")? "checked" : "" }}>
                        <label class="form-check-label" for="">Male</label>
                      </div>
                </div>
                <br><button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>
@endsection

