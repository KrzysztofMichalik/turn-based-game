# Orderus input properties

## STATS

Health      70 - 100
Strength    70 - 80
Defence     45 - 55
Speed       40 - 50
Luck*       10% - 30%

## SKILS
Orderus’ skills occur randomly, based on their chances.

Rapid strike:    Strike twice while it’s his turn to attack; there’s a 10% chance he’ll use this skill every time he attacks

Magic shield:   Takes only half of the usual damage when an enemy attacks; there’s a 20% chance he’ll use this skill every time he defends.

# Beasts input properties

## STATS

Health      60 - 90
Strength    60 - 90
Defence     40 – 60
Speed       40 – 60
Luck*       25% - 40%


## RULES 

### GAME START
On every battle, Orderus and the beast must be initialized with random properties, within
their ranges.
The first attack is done by the player with the higher speed. If both players have the same speed,
then the attack is carried on by the player with the highest luck. After the attack, the players switch
roles: the attacker now defends and the defender now attacks.

### DAMAGE CALUCULATED
The damage formula:
Damage = Attacker strength – Defender defence
An attacker can miss their hit and do no damage if the defender gets lucky that turn.

### GAME OVER
The game ends when one of the players remain without health or the number of turns reaches 20.
The application must output the results each turn: what happened, which skills were used (if any),
the damage done, defender’s health left.
If we have a winner before the maximum number of rounds is reached, he must be declared.

*(0% means no luck, 100% lucky all the time).

