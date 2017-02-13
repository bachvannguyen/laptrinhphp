<?php
  
?>
<!DOCTYPE html>
<html>
<head>
<style>
div {margin: auto;}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<h2>Active and Hoverable Pagination</h2>
<p>Move the mouse over the numbers.</p>

<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="http://localhost/tuhocphp/pagination.php?page=1">1</a>
  <a class="active" href="http://localhost/tuhocphp/pagination.php?page=2">2</a>
  <a href="http://localhost/tuhocphp/pagination.php?page=3">3</a>
  <a href="http://localhost/tuhocphp/pagination.php?page=4">4</a>
  <a href="http://localhost/tuhocphp/pagination.php?page=5">5</a>
  <a href="http://localhost/tuhocphp/pagination.php?page=6">6</a>
  <a href="#">&raquo;</a>
    <?php
      $page= (isset($_GET['page'])==true)? $_GET['page'] : 0;
    ?>
  <p> Bạn đang ở trang thứ <?php echo $page; ?> </p>
</div>

</body>
</html>
