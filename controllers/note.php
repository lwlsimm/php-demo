<?php
$heading = 'Note';
$config = require ('config.php');
$db = new Database($config['database']);
$id = $_GET['id'];
$note = $db->query('select * from notes where id = ?',[$id])->fetch();

require 'views/note.view.php';