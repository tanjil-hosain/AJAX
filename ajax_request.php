<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-4.0.0.min.js"></script>
</head>
<body>
    <input type="text" id="name">
    <button class="" id="btn">Submit</button>

    <script>
        $(document).ready(function(){
            let uname = $('#name'). val()
            $.ajax(
                {
                    url: 'store2.php',
                    type: 'POST',
                    data: {
                        name: uname
                    },
                    success: function(Response){
                       console.log(Response)
                    },
                    error: {
                        function(){
                            console.log('error n')
                        }
                    }
                }
            )
        })
    </script>
</body>

</html>