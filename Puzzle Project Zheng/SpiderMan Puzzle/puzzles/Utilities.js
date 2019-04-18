function getRandomInteger(lower,upper)
{
	if(lower > upper)
	{
		return null;
	}
	
	var multiplier = upper - lower + 1;
	
	return parseInt(Math.random() * multiplier) + lower;
}

function getRandomColor()
{
	redValue = parseInt(Math.random() * 256);
	greenValue = parseInt(Math.random() * 256);
	blueValue = parseInt(Math.random() * 256);
	
	return "rgb(" + redValue + ", " + greenValue + ", " + blueValue + ")";
}

function getNumberSuffix(number)
{
	if (number % 100 == 11 || number % 100 == 12 || number % 100 == 13)
	{
		return "th";
	}
	if (number % 10 == 1)
	{
		return "st";
	}
	if (number % 10 == 2)
	{
		return "nd";
	}
	if (number % 10 == 3)
	{
		return "rd";
	}
	return "th";
}