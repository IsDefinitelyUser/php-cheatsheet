<!-- Basic Syntax -->

<!-- 1. PHP Tags -->
<?php echo "I'm Standard tag" . "<br>"; ?>
<?= "I'm Short echo tag" . "<br>"; ?>

<!-- 2. Escaping from HTML -->

<!--  Advanced escaping using conditions -->
<p>This is going to be ignored by PHP and displayed by the browser.</p>

<?php echo 'While this is going to be parsed.'; ?>

<p>This will also be ignored by PHP and displayed by the browser.</p>


<?php $age = 17; ?>

<?php if ($age >= 18) : ?>
    <p>You are in a legal age.</p>
<?php else : ?>
    <p>Too young.</p>
<?php endif; ?>
<!-- Outputs: Too young -->

<!-- 3. Instruction separation -->
<?php echo "Some text"; ?>
No newline
<?= "But newline now" ?>


<!-- 4. Comments -->

<?php
echo 'This is a test'; // This is a one-line c++ style comment
/* This is a multi line comment
       yet another line of comment */
echo 'This is yet another test';
echo 'One Final Test'; # This is a one-line shell-style comment
?>