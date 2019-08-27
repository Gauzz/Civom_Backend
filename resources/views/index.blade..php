@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 alig="centre">Data</h3>
    <br />
    @if($message = Session::get('succes'))
    <div class="alert alert-succes">
    <p>{{$message}}</p>
    <div>
    @endif
    <div alig="right">
    <a href="{{route('layout.index')}}" class="btn btn-primary">add</a>
    <table class="table table-borderd">
        <tr>
            <th>name of product</th>
            <th>description</th>
            <th>dae file</th>
            <th>fbx file</th>
            <th>texture</th>
            <th>thumbnail</th>
            </tr>
        @foreach($assets as $row)
        <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['description']}}</td>
            <td>{{$row['dae']}}</td>
            <td>{{$row['fbx']}}</td>
            <td>{{$row['texture']}}</td>
            <td>{{$row['thumbnail']}}</td>
            
        </tr>
        @endforeach
        
             </table>
            </div>
            </div>

@endsection
