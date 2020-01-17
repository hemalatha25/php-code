
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/resume.css">
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>
<div class="tut_wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-4 first-column">
      <div class="pic" align="center" style="margin:6px">
          <img src="profile.png">
      </div>   <!-- pic -->
      <div class="contact">
        <b>CONTACT</b>
        </div>   <!-- contact-->
        <ul>
          <?php  
        if (isset($_POST['submit'])) {
          $telno = $_POST['number'];
          $email = $_POST['email'];
          $address = $_POST['message'];
          echo $telno . "<br>";
          echo $email . "<br>";
          echo $address . "<br>";
        }
        ?>  
        </ul>
     
      <div class="skill">
          <b>MY SKILLS</b>
          </div>    <!-- skills-->
        
       <ul>
        <?php
            $skill= $_POST['select2'];
                foreach ($skill as $key => $val) {
                  echo $val . "<br>";
                }
                ?>  
       </ul>
     
     
          <i>TEAMWORK</i><br>
        <i>LOYALTY</i><br>
        <i>INTEGRITY</i><br>
   
        <i>ENGLISH</i><br>
        <i>FRANC</i><br>
    
     
            <div class="refer">
                <b>REFERENCE</b>
                </div>   <!-- reference -->
                <br>
               <div class="ref1">
                <dt>EDWARD CAMBIASO</dt>
                <dd>Ceo Company Name</dd>
                P: +62 3345 6699   <br>
                L:mail@edwardcambriaso.com 
              </div>
              <br>
              <div class="ref2">
                <dt>BETTIE LAVEYA</dt>
                <dd>Ceo Company Name</dd>
                P: +62 3345 6699   <br>
                L: mail@bettielaveya.com
              </div>
             
        
</div>   <!-- first -->
       

<div class="col-sm-8 second-column">
      <div class="name">
        <?php
            if (isset ($_POST['submit'])) {
              $name1 = $_POST['firstname'];
              $name2 = $_POST['lastname'];
              echo $name1 . " " . $name2;
            }
            ?>
           <div class="age">
            <?php
              $bday = new DateTime('25.10.1997'); // Your date of birth
              $today = new Datetime(date('m.d.y'));
              $diff = $today->diff($bday);
              printf('%d years old'. "<br>", $diff->y);
              
              if (isset ($_POST['submit'])) {
                $workexp = $_POST['experience'];
                echo $workexp ;
              }
              ?>
              </div>
         </div>   <!-- name -->

        <div class="profile">
        <img src="pic1pro.png" style="height:30px; width:30px"><b>PROFILE INFO</b>
        </div>    <!-- profile -->
        <br>
        <div class="pro">
        <?php
            if (isset ($_POST['submit'])) {
              $info = $_POST['profile'];
              echo $info;
            }
            ?>
            </div>
        

      <div class="workexp">
      <img src="pic2work.png" style="height:30px; width:30px"><b>WORK EXPERIENCE</b>
        </div> <!-- workexp -->
        <br>
        <div class="row">
        <div class="col-sm-6">
          <div class="job">
        <?php
            if (isset ($_POST['submit'])) {
              $job = $_POST['job'];
              echo $job ;
            }
            ?>
            </div>    <!-- job -->
           </div>
           <div class="col-sm-6">
            
           <?php
            if (isset ($_POST['submit'])) {
              $srtdate = $_POST['start'];
              $enddate = $_POST['end'];  
              echo $srtdate . "   " .$enddate;
            }
              ?>
             
        </div>
        </div>
        <div class="wexp">
        <?php
            if (isset ($_POST['submit'])) {
              $workexp = $_POST['experience'];
              echo $workexp ;
            }
            ?>
            </div>
      
      <div class="education">
      <img src="pic3exp.png" style="height:30px; width:30px"><b>MY EDUCATION</b>
        </div>  <!-- education -->
        <div class ="row">
          <div class ="col">
          <dd>UNVERSITY NAME</dd>
              <?php
               if (isset ($_POST['submit'])) {
                $educt = $_POST['edu'];
                echo $educt ;
              }
                ?>
          </div>
          <div class ="col">
          <dd>UNVERSITY NAME</dd>
              <?php
              if (isset ($_POST['submit'])) {
                $educt = $_POST['edu'];
                echo $educt ;
              }
                ?>
          </div>
      </div>
     
      
  </div>   <!-- second -->
  
</div>   <!-- row -->
</div>  <!-- container -->
</div>   <!-- tut_wrapper -->

</body>
</html>
