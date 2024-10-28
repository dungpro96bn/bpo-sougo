<?php
$isDevParameterSet = isset($_GET['dev']);
?>
<?php if ($isDevParameterSet && isProduction() !== true) : ?>
<div class="dev-bg" style="transform: translate(50%,0);">
    <!-- <i data-bg="none">N</i> -->
    <i data-bg="000">0</i>
    <i data-bg="001">1</i>
    <i data-bg="002">2</i>
    <i data-bg="036">36</i>
    <i data-bg="037">37</i>
    <i data-bg="038">38</i>
    <i data-bg="039">39</i>
    <i data-bg="040">40</i>
    <i data-bg="041">41</i>
    <i data-bg="042">42</i>
    <i data-bg="043">43</i>
    <i data-bg="044">44</i>
    <i data-bg="045">45</i>
  </div>
  <style>
    /* .dev-bg{
      display: none;
    } */
  </style>

<?php endif; ?>