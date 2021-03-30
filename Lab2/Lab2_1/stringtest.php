<?php
    setcookie("uname", $_POST["name"], time()+36000);
?>

<html>
    <head>
        <title>All Examples In The Lecture</title>
    </head>
    <body>

        <p>This is going to be ignored by the PHP interpreter.</p>
        <?php echo '<p>While this is going to be parsed.</p>'; ?>
        <p>This will also be ignored by the PHP preprocessor.</p>
        <?php print('<p>Hello and welcome to <i>my</i> page!</p>');
        ?>
        <?php
            //This is a comment
            /*
            This is
            a comment
            block
            */
        ?>
        <!------------------------>
        
        <p>
            <?php
            $foo = true; if ($foo) echo "It is TRUE! <br /> \n";
            $txt='1234'; echo "$txt <br /> \n";
            $a = 1234; echo "$a <br /> \n";
            $a = -123;
            echo "$a <br /> \n";
            $a = 1.234;
            echo "$a <br /> \n";
            $a = 1.2e3;
            echo "$a <br /> \n";
            $a = 7E-10;
            echo "$a <br /> \n";
            echo 'Arnold once said: "I\'ll be back"', "<br /> \n";
            $beer = 'Heineken';
            echo "$beer's taste is great <br /> \n";
            $str = <<<EOD
            Example of string
            spanning multiple lines
            using “heredoc” syntax.
            EOD;
            echo $str;
            ?>
        </p>
        <!------------------------>

        <?php
            $arr = array(5 => 1, 12 => 2);
            foreach ($arr as $key => $value) { echo $key, '=>',$value; }
            $arr[] = 56; // the same as $arr[13] = 56;
            $arr["x"] = 42; // adds a new element
            unset($arr[5]); // removes the element
            unset($arr); // deletes the whole array
            $a = array(1 => 'one', 2 => 'two', 3 => 'three');
            unset($a[2]);
            $b = array_values($a);
        ?>
        <!------------------------>

        <?php
            // Valid constant names
            define("FOO", "something");
            define("FOO2", "something else");
            define("FOO_BAR", "something more");
            // Invalid constant names (they shouldn’t start
            // with a number!)
            define("2FOO", "something");
            // This is valid, but should be avoided:
            // PHP may one day provide a "magical" constant
            // that will break your script
            define("__FOO__", "something");
        ?>
        <!------------------------>

        <?php
            $d=date("D");
            echo $d, "<br/>";
            if ($d=="Fri")
            echo "Have a nice weekend! <br/>";
            else
            echo "Have a nice day! <br/>";
            $x=10;
            if ($x==10)
            {
            echo "Hello<br />";
            echo "Good morning<br />";
            }
        ?>
        <!------------------------>

        <!-- switch-cond.php CS443 -->
        <?php
            $x = rand(1,5); // random integer
            echo "x = $x <br/><br/>";
            switch ($x)
            {
            case 1:
            echo "Number 1";
            break;
            case 2:
            echo "Number 2";
            break;
            case 3:
            echo "Number 3";
            break;
            default:
            echo "No number between 1 and 3";
            break;
            }
        ?>
        <!------------------------>

        <?php
            $i=1;
            while($i <= 5)
            {
            echo "The number is $i <br />";
            $i++;
            }
        ?>
        <!------------------------>

        <?php
            $i=0;
            do
            {
            $i++;
            echo "The number is $i <br />";
            }
            while($i <= 10);
        ?>
        <!------------------------>

        <?php
            $a_array = array(1, 2, 3, 4);
            foreach ($a_array as $value)
            {
            $value = $value * 2;
            echo "$value <br/> \n";
            }
        ?>
        <!------------------------>

        <?php
            function small_numbers()
            {
            return array (0, 1, 2);
            }
            list ($zero, $one, $two) = small_numbers();
            echo $zero, $one, $two;
        ?>
        <!------------------------>

        <?php
            $a = 1;
            $b = 2;
            function Sum()
            {
            global $a, $b;
            $b = $a + $b;
            }
            Sum();
            echo $b;
        ?>
        <!------------------------>
        
        <?php
            function foo()
            {
            global $color;
            include ("vars.php");
            echo "A $color $fruit";
            }
            /* vars.php is in the scope of foo() so *
            * $fruit is NOT available outside of this *
            * scope. $color is because we declared it *
            * as global. */
            foo(); // A green apple
            echo "A $color $fruit"; // A green
        ?>
        <!------------------------>

        <?php
            // Show all PHP information
            phpinfo();
            ?>
            <?php
            // Show only the general information
            phpinfo(INFO_GENERAL);
        ?>
        <!------------------------>
        
        <?php
            echo "Referer: " . $_SERVER["HTTP_REFERER"] . "<br />";
            echo "Browser: " . $_SERVER["HTTP_USER_AGENT"] . "<br />";
            echo "User's IP address: " . $_SERVER["REMOTE_ADDR"];
            ?>
            <?php
            echo "<br/><br/><br/>";
            echo "<h2>All information</h2>";
            foreach ($_SERVER as $key => $value)
            {
            echo $key . " = " . $value . "<br/>";
            }
        ?>
        <!------------------------>

        <?php
            if
            ( !($fh=fopen("welcome.txt","r")) )
            exit("Unable to open file!");
        ?>
        <!------------------------>

        <?php
            $myFile = "welcome.txt";
            $fh = fopen($myFile, 'a') or
            die("can't open file");
            $stringData = "New Stuff 1\n";
            fwrite($fh, $stringData);
            $stringData = "New Stuff 2\n";
            fwrite($fh, $stringData);
            fclose($fh);
        ?>
        <!------------------------>
        
        <form action="welcome.php" method="post">
            Enter your name: <input type="text" name="name" /> <br/>
            Enter your age: <input type="text" name="age" /> <br/>
            <input type="submit" /> <input type="reset" />
        </form>
        <!------------------------>

        <p>
            Dear <?php echo $_POST["name"] ?>, a cookie was set on this
            page! The cookie will be active when the client has sent the
            cookie back to the server.
        </p>
        <?php
            if ( isset($_COOKIE["uname"]) )
            echo "Welcome " . $_COOKIE["uname"] . "!<br />";
            else
            echo "You are not logged in!<br />";
        ?>
        <!------------------------>

        <?php
            $nextWeek = time() + (7 * 24 * 60 * 60);
            // 7 days; 24 hours; 60 mins; 60secs
            echo 'Now: '. date('Y-m-d') ."\n";
            echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
        ?>
        <!------------------------>

    </body>
</html>
