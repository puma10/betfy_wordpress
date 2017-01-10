<?php include 'header.php' ?>
<?php 
//DB::debugMode();
echo '<script LANGUAGE="JavaScript">
												function confirmSubmit()
												{
												var agree=confirm("Are you sure you wish to continue?");
												if (agree)
													return true ;
												else
													return false ;
												}
												</script>';

if(!empty($_POST['delete_data'])){
	DB::delete('top_listing', "id=%i", $_POST['id_number']);
}	

$results = DB::query("SELECT * FROM top_listing ORDER BY rank ASC");
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Top List</h1>

		<div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Actual Rank #</th>
					  <th>Name</th>
                      <th>Status</th> 
					  <th></th> 					  
                  </tr>
              </thead>   
              <tbody>
			<?php 	
			$rank='';
			foreach ($results as $row) { 
			if($row['active']=='1'){ 
				if($rank == $row['rank']){ echo '<td colspan="4"><div class="alert alert-danger"><strong>Warning : </strong>Same Rank than precedent Top</div></td>'; }
				$rank = $row['rank'];
			}
			?>		
                <tr>
                    <td><b><?php echo '#'.$row['rank']; ?></b></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php if($row['active']=='1'){  echo '<span class="label label-success">Active</span>'; }else{ echo '<span class="label label-danger">Inactive</span>';} ?></td>
                    <td>
						<form method="post">
							<a href="top.php?num_top=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>&nbsp;&nbsp;
							<input type="hidden" name="id_number" value="<?php echo $row['id']; ?>">
							<input type="submit" name="delete_data" onClick="return confirmSubmit()" class="btn btn-danger btn-xs" value="Delete"/>															
						</form>
					</td>                                      
                </tr>
				
			<?php } ?>                                                 
              </tbody>
            </table>
            </div>
					<br><a href="top.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> New Top</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'footer.php' ?>