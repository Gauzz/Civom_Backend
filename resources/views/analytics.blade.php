@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">analytics</div> -->
               
   <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"></div>-->

            <table class="table table-bordered" table width="500">
            
                <div class="col-md-14">
                <div class="row">
               
               
                <thead class="thead-light">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Assets</th>
      <th scope="col">Email Id</th>
      <th scope="col">Mobile No</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($leads as $values)
    <tr>
      <td>{{$values->id}}</th>
      <td>{{$values->assets}}</td>
      <td>{{$values->email}}</td>
      <td>{{$values->mobile_no}}</td>
    @endforeach
    
  </tbody>
  </table>
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Analysis
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
