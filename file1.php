<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE UPLOAD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>
<body>
    <form action="file2.php" method="post" enctype="multipart/form-data">
    <label class="text-info">Image Upload:</label><br>
            <input type="file" name="image" id="FilUploader" class="form-control"><br>


            <label class="text-info">Upload cv:</label><br>
            <input type="file" name="pdf" id="FilUploader1" class="form-control"><br>

<!-- 
            <label class="text-info">Select Excel File to Upload:</label><br>
            <input type="file" name="excel" id="FilUploader2" class="form-control"><br> -->
                  
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
        </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $("#FilUploader").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
            }
        });

        $("#FilUploader1").change(function () {
            var fileExtension = ['pdf'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
            }
        });
    </script>
</body>
</html>

