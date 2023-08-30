@extends('layouts.admin')
 
@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Sliders</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('slider.create') }}"> Create Slider</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title [Deutsch]</th>
            <th>Title [English]</th>
            <th>Title [Russian]</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->id }}</td>
            <td>
                <td><img src="upload/slider/images/{{ $product->image }}" width="100px"></td>
            </td>
            <td>{{ $slider->title_de }}</td>
            <td>{{ $slider->title_en }}</td>
            <td>{{ $slider->title_ru }}</td>
            <td>
                <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('slider.show',$slider->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('slider.edit',$slider->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $sliders->links() !!}

</div>
</div>
      
@endsection