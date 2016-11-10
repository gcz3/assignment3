<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		public $kind;
		public $color;

		public function __construct($kind, $color) {
			$this->kind = $kind;
			$this->color = $color;
		}

		function __destruct() {
			echo "<p id=\"goodBye\">The grape will be destroyed now?!?!</p><br>";
		}

		function changeColor($color) {
			echo "We are going to change the color of the grape from $this->color to $color.";
			$this->color = $color;
		}

		function __toString() {
			$message = "This is a ChildClass that represents grape.";
			$description = "This fruit is a $this->kind that is $this->color and is delicious to eat.";
			return $message . "<br>" . $description . "<br>";
		}
	}
?>
