<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body style="text-align:center">
    <h3>
        <x-alert />
    </h3>

        <div class="container mt-5" style="max-width: 450px">
        <h2 class="mb-4">Grocery Todo</h2>
        <form action="upload" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter title" />
            <input type='hidden' id="offset" name="offset" class="form-control" />
        </div>

        <div class="form-group">
            <div> <label > Expiry date </label></div>
            <div class='input-group date' id='datetimepicker'>
            <input type='text' name="datetime" class="form-control" />

            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
   </div>
        <input type="submit" value="Create" />
    </form>
    <br>
    <a href="index">Back</a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var offset = (new Date()).getTimezoneOffset();
            var formatted = -(offset / 60);
            $('input[name="offset"]').val(formatted);
           $('#datetimepicker').datetimepicker({});
        });
    </script>
</html>
