<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <!-- End Twitter universal website tag code -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>order</title>
    <style>
    </style>
<body>
<div class="container">
    <header class="col-xs-12 text-center infoheader">
        <h2>xxxx 点餐系统</h2>
        <p>ver 1.0</p>
    </header>
    <section class="col-xs-12 newsletters">
        <div class="row">
            <ul id="food_list">
            </ul>

        </div>
    </section>
</div>
</body>
</html>
<script language="javascript">
    $(function(){
        var timestamp = null;
        function check_incoming_chat_message(timestamp) {
            console.log(111);
            $.ajax({
                type: "Get",
                dataType: 'json',
                url: 'http://133.130.89.71/index.php/welcome/get_order_json?' + 'timestamp='+timestamp,
                async: true,
                //data: {to_me: me, timestamp: timestamp},
                cache: false,
                success: function(response) {
                    var html = "";
                    response.forEach(function(row){
                        html += "<li><img src=" + row['food_msg'] + " alt='Sushi' width='200px' height='200px'> </li>";
                    });
                    $("#food_list").html(html);
                    setTimeout(check_incoming_chat_message(response.timestamp), 1000);
                }
            });
        }
        check_incoming_chat_message(1);
    });
</script>