<?php
	// This is the file for the parent class

	class ParentClass {
		private $k;
		private $c;

		public function __construct($k, $c) {
			$this->kind = $k;
			$this->color = $c;
		}

		public function getKind() {
			return $this->kind;
		}

		public function getColor() {
			return $this->color;
		}

		public function __invoke () {
			echo "This is a $this->color $this->kind fruit.";
		}
	}
?>
