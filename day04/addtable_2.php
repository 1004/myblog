<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 16:12
 */
$tablename = $_POST['tablename'];
$dbname = $_POST['dbname'];
$count = $_POST['column_count'];
?>
<form action="addtable.php" method="post">
    <input type="hidden" name="dbname" value="<?php echo $_POST['dbname'];?>">
    <input type="hidden" name="tablename" value="<?php echo $_POST['tablename'];?>">
<?php for ($i=0;$i<$count;$i++):?>
    字段名：<input type="text" name="field[<?php echo $i;?>]">
    类型：<select name="field_type[<?php echo $i;?>]" >
        <option value="int">int</option>
        <option value="char">char</option>
        <option value="varchar(255)">varchar</option>
        <option value="text">text</option>
        <option value="float">float</option>
        <option value="decimal">decimal</option>
        <option value="datetime">datetime</option>
        <option value="timestamp">timpstamp</option>
    </select>
    DEFAULT <input type="text" name="default_value[<?php echo $i;?>]">
    NULL <input type="checkbox" name="null[<?php echo $i;?>]" value="1">
    主键 <input type="checkbox" name="primarykey[<?php echo $i;?>]" value="1">
    唯一 <input type="checkbox" name="unique[<?php echo $i;?>]" value="1">
    <br/>
<?php endfor;?>
<input type="submit" value="提交">
</form>