
<?php

class Client
{
    private string $users_uid;
    private string $email;
    private string $users_pwd;
  

    function __construct($users_uid, $email, $users_pwd)
    {
        $this->users_uid = $users_uid;
        $this->email = $email;
        $this->users_pwd = $users_pwd;
       
    }



public function getUsername()
{
    return $this->users_uid;
}

public function getEmail()
{
    return $this->email;
}

public function getPassword()
{
    return $this->users_pwd;
}



public function setUsername($users_uid)
{
    $this->users_uid = $users_uid;
    return $this;
}

public function setEmail($email)
{
    $this->email = $email;
    return $this;
}

public function setPassword($users_pwd)
{
    $this->users_pwd = $users_pwd;
    return $this;
}



public function show()
{
echo "<table border ='2'>
<tr>
<td>UserName</td>
<td>Email</td>
<td>Password</td>
</tr>
<tr>
";

echo"<td>".$this->users_uid."</td>";



echo"<td>".$this->email."</td>";

echo"<td>".$this->users_pwd."</td>";


echo"</tr>";
echo"</table>";
}

}



?>