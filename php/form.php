<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = 'migmurua@gmail.com';
        $subject = "Anderson Forest Products - Formulario ";
        $messageBody = "Nombre: ".$name."\n".
                       "Email: ".$email."\n".
                       "Escribió lo siguiente: "."\n\n".$message;
                       
        $headers = "De: ".$email;
        
        
        if(mail($to, $subject, $messageBody, $headers)){
            echo "<script>alert('Mensaje envíado correctamente! Nos pondremos en contacto contigo');</script>";
            echo "<script>document.location.href='../index.php'</script>";
        }
        else{
            echo "<script>alert('Error. Por favor intenta otra vez');</script>";
            header("Location: ../index.php");
            
        }
    }
?>