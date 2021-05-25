# Pseudocode for Bitcoin betting

INITIATE player with 10 bitcoins and computer with 100 bitcoins

CHOOSE how many bitcoins you want to bet (max 50% of your holding)

BUTTON 'SATSA' is pressed

IF player wins
    your bitcoins += betted bitcoins * 2
    computed bitcoins -= betted bitcoins
ELSE
    your bitcoins -= betted bitcoins
    computed bitcoins += betted bitcoins
ENDIF
