    <?php
        function dangky($username,$email,$password,$tel,$address,$role) {
            $sql = "INSERT INTO `users`(`user_name`, `email`, `password`, `tel`, `address`, `role`) 
                    VALUES 
            (?, ?, ?, ?, ?, ?)";
            pdo_execute($sql,$username,$email,$password,$tel,$address,$role);
        }

        function check__taikhoan($email,$password) {
            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            return pdo_query_one($sql,$email,$password);
        }
    ?>
