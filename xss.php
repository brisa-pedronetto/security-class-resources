<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS test</title>
</head>
<body>

<form>
  <input type="text" name="search">
  <button>Search</button>
</form>

<?php if (isset($_GET['search'])): ?>
<div style="margin-top: 2rem">
  Showing search results for "<?php echo $_GET['search'] ?>"
</div>
<?php endif;?>

<!--
<?php if (isset($_GET['search'])): ?>
<div style="margin-top: 2rem">
  Showing search results for "<?php echo filter_var($_GET['search'], FILTER_SANITIZE_STRING) ?>"
</div>
<?php endif;?> -->

</body>
</html>
