@extends('admin/theme/main')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1 class="text-center">Update Expert Team Details</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                            <form method="POST" action="{{action('ExpertTeamController@update', $id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PATCH') 

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Name</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-select-list">                                                                                               
                                         <input type="text" name="name" value="{{$port->name}}" class="form-control" required/>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Post</label>
                                    </div>
                                    <div class="col-lg-7">
                                    <input type="text" name="post" value="{{$port->post}}" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="login2 pull-right pull-right-pro">Profile</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="file" name="image" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>

                           
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Status:</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-select-list">                                
                                            <select class="form-control custom-select-value" name="status" value="{{$port->status}}">
                                                @if($port->status=='active')
                                                <option value="active" selected>active</option>
                                                <option value="inactive">inactive</option>
                                                @elseif($port->status=='inactive')
                                                <option value="active">active</option>
                                                <option value="inactive" selected>inactive</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>    

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-7">
                                        <div class="pull-left">                                                        
                                            <button class="btn btn-md btn-primary" type="submit">Update</button>
                                            <button class="btn btn-md btn-white" >Back</button>
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