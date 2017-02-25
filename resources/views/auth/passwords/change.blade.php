@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thay đổi mật khẩu</div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('loi'))
                        <div class="alert alert-danger">
                           {{session('loi')}}
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class='alert alert-success'>
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form id="form-change-password" role="form" method="POST" action="/password/change" class="form-horizontal">
                      <div class="col-md-9">             
                        <label for="current-password" class="col-sm-4 control-label">Mật khẩu hiện tại</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Nhập mật khẩu hiện tại">
                          </div>
                        </div>
                        <label for="password" class="col-sm-4 control-label">Mật khẩu mới</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu mới">
                          </div>
                        </div>
                        <label for="password_confirmation" class="col-sm-4 control-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-6">
                          <button type="submit" class="btn btn-primary">Thay đổi mật khẩu</button>
                        </div>
                      </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
