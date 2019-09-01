@extends('layouts.app')
@section('content')
<h1>Entry Page</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 jumbotron">
            <form action="{{route('attendance.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Subject">Enter a Subject name</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>



                <div class="form-group">
                    <label for="Topic">Enter a Topic </label>
                    <input type="text" name="topic" id="topic" class="form-control">
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-primary float-left">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
    @endsection
