<?php


class Database {
    private $pdo;

    public function __construct(
        $host = 'localhost',
        $user = 'root',
        $password = '',
        $database = 'player_db'
    ) {
        try {
            $db = "mysql:host={$host};dbname={$database};charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false            ];
            $this->pdo = new PDO($db, $user, $password, $options);
            echo 'Connected successfuly! <br>';
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    

    public function create( $params = []) {
        try {
            $sql = "INSERT INTO players (name,rating, club, nationality)
            VALUES ( :name, :rating, :club, :nationality) ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            error_log("Insert failed: " . $e->getMessage());
            throw new Exception("Database insert failed. Please try again later.");
        }
    }

    public function update($sql, $params = []) {
        try {
            $sql = "UPDATE players SET name = :name, rating = :rating, club = :club, nationality = :nationality WHERE player_id = :id";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount(); 
        } catch (PDOException $e) {
            
            error_log("Update failed: " . $e->getMessage());
            echo "Error: " . $e->getMessage(); 
            throw new Exception("Database update failed. Please try again later.");
        }
    }
    public function delete( $params = []) {
        try {
            $sql = "DELETE FROM players WHERE player_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount(); 
        } catch (PDOException $e) {
            error_log("Delete failed: " . $e->getMessage());
            throw new Exception("Database delete failed. Please try again later.");
        }
    }
    

    public function read( $params = []) {
        try {
            $sql = "SELECT * FROM players";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll(); 
        } catch (PDOException $e) {
            error_log("Read failed: " . $e->getMessage());
            throw new Exception("Database read failed. Please try again later.");
        }
    }

    


}

$connection=new Database();

// ---------------------Create_Usage---------------------------------




// $params = [
//     ':name' => 'Mahmouud',
//     ':rating' => '25',
//     ':club' => 'KAC',
//     ':nationality' => 'Morrocan'
// ];


// try {
//     $lastInsertId = $connection->create( $params);
//     echo "New player inserted with ID: " . $lastInsertId;
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }




// --------------------------------------------------------------------
// --------------------------------------------------------------------
// -------------------------UPDATE_USAGE-----------------------



// $params = [
//     ':name' => 'John Doe Updated',
//     ':rating' => 85,
//     ':club' => 'New Club',
//     ':nationality' => 'Updated Country',
//     ':id' => 8
// ];


// try {
//     $affectedRows = $connection->update( $params);
    
//     if ($affectedRows > 0) {
//         echo "Player updated successfully. Number of rows affected: " . $affectedRows;
//     } else {
//         echo "No player found with that ID, or no changes were made.";
//     }
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }


// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
// -------------------------READ_USAGE-------------------------------
// 

// $players = $connection->read();
// echo "All players: ";
// print_r($players);


// -----------------------------------------------------------------
// ---------------------DELETE_USAGE------------------------------


// $params = [':id' => 9]; 

// $affectedRows = $connection->delete($params);
// if ($affectedRows > 0) {
//     echo "Player deleted successfully.";
// } else {
//     echo "No player found with that ID.";
// }




?>


