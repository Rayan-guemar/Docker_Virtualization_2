<?php

namespace App\PlusCourtChemin\Configuration;

use Exception;
use PDO;

class ConfigurationBDDPostgreSQL implements ConfigurationBDDInterface {
    private string $nomBDD = "Ruben";
    private string $hostname = "172.16.20.90";

    public function getLogin(): string {
        return "postgres";
    }

    public function getMotDePasse(): string {
        return "tp12023";
    }

    public function getDSN(): string {
        return "pgsql:host={$this->hostname};dbname={$this->nomBDD};options='--client_encoding=UTF8'";
    }

    public function getOptions(): array {
        return array();
    }
}