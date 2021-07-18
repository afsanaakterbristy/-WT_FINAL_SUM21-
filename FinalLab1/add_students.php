<?php
 require_once 'header.php';
 require_once 'controllers/StudentCtrl.php';
 require_once 'controllers/DeptCtrl.php';
 $departments=getAllDepartments();
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
		<h3 align="middle">Add Students</h3>        
        <form action="" method="post">
		<table align="center">
            <tr>
              <td>Name</td>
              <td>: <input type="text" name="name" value="<?php echo $name;?>" placeholder="name"></td>
              <td><span><?php echo $err_name; ?></span></td>
			</tr>
			<tr>
              <td>DOB</td>
              <td>: <input type="text" name="dob" value="<?php echo $dob;?>" placeholder="date of birth"></td>
              <td><span><?php echo $err_dob; ?></span></td>
			</tr>
			<tr>
              <td>Credit</td>
              <td>: <input type="text" name="credit" value="<?php echo $credit;?>" placeholder="credit"></td>
              <td><span><?php echo $err_credit; ?></span></td>
			</tr>
			<tr>
              <td>CGPA</td>
              <td>: <input type="text" name="cgpa" value="<?php echo $cgpa;?>" placeholder="cgpa"></td>
              <td><span><?php echo $err_cgpa; ?></span></td>
			</tr>
			<tr>
			  <td>Deparment:</td>
			  <td><select name="dept_id" value="<?php echo $dept_id; ?>">
			  <option selected disabled>Choose Deparment</option>
			  <?php
					  foreach($departments as $d){
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
			  ?>
				</select>
				</td>
				<td><span> <?php echo $err_dept_id;?> </span></td>
            </tr>
			
		    <tr>	
             <td><input type="Submit" name="add" value="Add"></td>
		    </tr>
		</table>
        </form>
        </fieldset>
    </body>
</html>

<?php require_once 'footer.php'; ?>