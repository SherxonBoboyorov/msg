@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Show</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('feedback.update', $feedback->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="names">Name and Surname</label>
                                <input type="text" id="names" value="{{ $feedback->names }}" class="form-control" name="names">
                            </div>
                        </div><br><br>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="hospital_names">Company Hospital </label>
                                <input type="text" id="hospital_names" value="{{ $feedback->hospital_names }}" class="form-control" name="hospital_names">
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone">Phone number</label>
                                <input type="text" id="phone" value="{{ $feedback->phone }}" class="form-control" name="phone">
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" id="email" value="{{ $feedback->email }}" class="form-control" name="email">
                            </div>
                        </div><br><br>


                       <div class="row">
                            <div class="col-md-6">
                                <label for="content">Comment</label>
                                 <textarea type="text" id="content"  class="form-control" name="content">{{ $feedback->content }}</textarea>
                            </div>
                        </div><br><br> <br>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection 
