<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/selectize.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/patient_field_validations.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
<link rel="stylesheet"  type="text/css" href="<?php echo base_url();?>assets/css/bootstrap_datetimepicker.css">
<link rel="stylesheet"  type="text/css" href="<?php echo base_url();?>assets/css/patient_field_validations.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-barcode.min.js"></script>
<style>
    .obstetric_history_table {  
        border-collapse: collapse; 
    }
    .obstetric_history_table tr{
        display: block; float: left;
    }
    .obstetric_history_table td{
        display: block; 
        border: 1px solid black;
        height: 55px;
    }
</style>
<style>
    .obstetric_history_table {  
        border-collapse: collapse; 
    }
    .obstetric_history_table tr{
        display: block; float: left;
    }
    .obstetric_history_table td{
        display: block; 
        border: 1px solid black;
        height: 55px;
    }
</style>


<style>
	.row{
		margin-bottom: 1.5em;
	}
	.alt{
		margin-bottom:0;
		padding:0.5em;
	}
	.alt:nth-child(odd){
		background:#eee;
	}
		.selectize-control.repositories .selectize-dropdown > div {
			border-bottom: 1px solid rgba(0,0,0,0.05);
		}
		.selectize-control.repositories .selectize-dropdown .by {
			font-size: 11px;
			opacity: 0.8;
		}
		.selectize-control.repositories .selectize-dropdown .by::before {
			content: 'by ';
		}
		.selectize-control.repositories .selectize-dropdown .name {
			font-weight: bold;
			margin-right: 5px;
		}
		.selectize-control.repositories .selectize-dropdown .title {
			display: block;
		}
		.selectize-control.repositories .selectize-dropdown .description {
			font-size: 12px;
			display: block;
			color: #a0a0a0;
			white-space: nowrap;
			width: 100%;
			text-overflow: ellipsis;
			overflow: hidden;
		}
		.selectize-control.repositories .selectize-dropdown .meta {
			list-style: none;
			margin: 0;
			padding: 0;
			font-size: 10px;
		}
		.selectize-control.repositories .selectize-dropdown .meta li {
			margin: 0;
			padding: 0;
			display: inline;
			margin-right: 10px;
		}
		.selectize-control.repositories .selectize-dropdown .meta li span {
			font-weight: bold;
		}
		.selectize-control.repositories::before {
			-moz-transition: opacity 0.2s;
			-webkit-transition: opacity 0.2s;
			transition: opacity 0.2s;
			content: ' ';
			z-index: 2;
			position: absolute;
			display: block;
			top: 12px;
			right: 34px;
			width: 16px;
			height: 16px;
			background: url(<?php echo base_url();?>assets/images/spinner.gif);
			background-size: 16px 16px;
			opacity: 0;
		}
		.selectize-control.repositories.loading::before {
			opacity: 0.4;
		}
</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.selectize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.timeentry.min.js"></script>

<div class="row">
		<div class="col-md-12 alt" id="create_followup">

					<table class="table table-striped table-bordered" id="followup_table">
					<thead>
						<tr>
						<th  class="text-center">Follow Up Category</th>
						<th  class="text-center">Follow Up Status</th>
						<th  class="text-center">Status Reason</th>
						<th  class="text-center">Follow Up Speciality</th>
						<th  class="text-center">Assigned to </th>
						<th  class="text-center">Follow Up Target Date</th>

					<!--	<th rowspan="3" class="text-center">Issued Quantity</th> -->
						</tr>


					</thead>
					<tbody>
						<tr>
						<td>
							<select name="followup_category[]" class="form-control">
								<option value="">--Select--</option>
								<?php foreach($follow_ups as $follow_up): ?>
									<option value="<?php echo $follow_up->follow_up_category_id;?>" id="follow_up_category"><?php echo $follow_up->follow_up_category;?></option>
								<?php endforeach; ?>

								</select>
							</td>
							<td>
								<select name="followup_status[]" class="form-control">
								<option value="" selected>--SELECT--</option>
								<?php foreach($follow_up_status as $follow_up_stat): ?>
								<option value="<?php echo $follow_up_stat->follow_up_status_id;?>" id="follow_up_status"><?php echo $follow_up_stat->follow_up_status;?></option>
								<?php endforeach; ?>				
							</select>	
							</td>

							<td>
								<select name="followup_statusreason[]" class="form-control">
									<option value="" selected>--SELECT--</option>
									<?php foreach($follow_up_status_reason as $follow_up): ?>
									<option value="<?php echo $follow_up->follow_up_status_reason_id;?>"><?php echo $follow_up->follow_up_status_reason;?></option>
								<?php endforeach; ?>
								</select>	
							</td>
							<td>
								<select name="followup_clinicalspeciality[]" class="form-control">
							<option value="" selected>--SELECT--</option>
							<?php foreach($clinical_speciality as $follow_up): ?>
								<option value="<?php echo $follow_up->clinical_speciality_id;?>"><?php echo $follow_up->clinical_speciality;?></option>
							<?php endforeach; ?>
							</select>
							</td>
							<td>
									<select name="followup_staffid[]" class="form-control">
									<option value="" selected>--SELECT--</option>
									<?php foreach($get_staff_selected_hosp as $follow_up): ?>
										<option value="<?php echo $follow_up['staff_id'];?>"><?php echo $follow_up['first_name'];?></option>
									<?php endforeach; ?>
									</select>
							</td>
							<td>
									<input type="date" name="followup_date[]" class="form-control" />

							</td>
						</tr>
						<tr>

							<td style="text-align:center">
								<b>Notes</b>
							</td>
							<td colspan="6" rowspan="2" >
								<textarea class="form-control" cols="40"  name="followup_notes[]"></textarea>
							</td>
							<td>
								<button type="button" class="btn btn-primary btn-sm" id="follow_up_add" >Add</button>
							</td>
						</tr>


					</tbody>
				</table>
				</div>
