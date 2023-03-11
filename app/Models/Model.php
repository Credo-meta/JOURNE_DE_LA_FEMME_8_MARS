<?php
namespace App\Models;

use Database\DBConnection;

class Model
{

    protected $db;
    protected $table;

    

    public function __construct(DBConnection $db){
        
        $this->db= $db;

    }

    public function all() : array{

        $stmt = $this->db->getPDO()->query("Select * FROM {$this->table}");
        
        return $stmt->fetchAll();

        
    }
    public function findById(int $id)
        {
            $stmt = $this->db->getPDO()->prepare("Select * FROM {$this->table} where id= ?");

            $stmt->execute([$id]);
            
            return $stmt->fetch();
        }
}