<?php
class Connection {

private $link;

public function __construct() {
    $this->link = null;
}

public function close() {
    $this->link->close();
}
public function query($query) {
    return $this->link->query($query);
}

public function open() {
    $this->link = new mysqli("localhost", "root", "", "oceandrivess.ph");
    if (!$this->link)
    return false;
   return true;    
}

}