<!-- ################################################################################################################################## -->
<!-- Modal -->
<div class="modal fade" id="readModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-read">
    <div class="modal-content">
      <div class="modal-header">
				<div class="move-icon">
					<p><i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i></p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

				 <?php
 				$servername = "localhost";
 				$username = "root";
 				$password = "";
 				$dbname = "newdata";
 				$con = mysqli_connect($servername,$username,$password);
 				$db = mysqli_select_db($con,$dbname);
 				$query = "SELECT * FROM items";
 				$query_run = mysqli_query($con,$query);
 				?>
				 <table class="table table-borderless table-link">
					 <?php
					 if ($query_run) {
					 foreach ($query_run as $row) {
					 ?>
					 <tbody>
             <tr>
               <td scope="row" data-visible= "false"></th>
                 <td name="update_id" scope="col" data-visible="false" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                 <td name="delete_id" scope="col" data-visible="false" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
             </tr>
					    <tr>
					      <td scope="row">Todo  :</th>
                <td name="todo" scope="col" data-id="<?php echo $row['id']; ?>"><?php echo $row['todo']; ?></td>
					    </tr>
					    <tr>
								<td scope="row">Due date  :</th>
								<td name="due_date" scope="col" data-id="<?php echo $row['id']; ?>"><?php echo $row['due_date']; ?></td>

					    </tr>
							<td scope="row">Date Created  :</th>
							<td name="created" scope="col" data-id="<?php echo $row['id']; ?>"><?php echo $row['created']; ?></td>
							<tr>
								<td scope="row">Date Updated  :</th>
								<td name="updated" scope="col" data-id="<?php echo $row['id']; ?>"><?php echo $row['updated']; ?></td>
							</tr>
							<tr>
								<td scope="row">Completed  :</th>
								<td name="completed" scope="col" data-id="<?php echo $row['id']; ?>"><?php echo $row['done']; ?></td>
							</tr>
							<tr>
							</tr>
					  </tbody>
						<?php
							}
						}
						else
						{
							echo "Add Item ";
						};
						 ?>
					</table>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal editbtn">Edit <i class="material-icons green" data-id="<?php echo $row['id'];?>">edit</i></button>
      </div>
    </div>
  </div>
</div>
