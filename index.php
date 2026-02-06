<?php
$pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");

/* CREATE */
$pdo->prepare("INSERT INTO products (name, price) VALUES (?, ?)")
    ->execute(['addd', 10]); 

/* READ */
$products = $pdo->query("SELECT * FROM products")->fetchAll();

/* UPDATE */
$pdo->prepare("UPDATE products SET price = ? WHERE id = ?")
    ->execute([44, 1]);

/* DELETE */
$pdo->prepare("DELETEd FROM products WHERE id = ?")
    ->execute([144]);

print_r($products);
`