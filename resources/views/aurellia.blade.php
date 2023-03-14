<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="BG-container">
  
<!-- NAVBAR -->
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="/#">Profile Kelompok 4</a>
</nav>

<div class="container py-4 h-60 w-80 bg-white rounded border border-5" style="--bs-bg-opacity: .1;">
    <h5 class="text-center">
        List of Subjects
    </h5>
    <div class="text-center">
        <?php
        $subjects = ["Character Building: Agama", "Categorical Data Analysis", 
        "Deep Learning and Optimization", "Design and Analysis of Experiments", "Data Management and Organization", 
        "Bayesian Data Analysis"];
        $arrayLength = count($subjects);
        
        $i = 0;
        while ($i < $arrayLength)
        {
            echo $subjects[$i] ."<br />";
            $i++;
        }
        ?>
    </div>
</div>

<div class="container py-3 h-100">
    <table class="table table-hover table-light table-bordered">
        <thead class="gradient-custom table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Course Name</th>
                <th scope="col">Score</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Character Building: Agama</td>
            <td>
            <?php
                $a = 75;
                echo "$a";
            ?>
            </td>
            <td>
            <?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Categorical Data Analysis</td>
            <td><?php
                $a = 44;
                echo "$a";
            ?></td>
            <td><?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Deep Learning and Optimization</td>
            <td><?php
                $a = 97;
                echo "$a";
            ?></td>
            <td><?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Design and Analysis of Experiments</td>
            <td><?php
                $a = 80;
                echo "$a";
            ?></td>
            <td><?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Data Management and Organization</td>
            <td><?php
                $a = 68;
                echo "$a";
            ?></td>
            <td><?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Bayesian Data Analysis</td>
            <td><?php
                $a = 85;
                echo "$a";
            ?></td>
            <td><?php include ('C:\xampp\htdocs\projectprofile\resources\views\scoredet.php');?>
            </td>
        </tr>
    </tbody>
    </table>
</div>

</body>