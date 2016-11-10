<?php
	require_once('ParentClass.php');
	require_once('ChildClass.php');
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>

		<link rel="stylesheet" type="text/css" href="assignment3.css">
	</head>
	<body>
		<h1>Examples of PHP Extending Objects and Methods</h1>

		<section>
			<p>
				This uses the parent class and create a banana. <br>
			</p>

			<?php
				$banana = new ParentClass("healthy", "yellow");
				$banana();
			?>

			<br><br>
		</section>

		<br><br>

		<section>
			<p>
				This will use the child class and create a grape. It uses functions from
				both the ParentClass and ChildClass. <br><br>

				Stats about the Class:
			</p>

			<?php
				$grape = new ChildClass("berry", "green");
				echo "Kind: " . $grape->getKind() . "<br>";
				echo "Color: " . $grape->getColor() . "<br><br>";
				echo "<p>Let's change the color</p>";
				$grape->changeColor("purple") . "<br><br>";
				echo "<p>What's the overall takeaway?</p>";
				echo $grape . "<br>";
				echo "Once all references to this class are gone......<br><br>";
			?>
		</section>
	</body>
</html>
