    <!-- ######################################################################################################################### -->

    <!-- editModal HTML -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-edititem">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="icon-box">
    					<i class="material-icons">&#xE876;</i>
    				</div>
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body text-center">
            <form action="operation.php" control="" class="form-group" method="post">
    							<div class="row">
                    <input type="hidden" name="update_id">
    								<input type="text" name="todo" id="todo" class="form__input" placeholder="Edit to do">
    							</div>
                  <div class="row">
                    <label>Update due date</label>
                        	<input type="datetime-local" class="datetime-local" name="due_date" style="margin:auto" required/>
                  </div>
                  <div class="row">
    				            <button class="btn btn-success btn-block btn-lg" type="submit" name="update">Update Item</button>
    							</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- ################################################################################################################################## -->
