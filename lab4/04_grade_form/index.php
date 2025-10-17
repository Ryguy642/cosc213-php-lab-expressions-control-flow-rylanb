<?php
$score = filter_input(INPUT_GET, 'score', FILTER_VALIDATE_INT);
$score = $score ?? null;

function letter_grade(?int $s): ?string {
  if ($s === null || $s < 0 || $s > 100) return null;
  if ($s >= 95) return 'A+';
  if ($s >= 90) return 'A';
  if ($s >= 87) return 'A-';
  if ($s >= 83) return 'B+';
  if ($s >= 80) return 'B';
  if ($s >= 77) return 'B-';
  if ($s >= 73) return 'C+';
  if ($s >= 70) return 'C';
  if ($s >= 67) return 'C-';
  if ($s >= 60) return 'D';
  if ($s >= 50) return 'F';
  return 'F-';
}
$grade = letter_grade($score);
$remark = "No Remark";
switch ($grade) {
  case ($grade === 'A+'):
  $remark = "Excellent Work!";
  break;
  case ($grade === 'A'):
  $remark = "Oustanding Work!";
  break;
  case ($grade === 'A-'):
  $remark = "Great Work!";
  break;
  case ($grade === 'B+'):
  $remark = "Good Work!";
  break;
  case ($grade === 'B'):
  $remark = "Remember to review what you got wrong!";
  break;
  case ($grade === 'B-'):
  $remark = "Remember to review your work before submitting.";
  break;
  case ($grade === 'C+'):
  $remark = "Cs may get degrees, but I know you can do better. Remember to review and study!";
  break;
  case ($grade === 'C'):
  $remark = "Cs may get degrees, but you should really review and study more!";
  break;
  case ($grade === 'C-'):
  $remark = "If you're struggling, we have resources at the library to help you.";
  break;
  case ($grade === 'D'):
  $remark = "See me after class.";
  break;
  case ($grade === 'F'):
  $remark = "See me ASAP.";
  break;
  case ($grade === 'F-'):
  $remark = "Perhaps consider enrolling in a different course.";
  break;
  default:
  $remark = "No Remark";
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Grade Calculator</title></head>
<body>
  <h1>Grade Calculator</h1>
  <form>
    <label>Score (0–100):
      <input name="score" type="number" min="0" max="100"
             value="<?= htmlspecialchars($score !== null ? (string)$score : '') ?>">
    </label>
    <button>Compute</button>
  </form>

  <?php if ($score === null): ?>
    <p>Enter a score to see the letter grade.</p>
  <?php elseif ($grade === null): ?>
    <p>Invalid score. Please enter 0–100.</p>
  <?php else: ?>
    <p>Your grade is <strong><?= $grade ?></strong>.</p>
    <?php if ($grade != null): ?>
      <p><?= $remark ?></p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>