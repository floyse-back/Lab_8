<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table_page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <p>Hello World</p>
    <script>
        $.ajax({
            url:"http://lab.vntu.org/webusers/api-server/lab7.php",
            type:"GET",
            dataType: "json",
            success:function(response){
        if (response && response.data) {
        createHTMLComments(response.data);
        } else {
        console.error("Немає даних у відповіді:", response);
        }
        }})
        function createHTMLComments(data){
            console.log(data)
        }
    </script>
</body>
</html>