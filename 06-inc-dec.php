<?php include 'includes/header.php';

$numero1 = 30;
echo ++$numero1; // 30

$numero1 += 5;
echo $numero1; // 36 (ya se aumentó uno en ++$numero1)

$numero2 = 30;
echo --$numero2; // 29

$numero2 -= 5;
echo $numero2; // 24 (ya se restó uno en --$numero2)


include 'includes/footer.php';
