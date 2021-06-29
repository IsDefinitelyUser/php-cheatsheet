<!-- 1. PHP Tags -->
<?php echo "I'm Standard tag" . "<br>"; ?>
<?= "I'm Short echo tag" . "<br>"; ?>


<!-- 2. Advanced escaping using conditions -->
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

<?php
function localVariable()
{
    $greetings = "I am a local variable" . "<br>";
    return $greetings;
}

echo localVariable(); ?>
<!-- Outputs: I am a local variable -->

<?php
global $greetings;
$greetings = "I am a global variable" . "<br>";

function globalVariable()
{
    global $greetings;
    return $greetings;
}

echo globalVariable(); ?>
<!-- Outputs: I am a global variable -->


<?php
$firstName = "Gabriel";
$lastName = "Cacayan";

echo "$firstName $lastName is a programmer...";

?>