<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Safety Form</title>

    <!-- Icons font CSS-->
    <link href="../../../../../Downloads/colorlib-regform-1/vendor/mdi-font/css/material-design-iconic-font.min.css"
          rel="stylesheet" media="all">
    <link href="../../../../../Downloads/colorlib-regform-1/vendor/font-awesome-4.7/css/font-awesome.min.css"
          rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../../Downloads/colorlib-regform-1/vendor/datepicker/daterangepicker.css" rel="stylesheet"
          media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/css/public/form/main.css') }}" rel="stylesheet" media="all">

{{--    <script>--}}
{{--        const Socket = new WebSocket('ws://' + '192.168.11.185' + ':81/');--}}

{{--        Socket.onmessage = function(evt) {--}}
{{--            document.getElementById("rfid").value = evt.data;--}}
{{--        }--}}
{{--    </script>--}}

{{--    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>--}}
{{--    <script>--}}

{{--        const host = '1ddb822b76c84f959b575f8e0dfee556.s2.eu.hivemq.cloud'--}}
{{--        const port = '8884'--}}
{{--        const clientId = `mqtt_${Math.random().toString(16).slice(3)}`--}}

{{--        const connectUrl = `wss://${host}:${port}`--}}
{{--        const client = mqtt.connect(connectUrl, {--}}
{{--            keepalive: 60,--}}
{{--            clientId: clientId,--}}
{{--            protocolId: 'MQTT',--}}
{{--            protocolVersion: 4,--}}
{{--            clean: true,--}}
{{--            reconnectPeriod: 1000,--}}
{{--            connectTimeout: 30 * 1000,--}}
{{--            will: {--}}
{{--                topic: 'WillMsg',--}}
{{--                payload: 'Connection Closed abnormally..!',--}}
{{--                qos: 0,--}}
{{--                retain: false--}}
{{--            },--}}
{{--        })--}}

{{--        client.subscribe("/feeds/rfid")--}}

{{--        client.on("message", function (topic, payload) {--}}
{{--            alert([topic, payload].join(": "))--}}
{{--            client.end()--}}
{{--        })--}}

{{--    </script>--}}

</head>

<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h1 class="title">Fab Lab Safety Instructions Form</h1>
                <form method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="NAME" name="name" required>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="email" placeholder="EMAIL" name="email" required>
                    </div>
{{--                    <div class="input-group">--}}
{{--                        <input class="input--style-1" type="tel" placeholder="PHONE" name="phone">--}}
{{--                    </div>--}}
{{--                    <div class="input-group">--}}
{{--                        <input class="input--style-1" type="text" placeholder="RFID Chip" name="rfid" id="rfid">--}}
{{--                    </div>--}}
                    <div class="input-group" style="color:#666;font-size:14px;">
                        <input style="display:inline-block;max-width:3%;margin-right:4px" type="checkbox" name="terms" id="terms"
                               required><label for="terms">I have taken the safety instructions session and I agree to the
                        Fab Lab Siegen <a href="https://fablab-siegen.de/imprint/" target="_blank">Imprint</a> and <a href="https://fablab-siegen.de/privacy-policy/" target="_blank">Privacy Policy</a></label>
                    </div>
                    <div class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- Vendor JS-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker@3.1.0/daterangepicker.min.js"></script>

<!-- Main JS-->
<script src="{{ asset('/js/public/form/global.js') }}"></script>


</body>

</html>
