<?php
use Illuminate\Support\Facades\DB;

// Vérifier si la connexion à la base de données est établie
try {
    $connection = DB::connection('mysql')->getPdo();
    if ($connection) {
        echo "Connexion à la base de données établie avec succès.";
    }
} catch (\Exception $e) {
    echo "Impossible de se connecter à la base de données : " . $e->getMessage();
}


