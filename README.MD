Maybe, but just maybe, PHP is not the best language to code this kind of code (since we do not need to put it into a website or something). But anyways, this one is my favorite language. Any day in the future I will convert it into another language when I get better with it.

So the first example, and the main cause of this repository is:
A "man" tells another's to think about a number from 0 to N and then he needs to guess this number.
In parallel, I choose randomly a number from 0 to N and then it needs to find/"guess" this number.
The main question is:
The pattern to pick a number from 0 to N is, strictly, "random" (in quotes because there is a big big discussion of what is really random, but anyways, ignoring it by now...). So, maybe, the best (faster) way of guessing this number isn't scanning from 0 to N, but scanning this exactly range of numbers but with the same pattern as the way the number was picked, in other words, with the same random pattern.
Well, that's my thesis, the numbers will speak for themselves now on.

Note: The main purpose of this code is just to understand which way of bruteforce is faster when we are talking about "random" patterns. So, because of it, I didn't put the shuffle function inside the timer (just clarifying in case it's a question for someone).