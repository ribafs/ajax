<html>
	<head>
		<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>
	</head>
	<body>
		<div class="container box">
			<h1 align="center">PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Image</th>
							<th width="35%">First Name</th>
							<th width="35%">Last Name</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
						</tr>
					</thead>
				</table>				
			</div>
		</div>

    <div id="userModal" class="modal fade">
	    <div class="modal-dialog">
		    <form method="post" id="user_form" enctype="multipart/form-data">
			    <div class="modal-content">
				    <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Add User</h4>
				    </div>
				    <div class="modal-body">
					    <label>Enter First Name</label>
					    <input type="text" name="first_name" id="first_name" class="form-control" />
					    <br />
					    <label>Enter Last Name</label>
					    <input type="text" name="last_name" id="last_name" class="form-control" />
					    <br />
					    <label>Select User Image</label>
					    <input type="file" name="user_image" id="user_image" />
					    <span id="user_uploaded_image"></span>
				    </div>
				    <div class="modal-footer">
					    <input type="hidden" name="user_id" id="user_id" />
					    <input type="hidden" name="operation" id="operation" />
					    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
			    </div>
		    </form>
	    </div>
    </div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="script.js" ></script>
	</body>
</html>


