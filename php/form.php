<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = 'oscar.valenzuela3005@gmail.com';
        $subject = "Anderson Forest Products - Formulario ";
        $messageBody = "Nombre: ".$name."\n".
                       "Email: ".$email."\n".
                       "Escribió lo siguiente: "."\n\n".$message;
                       
        $headers = "De: ".$email;

        if(mail($to, $subject, $messageBody, $headers)){
            /*echo "<h1>Mensaje enviado correctamete, Nos pondremos en contacto contigo!</h1>";*/
            header("Location: index.html?messagesend");
        }
        else{
            echo "Algo ocurrió mal";
        }
    }
?>