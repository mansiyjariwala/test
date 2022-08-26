@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Dob</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $student)
                        <tr>
                            <td>{{$student->studentname}}</td>
                            @if($student->gender=="1")
                            <td>male</td>
                            @else
                            <td>Female</td>
                            @endif
                            <td>{{$student->dob}}</td>
                            <td><button type="button" class="btn btn-danger"><a href="deleteStudent/{{$student->id}}">Delete</a></button>
                                <button type="button" class="btn btn-warning"><a href="editStudent/{{$student->id}}">Edit</a></button></td>
                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Dob</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
