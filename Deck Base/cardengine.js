//CONSTANTS
RANK = 0, SUIT = 1;
ACE = 1, JACK = 11, QUEEN = 12, KING = 13;
CARD_RANKS = ["JOKER", "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
CARD_SUITS = ["Clubs", "Diamonds", "Hearts", "Spades"];
CLUB = 0, DIAMOND = 1, HEART = 2, SPADE = 3;

function generateStandardDeck()
{
	var deck = [];
	for (var r = ACE; r <= KING; r++)
		for (var s = CLUB; s <= SPADE; s++)
		{
			var card = new Object();
			card.rank = r;
			card.suit = s;
			card.cardImg = r + "-" + s + ".png";
			deck.push(card);
		}
		
	return deck;
}


function shuffleStandardDeck(standardDeck)
{
	tempdeck=[];
	while(standardDeck.length>0)
	{
	rancard=getRandomInteger(0, standardDeck.length-1);
	tempdeck.push(standardDeck[rancard]);
	standardDeck.splice(rancard,1);
	}
	return tempdeck;
}
function dealCard(deck)
{
	if(deck.length==52)
	{	
	tmpcard=[];
	}
	tmpcard.push(deck[0]);
	deck.splice(0,1);
	return tmpcard;
	
}
function addCard(deck)
{
	if(deck.length>1)
	{
		sum=0;
		for(var i=0; i<deck.length;i++)
		{
			sum = sum + deck[i][0];
		}
		return sum;
	}
	
}
function removeCard(deck)
{
	rancard=getRandomInteger(0, deck.length-1);
	deck.splice(rancard,1);
	return deck;
}
/*
	Please write the shuffleDeck, dealCard, addCard, and removeCard functions
*/

