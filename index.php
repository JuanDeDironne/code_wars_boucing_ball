<?
// https://www.codewars.com/kata/5544c7a5cb454edb3c000047



function getBallPass($initialHeightFonc,$bounceCoeffFonc,$visualHeightFonc)
{
	// Initialization
	$response 	= -1;
	$ballHeight = $initialHeightFonc;
	$nbBounce		= 0;


	// If the conditions are fully met
	if( ($initialHeightFonc>0) && ($bounceCoeffFonc>0 && $bounceCoeffFonc<1) && ($visualHeightFonc<$initialHeightFonc) )
	{
		// While Ball is Visible
		do
		{
			// Calcul Height
			$ballHeight = bcmul($bounceCoeffFonc,$ballHeight,10);

			// If Ball always Visible then Increment Number of Bounce
			if($ballHeight>=$visualHeightFonc)	$nbBounce++;
		}
		while($ballHeight>=$visualHeightFonc);
		// End - While Ball is Visible

		// Calculate Pass with Number of Bounce More 1 Pass (when the ball down the first time)
		$response = bcadd(bcmul($nbBounce,2,0),1,0);	
	}
	// End - If the conditions are fully met

	return($response);
}








$initialHeight 	= 3;
$bounceCoeff 	= 0.66;
$visualHeight 	= 1.5;

echo "<br /><b>".getBallPass($initialHeight,$bounceCoeff,$visualHeight)."</b>";



$initialHeight 	= 2.5;
$bounceCoeff 				= 0.9;
$visualHeight 	= 2;

echo "<br /><b>".getBallPass($initialHeight,$bounceCoeff,$visualHeight)."</b>";


$initialHeight 	= 3;
$bounceCoeff 				= 1;
$visualHeight 	= 1.5;

echo "<br /><b>".getBallPass($initialHeight,$bounceCoeff,$visualHeight)."</b>";

/*
2.5
2
1.5
1
0.5
0
*/
?>