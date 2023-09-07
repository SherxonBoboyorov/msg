@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Team</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <label for="name_de">Name [Deutsch]</label>
                                    <input type="text" id="name_de" value="{{ $team->name_de }}" class="form-control" name="name_de">
                                    @if($errors->has('name_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_de') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="name_en">Name [English]</label>
                                    <input type="text" id="name_en" value="{{ $team->name_en }}" class="form-control" name="name_en">
                                    @if($errors->has('name_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_en') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="name_ru">Name [Russian]</label>
                                    <input type="text" id="name_ru" value="{{ $team->name_ru }}" class="form-control" name="name_ru">
                                    @if($errors->has('name_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('name_ru') }}
                                    </div>
                                    @endif
                                </div>
                             </div><br>

                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="content_de">Content [Deutsch]</label>
                                    <textarea name="content_de" class="my-editor" id="content_de" cols="30" rows="10">{{ $team->content_de }}</textarea>
                                    @if($errors->has('content_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('content_de') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="content_en">Content [English]</label>
                                    <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10">{{ $team->content_en }}</textarea>
                                    @if($errors->has('content_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('content_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="content_ru">Content [Russian]</label>
                                    <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10">{{ $team->content_ru }}</textarea>
                                    @if($errors->has('content_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('content_ru') }}
                                    </div>
                                    @endif
                                </div>
                            </div>


                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-3">
                                    <label for="phone">Phone number:</label>
                                    <input type="text" id="phone" value="{{ $team->phone }}" class="form-control" name="phone">
                                    @if($errors->has('phone'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('phone') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br>


                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-3">
                                    <label for="email">Email:</label>
                                    <input type="text" id="email" value="{{ $team->email }}" class="form-control" name="email">
                                    @if($errors->has('email'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br><br>

                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                    @if($errors->has('image'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset($team->image) }}" width="150" height="150" alt="">
                                </div>
                            </div>
                        <br>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

