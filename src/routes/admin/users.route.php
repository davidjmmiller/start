<?php
$sql = "SELECT * FROM user WHERE active = 1";
$db = db_connect();
$result = mysqli_query($db,$sql);
//echo mysqli_error($db);
?>

<h1>USERS</h1>
<hr>
<div class="row">
    <div class="cols-lg-6">
    Username
    </div>
    <div class="cols-lg-6">
    Password
    </div>
</div>
<?php while ($row = mysqli_fetch_assoc($result)):?>
<div class="row">
    <div class="cols-lg-6">
    <?php echo $row['username']; ?>
    </div>
    <div class="cols-lg-6">
    <?php echo $row['password']; ?>
    </div>
</div>
<?php endwhile;