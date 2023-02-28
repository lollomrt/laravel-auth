@extends('layouts.admin');
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container bg-light my-3 py-3 d-flex justify-content-between align-items-center">
                    <h1 class="text-uppercase">Projects</h1>
                    <a class="btn btn-success" href="#"><i class="fa-solid fa-plus me-2"></i>Aggiungi Progetto</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                      <tr class="text-uppercase">
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">slug</th>
                        <th scope="col">content</th>
                        <th scope="col">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->content }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-square px-2 btn-sm py-2 btn-warning" href="#"><i class="fa-solid fa-pencil"></i></a>
                                        <a class="btn btn-square px-2 btn-sm py-2 btn-danger" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection