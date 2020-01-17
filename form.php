
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<link type="text/css" rel="stylesheet" href="css\form.css"> 
<body>

   <form action="resume.php" method="post">
     <h2>Student Details</h2>
     <div id="wrapper">
     
        <div class="input-row">
        <label for="name">Name:</label>
        <input type="text" name="firstname" id="name1" placeholder="Enter firstname">   
        <input type="text" name="lastname" id="name2" placeholder="Enter lastname">
</div>
        <div class="input-row">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter email">
</div>
        <div class="input-row">
        <label for="number">Tel No:</label>
        <input type="number" name="number" placeholder="Enter Phn No.">
</div>
        <div class="input-row">
        <label for="date">Date of Birth:</label>
        <input type="date" name="date" id="date" max="2020/12/31">
</div>
<div class="input-row">
        <label>Gender:</label>
        <input type="radio" name="gender" value="female">
        Female
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">
        Male
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="other">
        Other
</div>
<div class="input-row">
        <label>Marital Status:</label>
        <input type="radio" name="status"
        <?php if (isset($status) && $status=="single") echo "checked";?>
        value="single">
        Single
        <input type="radio" name="status"
        <?php if (isset($status) && $status=="married") echo "checked";?>
        value="married">
        Married
</div>
<div class="input-row">
        <label for="nation">Nationality:</label>
        <input type="radio" name="nation" value="india">
        India  
</div>
<div class="input-row">
        <label for="address">Address:</label>
        <textarea id="address" name="message"></textarea>  
</div>
<div class="input-row">
        <label for="info">Profile Info:</label>
        <textarea id="info" name="profile"></textarea>  
</div>
<div class="input-row">
        <label for="job">Job Title:</label>
        <input type="text" name="job" value=" ">
</div>
<div class="input-row">
        <label for="start">Start Date:</label>
        <input type="month" name="start" min="01-2019" value="january-2019">
        <label for="enddate">End Date:</label>
        <input type="month" name="end" value="12-2050">
</div>


<div class="input-row">
        <label for="workexp">Work Experience:</label>
        <textarea id="workexp" name="experience"></textarea> 
</div>
<div>
        <label for="education">Education:</label>
         <input type="text" name="edu" value="">
        
</div>
<div>
        <label for="myskills">My Skills:</label> 
        <select name="select2[]" size="3" multiple="multiple">  
        <option value="web design">WEB DESIGN</option>  
        <option value="graphic design">GRAPHIC DESIGN</option>  
        <option value="logo design">LOGO DESIGN</option>  
        <option value="web development">WEB DEVELOPMENT</option>  
        <option value="marketing">MARKETING</option>  
        
        </select>   
</div>

<div align="center">
<input type="submit" name="submit" value="submit">
</div>
      </div>
</form> 


</body>
</html>
