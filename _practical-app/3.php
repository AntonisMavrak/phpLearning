<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if(1 == 2){

 }elseif(3 > 5){

 }else{
	echo "I love PHP";
 };

 echo "<br>";
	
 for($i=0; $i<=10; $i++){
	 echo $i;
 };

 echo "<br>";

 $key = 6;

 switch($key){
	case 1:
		echo 1;
		break;
	
	case 2:
		echo 2;
		break;
	
	case 6:
		echo "Im in case 6";
		break;
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>