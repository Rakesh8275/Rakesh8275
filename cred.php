<!DOCTYPE html>
<html>
<head>
	<title>PHP Jquery Ajax CRUD Example</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


	<script type="text/javascript">
    	 var url = "http://localhost:8000/";
        </script>


        <script src="/js/item-ajax.js"></script>
</head>
<body>


	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>Table</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
					 Insert
				</button>
		        </div>
		    </div>
		</div>


		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Firstname</th>
				<th>Lastname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Mobile</th>
				<th width="200px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>


		<ul id="pagination" class="pagination-sm"></ul>


	        <!-- Create Item Modal -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Insert</h4>
		      </div>


		      <div class="modal-body">
		      		<form data-toggle="validator" action="api/create.php" method="POST">


		      			<div class="form-group">
							<label class="control-label" for="firstname">Firstname:</label>
							<input type="text" name="firstname" class="form-control" id="firstname" data-error="Please enter Firstname." required />
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<label class="control-label" for="lastname">Lastname:</label>
							<input type="text" name="lastname" class="form-control" id = "lastname" data-error="Please enter Lastname." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="email">Email:</label>
							<input type="text" name="email" class="form-control" id="email" data-error="Please enter email." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="address_">Address:</label>
							<input type="text" name="address_" class="form-control" id="address_" data-error="Please enter address." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="mobile">Mobile:</label>
							<input type="text" name="Mobile" class="form-control" id="mobile" data-error="Please enter Mobile No." required>
							<div class="help-block with-errors"></div>
						</div>



						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Submit</button>
						</div>
		      		</form>


		      </div>
		    </div>


		  </div>
		</div>


		<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit</h4>
		      </div>


		      <div class="modal-body">
		      		<form data-toggle="validator" action="api/update.php" method="put">
		      			<input type="hidden" name="id" class="edit-id">


		      			<div class="form-group">
							<label class="control-label" for="firstname">Firstname:</label>
							<input type="text" name="firstname" class="form-control" id="firstname" data-error="Please enter Firstname." required />
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<label class="control-label" for="lastname">Lastname:</label>
							<input type="text" name="lastname" class="form-control" id = "lastname" data-error="Please enter Lastname." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="email">Email:</label>
							<input type="text" name="email" class="form-control" id="email" data-error="Please enter email." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="address_">Address:</label>
							<input type="text" name="address_" class="form-control" id="address_" data-error="Please enter address." required>
							<div class="help-block with-errors"></div>
						</div>

                        <div class="form-group">
							<label class="control-label" for="mobile">Mobile:</label>
							<input type="text" name="Mobile" class="form-control" id="mobile" data-error="Please enter Mobile No." required>
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
						</div>


		      		</form>


		      </div>
		    </div>
		  </div>
		</div>


	</div>
</body>
</html>