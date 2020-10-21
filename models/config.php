<?php

const SERVER = 'localhost';
const DB = 'testing';
const LOGIN = 'root';
const PASS = 'root';
const CHARSET = 'utf8';


$dsn = 'mysql:host='.SERVER.'dbname='.DB.'charset='.CHARSET;
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $pdo = new PDO($dsn, LOGIN, PASS, $opt);
}
catch (PDOException $e){
  /* так делать не надо */
  die('Connection sucks: ' . $e->getMessage());
}

function getItems($pdo, $limit) {
  $sth = $pdo->prepare('select * from `goods` limit :limit');
  $sth->bindValue(':limit', $limit, PDO::PARAM_INT);
  $sth->execute();
  $items = $sth->fetchAll(/*PDO::FETCH_ASSOC*/);

  return $items;
}

//function getItems($connect, $limit) {
//  $str = "select * from `goods` limit $limit";
//  $res = mysqli_query($connect, $str);
//  if (!$res)
//    die(mysqli_error($connect));
//  while ($item = mysqli_fetch_assoc($res)){
//    $items[] = $item;
//  }
//
//  return $items;
//}


/* можно вместо while */
//foreach ($sth as $row){
//  $sth[] = $row
//}