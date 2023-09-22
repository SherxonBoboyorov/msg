@extends('layouts.admin')

@section('title', 'Edit options')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit options</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('options.update', $option->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="key">Key</label>
                                <select name="key" id="key" class="form-control">
                                    <option value="map" @if($option->key == 'map') selected @endif>Google or Yandex MAP</option>
                                    <option value="address_de" @if($option->key == 'Address DE') selected @endif>Address DE</option>
                                    <option value="address_en" @if($option->key == 'Address EN') selected @endif>Address EN</option>
                                    <option value="address_ru" @if($option->key == 'Address RU') selected @endif>Address RU</option>

                                    <option value="address1_de" @if($option->key == 'Address1 DE') selected @endif>Address1 DE</option>
                                    <option value="address1_en" @if($option->key == 'Address1 EN') selected @endif>Address1 EN</option>
                                    <option value="address1_ru" @if($option->key == 'Address1 RU') selected @endif>Address1 RU</option>

                                    <option value="address2_de" @if($option->key == 'Address2 DE') selected @endif>Address2 DE</option>
                                    <option value="address2_en" @if($option->key == 'Address2 EN') selected @endif>Address2 EN</option>
                                    <option value="address2_ru" @if($option->key == 'Address2 RU') selected @endif>Address2 RU</option>

                                    <option value="instagram" @if($option->key == 'instagram') selected @endif>Instagram</option>
                                    <option value="facebook" @if($option->key == 'facebook') selected @endif>Facebook</option>
                                    <option value="phone" @if($option->key == 'phone') selected @endif>Phone</option>
                                    <option value="phone1" @if($option->key == 'phone1') selected @endif>Phone1</option>
                                    <option value="phone2" @if($option->key == 'phone2') selected @endif>Phone2</option>
                                    <option value="email" @if($option->key == 'email') selected @endif>E-mail</option>
                                    <option value="email1" @if($option->key == 'email1') selected @endif>E-mail1</option>
                                    <option value="email2" @if($option->key == 'email2') selected @endif>E-mail2</option>
                                    <option value="footer" @if($option->key == 'footer') selected @endif>Footer E-mail</option>
                                    <option value="whatsapp" @if($option->key == 'whatsapp') selected @endif>Whatsapp</option>
                                    <option value="telegram" @if($option->key == 'telegram') selected @endif>Telegram</option>
                                </select>
                                @if($errors->has('key'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('key') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <label for="title_ru">Value</label>
                                <input type="text" id="value" class="form-control" name="value" value="{{ $option->value }}">
                                @if($errors->has('value'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('value') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>

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
