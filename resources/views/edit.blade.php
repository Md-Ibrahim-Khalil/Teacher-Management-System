@extends('layouts.main')

@section('content')

<h1>Edit Page</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <ul style="text-align:center">
            <li style="list-style: none">{{ $error }}</li>
        </ul>
        @endforeach
    </div>

@endif


<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('update',$teacher->id) }}" method="POST">
    @csrf
    <p class="h4 mb-4">Edit Teacher</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" value="{{ $teacher->first_name }}" name="firstname" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" value="{{ $teacher->last_name }}" name="lastname" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" value="{{ $teacher->email }}" name="email" placeholder="E-mail">

  <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" value="{{ $teacher->phone }}" placeholder="Phone number" name="phone" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Update Teacher Information</button>



</form>
<!-- Default form register -->

@endsection
