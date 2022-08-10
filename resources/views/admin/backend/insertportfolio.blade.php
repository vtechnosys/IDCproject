@extends('admin/theme/main')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1 class="text-center">Upload Portfolios Details</h1>
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
                            <form method="POST" action="{{action('PortController@store')}}" enctype="multipart/form-data">
                                {{csrf_field()}} 

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="login2 pull-right pull-right-pro">Select Service Category:</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-select-list">                                                                                               
                                                <select class="form-control custom-select-value" name="cname">
                                                    @foreach ($cat as $row)
                                                    <option value="{{$row['id']}}">{{$row['cname']}}</option>
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
                                            <input type="text" name="project" class="form-control" required/>
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
                                            <label class="login2 pull-right pull-right-pro">Absract:</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea name="abstract" class="form-control" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="login2 pull-right pull-right-pro">Client Name:</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" name="client" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="login2 pull-right pull-right-pro">Project Link:</label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" name="link" class="form-control" placeholder="https://www.project-website-here.com/" required/>
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