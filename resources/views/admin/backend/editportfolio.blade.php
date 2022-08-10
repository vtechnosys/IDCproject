@extends('admin/theme/main')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1 class="text-center">Update Portfolio's Details</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                            <form method="POST" action="{{action('PortController@update', $id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PATCH') 

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Service Category:</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-select-list">                                                                                               
                                        <select class="form-control custom-select-value" name="cname">
                                                @foreach ($cat as $row)
                                                    @if($port->sid==$row['id'])
                                                    <option value="{{$row['id']}}" selected>{{$row['cname']}}</option>
                                                    @else
                                                    <option value="{{$row['id']}}">{{$row['cname']}}</option>
                                                    @endif
                                                @endforeach 
                                            </select>                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Project Title:</label>
                                    </div>
                                    <div class="col-lg-7">
                                    <input type="text" name="project" value="{{$port->project}}" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="login2 pull-right pull-right-pro">Image</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="file" name="img" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Abstract:</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <textarea name="abstract" value="{{$port->abstract}}" class="form-control" rows="5" required>{{$port->abstract}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Client Name:</label>
                                    </div>
                                    <div class="col-lg-7">
                                    <input type="text" name="client" value="{{$port->client}}" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="login2 pull-right pull-right-pro">Project Link:</label>
                                    </div>
                                    <div class="col-lg-7">
                                    <input type="text" name="link" value="{{$port->link}}" class="form-control" required/>
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