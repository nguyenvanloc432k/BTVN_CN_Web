<html>
    <head>
        <title>2.9 Exerciset</title>
        <meta charset="utf-8">
    </head>
    <body>
        <font size=5>Cập nhật thông tin thành công</font>
        <?php
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            if($pass1 == $pass2) print ("<br>Cập nhật mật khẩu thành công!");
            else print ("<br>Mật khẩu không khớp!");

            print ("<br><h2>Thông tin cá nhân</h2>");

            $avatar = $_POST['file'];
            print("<img src=\"$avatar\" alt=\"Avatar\" width=\"200\">");

            $name = $_POST['name'];
            print ("<br><br>Họ và tên: $name");
            $gender = $_POST['gender'];
            print ("<br>Giới tính: $gender");

            $birth = $_POST['date'];
            print ("<br>Ngày sinh: $birth");

            $tel = $_POST['tel'];
            print ("<br>Số điện thoại: $tel");

            $email = $_POST['email'];
            print ("<br>Email: $email");

            $facebook = $_POST['facebook'];
            print ("<br>Link facebook: $facebook");

            
            print ("<br>Sở thích của bạn: ");
            foreach($_POST['job'] as $hobby){
                print ("$hobby, "); 
            }print ("...");

            $color = $_POST['color'];
            print ("<br>Màu sắc yêu thích: <span style=\"background-color: $color\">$color</span>");

            $datetime = $_POST['datetime-local'];
            print ("<br>Thời gian đi ngủ muộn nhất trong tuần hiện tại: $datetime");

            $month = $_POST['month'];
            print ("<br>Sinh nhật của bạn vào tháng: $month");

            $ex = $_POST['number'];
            print ("<br>Số người yêu cũ: $ex");

            $range = $_POST['range'];
            print ("<br>Mức độ yêu thích động vật: $range%");

            $getup = $_POST['time'];
            print("<br> Hôm nay bạn ngủ dậy lúc: $getup");

            $test = $_POST['week'];
            print("<br>Đạt!");

        ?>
    </body>
</html>