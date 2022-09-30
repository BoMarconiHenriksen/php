<!DOCTYPE html>
<html>
<body>

<h1>
  <?php echo 'Hello World' ?>
  <?= 'Hello World2' ?>

  <?php
    $x = 10;
    $y = 5;

    echo $x . ', ' . $y;
  ?>
</h1>
<p>My first paragraph.</p>
<?php
    // comment 1
    # Comment 2

    /* multiline
       comment
    */

    /**
     * Is used for documentation
     */

    $x = 10;
    $y = 5;

    echo '<p>' . $x . ', ' . $y . '</p>';
  ?>

</body>
</html>