<?php

require 'config.php';
class Database{

    public $connection;

    public function connect() {
        $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        return $this->connection;
    }


    public function prepare($query) {
        return $this->connect()->prepare($query);
    }

    public function execute($stmt, $params) {
        // Unpack the $params array into individual arguments
        $stmt->bind_param(...$params);
        $stmt->execute();
        return $stmt;
    }

    public function fetch($stmt) {
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function close() {
        $this->connection->close();
    }

    // Dynamic insertData method
    public function insertData($tableName, $data) {
        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));
        $types = str_repeat('s', count($data)); // Assuming all values are strings. Adjust accordingly.

        $query = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
        $stmt = $this->prepare($query);

        $params = array_merge([$types], array_values($data)); // Bind types and values together

        if (!$this->execute($stmt, $params)) {
            echo 'insert failed';
        } 
    }

    public function where($tableName, $column, $param) {
        $query = "SELECT * FROM $tableName WHERE $column = ?";
        $stmt = $this->prepare($query);
        $params = ['s', $param]; // Assuming the parameter is a string
        $this->execute($stmt, $params);
        $data = $this->fetch($stmt);
        return $data;
    }
    public function anywhere($tableName, $column, $param) {
        // Prepare the query with a placeholder
        $query = "SELECT * FROM $tableName WHERE $column LIKE ?";
        
        // Prepare the query
        $stmt = $this->prepare($query);
        
        // Add wildcards to the search parameter
        $param = '%' . $param . '%';
        
        // Bind the parameter using 's' for string type
        $stmt->bind_param('s', $param);
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Fetch the data
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        return $data;
    }
    
    
    public function delete($tableName, $column, $param) {
        $query = "DELETE FROM $tableName WHERE $column = ?";
        $stmt = $this->prepare($query);
        $params = ['s', $param]; // Assuming the parameter is a string
        $this->execute($stmt, $params);
       
    }
  
    public function get_all($tableName){
        $query = "SELECT * FROM $tableName";
        $stmt = $this->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $data =  $result->fetch_all(MYSQLI_ASSOC);  
        return $data;
    }

    public function update($tableName, $data, $condition) {
        $columns = array_keys($data);
        $values = array_values($data);
        $types = str_repeat('s', count($values));

        $setClause = implode(' = ?, ', $columns) . ' = ?';
        $values[] = $condition['value']; // Add the condition value to the values array
        $types .= $condition['type']; // Append the condition type to the types string

        $update = "UPDATE $tableName SET $setClause WHERE {$condition['column']} = ?";
        $stmt = $this->prepare($update);
        $this->execute($stmt, array_merge([$types], $values));
    }
}





?>