<!doctype html>
<html>

<?php
// 1) for — print multiples of 7 up to 70
for ($i = 7; $i <= 70; $i += 7) {
  echo $i, ' ';
}
echo PHP_EOL;

// 2) while — sum numbers until > 100
$sum = 0; $n = 1;
while ($sum <= 100) {
  $sum += $n;
  $n++;
}
echo nl2br("First n where sum>100 is $n, sum=$sum\n");

// 3) do...while — ensure at least one iteration
$count = 0;
do {
  $count++;
} while ($count < 1);
echo nl2br("do...while ran $count time(s)\n");

// 4) foreach — iterate associative array
$cart = ['pen'=>1.2, 'notebook'=>2.5, 'bag'=>12.0, 'gum'=>0.5];
$subtotal = 0.0;
foreach ($cart as $item=>$price) {
  if ($price < 1.0) continue; // skip small items
  $subtotal += $price;
}
echo nl2br("Subtotal (skip < 1): $subtotal\n");

// 5) Challenge — FizzBuzz 1..30, skip 13
for ($i = 1; $i <= 30; $i++) {
  if ($i === 13) continue;
  $out = '';
  if ($i % 3 === 0) $out .= 'Fizz';
  if ($i % 5 === 0) $out .= 'Buzz';
  echo $out !== '' ? $out : $i, PHP_EOL;
}

?>

<body>
<table>

<?php for($s = 1; $s <= 10; $s++): ?>
 <tr>
<th>
 <?= $s ?>
<th>
 <?php for($i = 2; $i <= 10; $i++): ?>
<?php if($s == 1): ?>
<th>
 <?= $i ?>
<?php else: ?>
<td>

 <?= $s * $i ?>
</td>
<?php endif ?>
  <?php endfor; ?>
</tr>
<?php endfor; ?>

</table>
</body>

</html>