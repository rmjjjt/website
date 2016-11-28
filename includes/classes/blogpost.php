<?php

/*  create class
add properties: title, image url, image ALT text, body, summary */
class blogPost {
private $title;
private $image;
private $imageAlt;
private $body;
private $summary;

public function __construct($title, $image, $imageAlt, $body, $summary) {
$this->title = (string)$title;
$this->image = (string)$image;
$this->imageAlt = (string)$imageAlt;
$this->body = (string)$body;
$this->summary = (string)$summary;
}

public function getTitle() {
return $this->title;
}

public function getImage() {
return $this->image;
}

public function getImageAlt() {
return $this->imageAlt;
}

public function getSummary() {
return $this->summary;
}


public function getBody() {
return $this->body;
}

}

?>