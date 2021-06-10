<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="../BCGK/MVC/view/pages/css/main.css"/>
     <link rel="stylesheet" href="../BCGK/MVC/view/pages/css/owl.theme.default.min.css">
     <link href="../BCGK/MVC/view/pages/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" href="../BCGK/MVC/view/pages/css/style.css">
     <link rel="stylesheet" href="../BCGK/MVC/view/pages/css/style3.css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
        <?php
            $Page = isset($data['Page']) ? $data['Page']:"login";
            require_once "./MVC/view/pages/html/".$Page . ".php";
        ?>
         <folder>
    <?php include_once('../BCGK/MVC/view/pages/html/folder/folder.php') ?>
    </folder>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      <script src="../BCGK/MVC/view/pages/js/main.js"></script>
      
</body>
</html>