<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../main.css">

    <title>Title</title>

</head>
<body>

<div id="navbar"></div>

<div class="container">
    <h1 class="bd-title">Upload de Arquivos</h1>


    <form action="files_upload.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleFormControlFile1">Envie esses arquivos:</label>
            <input class="form-control-file" name="userfile[]" type="file" id="exampleFormControlFile1"/><br/>
            <input class="form-control-file" name="userfile[]" type="file"/><br/>
        </div>
        <button type="submit" class="btn aqua-gradient"/>
        Enviar arquivos</button>

    </form>
</div>




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

<script>
    $(document).ready(function () {
        // $('body').bootstrapMaterialDesign();
        $("#navbar").load("../navbar.html");

    });
</script>


</body>
</html>