<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-4.0.0.min.js"></script>
</head>
<body>
    <button id="btn">Export</button>
    <div id="result">

    </div>
    <script>
        $(document).ready(function(){
            $('$btn').click(function(){
                $.post('store.php',{
                    name: 'Tanjil'
                }, function(data){
                    $('#result').text(data);
                }
            )
            })
        })

    </script>
</body>
</html>