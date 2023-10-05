<!--Feels wrong to solve the css like this but couldn't find another way.
Linking the stylesheet from within the HTML-head-tag didn't work once
uploaded to one.com -->
<style>
    <?php
    include 'css/styles.css';
    ?>
</style>
<?

require __DIR__ . "/head.php";

require __DIR__ . "/main.php";
