<?php


    if(isset($_POST['to']) && isset($_POST['message']) && !empty($_POST['to']) && !empty($_POST['message'])){

        $recipient_phone_number = $_POST['to'];
        $message_will_recieve = $_POST['message'];

        $Api_Key = "39c5ed00727a4c57a03ba94515b5533f";
        $Api_Token = "d9ec8ad4827a4189baeb19f78d55b1d4";

        $sender_phone_number = "447520650817";
        $receiver_phone_number = $recipient_phone_number;

        $message = $message_will_recieve;

        $receiver_phone_number = [$receiver_phone_number];

        $content = [

            'to' => $receiver_phone_number,
            'from' => $sender_phone_number,
            'body' => $message
        ];

        $json_content = json_encode($content);

        $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$Api_Key}/batches");

        curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer '. $Api_Token
        ));
        //options
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$json_content);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

        // execute , make http request
        $result = curl_exec($ch);

        //check the result
        if(curl_errno($ch)){

            echo "failed to send sms";

        }else{

            if($result){
                echo "sms sent successfully!";
            }else{
                echo "sms wasnt send";
            }
        }
        // close the connection with the server
        curl_close($ch);

}else{

    echo "please fill in the form";
}
?>    