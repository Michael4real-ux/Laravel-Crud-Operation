@extends('layouts.main')
@section('content')
 
<div class="container">

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
 {{$error}}
</div>
@endforeach
@endif

<h1>Edit page</h1> 
<hr>
<form action="{{ route('update', $student->id)}}" method="POST">

{{csrf_field()}}

    <p class="h4 mb-4">Add Student</p>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" name="firstname" value="{{$student->first_name}}" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>

    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" name="lastname" value="{{$student->last_name}}"/>
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>

  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" name="email" value="{{$student->email}}"/>
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

<!--- Phone input-->
  <div class="form-outline mb-4">
    <input type="number" id="form3Example4" class="form-control" name="phone" value="{{$student->phone}}"/>
    <label class="form-label" for="form3Example4">Phone</label>
  </div>

 

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
</form>
</div>
@endsection