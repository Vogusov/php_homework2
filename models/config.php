<?php

const SERVER = 'localhost';
const DB = 'testing';
const LOGIN = 'root';
const PASS = 'root';
const CHARSET = 'utf8';


$dsn = 'mysql:host=' . SERVER . ';dbname=' . DB . 'charset=' . CHARSET;
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];


try {
  $pdo = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, LOGIN, PASS, $opt);
} catch (PDOException $e) {
  /* так делать не надо */
  die('PDO connection error: ' . $e->getMessage());
}


function getItems($pdo, $limit) {

  $sth = $pdo->prepare("select * from `goods` limit :limit");
//  $sth->bindValue(':limit', $limit, PDO::PARAM_INT);
//  $sth->execute();
  $sth->execute([':limit'=>$limit]);
  $items = $sth->fetchAll(PDO::FETCH_ASSOC);
  return $items;
}