<?php
	$title = 'Working with loops!';
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>
			<?php echo $title; ?>
		</title>
	</head>

	<body>
		<h1><?php echo $title; ?>  </h1>

		<div class="content">
			<h2>while loop</h2>
			<dl>
				<dt>Problem 1:</dt>
				<dd>We want to print value in accending order from 1 to 10 using PHP!</dd>
			</dl>
			<?php
			$i = 0;
				while($i< 10){
					echo ++$i . '<br>';

				}
			 $i = 0;
			// WP Methode ?>
				<ul>
					<?php   while($i<10):  $i++; ?>
						<?php if(5 == $i): break;?>
							<?php else: ?>
								<li> List
									<?php echo $i;  ?>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
				</ul>
		</div>
	</body>

	</html>
