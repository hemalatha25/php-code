<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>jquery validations</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script> -->
  <style>
   .error{ color:red; } 
  </style>
</head>
  
<body>
  
<div class="container">
    <h2 style="margin-top: 10px;">jquery validations</h2>
    <br>
    <br>
    
    <form id="ajax_form" method="post" action="javascript:void(0)">
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
      </div>
 
      <div class="form-group">
        <label for="email">Email Id</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
      </div>   
 
      <div class="form-group">
        <label for="mobile_number">Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number" maxlength="10">
      </div>
 
      <div class="alert alert-success d-none" id="msg_div">
          <span id="res_message"></span>
      </div>
 
      <div class="form-group">
       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
      </div>
    </form>
  
</div>
<script>
$(document).ready(function(){
//alert("hiii");
$("#ajax_form").validate({
      
      rules: {
        name: {
          required: true,
          maxlength: 50
        },
    
         mobile_number: {
              required: true,
              digits:true,
              minlength: 10,
              maxlength:12,
          },
          email: {
                  required: true,
                  maxlength: 50,
                  email: true,
              },    
      },
      messages: {
          
        name: {
          required: "Please enter name",
          maxlength: "Your last name maxlength should be 50 characters long."
        },
        mobile_number: {
          required: "Please enter contact number",
          minlength: "The contact number should be 10 digits",
          digits: "Please enter only numbers",
          maxlength: "The contact number should be 12 digits",
        },
        email: {
            required: "Please enter valid email",
            email: "Please enter valid email",
            maxlength: "The email name should less than or equal to 50 characters",
          },
           
      }
      
    });
});
$("#send_form").click(function(e){
        e.preventDefault();
        var isvalid=$("#ajax_form").valid();
       
if(isvalid){
    alert("i'm working");exit;
       
}
    });
   

</script>
</body>
</html>

