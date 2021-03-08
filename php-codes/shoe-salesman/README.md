
## Running Test

``php ..\phpunit.phar --bootstrap ..\vendor\autoload.php .\AppTest.php``

## The Shoe Salesman Solution

Bronze Tier Challenge solution written in PHP.

## Problem

Jonel is a shoe seller and has lots of shoes classified in 26 categories labeled A, B, ... Z. Each shoe has a code of 3, 4, 5 or more capitals letters. The 1st letter of a code is the capital letter of the shoe category. In the shoeseller's stocklist each code is followed by a space and by a positive integer n (int n &gt;= 0) which indicates the quantity of shoes of this code in stock.


For example an extract of one of the stocklists could be:

L = {"ABART 20", "CDXEF 50", "BKWRK 25", "BTSQZ 89", "DRTYM 60"}.
or

L = ["ABART 20", "CDXEF 50", "BKWRK 25", "BTSQZ 89", "DRTYM 60"] or ....
You will be given a stocklist (e.g. : L) and a list of categories in capital letters e.g :

  M = {"A", "B", "C", "W"} 
or

  M = ["A", "B", "C", "W"] or ...
and your task is to find all the shoes of L with codes belonging to each category of M and to sum their quantity according to each category.

For the lists L and M of example you have to return the string:

  (A : 20) - (B : 114) - (C : 50) - (W : 0)

  where A, B, C, W are the categories, 20 is the sum of the unique shoe of category A, 114 the sum corresponding to "BKWRK" and "BTSQZ", 50 corresponding to "CDXEF" and 0 to category 'W' since there are no code beginning with W.

If L or M are empty return an empty string.

Note:
    In the result codes and their values are in the same order as in M.
    More examples in the sample cases.
