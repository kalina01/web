<form action="/" method="post">
    <input name="login" placeholder="login"/>
    <input name="password" placeholder="password"/>
    <input name="message" placeholder="message"/>
    <button>Send</button>
</form>

<?php
    function add_message_to_file($login, $message){
        $content = json_decode(file_get_contents("message.json"));
        $message_object = (object) ['date' => date('d.m.Y H:i'), 'user' => $login, 'message' => $message];
        $content->messages[] = $message_object;
        file_put_contents("message.json", json_encode($content));
    }

    function show_messages(){
        $content = json_decode(file_get_contents("message.json"));
        foreach($content->messages as $message){
            echo "<p>";
            echo "$message->date $message->user";
            echo "</p>";
            echo "<p>";
            echo "$message->message";
            echo "</p>";
        }
    }

    $login = $_POST["login"];
    $password = $_POST["password"];
    $message = $_POST["message"];
    if (($login === "admin" && $password === "123123") || ($login === "kalina")){
        add_message_to_file($login, $message);

    }else{
        echo "wrong login or password";
    }
    
    show_messages();
?>

