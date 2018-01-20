<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 16:11
 */
?>
<form action="addtable_2.php" method="post">
    表名：<input type="text" name="tablename"/><br/>
    字段数：<input type="text" name="column_count"/><br/>
    <input type="hidden" name="dbname" value="<?php echo $_GET['dbname'] ?>"/><br/>
    <input type="submit"/>
</form>
