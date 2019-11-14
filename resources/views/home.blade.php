@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <table style="width:100%">

<tr>

  <th>name</th>

  <th>email</th>

  <th>tel</th>

</tr>

@foreach ($students as $student)

    <tr>

    <td>{{ $student->name }}</td>

    <td>{{ $student->email }}</td>

    <td>{{ $student->tel }}</td>
<td>
<a href="{{ route('home.edit', $student->id)}}">Edit</a>
    <a href="{{ route('home.delete', $student->id)}}">Delete</a>
</td>
  </tr>
  

@endforeach

</table>
<form class="mt-3" action="{{route('home.create')}}" method="POST">
    @csrf

                        <div class="form-group">

                          <input type="text" class="form-control" name="name" placeholder="Name">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" placeholder="E-mail">

                          </div>

                          <div class="form-group">

                            <input type="text" class="form-control" name="tel" placeholder="Tel">

                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
