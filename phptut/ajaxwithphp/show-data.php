<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="load data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
                
            </td>
        </tr>
    </table>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#load-button").on("click", function (e) {
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success:function(data){
                    $("#table-data").html(data);
                }
                });
        });
    });
</script>

</html>