</div>








<link rel="stylesheet" href="<?php echo base_url();?>assets/css/metallic.css" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme.default.css" >
<script type="text/javascript" src="<?php echo base_url();?>assets/js/zebra_datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.widgets.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.colsel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.print.js"></script>
<script type="text/javascript">
$(function(){
		var options = {
			widthFixed : true,
			showProcessing: true,
			headerTemplate : '{content} {icon}', // Add icon for jui theme; new in v2.7!

			widgets: [ 'default', 'zebra', 'print', 'stickyHeaders','filter'],

			widgetOptions: {

		  print_title      : 'table',          // this option > caption > table id > "table"
		  print_dataAttrib : 'data-name', // header attrib containing modified header name
		  print_rows       : 'f',         // (a)ll, (v)isible or (f)iltered
		  print_columns    : 's',         // (a)ll, (v)isible or (s)elected (columnSelector widget)
		  print_extraCSS   : '.table{border:1px solid #ccc;} tr,td{background:white}',          // add any extra css definitions for the popup window here
		  print_styleSheet : '', // add the url of your print stylesheet
		  // callback executed when processing completes - default setting is null
		  print_callback   : function(config, $table, printStyle){
			// do something to the $table (jQuery object of table wrapped in a div)
			// or add to the printStyle string, then...
			// print the table using the following code
			$.tablesorter.printTable.printOutput( config, $table.html(), printStyle );
			},
			// extra class name added to the sticky header row
			  stickyHeaders : '',
			  // number or jquery selector targeting the position:fixed element
			  stickyHeaders_offset : 0,
			  // added to table ID, if it exists
			  stickyHeaders_cloneId : '-sticky',
			  // trigger "resize" event on headers
			  stickyHeaders_addResizeEvent : true,
			  // if false and a caption exist, it won't be included in the sticky header
			  stickyHeaders_includeCaption : false,
			  // The zIndex of the stickyHeaders, allows the user to adjust this to their needs
			  stickyHeaders_zIndex : 2,
			  // jQuery selector or object to attach sticky header to
			  stickyHeaders_attachTo : null,
			  // scroll table top into view after filtering
			  stickyHeaders_filteredToTop: true,

			  // adding zebra striping, using content and default styles - the ui css removes the background from default
			  // even and odd class names included for this demo to allow switching themes
			  zebra   : ["ui-widget-content even", "ui-state-default odd"],
			  // use uitheme widget to apply defauly jquery ui (jui) class names
			  // see the uitheme demo for more details on how to change the class names
			  uitheme : 'jui'
			}
		  };
			$("#table-sort").tablesorter(options);
		  $('.print').click(function(){
			$('#table-sort').trigger('printTable');
		  });
});
</script>
<script>
$(function(){
	$(".add_all").click(function(){
		if($(this).is(":checked"))
			$(".add").prop('checked',true);
		else
			$(".add").prop('checked',false);
	});
	$(".edit_all").click(function(){
		if($(this).is(":checked"))
			$(".edit").prop('checked',true);
		else
			$(".edit").prop('checked',false);
	});
	$(".view_all").click(function(){
		if($(this).is(":checked"))
			$(".view").prop('checked',true);
		else
			$(".view").prop('checked',false);
	});
});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<?php if(isset($mode)&& $mode=="select" || $this->input->post('update')){?>
<center> <h3> Edit User</h3></center><br>
<?php echo validation_errors(); echo form_open('user_panel/edit_user',array('role'=>'form','id'=>'user')); ?>

<div class="row col-md-offset-2">
	<?php if(isset($msg)){ ?>
		<div class="alert alert-info"><?php echo $msg;?></div>
	<?php
	}
	?>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Create User</h4>
		</div>
		<div class="panel-body">
				<p class="lead">Login details</p>	
					<div class="form-group col-md-12">
						<div class="col-md-3">
							<label for="username" class="control-label">Username</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Username" id="username" name="username" 
							<?php if(isset($user)){
			echo "value='".$user[0]->username."' ";
			}
		?>
	     />
		<?php if(isset($user)) { ?>
		<input type="hidden" value="<?php echo $user[0]->user_id;?>" name="user" />
		
		<?php } ?>
						</div>
					</div>	
					<div class="form-group col-md-12">
					<div class="col-md-3">
					<label for="password" class="control-label">Password</label>
					</div>
					<div class="col-md-6">
					<input type="password" class="form-control" placeholder="Password" id="old_password" value="<?php echo $user[0]->password;?>" readonly />
					<input type="password" class="form-control sr-only new_password" placeholder="Enter New Password" id="new_password" name="password" />
					<button class="btn btn-default btn-md" type="button" onclick="$('.new_password').removeClass('sr-only').attr('required',true);$('#old_password').addClass('sr-only');$(this).addClass('sr-only');">Change Password</button>
					<label class="new_password sr-only"><input type="checkbox" onclick="if($(this).is(':checked')) $('#new_password').attr('type','text'); else $('#new_password').attr('type','password');" />Show Password</label>
					</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-3">
						<label class="control-label">Staff</label>
						</div>
						<div class="col-md-6">						
						<select name="staff" class="form-control" required >
						<option value="">--Select--</option>
						<?php 
						foreach($staff as $s){
						echo "<option value='".$s->staff_id."'"; 
						if($user[0]->staff_id == $s->staff_id) echo " selected ";
						echo ">".$s->staff_name."</option>";	
						}
						?>
					
						</select>
						</div>
					</div>
					<div class="col-md-12">
						<table class="table table-bordered table-striped">
							<thead>
								<th>Function</th>
								<th>Add</th>
								<th>Edit</th>
								<th>View</th>
							</thead>
							<tbody>
							<tr>
								<td>All</td>
								<td><input type="checkbox" class="add_all" value="add_all" /></td>
								<td><input type="checkbox" class="edit_all" value="add_all" /></td>
								<td><input type="checkbox" class="view_all" value="add_all" /></td>
							</tr>
							<?php foreach($user_functions as $f){
								
									$add="";
									$edit="";
									$view="";
								foreach($user as $u){
									if($u->function_id == $f->user_function_id){
										if($u->add==1) $add="checked"; 
										if($u->edit==1) $edit="checked";
										if($u->view==1) $view="checked";
									}
								}
							?>
								<tr>
									<td>
									
				<div data-toggle="popover" data-placement="bottom" data-content="<?php echo $f->description;?>">
								<?php echo $f->user_function;?>									  
				</div>
									<input type="checkbox" value="<?php echo $f->user_function_id;?>" name="user_function[]" class="sr-only" checked /></td>
									<td><input type="checkbox" class="add" name="<?php echo $f->user_function_id;?>[]" value="add" <?php echo $add;?> /></td>
									<td><input type="checkbox" class="edit" name="<?php echo $f->user_function_id;?>[]" value="edit" <?php echo $edit;?>  /></td>
									<td><input type="checkbox" class="view" name="<?php echo $f->user_function_id;?>[]" value="view" <?php echo $view;?>  /></td>
								</tr>
							<?php } ?>
							</tbody>
							
						</table>
					</div>
		</div>
		
	</div>	
   	<div class="col-md-3 col-md-offset-4">
	<input class="btn btn-lg btn-primary btn-block" type="submit" value="Update" name="update">
	</div>
	</form>
</div>
	<?php } 
	else{ ?>
	<div class="col-md-10 col-md-offset-2">
		<h3><?php if(isset($msg)) echo $msg;?></h3>	


	<h3 class="col-md-12">List of Users</h3>
	<div class="col-md-12 ">
	</div>	
		<table class="table table-bordered table-striped" id="table-sort">
	<thead>
		<th style="text-align:center">S.no</th>
	<!--	<th style="text-align:center">Hospital</th> -->
		<th style="text-align:center">Department</th>
		<th style="text-align:center">Designation</th>
		<th style="text-align:center">Name</th>
		<th style="text-align:center">Gender</th>
		<th style="text-align:center">Specialisation</th>
		<th style="text-align:center">Email</th>
		<th style="text-align:center">User Name</th>
		<th style="text-align:center">Phone</th>
		
	</thead>
	<tbody>
	<?php 
	$i=1;
	foreach($user as $a){ ?>
	<tr onclick="$('#select_user_edit_form_<?php echo $a->user_id;?>').submit();" >
		<td>	
			<?php echo form_open('user_panel/edit_user',array('id'=>'select_user_edit_form_'.$a->user_id,'role'=>'form')); ?>
			<?php echo $i++; ?>
		</td>
	<!--	<td><?php echo $a->hospital;?></td> -->
		<td><?php echo $a->department;?></td>
		<td><?php echo $a->designation;?> </td>
		<td><?php echo  $a->first_name." ".$a->last_name;  ?></td>
		<td><?php echo $a->gender; ?>
		<td><?php echo $a->specialisation; ?>
		<td><?php echo $a->email; ?>
		<td><?php echo $a->username; ?>
		<input type="hidden" value="<?php echo $a->user_id; ?>" name="user_id" />
		<input type="hidden" value="select" name="select" />
		</td>
		<td>
			<?php echo $a->phone;?>
			</form>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	<?php } ?>
	</div></div>
