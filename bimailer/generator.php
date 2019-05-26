<?php require "dbuser.php"; $joy=mysqli_query($s, "SELECT * FROM bus_form"); while($form = mysqli_fetch_assoc($joy)){$m=$form['id']; unset($form['id']); $arrForm[$m]=$form;} $trueForm=mysqli_query($s, "SELECT * FROM bus_baser WHERE adform='true'"); if(mysqli_num_rows($trueForm)<1)exit('Не указана категория, в которую следует добавлять подписавшихся посетителей.');?><form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/bimailer/add.php" method="post"accept-charset="utf-8">
<table border="0" cellpadding="1" cellspacing="0">

<tr<?=$arrForm[1]['visible']=='true'?NULL:' style="display:none"'; ?>><!-- Отображение списка категорий-->
	<td><?=$arrForm[1]['names'] ?> </td>											<!-- Название списка категорий-->
    <td><select name="cat" style="width:<?=$arrForm[1]['widt']; ?>px;">
	<?php
	while($rowI = mysqli_fetch_assoc($trueForm)){
		echo "<option value='{$rowI['psev']}'>".htmlspecialchars($rowI['spis'], ENT_QUOTES)."</option>";}
	?>
    </select></td>
</tr>

<tr>
	<td><?=$arrForm[2]['names'] ?> </td>											<!-- Поле email-->
    <td><input type="text" name="pole[]" style="width:<?=$arrForm[2]['widt']; ?>px;"></td>
</tr>
																													<!-- Дополнительные поля-->
<?php 
if(mysqli_data_seek($joy, 3)){while($pole=mysqli_fetch_assoc($joy)){ ?>
<tr<?=$pole['visible']=='true'?NULL:' style="display:none"'; ?>>
	<td><?=$pole['names'] ?> </td>											
    <td><input type="text" name="pole[]" style="width:<?=$pole['widt']; ?>px;"></td>
</tr><?php	}} ?>

<tr>
	<td colspan="2" align="center">														<!-- Поле кнопки-->
    <input type="submit" name="send" style="width:<?=$arrForm[3]['widt']; ?>px;" value="<?=$arrForm[3]['names']; ?>">
    </td>
</tr>

</table>
</form>