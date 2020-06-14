
<!-- ############################################################################################################################3 -->
<!-- Button trigger modal -->
<!-- Main Page -->
<div class="container">
  <div class="card">
    <button class="proceed">
      <a href="#addModal" data-toggle="modal">
        <span class="addicon">
          &#43;
        </span>
      </a>
    </button>
    <div class="datepop" id="date"></div>
  </div>
  <div class="todo-table">
          <div class="table-responsive">
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
            <table class="table table-hover" id="employees-table">
                <tbody id="#tbody">
                  <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
                    <tr>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="text-center"> <i class="fa fa-circle-thin fa-2x"></i> </td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" colspan="4"><?php echo $row['todo']; ?></td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="td-actions text-right">
                          <button class="btn btn-link btn-just-icon btn-sm linebtn" style="width:30px; height:30px;border-radius:50%;">
                            <a href="#readModal" data-toggle="modal">
                              <span style="bottom:2px; right:6px; position: relative; font-size: 30px;">
                                <i class="material-icons blue">receipt</i>
                              </span>
                            </a>
                          </button>
                          <button class="btn btn-link btn-just-icon btn-sm editbtn linebtn" data-toggle="modal" data-target="#exampleModal" style="width:30px; height:30px;border-radius:50%;">
                                <span style="bottom:2px; right:4px; position: relative; font-size: 30px;">
                                  <a href="#editModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                    <i class="material-icons green" data-id="<?php echo $row['id'];?>">edit</i>
                                  </a>
                              </span>

                          </button>
                          <button  class=" btn btn-link btn-just-icon btn-sm linebtn" style="width:30px; height:30px;border-radius:50%;">
                              <span style="bottom:2px; right:5px; position: relative; font-size: 30px;">
                                <a href="#myModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                  <i class="material-icons red deletebtn" data-id="<?php echo $row['id'];?>">close</i>
                              </a>
                            </span>
                          </button>
                          </td>
                    </tr>
                    <?php
                      }
                    }
                    else
                    {
                      echo "Add Item ";
                    };
                     ?>
                </tbody>
            </table>
            </div>
        </div>
      </div>
