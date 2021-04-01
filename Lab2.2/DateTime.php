<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Date Time Validation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><p> Your name and select date and time for the appointment</p></div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <table>
                <tr>
                    <td>Your name:</td>
                    <td><input type="text" size="15" name="Name" maxlength = "50"></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>
                        <select name="day" id="day">
                            <?php
                                for($i = 1;$i<=31;$i++){
                                    print("<option>$i</option>");
                                }
                            ?>
                        </select>
                        <select name="month" id= "month">
                            <?php
                                for($i = 1; $i<=12;$i++){
                                    print("<option> $i </option>");
                                }
                            ?>
                        </select>
                        <select name="year" id = "year">
                            <?php
                                for($i = 2000;$i<=2100;$i++){
                                    print("<option> $i</option>");
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                        <select name="hour" id="hour">
                            <?php
                            for($i = 0;$i<24;$i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="minute" id="minute">
                            <?php
                            for($i = 0;$i<60;$i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="sec" id="sec">
                            <?php
                            for($i = 0;$i<60;$i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"> <input type="SUBMIT" value="Submit" ></td>
                    <td align="left"><input type="RESET" value="Reset"></td>
                </tr>
            </table>
            <table>
                <?php
                    if(array_key_exists("Name",$_GET)){
                        $name = $_GET["Name"];
                        $day = $_GET["day"];
                        $month = $_GET["month"];
                        $year = $_GET["year"];
                        $hour = $_GET["hour"];
                        $minute = $_GET["minute"];
                        $second = $_GET["sec"];
                        print("Hi $name!<br>");
                        print("You have choose to have an apointment on $hour:$minute:$second,$day/$month/$year");
                        print("<p>More Information</p>");
                        if($hour>12){
                            $hour12 = $hour -12;
                            print("<p>In 12 hours, the time and date is $hour12:$minute:$second PM,$day/$month/$year</p>");
                        }
                        else {
                            print("<p>In 12 hours, the time and date is $hour:$minute:$second AM,$day/$month/$year</p>");
                        }
                        switch($month){
                            case 1: $dayOfMonth = 31; break;
                            case 3: $dayOfMonth = 31; break;
                            case 4: $dayOfMonth = 30; break;
                            case 5: $dayOfMonth = 31; break;
                            case 6: $dayOfMonth = 30; break;
                            case 7: $dayOfMonth = 31; break;
                            case 8: $dayOfMonth = 31; break;
                            case 9: $dayOfMonth = 30; break;
                            case 10: $dayOfMonth = 31; break;
                            case 11: $dayOfMonth = 30; break;
                            case 12: $dayOfMonth = 31; break;
                            default: 
                                if(($year %100 == 0 && $year % 400 == 0)||($year%4 == 0&&$year%100!=0)){
                                    $dayOfMonth = 29;
                                }
                                else{
                                    $dayOfMonth = 28;
                                }   
                        }
                        print("<p> This month has $dayOfMonth day</p>");
                    }
                ?>
            </table>
        </form>
    </body>
</html>    
