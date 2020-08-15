@extends('layouts.main')

@section('content')
<h1>Home Page</h1>

@if (session('SuccessMsg'))

    <div class="alert alert-success" role="alert">
        {{ session('SuccessMsg') }}
    </div>

@endif
<div class="table-responsive">
<table class="table table-striped">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- Show data from the database table  --}}
    @foreach($teachers as $teacher)
    <tr>
      <th scope="row">{{ $teacher->id }}</th>
      <td>{{ $teacher->first_name }}</td>
      <td>{{ $teacher->last_name }}</td>
      <td>{{ $teacher->email }}</td>
      <td>{{ $teacher->phone }}</td>
      <td>
      <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $teacher->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
            ||
    <form method="POST" id="delete-form-{{ $teacher->id }}" action="{{ route('delete', $teacher->id) }}" style="display: none;">
        @csrf
        {{ method_field('delete') }}
    </form>
    <button onclick="if (confirm('Are you sure to delete this data?')) {
        event.preventDefault();
        document.getElementById('delete-form-{{ $teacher->id }}').submit();
        }else{
             event.preventDefault();
        }
        " class="btn btn-raised btn-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i> </a>
    </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $teachers->links() }}
</div>

@endsection
