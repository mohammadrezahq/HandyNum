# Mor/HandyNum

### Handy Number Package for PHP

Install package with composer:

```
composer require mor/handynum
```

Use in project with this command:

```
use Mor\Handynum\Handynum;

$handy = new Handynum();
```

#### Compare numbers 

```
echo $handy->compare(1,2); // 1 is smaller than 2: echo 'smaller'
echo $handy->compare(2,2); // 2 is equal to 2: echo 'tie'
echo $handy->compare(2,1); // 2 is bigger than 1: echo 'bigger' 

echo $handy->bigger(9,8); // 9 is bigger: echo 9
echo $handy->smaller(9,8); // 8 is smaller: echo 8
echo $handy->bigger(8,8, false); // echo 8
echo $handy->smaller(8,8, $something); // echo $something

$handy->areEqual(8,8); // return true
$handy->isBigger(7,5); // 7 is bigger than 5: return true
$handy->isSmaller(7,5); // 7 is not smaller than 5: return false

```

#### Operators

```
echo $handy->sum(1,3,5,6); // 1 + 3 + 5 + 6 = 15
echo $handy->multiple(2,3,4); // 2 * 3 * 4 = 24

// You can pass array too.
echo $handy->sum([1,3,5,6]); // echo 15

echo $handy->div(10,2); // 10 / 2 = 5

echo $handy->percent(80,20,false); // 20% of 80: echo 16 
echo $handy->percent(80,20,true); // 80% of 80: echo 64 (default is false)

echo $handy->getPercentage(80,16); // x% of 80 = 16 => x = 20: echo 20
```

#### Transform

```
echo $handy->square(2); // 2*2: 4

echo $handy->root(4); // echo 2

echo $handy->exponent(3,4); // 3*3*3*3 = 81

echo $handy->root(81,4); // echo 3;
```