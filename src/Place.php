<?php
    class Place {

        private $name;
        private $picture;
        private $time;

        function __construct($new_name, $new_picture, $new_time) {

          $this->name = $new_name;
          $this->picture = $new_picture;
          $this->time = $new_time;
        }

        function setName($new_name) {
          $this->name = $new_name;
        }
        function setPicture($new_picture) {
          $this->picture = $new_picture;
        }
        function setTime($new_time) {
          $this->time = $new_time;
        }

        function getName() {
          return $this->name;
        }
        function getPicture() {
          return $this->picture;
        }
        function getTime() {
          return $this->time;
        }

        function save() {
          array_push($_SESSION['list_of_place'], $this);
        }

        static function getAll() {
          return $_SESSION['list_of_place'];
        }

        static function deleteONE($x) {
          return $_SESSION['list_of_place'] = array_splice($_SESSION['list_of_place'],($x-1) ,1);
        }

        static function deleteAll() {
          $_SESSION['list_of_place'] = array();
        }
    }
 ?>
