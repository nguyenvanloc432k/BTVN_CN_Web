<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <font size=5>Thank you: Got Your Input.</font>
        <?php
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            print ("<br>Your email: $email");
            print ("<br>Contact preference: $contact");
        ?>
    </body>
</html>