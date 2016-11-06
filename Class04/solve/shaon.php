<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{

		}
		strong{
			display: block;
		}
	</style>
</head>
<body>
	<p> <b>Task #1:</b> Use All Days to in your code and print the current day usingn if and switch statements. Make sure you use 'escape html style' in your code.</p>
	<hr>
        <?php
        date_default_timezone_set("Asia/Dhaka");

        ?>
	<?php switch($today = date("D")):
		case "Sat": ?>
			<div>
				<p><strong> 6Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>
		<?php case "Sun": ?>
			<div>
				<p><strong> 7Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>
		<?php case "Mon": ?>
			<div>
				<p><strong>1 Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>
		<?php case "Tue": ?>
			<div>
				<p><strong> 2Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>
		<?php case "Wen": ?>
			<div>
				<p><strong> 3Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>
		<?php case "Thu": ?>
			<div>
				<p><strong> 4Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
		<?php break; ?>

		<?php Default: ?>
			<div>
				<p><strong> 5 Monday!</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, iste, perferendis sapiente veniam voluptatum molestias consectetur autem aliquam ut doloremque maiores mollitia totam ratione. Illo iure unde perspiciatis quam facere.</p>
			</div>
	<?php endswitch; ?>
	<hr>
		<p> <b>Task #2:</b> Print the calender of Month of November 2016, inside a table using loops! Don't forget to style it properly using CSS.</p>
	<hr>
	<table>
	<th>
		<td>cell1</td>
		<td>cell2</td>
		<td>cell3</td>
		<td>cell4</td>
		<td>cell5</td>
		<td>cell6</td>
		<td>cell7</td>
	</th>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
		<tr>
			<td>cell1</td>
			<td>cell2</td>
			<td>cell3</td>
			<td>cell4</td>
			<td>cell5</td>
			<td>cell6</td>
			<td>cell7</td>
		</tr>
	</table>


</body>
</html>








