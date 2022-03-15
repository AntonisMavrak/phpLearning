<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

echo rand(1, 100);
echo "<br>";
echo strtoupper("Im a programmer");
echo "<br>";
$pin = array(12, 5122531, 35, 12); 
echo max($pin);

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>