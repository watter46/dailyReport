<?php
declare(strict_types=1);

namespace Config;

use Config\Connection;
use PDO;

final class ExecuteMySql extends Connection {
    
    private readonly array $result;
    
    public function __construct(private string $query, private int|null $id = null)
    {
        parent::__construct();

        
        if ($this->id) $this->prepareExecute();

        if (!$this->id) $this->queryExecute();
    }

    private function queryExecute() {

        $stmt = $this->pdo->query($this->query);

        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private function prepareExecute() {

        $stmt = $this->pdo->prepare($this->query);

        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        
        $stmt->execute();

        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute() {
        return $this->result;
    }
}