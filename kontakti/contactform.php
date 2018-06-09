<?php

    if (isset($_POST['submit'], $_POST['ņame'], $_POST['email'], $_POST['message']) {
        $name = $_POST ['name'];
        $mailFrom = $_POST ['email'];
        $message = $_POST ['message'];

        $mailTo = "aija.raviete@gmail.com";
        $headers = "No: ".$mailFrom;
        $txt = "Esi saņēmis e-pastu no: ".$name.".\n\n".$message;

        mail($mailTo, $txt, $headers);
        header("Location: index.php?mailsent");
    }



?>