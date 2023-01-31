<html lang="en">
<head>


    <title>Jquery - Timepicker Example using jQuery Timepicker Plugin</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>


</head>
<body>


<div class="container text-center">
     <h2>Jquery - Timepicker Example using jQuery Timepicker Plugin</h2>
     <strong>Select Time:</strong> <input type="text" id="timepicker" class="from-control">
</div>


<script type="text/javascript">
$('#timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
</script>


</body>
</html>