<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="./js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script type="text/javascript">
function showcreate(){
	window.location.href="create.php";
}
</script>
<?php
require('dbconnect.php');
//$userID = $_SESSION['userID'];
$query = "SELECT * FROM `tracking`";
$result = mysql_query($query);
?>
</br>
<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">KEDB</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create" onClick="showcreate()">Create New</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th align="center"><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Problem</th>
                        <th>Description</th>
                        <th>Resolution</th>
						<th>POC</th>
						<th>Snaps</th>
                    </tr> 
                  </thead>
                  <tbody>
				  <?php
					while($row = mysql_fetch_array($result)){	
   
?>	
                          <tr>
                            <td align="center">
                              <a href="edit.php?ID=<?php echo $row['ID']?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $row['problem']?></td>
                            <td><?php echo $row['description']?></td>
                            <td><?php echo $row['resol']?></td>
							<td><?php echo $row['poc']?></td>
							<td><?php echo $row['snaps']?></td>
                          </tr>
					<?php }?>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>