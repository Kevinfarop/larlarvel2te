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

                @if($students)
                   
<form class="mt-3" action="{{route('home.update', $students->id)}}" method="POST">
    @csrf
        
                        <div class="form-group">

                          <input type="text" class="form-control" name="name" placeholder="Name" value="{{$students->name}}">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{$students->email}}">

                          </div>

                          <div class="form-group">

                            <input type="text" class="form-control" name="tel" placeholder="Tel" value="{{$students->tel}}">

                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
