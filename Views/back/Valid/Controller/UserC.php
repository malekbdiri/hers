
 <?php

include "../config.php";
include "../Model/User.php";

class ClientC
{
    function showClient($user)
    {
        echo "<table border ='2'>
        <tr>
        <td>Username</td>
        <td>Email</td>
        <td>Password</td>
        
        </tr>
        <tr>
        ";

        echo"<td>".$user->getUsername()."</td>";



        echo"<td>".$user->getEmail()."</td>";

        echo"<td>".$client->getPassword()."</td>";
        
        echo"</tr>";
        echo"</table>";

    }

    public function listClients()
    {
        $sql = "SELECT * FROM users";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch(Exception $e){
            die("Error: ". $e->getMessage());
        }
    }

    public function addclient($client)
    {
        $db = config::getConnection();
        try
        {
            $sql = $db->prepare("INSERT INTO users (users_id,users_uid,email,users_pwd)
                    VALUES(:users_id,:users_uid,:email,:users_pwd)");
        
            $sql->execute([
                'users_id' => ':users_id',
                'users_uid' => $client->getUsername(),
                'email' => $client->getEmail(),
                'users_pwd' => $client->getPassword(),
      
            ]);
        }
        catch(PDOException $e) {
            $e->getMessage();
        }
    }

    public function deleteclient($id)
    {
        $sql = "DELETE FROM users WHERE users_id = :id";
        $db = config::getConnection();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function updateClient($id, $user)
    {
        $db = config::getConnection();
        try
        {
            $sql = $db->prepare('UPDATE users SET users_uid = :users_uid, email = :email, users_pwd = :users_pwd where users_id = :users_id');
            $sql->execute([
                'users_uid' => $user->getUsername(),
                'email' => $user->getEmail(),
                'users_pwd' => $user->getPassword(),
                'users_id' => $id
            ]);
            echo $sql->rowCount() . " records UPDATED successfully";
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
    }


    public function getClient($id)
    {
        $sql = "SELECT * FROM users where users_id = $id";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch(Exception $e){
            die("Error: ". $e->getMessage());
        }

    }
    public function blockclient($id)
    {
        $sql = "UPDATE users set Block=1 where users_id = :id";
        $db = config::getConnection();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function deblockclient($id)
    {
        $sql = "UPDATE users set Block=0 where users_id = :id";
        $db = config::getConnection();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function recherche()
    {
        $sql = "SELECT * FROM users where users_uid=:lname";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch(Exception $e){
            die("Error: ". $e->getMessage());
        }
    }


}


?>
