@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Diagnostic</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="{{ route('diagnostic.create')}}" class="btn bg-success mb-2">Add Diagnostic +</a>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Image</th>
                            <th>Title [Deutsch]</th>
                            <th>Title [Russian]</th>
                            <th>Title [Engish]</th>
                            <th colspan="2" style="width: 2%; border-radius: 5px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($diagnostics as $diagnostic)
                            <tr>
                                <td>{{ $diagnostic->id }}</td>
                                <td>
                                    <img src="{{ asset($diagnostic->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $diagnostic->title_de }}</td>
                                <td>{{ $diagnostic->title_en }}</td>
                                <td>{{ $diagnostic->title_ru }}</td>
                                <td>
                                    <a href="{{ route('diagnostic.edit', $diagnostic->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('diagnostic.destroy', $diagnostic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $diagnostics->links() !!}
                </div>
            </div>

        </div>
    </div>
@endsection
