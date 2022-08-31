


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="elements/rocket.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gpa-predictor</title>
    <link rel="stylesheet" href="elements/justsidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>GPA predictor</h1> -->
    <?php
        include 'elements/justsidebar.html'
    ?>
    <center>
      <?php
        if($fail==true){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom:0%;text-align:center;max-width:96%;margin-top:0.5%">
          <strong>Oops!</strong> Seems like you missed something
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        if($show_ans==true){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom:0%;text-align:center;max-width:96%;margin-top:0.5%">
        <strong>Congratulations!</strong> You are  expected to get <strong>'. $ans. '</strong> Gpa
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        if($show_backlock==true){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom:0%;text-align:center;max-width:96%;margin-top:0.5%">
          <strong>Oh NO!</strong> Seems like you can expect backlock(s)
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
      ?>
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom:0%;text-align:center;max-width:96%;margin-top:0.5%">
      <strong>Congratulations!</strong> You're are expected to get _ GPA
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
  </center>
    <div class="shadow p-3 mb-5 bg-body rounded" style="max-width:98%;margin-left:2%;margin-top:2%;margin-right:2%;">
      <div class="alert alert-dark" role="alert" style="padding-bottom:0.2%;">
          <center>
          <h5>Please enter your expected marks aganist corresponding subject names</h5>
          <p>This predictor is strictly as per the NEP norms</p>
          </center>
      </div>
    <!-- Button -->
    <hr>
    <form action="#" method="post">
      <center>
        <div >
    <div class="table" style="display:flex;flex-direction:row;justify-content:center;">
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center;">Enter Maths marks <br> <input type="number" name="s1" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center;">Enter Electronics marks <br>  <input type="number" name="s2" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center">Enter Mechanical marks <br>  <input type="number" name="s3" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      </div>
     
      <div class="table" style="display:flex;flex-direction:row;">
        <div class="shadow-sm p-4 mb-5 bg-body rounded" style="width:33%;text-align:center;display:block;">Enter Chemistry marks <br>  <input type="number" name="s4" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center;display:block;flex-direction:column">Enter PPS Theory marks  <br> <input type="number" name="s5" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center">Enter PPS Lab marks <br>  <input type="number" name="s8" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      </div>

      <div class="table" style="display:flex;flex-direction:row;s ">
        <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center;display:block;">Enter Chem-lab marks <br> <input type="number" name="s9" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center;display:block;flex-direction:column">Enter Workshop marks <br> <input type="number" name="s6" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"></div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="width:33%;text-align:center">Enter Innovation marks <br> <input type="number" name="s7" max="100";min="0"; style="max-width:80%;border-radius:5px;background-color:grey;text-align:center"> <br></div>
      
      
    </div>
  </div>
    <hr>
    </center>
 
      <center>
          <button type="submit" class="btn btn-dark" style="height:50px;width:100px;font-size:19px;">
              Submit
          </button>
          <button onclick="location.reload()" class="btn btn-dark" style="height:50px;width:100px;font-size:19px;margin:1%">
            Reset
          </button>
      </center>
            </form> 
            
            <br>
            <br>
            <!-- <hr> -->
            <p>
  <a class="btn btn-secondary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Cheat Code</a>
</p>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              <hr>
              <h6>If a candidate scores 90+ marks in a subject his respective subject Gpa is 10, <br>
              like wise if a candidate score 80+ in a subject his respective subject Gpa is 9, <br>
              70+ --> subject Gpa is 8gpa <br>
              60+ --> subject gpa is 7gpa <br>
              45+ --> subject gpa is 5gpa <br>
              40+ --> subject gpa is 4gpa <br>
              <40 --> fail <br>
              </h6>
              <hr>
              Formula to calculate Gpa is : <br>
              <strong> GPA = Summation of (Subject Gpa X Subject credit) / Summation of (all subject credits) </strong> <hr>
              To verify your Subject credits we suggest you to look at your syllabus <br>
              <h6>
              1st year syllabus <a href="elements/1st_year_syllabus.pdf" target="_blank">here</a> <br>
              2nd year syllabus <a href="" target="_blank">here</a>
              </h6>
              <hr>
              <br>
              *all the marks mentioned are (internal) + (Semester end marks)/2
            </div>
          </div>
        </div>
      </div>
      <div style= "text-align:right;">
      <a href="query.php?gpa">Facing problem? Report here</a>
      </div>

    </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
