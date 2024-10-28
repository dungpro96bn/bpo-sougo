<?php 
$isDevParameterSet = isset($_GET['dev']);
if ($isDevParameterSet && isProduction() !== true) : ?>
<div class="dev-bg">
<i data-bg="none">N</i>
<?php
for ($i = 0; $i <= 91; $i++) {
echo '<i data-bg="' . sprintf("%03d", $i) . '">' . ($i) . '</i>' . PHP_EOL;
}
for ($i = 100; $i <= 119; $i++) {
echo '<i data-bg="' . sprintf("%03d", $i) . '">' . ($i) . '</i>' . PHP_EOL;
}
?>
</div>
<?php endif; ?>
