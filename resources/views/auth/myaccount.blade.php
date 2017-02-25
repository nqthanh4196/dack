@extends('layouts.app')



@section('content')

<!-- slide bar -->
@include('layouts.partials.users.slidebar')

<!-- Page content -->
<div class='col-md-9'>
    <div id = "page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    
                    <form class="contact-form" action="/myaccount" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <h1 class="page-header">Thông tin cá nhân <small>{{Auth::user()->name}}</small></h1> 


                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" type="text" name="ten" value="{{Auth::user()->name}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input class="form-control" type="text" name="email" 
                                    value="{{Auth::user()->email}}" disabled="" />
                                </div>
                            </div>
                        </div>

                        <div class="row row-fit-20">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="submit" value="Sửa" />
                            </div>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


