<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <div class="row" id="food_list">
        <div class="col-sm-6 col-md-3">
        </div>
    </div><!-- .row -->
</div><!-- .container -->
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
                        html += "<div class='col-sm-6 col-md-3'><img src=" + row['food_msg'] + " alt='Sushi' width='200px' height='200px'> </div>";
                    });
                    $("#food_list").html(html);
                    setTimeout(check_incoming_chat_message(response.timestamp), 1000);
                }
            });
        }
        check_incoming_chat_message(1);
    });
</script>