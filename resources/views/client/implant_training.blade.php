<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
 
}

input[type=text], select, textarea {
  width: 100%;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 7px;
  resize: vertical;
  
}
input[type=date], select, textarea {
  width: 100%;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 7px;
  resize: vertical;
  
}
input[type=radio]{
  zoom:1.5;
  padding: 30px;
  
  
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #FF522F;
  color: white;
  font-size:20px;
  padding: 13px 80px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #FF522F;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
 
  width: 25%;
  margin-top: 15px;
  
  
}

.col-75 {
  
  width:50%;
  margin:auto;
  margin-top:15px;
 
}
.col-100 {
  float: left;
  width: 100%;
  margin-top: 15px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<div class="container">
  <form action="/Implant_store" method="post">
  @csrf
	<div class="row">
      <!--<div class="col-100">
        <label for="fname">First Name</label>
      </div>-->
      <div class="col-75">
        <center><img src="{{asset('client/images/logo/vertex-logo.png')}}" height="130px" width="300px"></center>
      </div>
    </div>
	<div class="row">
      <!--<div class="col-100">
        <label for="fname">First Name</label>
      </div>-->
      <div class="col-75">
        <h1>Registration Form</h1>
		<p>MSBTE Implant Training - 2021 @ VERTEX INFOTECH,SOLAPUR</p>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="fname">Email Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email">
		@error('email')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
    <div class="row">
      <div class="col-75">
        <label for="lname">Full Name</label>
      </div>
      <div class="col-75">
	  
        <input type="text" id="name" name="name" placeholder="Enter Your Full Name">
		@error('name')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
	<div class="row">
      <div class="col-75">
        <label for="lname">Mobile Number</label>
      </div>
      <div class="col-75">
	  
        <input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
		@error('mobile')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
	<div class="row">
      <div class="col-75">
        <label for="lname">Date Of Birth</label>
      </div>
      <div class="col-75">
	  
        <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Enter Your Date of Birth">
		@error('date_of_birth')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
    <div class="row">
      <div class="col-75">
        <label for="country">College</label>
      </div>
      <div class="col-75">
          <!--<input type="text" id="collage" name="collage" placeholder="Enter Your Collage Name">-->
        <select id="collage" name="collage">
            <option value="">Select Your College</option>
            @foreach($clg as $c)
		  
          <option value="{{$c->name}}">{{$c->name}}</option>
         
            @endforeach
             <option value="other">other</option>
        </select>
		@error('collage')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
    <div class="row">
      <div class="col-75">
        <label for="lname">Address</label>
      </div>
      <div class="col-75">
	  
        <textarea type="text" id="address" name="address" placeholder="Enter Your Address"></textarea>
		@error('address')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
	<div class="row">
      <div class="col-75">
        <label for="lname">Comments</label>
      </div>
      <div class="col-75">
	  
        <textarea type="text" id="comments" name="comments" placeholder="Enter Your Comments"></textarea>
		@error('comments')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
      </div>
    </div>
	<br>
	<div class="row">
      <div class="col-75">
        <label for="lname">Branch</label>
      </div>
      <div class="col-75">
	  <span><input type="radio" name="branch" value="Computer">Computer <input type="radio" name="branch" value="IT">IT
	  <input type="radio" name="branch" value="ENTC">ENTC</span>
      @error('branch')
		<font color="red" size="4">* {{$message}}</font>
		@enderror
	  </div>
	  
    </div>
	<br>
    <div class="row">
      <center><input type="submit" value="Submit"></center>
    </div>
  </form>
</div>

</body>
</html>
