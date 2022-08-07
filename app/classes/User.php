<?php
class User
{
    function gets($db)
    {
        $gets =$db ->query('SELECT * FROM users' )->fetchAll(PDO::FETCH_ASSOC);
        return $gets;
    }
    function get($db, $id)
    {
        $get =$db ->query('SELECT * FROM users WHERE user_id='.$id)->fetch(PDO::FETCH_ASSOC);
        return $get;
    }
    function insert($db, $user)
    {
        $insert = $db->prepare('INSERT INTO users SET
            users.name=:username,
            email=:email,
            passwrd=passwrd,
            rank=:rank,
            IP =:Ip
        ');
        $insert ->execute([
            'username' => $user[0],
            'email' => $user[1],
            'passwrd' => md5($user[2]),
            'rank' => 3,
            'Ip' => $_SERVER["REMOTE_ADDR"]
        ]);
        if($insert) {
            return true;
        } else {
            return false;
        }

    }
    function update($db, $user)
    {
        $update = $db->prepare('UPDATE users SET
            users.name=:username,
            email=:email,
            passwrd=passwrd,
            rank=:rank,
            IP =:Ip
        ');
        $update ->execute([
            'username' => $user[0],
            'email' => $user[1],
            'passwrd' => md5($user[2]),
            'rank' => $user[3],
            'Ip' => $_SERVER["REMOTE_ADDR"]
        ]);
        if($update) {
            return true;
        } else {
            return false;
        }
    }
    function login($user)
    {
        if (is_array($user)) {
            if (!empty($user['email']) && !empty($user['passwrd'])) {
                if (filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
                    global $db;
                    $login = $db->query('SELECT * FROM users WHERE email="' . $user['email'] . '" AND passwrd ="' . $user['passwrd'] . '" ');
                    $login = $login->fetch(PDO::FETCH_ASSOC);
                    if ($login) {
                        session([
                            'email' => $login['email'],
                            'name' => $login['name'],                            
                        ]);
                        if($login['rank']=== '0') {
                            header('location:'.SUBURL.'/admin');
                        } else {
                         header("location:". $_SERVER['HTTP_REFERER']);
                        }
                        }
                    else {
                        return 'Hatalı giriş yaptınız lütfen kontrol ediniz.';
                    }
                } else {
                    return 'Hatalı email girişi yaptınız lütfen kontrol ediniz.';
                }
            } else {
                return 'Boş alan bırakmayınız lütfen!';
            }
        }
        return false;
    }
}
