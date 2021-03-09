<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <?php

                function valueLogic($the_value){
                    if ($the_value >= 85){
                        return "A";
                    }
                    elseif ($the_value >= 70) {
                        return "B";
                    }
                    elseif ($the_value >= 60){
                        return "C";
                    }
                    elseif ($the_value >= 40){
                        return "D";
                    }
                    else{
                        return "E";
                    }
                }

                $nama = $_GET['nama'];
                $nim = $_GET['nim'];
                $lesson = $_GET['lesson'];
                $uts = $_GET['uts'];
                $uas = $_GET['uas'];
                $assignment = $_GET['assignment'];
                $total_value = ($uts + $uas + $assignment)/3;
                $fix_total_value = valueLogic($total_value);

                echo '<li class="list-group-item">Name : ',$nama,'</li>';
                echo '<li class="list-group-item">Nim : ',$nim,'</li>';
                echo '<li class="list-group-item">Lesson: ',$lesson,'</li>';
                echo '<li class="list-group-item"> UTS Value : ',valueLogic($uts),'</li>';
                echo '<li class="list-group-item">UAS Value: ',valueLogic($uas),'</li>';
                echo '<li class="list-group-item">Assignment Value : ',valueLogic($assignment),'</li>';
                echo '<li class="list-group-item">Value Total:  ',$total_value,'</li>';
                echo '<li class="list-group-item">Value in Alphabet: ',$fix_total_value,'</li>';
                
                ?>
                    
                </ul>
                </div>
            </div>
            
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>