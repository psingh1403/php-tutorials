<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add record with PHP and Ajax</h1>
    <table>
        <tr>
            <td>
                <form action="" id="addform">
                    First name:
                    <input type="text" name="fname" id="fname">
                    Last name:
                    <input type="text" name="lname" id="lname">
                    <input type="submit" id="save-button" value="Save">
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <!-- <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pushpendra Singh</td>
                    </tr>
                </table> -->
            </td>
        </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>

</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        function loadTable() {
            $.ajax({
                url: "ajax-load-delete.php",
                type: "POST",
                success: function (data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadTable();

        $("#save-button").on("click", function (e) {
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            if (fname == "" || lname == "") {
                $("#error-message").html("All fields are required.").slideDown();
                $("#success-message").slideUp();
            } else {
                $.ajax({
                    url: "ajax-insert.php",
                    type: "POST",
                    data: { first_name: fname, last_name: lname },
                    success: function (data) {
                        if (data) {

                            loadTable();
                            $("#addform").trigger("reset");
                            $("#success-message").html("data inserted successfully.").slideDown();
                            $("#error-message").slideUp();
                        } else {
                            $("#error-message").html("can't save the record.").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
            }

        })
        $(document).on("click", ".delete-btn", function () {
            if (confirm("Do you want to delete this record?")) {
                var studentId = $(this).data("id");
                var element = this;
                $.ajax({
                    url: "ajax-delete.php",
                    type: "POST",
                    data: { id: studentId },
                    success: function (data) {
                        if (data == 1) {
                            $(element).closest("tr").fadeOut();
                        } else {
                            $("#error-message").html("Can't delete record.").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
            }
        });
    });
</script>

</html>