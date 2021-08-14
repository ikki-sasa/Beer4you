 <?php


class UserModel {
    
   
     public function signUp(
        $firstName,
        $lastName,
        $email,
        $password,
        $address,
        $city,
        $zipCode)
    {
        
        $database = new Database();
       
        $user = $database->queryOne
        (
            "SELECT Id FROM users WHERE email = ?", [ $email ]
        );
        
        if(!empty($user))
        {
            var_dump('Utilisateur déjà enregistré!');
        }
        
        $passwordHash = $this->hashPassword($password);
        
        $sql = 'INSERT INTO users
        (
            firstName,
            lastName,
            email,
            password,
            creationTimeStamp,
            address,
            city,
            zip,
            role
        ) VALUES (?, ?, ?, ?, NOW(), ?, ?, ?, "user")';
        
        $database->executeSql($sql,
        [
            $firstName,
            $lastName,
            $email,
            $passwordHash,
            $address,
            $city,
            $zipCode
        ]);
    }
    
    
    private function verifyPassword($password, $hashedPassword)
    {
        return crypt($password, $hashedPassword) == $hashedPassword;
    }

    private function hashPassword($password)
    {
       
        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        

        return crypt($password, $salt); 
    }
    
    public function findWithEmailPassword($email, $password)
    {
        
        $database = new Database();
       
        $user = $database->queryOne
                (
                    "SELECT
                        *
                    FROM users
                    WHERE email = ?",
                    [ $email ]
                );
        
        if(empty($user) == true)
        {
            var_dump('utilisateur introuvable!');
        }
        
        if($this->verifyPassword($password, $user['password']) == false)
        {
            var_dump('Le mot de passe spécifié est incorrect');
        } else {
            $_SESSION['user']['id'] = $user['Id'];
            $_SESSION['user']['firstname'] = $user['firstName'];
            $_SESSION['user']['lastname'] = $user['lastName'];
            $_SESSION['user']['email'] = $user['email'];
            $_SESSION['user']['role'] = $user['role'];
        } 
        
    }
    
    public function listAllUsers()
    {
        
        $database = new Database();
        
        $sql = 'SELECT
                    *
                FROM users';

        return $database->query($sql, []);
    }
    
    public function changeUserRole($id, $role)
    {
        
        $database = new Database();
        
        $sql = 'UPDATE users SET role=? WHERE Id=?';

        $database->executeSql($sql, [$role, $id]);
    }
    
    public function deleteUser($id)
    {
        
        $database = new Database();
        
        $sql = 'DELETE FROM users WHERE Id=?';

        $database->executeSql($sql, [ $id ]);
    }
    
    public function findOneUser($id)
    {
        
        $database = new Database();
       
        $sql = 'SELECT * FROM users WHERE Id=?';

        return $database->queryOne($sql, [ $id ]);
    }
    
    public function changeUserProfil($post, $id)
    {
        
        $database = new Database();
        
        $sql = 'UPDATE users SET firstName=?, lastName=?, email=?, address=?, city=?, zip=? WHERE Id=?';

        $database->executeSql($sql, [ $post['firstname'], $post['lastname'], $post['email'], $post['address'], $post['city'], $post['zip'], $id]);
    }
    
}