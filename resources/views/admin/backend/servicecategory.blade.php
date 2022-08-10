@extends('admin/theme/main')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1 class="text-center">Upload Service Category Details</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                @if(count($errors)>0)
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                @endif
                                @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                                @endif    
                            <form method="POST" action="{{action('CategoryController@store')}}" enctype="multipart/form-data">
                                {{csrf_field()}} 

                                <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">Service Category</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <input type="text" name="cname" class="form-control" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label class="login2 pull-right pull-right-pro">Upload Service Category Image/Icon:</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <input type="file" placeholder="Upload File..." name="image" class="form-control" required/>
                                                <p class="pull-left">Only .JPEG,.PNG,.GIF Files Allowed!</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-7">
                                                <div class="pull-left">                                                        
                                                    <button class="btn btn-md btn-primary" type="submit">Save</button>
                                                    <button class="btn btn-md btn-white" type="reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection