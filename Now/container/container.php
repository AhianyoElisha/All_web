<style media="screen">
.done{
  text-decoration:line-through;
}

  .red{color: white;background-color: red;border-radius: 50%;height: 30px;width: 30px; padding-top: 3px; position: relative;right: 3px; top: 1px}
.green{color: white;background-color: green;border-radius: 50%;height: 30px;width: 30px; padding-top: 3px;position: relative;right: 3px;top: 1px}
.blue{color: white;background-color: blue;border-radius: 50%; height: 30px;width: 30px; padding-top: 3px; position: relative;right: 3px;top: 1px}

.linebtn span {
  right: 1px;
  bottom: 7px;
  position: relative;
  font-size: 30px;
  display: inline-block;
}
.wrapper{
  text-align: right;
  position: relative;
  width: 120px;
  float: right;
}
.moveer {
  transition: 0.5s;
  margin: 4px 15px;
  border: 0.1px solid #adadad;
  height: 35px;
  width: 35px;
  border-radius: 50%;
  text-align: center;

}
.btn-group{
  background: linear-gradient(194.99deg, rgba(7, 145, 245, 0.6) 21.99%, rgba(52, 17, 79, 0.6) 85.19%);
  opacity: 0.5;
  left: -80px;
  top: -9px;
  transition: 1s;
  z-index: 30;
  border-radius: 30px;
  width: 200px;
  height: 45px;
  position: absolute;
  border: 0.2px solid #adadad;
}

</style>
<script>
$(document).ready(function(){
  $(".toggle").click(function(){
    if () {
      $(".btn-group").toggle();
    }
  });
});

</script>
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
    <a href="../Now/details.php">
      <button   style="background-color: #47a44b;outline: none;height: 50px;width: 150px;border-radius: 40px;border: none;color: white;">
        <span class="pl-2" style="font-size:20px; position:static; vertical-align:top;">TodoStore</span>  <i style="font-size: 25px; line-height: 36px; position: static; left: 25%;top: 11%;" class="material-icons">keyboard_arrow_right</i>
      </button>
    </a>
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
                        <td data-id="<?php echo $row['id'];?>"> <p style="font-size:17px"><i class="fa fa-circle-thin fa-2x"></i></p> </td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" colspan="4" style="font-size:23px;"><?php echo $row['todo']; ?></td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="td-actions text-right">
                        <div class="wrapper">
                          <div class="btn-group">
                            <button class=" btn-link linebtn readbtn moveer">
                              <span>
                                <a href="#readModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                  <i class="material-icons blue slow" data-id="<?php echo $row['id'];?>">receipt</i>
                                </a>
                              </span>
                            </button>
                            <button class=" btn-link editbtn linebtn moveer" data-toggle="modal">
                                  <span>
                                    <a href="#exampleModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                      <i class="material-icons green slow" data-id="<?php echo $row['id'];?>">edit</i>
                                    </a>
                                </span>

                            </button>
                            <button  class=" btn-link linebtn moveer">
                                <span>
                                  <a href="#myModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                    <i class="material-icons red deletebtn slow" data-id="<?php echo $row['id'];?>">close</i>
                                </a>
                              </span>
                            </button>
                          </div>
                        </div>
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
