function getRandomInteger(lower,upper)
{
	if(lower>upper)
	{
	return null;
	}
	
	multiplier = upper-lower+1;
	 rnd= parseInt(Math.random() * multiplier)+lower;
	 return rnd;
}