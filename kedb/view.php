<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable({
		"bProcessing": true,
        "sAjaxSource": "response.php",
        "aoColumns": [
                        { mData: 'problem' } ,
                        { mData: 'description' },
                        { mData: 'resol' }
                     ]
        });   
	});
});
function showcreate(){
	window.location.href="create.php";
}
</script>
</br>
<div class="container">
    <div class="row">    
        

         <div class="table-responsive">
                <table class="table table-hover table-bordered" id="myTable"  cellspacing="0" width="100%">
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
                  
                </table>
            
             </div>

</div></div>