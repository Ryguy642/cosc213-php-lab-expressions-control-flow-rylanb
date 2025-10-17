# cosc213-php-lab-expressions-control-flow-rylanb
This is public repository for my COSC 213 Lab 6.

# Manual:
To run these php files in WAMP:
1. Go to where you've stored your wampserver file and click on it to engage WAMP
2. Type : **http://localhost/[Filepath]** in the searchbar on your preffered search engine.
3. [Filepath] should be whatever subfolders of html in the www folder of WAMP's C:/ drive location, and the the filename.php

# Sample I/O
01_expressions:
NO ENTRIES NESSESARY

sum=13 prod=30 a=15 14 20 Hello Ada Hello Ada
C:\wamp64\www\html\lab4\01_expressions.php:20:boolean true
C:\wamp64\www\html\lab4\01_expressions.php:21:boolean false
Entry allowed Result: Fail/NoScore Three times 3.
9
Three divided by 3.
1
Pass

02_branching
- default
- Welcome, user. Back to work. OKish
- ?role=editor&day=Sun&code=404 [Role of Editor, Sunday, Code 404 (Not Found), default language (English)]
- Welcome, editor. Enjoy your weekend! Not Found
- ?role=admin&day=Wed&code=400 [Role of Admin, Wednesday, Code 400 (Bad Request), default language (English)]
- Welcome, admin. Back to work. Bad Request
- ?role=admin&day=Wed&code=400&lang=fr [Role of Admin, Wednesday, Code 400 (Bad Request), French]
- Bienvenue, administrateur.
C'est temps pour travailler!
Demande Incorrect
- ?role=user&day=Sat&lang=fr&code=403 [Role of user, Saturday, Code 403 (Unathorized access), French]
- Bienvenue, utilisateur/ultilisatrice.
Passez un bon week-end!
Non Autorise

03_loops
NO ENTRIES NESSESARY

7 14 21 28 35 42 49 56 63 70 First n where sum>100 is 15, sum=105
do...while ran 1 time(s)
Subtotal (skip < 1): 15.7
1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz
1		2	3	4	5	6	7	8	9	10
2		4	6	8	10	12	14	16	18	20
3		6	9	12	15	18	21	24	27	30
4		8	12	16	20	24	28	32	36	40
5		10	15	20	25	30	35	40	45	50
6		12	18	24	30	36	42	48	54	60
7		14	21	28	35	42	49	56	63	70
8		16	24	32	40	48	56	64	72	80
9		18	27	36	45	54	63	72	81	90
10  20	30	40	50	60	70	80	90	100

04_Grade_Calculator/index.php
- ?score=4
Your grade is F-.

Perhaps consider enrolling in a different course.
- ?score=76
Your grade is C+.

Cs may get degrees, but I know you can do better. Remember to review and study!
- ?score=99
Your grade is A+.

Excellent Work!

05_toolkit/index.php
On Stats page...
1. I am Unicron
- NO OUTPUT
2. 1
- Count: 1
Sum: 1
Min: 1
Max: 1
Average: 1.00
3. 3, 4
- Count: 2
Sum: 7
Min: 3
Max: 4
Average: 3.50
4. 6, 8, 7, 5, 3, 0, 9
- Count: 7
Sum: 38
Min: 0
Max: 9
Average: 5.43



# == vs ===
== represents a 'roughly equals' operation, converting both types to the same type to compare them.
=== represents a 'strictly equals' operation, and does not convert the types to be the same to compare them.
!= and !== operate in a similar manner.
**Loose vs strict examples**
```php
0 == '0';    // evaluates to true
0 === '0';   // false (string vs int)
'5' == 5;    // true
'5' === 5;   // false
```

