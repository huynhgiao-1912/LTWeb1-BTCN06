<?php
function sum($a, $b )
{
    return $a +$b;
}

function findUserById($id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute(array($id));
    return $stmt ->fetch(PDO::FETCH_ASSOC);
}

function findUserByUsername($username)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function createUser($username, $password)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO users (username,password) VALUES (?,?)");
    $stmt->execute(array($username, $password));
    return findUserById($db->lastInsertId());
}

function updateUser($username,$newpassword)
{
    global $db;
    $stmt = $db->prepare("UPDATE users SET password = ? WHERE username= ?");
    $stmt->execute(array(  $newpassword, $username));
    return findUserById($db->lastInsertId());
}

function getCurentUser(){
    if(isset($_SESSION['userId'])){
        return findUserById($_SESSION['userId']);
    }
    return null;
}