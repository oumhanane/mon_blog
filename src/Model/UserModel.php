<?php  

namespace App\Model;

use PDO;
use App\Entity\User;

class UserModel extends ModelAbstract
{
    public function createUser($firstname, $name, $email, $password) {
            // Préparation de la requête d'insertion
            $stmt = $this->pdo->prepare("INSERT INTO user (firstname, name, email, password) VALUES (:firstname, :name, :email, :password)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            // Exécution de la requête
            $stmt->execute();

        }
}