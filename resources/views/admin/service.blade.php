@extends('admin.header')
@section('index-content')

            <!-- content starts -->
            <div class="main-content">
                <!-- Begin Page Content -->
                <div class="container-fluid px-lg-4">
                    <div class="row">
                        <div class="col-md-12 mt-lg-4 mt-4">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <!-- <h1 class="h3 mb-0 text-gray-800">Basic Inputs</h1> -->
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- Begin Page Content -->
                  <div class="inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="white_card card_height_100 mb_30">
                                            <div class="white_card_header">
                                                <div class="box_header m-0">
                                                    <div class="main-title">
                                                        <h3 class="m-0">Services Form</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white_card_body">
                                                <div class="card-body">
                                                    <form action="{{action('servicecontroller@store')}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}} 
                                                    <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Service Name</label>
                                                                <select type="text" class="form-control" id="inputEmail4" placeholder="Title" name="service_name">
                                                                    <option value="">Select Service Name</option>
                                                            <option value="Workforce Solutions">Workforce Solutions</option>
                                                            <option value="Digital Services">Digital Services</option>
                                                            <option value="Managed Services">Managed Services</option>
                                                            <option value="Application Services">Application Services</option>
                                                            <option value="Other Services">Other Services</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Sub Service name</label>
                                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Sub Service Name" name="sub_servicename">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Sub service name 1</label>
                                                            <input type="text" class="form-control" id="inputAddress" placeholder="Sub Service Name1" name="sub_servicename1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Img</label>
                                                            <input type="file" class="form-control" id="inputAddress" placeholder="Sub Service Name1" name="img">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Title</label>
                                                            <input type="text" class="form-control" id="inputAddress" placeholder="title" name="title">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Description</label>
                                            <!-- <div id="summernote">Hello Summernote</div> -->
                                            <!-- <form method="post"> -->
                                                <textarea id="summernote" name="desc"></textarea>
                                            <!-- </form> -->
                                                <!-- <label for="cc-payment" class="control-label mb-1">Description</label>
                                                <textarea  name="description"  placeholder="Enter Description"  class="form-control cc-number identified visa" required></textarea> -->
                                            </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Why IDC Technology</label>
                                                            <textarea type="text" class="form-control" id="inputAddress2" placeholder="Description" name="whyidctechnology"></textarea>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1"> More Description</label>
                                            <!-- <div id="summernote">Hello Summernote</div> -->
                                            <!-- <form method="post"> -->
                                                <textarea id="summernote1" name="more_description"></textarea>
                                            <!-- </form> -->
                                                <!-- <label for="cc-payment" class="control-label mb-1">Description</label>
                                                <textarea  name="description"  placeholder="Enter Description"  class="form-control cc-number identified visa" required></textarea> -->
                                            </div>
                                                        </div>
                                                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content Ends -->
        </div>
    </div>
</div>
<!-- Page content -->


</div>

@stop