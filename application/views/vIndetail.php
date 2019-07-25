<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  
  <?php $this->load->view('header.php');?>
  

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="cust_title">
		 <?php echo $main;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active" id="cust_title1"><?php echo $main;?></li>
      </ol>
    </section>
	
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title stud-reg-form-heading">Student Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="studentRegistrationForm" name="studentRegistrationForm" method="POST" action="<?php echo base_url();?>AcademicAdmin/StudentRegistration/insertStudentData" enctype="multipart/form-data">
              <div class="box-body">
			  <div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">First Name*</label>
					  <input type="text" class="form-control" id="first_name" name="student_fname" placeholder="first name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Middle Name</label>
					  <input type="text" class="form-control" id="middle_name" name="student_mname" placeholder="middle name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Last Name*</label>
					  <input type="text" class="form-control" id="last_name" name="student_lname" placeholder="last name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Gender*</label>
					  <select class="form-control" id="" name="gender" placeholder="">
						<option  value="">Select Gender</option>
						<option value="male">male</option>
						<option value="female">female</option>
					  </select>
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
						<label>Date Of Birth*</label>
						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						  <input type="text" class="form-control" id="scst_dob" name="scst_dob" autocomplete="off" placeholder="yyyy-mm-dd">
						</div>
						<!-- /.input group -->
					  </div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Place Of Birth</label>
					  <input type="text" class="form-control" id="parent_name" name="birth_place" placeholder="birth place">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Religion*</label>
					  <select class="form-control" id="religion" onchange="showCaste(this.value);" name="stud_religion" placeholder="">
						<option  value="">Select Religion</option>
						<?php 
							if('false' == 'false')
							{
								if(2 > 0)
								{
									for($i=0;$i<5;$i++)
									{
						?>
									<option  value="<?php echo "admin"; ?>"><?php echo "admin"; ?></option>
						<?php
									}
								}
							}
						?>
					  </select>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Caste*</label>
					  <select class="form-control" id="caste" name="stud_caste" placeholder="">
						<option  value="" >Select Caste</option>
						<?php 
							if($caste['response']['error'] == 'false')
							{
								if(count($caste['response']['data']['caste']) > 0)
								{
									foreach($caste['response']['data']['caste'] as $casteData)
									{
						?>
									<option  value="<?php echo $casteData['id']; ?>"><?php echo $casteData['scct_cast_name']; ?></option>
						<?php
									}
								}
							}
						?>
					  </select>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Blood Group*</label>
					  <select class="form-control" id="stud_blood_group" name="stud_blood_group" placeholder="" required>
						<option value="">Select Blood Group</option>
						<!--<option value="A">A</option>-->
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<!--<option value="B">B</option>-->
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					  </select>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="student_height">Height(cm)</label>
					  <input type="text" class="form-control" id="student_height" name="student_height" placeholder="00">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="student_weight">Weight(kg)</label>
					  <input type="text" class="form-control" id="student_weight" name="student_weight" placeholder="00">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Aadhar Card Number*</label>
					 <input type="text" class="form-control" name="aadhar_number" id="aadhar_number" placeholder="312383639879">
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Student Identity*</label>
					 <input type="text" class="form-control" name="scst_identity" id="scst_identity" placeholder="Enter identity" required>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Email</label>
					  <input type="email" class="form-control" id="scst_email" name="scst_email" placeholder="enter email">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Contact No. 1</label>
						  <input type="text" class="form-control" id="scst_contact1" name="scst_contact1" maxlength="10" placeholder="enter mobile no.">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Contact No. 2</label>
						  <input type="text" class="form-control" id="scst_contact2" name="scst_contact2" maxlength="10" placeholder="enter mobile no.">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Area Of Interest</label>
						  <input type="text" class="form-control" name="scst_area_interest" id="scst_area_interest" placeholder="enter area of interest">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Physically Disabled*</label>
						  <select class="form-control" id="scst_phy_disable" name="scst_phy_disable">
							<option value="">Select Yes/No</option>
							<option value="no">No</option>
							<option value="yes">Yes</option>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
							<div class="form-group">
						  <label for="exampleInputtext1">Mother Tounge*</label>
						  <input type="text" class="form-control" id="scst_mother_tounge" name="scst_mother_tounge" placeholder="enter language">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Permanent House No./Name*</label>
					  <input type="text" class="form-control" id="scst_pblock" name="scst_pblock" placeholder="enter house no-name">
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Street Name*</label>
						  <input type="text" class="form-control" id="scst_pstreet" name="scst_pstreet" placeholder="enter Street name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Country*</label>
						  <select class="form-control" id="scst_pcountry_id" onchange="showState(this.value,'permanentState');" name="scst_pcountry_id">
							<option value="" >Select Country</option>
							<?php
								if($masterData['response']['error'] == 'false')
								{
									if(count($masterData['response']['data']['country']) > 0)
									{
										foreach($masterData['response']['data']['country'] as $country)
										{
							?>
										<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
							<?php
										}
									}
								}
							?>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent State*</label>
						  <select class="form-control state" id="scst_pstate_id" name="scst_pstate_id">
							<option value="" >Select State</option>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Zipcode*</label>
						  <input type="text" class="form-control" id="scst_pzipcode" name="scst_pzipcode" placeholder="enter zipcode">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 stud-regs-same-add">
						<div class="form-group">
						  <input type="checkbox" id="same_as_current" name="same_as_current" onchange="CopyStudentRegistration(this);">
						  <span for="exampleInputtext1">Current address is same as permanent address</span>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current House No./Name*</label>
						  <input type="text" class="form-control" id="scst_cblock" name="scst_cblock" placeholder="enter house no-name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current Street Name*</label>
						  <input type="text" class="form-control" id="scst_cstreet" name="scst_cstreet" placeholder="enter Street name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current Country*</label>
						  <select class="form-control " id="scst_ccountry_id" onchange="showState(this.value,'currentState');" name="scst_ccountry_id">
							<option value="" >Select Country</option>
							<?php
								if($masterData['response']['error'] == 'false')
								{
									if(count($masterData['response']['data']['country']) > 0)
									{
										foreach($masterData['response']['data']['country'] as $country)
										{
							?>
										<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
							<?php
										}
									}
								}
							?>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current State*</label>
							<select class="form-control cstate" id="scst_cstate_id" name="scst_cstate_id">
							<option value="" >Select State</option>
						  </select>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
							<div class="form-group">
							  <label for="exampleInputtext1">Current Zipcode*</label>
							  <input type="text" class="form-control" id="scst_czipcode" name="scst_czipcode" placeholder="enter zipcode">
							</div>
						</div>
					</div>
					
				<div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">Parent's Contact No. (For Login)</h3>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Contact No.*</label>
					  <input type="text" class="form-control" name="scpt_contact1" id="scpt_contact1" maxlength="10" onkeypress="getAutoFillParentContact(event)" onkeyup="getAutoFillParentContact(event);checkcontactnumberexistforstaff();"  placeholder="Enter mobile number">
					   <span id="contactnumberexist" style="color:red;"></span>
					</div>
				</div>
				</div>
				<div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">Father's Information</h3>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">First Name*</label>
					  <input type="text" class="form-control" name="scpt_ftr_fname" id="scpt_ftr_fname" placeholder="father first name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Middle Name</label>
					  <input type="text" class="form-control" name="scpt_ftr_mname" id="scpt_ftr_mname" placeholder="father middle name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Last Name*</label>
					  <input type="text" class="form-control" name="scpt_ftr_lname" id="scpt_ftr_lname" placeholder="father last name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Qualification*</label>
						  <select class="form-control" id="scpt_ftr_quali" name="scpt_ftr_quali">
							<option value="" >Select qualification</option>
							<?php
								if($qualification['response']['error'] == 'false')
								{
									if(count($qualification['response']['data']['qualification']) > 0)
									{
										foreach($qualification['response']['data']['qualification'] as $qualificationData)
										{
							?>
										<option value="<?php echo $qualificationData['id'] ; ?>" ><?php echo $qualificationData['scqa_qualification'] ; ?></option>
							<?php
										}
									}
								}
							?>
						  </select>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Occupation Type*</label>
						  <select class="form-control" id="scpt_ftr_occupation_type" name="scpt_ftr_occupation_type">
							<option value="" >Select occupation type</option>
							<option value="private">Private</option>
							<option value="government">Government</option>
							<option value="other">Other</option>
							<option value="none">None</option>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Occupation*</label>
					  <input type="text" class="form-control" name="scpt_ftr_occu" id="scpt_ftr_occu" placeholder="Enter occupation">
					</div>
					</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Employer's Name</label>
					  <input type="text" class="form-control" name="scpt_ftr_employername" id="scpt_ftr_employername" placeholder="employer name">
					</div>
				</div>
				
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Annual Income*</label>
					  <input type="text" class="form-control" name="scpt_ftr_income" id="scpt_ftr_income" placeholder="000">
					</div>
				</div>
			
			  </div>
			  <div class="row">
			  	<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Aadhar Card Number*</label>
					  <input type="text" class="form-control" name="scpt_ftr_uid" id="scpt_ftr_uid" placeholder="123356789">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Email*</label>
					  <input type="email" class="form-control" name="scpt_femail" id="scpt_femail" placeholder="Enter email">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
					<div class="form-group">
					  <label for="exampleInputtext1">Office Address*</label>
					  <input type="text" class="form-control" name="scpt_ftr_employer_add" id="scpt_ftr_employer_add" placeholder="Enter office address">
					</div>
				</div>
			  </div>
			  <div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">Mother's Information</h3>
				</div>
				<div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">First Name*</label>
					  <input type="text" class="form-control" name="scpt_mtr_fname" id="scpt_mtr_fname" placeholder="Mother first name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Middle Name</label>
					  <input type="text" class="form-control" name="scpt_mtr_mname" id="scpt_mtr_mname" placeholder="Mother middle name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Last Name*</label>
					  <input type="text" class="form-control" name="scpt_mtr_lname" id="scpt_mtr_lname" placeholder="Mother last name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Qualification*</label>
						  <select class="form-control" id="scpt_mtr_quali" name="scpt_mtr_quali">
							<option value="" >Select qualification</option>
							<?php
								if($qualification['response']['error'] == 'false')
								{
									if(count($qualification['response']['data']['qualification']) > 0)
									{
										foreach($qualification['response']['data']['qualification'] as $qualificationData)
										{
							?>
										<option value="<?php echo $qualificationData['id'] ; ?>" ><?php echo $qualificationData['scqa_qualification'] ; ?></option>
							<?php
										}
									}
								}
							?>
						  </select>
						</div>
					</div>
			  </div>
			  <div class="row">
			  <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Occupation Type*</label>
						  <select class="form-control" id="scpt_mtr_occupation_type" name="scpt_mtr_occupation_type">
							<option value="" >Select occupation type</option>
							<option value="private">Private</option>
							<option value="government">Government</option>
							<option value="other">Other</option>
							<option value="none">None</option>
						  </select>
						</div>
					</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Occupation*</label>
					  <input type="text" class="form-control" name="scpt_mtr_occu" id="scpt_mtr_occu" placeholder="Occupation">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Employer's Name</label>
					  <input type="text" class="form-control" name="scpt_mtr_employername" id="scpt_mtr_employername" placeholder="employer name">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Annual Income*</label>
					  <input type="text" class="form-control" name="scpt_mtr_income" id="scpt_mtr_income" placeholder="000">
					</div>
				</div>
				
			  </div>
			  <div class="row">
			  <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Aadhar Card Number*</label>
					  <input type="text" class="form-control" name="scpt_mtr_uid" id="scpt_mtr_uid" placeholder="123356789">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Email*</label>
					  <input type="email" class="form-control" name="scpt_memail" id="scpt_memail" placeholder="enter email">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
					<div class="form-group">
					  <label for="exampleInputtext1">Office Address*</label>
					  <input type="text" class="form-control" name="scpt_mtr_employer_add" id="scpt_mtr_employer_add" placeholder="enter office address">
					</div>
				</div>
			  </div>

			  <div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">Parent's Contact Information</h3>
				</div>
				
				<div class="row">
				  <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Contact No.</label>
						  <input type="text" class="form-control" name="scpt_contact2" id="scpt_contact2" maxlength="10" placeholder="000">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent House No./Name*</label>
						  <input type="text" class="form-control" id="scpt_pblock" name="scpt_pblock" placeholder="enter house no-name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Street Name*</label>
						  <input type="text" class="form-control" id="scpt_pstreet" name="scpt_pstreet" placeholder="enter Street name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Country*</label>
						  <select class="form-control" id="scpt_pcountry" onchange="showState(this.value,'parentPermanentState')" name="scpt_pcountry">
							<option value="" >Select Country</option>
							<?php
								if($masterData['response']['error'] == 'false')
								{
									if(count($masterData['response']['data']['country']) > 0)
									{
										foreach($masterData['response']['data']['country'] as $country)
										{
							?>
										<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
							<?php
										}
									}
								}
							?>
						  </select>
						</div>
					</div>
				 </div>
					
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent State*</label>
						  <select class="form-control parentPermanentState" id="scpt_pstate" name="scpt_pstate">
							<option value="" >Select State</option>
						  </select>
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent Zipcode*</label>
						  <input type="text" class="form-control" id="scpt_pzipcode" name="scpt_pzipcode" placeholder="enter zipcode">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					  <input type="checkbox" id="same_as_current" name="same_as_current" onchange="CopyAdd(this);">
					  <span for="exampleInputtext1">Same as permanent address</span>
					</div>
				</div><br>
				
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1"> Current House No./Name*  </label>
						  <input type="text" class="form-control" id="scpt_cblock" name="scpt_cblock" placeholder="enter house no-name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current Street Name*</label>
						  <input type="text" class="form-control" id="scpt_cstreet" name="scpt_cstreet" placeholder="enter Street name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
							<div class="form-group">
							  <label for="exampleInputtext1">Current Country*</label>
							  <select class="form-control" id="scpt_ccountry" onchange="showState(this.value,'parentCurrentState')" name="scpt_ccountry">
								<option value="" >Select Country</option>
								<?php
									if($masterData['response']['error'] == 'false')
									{
										if(count($masterData['response']['data']['country']) > 0)
										{
											foreach($masterData['response']['data']['country'] as $country)
											{
								?>
											<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
								<?php
											}
										}
									}
								?>
							  </select>
							</div>
						</div>
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current State*</label>
						  <select class="form-control parentCurrentState" id="scpt_cstate" name="scpt_cstate">
							<option value="" >Select State</option>
						  </select>
						</div>
					</div>
				</div>
				
				
				
				<div class="row">
					<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Current Zipcode*</label>
						  <input type="text" class="form-control" id="scpt_czipcode" name="scpt_czipcode" placeholder="enter zipcode">
						</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				<!--<div class="row">
					<div class="col-xm-6 col-sm-6 col-md-6 col-lg-6">
					
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
						  <label for="exampleInputtext1">Contact No.</label>
						  <input type="text" class="form-control" name="scpt_contact2" id="scpt_contact2" maxlength="10" placeholder="000">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
						  <label for="exampleInputtext1">Permanent House No./Name*</label>
						  <input type="text" class="form-control" id="scpt_pblock" name="scpt_pblock" placeholder="enter house no-name">
						</div>
					</div>
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Permanent Street Name*</label>
							  <input type="text" class="form-control" id="scpt_pstreet" name="scpt_pstreet" placeholder="enter Street name">
							</div>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Permanent Country*</label>
							  <select class="form-control" id="scpt_pcountry" onchange="showState(this.value,'parentPermanentState')" name="scpt_pcountry">
								<option value="" >Select Country</option>
								<?php
									if($masterData['response']['error'] == 'false')
									{
										if(count($masterData['response']['data']['country']) > 0)
										{
											foreach($masterData['response']['data']['country'] as $country)
											{
								?>
											<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
								<?php
											}
										}
									}
								?>
							  </select>
							</div>
						</div>
						
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Permanent State*</label>
							  <select class="form-control parentPermanentState" id="scpt_pstate" name="scpt_pstate">
								<option value="" >Select State</option>
							  </select>
							</div>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Permanent Zipcode*</label>
							  <input type="text" class="form-control" id="scpt_pzipcode" name="scpt_pzipcode" placeholder="enter zipcode">
							</div>
						</div>
						
				  </div>
			  
			  
				  <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6">
					
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 margintop-25">
							  <input type="checkbox" id="same_as_current" name="same_as_current" onchange="CopyAdd(this);">
							  <span for="exampleInputtext1">Same as current address</span>
						</div>
						
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1"> Current House No./Name*  </label>
							  <input type="text" class="form-control" id="scpt_cblock" name="scpt_cblock" placeholder="enter house no-name">
							</div>
						</div>
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Current Street Name*</label>
							  <input type="text" class="form-control" id="scpt_cstreet" name="scpt_cstreet" placeholder="enter Street name">
							</div>
						</div>
						
					
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Current Country*</label>
							  <select class="form-control" id="scpt_ccountry" onchange="showState(this.value,'parentCurrentState')" name="scpt_ccountry">
								<option value="" >Select Country</option>
								<?php
									if($masterData['response']['error'] == 'false')
									{
										if(count($masterData['response']['data']['country']) > 0)
										{
											foreach($masterData['response']['data']['country'] as $country)
											{
								?>
											<option value="<?php echo $country['sccy_country'] ; ?>" ><?php echo $country['sccy_name'] ; ?></option>
								<?php
											}
										}
									}
								?>
							  </select>
							</div>
						</div>
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Current State*</label>
							  <select class="form-control parentCurrentState" id="scpt_cstate" name="scpt_cstate">
								<option value="" >Select State</option>
							  </select>
							</div>
						</div>
					<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
							  <label for="exampleInputtext1">Current Zipcode*</label>
							  <input type="text" class="form-control" id="scpt_czipcode" name="scpt_czipcode" placeholder="enter zipcode">
							</div>
						</div>
						
				  </div>
			  
			  </div>-->
			  
				
			  <div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">Sibling Details</h3>
				</div>
			  <div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Name Of First Sibling</label>
					  <input type="text" class="form-control" name="first_sibling_name" id="first_sibling_name" placeholder="ABC">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Age</label>
					  <input type="text" class="form-control" name="first_sibling_age" id="first_sibling_age" placeholder="00">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Where Studying/Working</label>
					  <input type="text" class="form-control" name="first_sibling_work" id="first_sibling_work" placeholder="ABC">
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Name Of Second Sibling</label>
					  <input type="text" class="form-control" name="second_sibling_name" id="second_sibling_name" placeholder="ABC">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Age</label>
					  <input type="text" class="form-control" name="second_sibling_age" id="second_sibling_age" placeholder="00">
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Where Studying/Working</label>
					  <input type="text" class="form-control" name="second_sibling_work" id="second_sibling_work" placeholder="ABC">
					</div>
				</div>
			  </div>
				<div class="box-header with-border">
				  <h3 class="box-title stud-reg-form-heading">admission details</h3>
				</div>
			  <div class="row">
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Academic Year *</label>
					  <select class="form-control" id="scad_acdmic_yr" name="scad_acdmic_yr" required>
							<option value="<?php echo $_SESSION['user']['academics']['year']; ?>" selected><?php echo $_SESSION['user']['academics']['year']; ?></option>
							<option value="2020-21">2020-21</option>
						  </select>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
						<label>Admission Date*</label>
						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						  <input type="text" class="form-control" id="scad_admission_date" name="scad_admission_date" autocomplete="off" placeholder="yyyy-mm-dd" required>
						</div>
					  </div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
					  <label for="exampleInputtext1">Class*</label>
						<select class="form-control" id="scad_class" name="scad_class" required>
							<option value="" >Select Class</option>
							<?php 
							if(count($masterData['response']['data']) > 0)
							{
								if(count($masterData['response']['data']['class']) > 0)
								{
									foreach($masterData['response']['data']['class'] as $classDetails)
									{
							?>
								<option value="<?php echo $classDetails['id']; ?>" ><?php echo $classDetails['scls_class_name']; ?></option>
							<?php 
									}
								}
							}
							?>
						  </select>
					</div>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
						<div class="form-group">
						  <label for="exampleInputtext1">Course*</label>
						  <select class="form-control" id="scad_course" name="scad_course" required>
							<option value="" >Select Course</option>
							<option value="Pre-Primary">Pre-Primary</option>
							<option value="Primary">Primary</option>
							<option value="Secondary">Secondary</option>
						  </select>
						</div>
					</div>
			  </div>
				<div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
					<button type="submit" class="btn btn-primary" id="register_btn" onclick="validateStudentRegistration();">Submit</button>
				</div>
			  </div>
			  </div> 
            </form>
        </div>   
     </div>
	 </div>
	 </div>
    </section>   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Student Information</h4>
        </div>
        <div class="modal-body">
         
			  <div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Name</label>
    				<input type="text" class="form-control" id="studentName">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Gender</label>
    				<input type="text" class="form-control" id="gender">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Date Of Birth</label>
    				<input type="text" class="form-control" id="dob">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Birth Place</label>
    				<input type="text" class="form-control" id="birthPlace">
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Height</label>
    				<input type="text" class="form-control" id="studHeight">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Weight</label>
    				<input type="text" class="form-control" id="studWeight">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Blood Group</label>
    				<input type="text" class="form-control" id="studBloodGroup">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Student Identity</label>
    				<input type="text" class="form-control" id="studIdentity">
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">UID</label>
    				<input type="text" class="form-control" id="studUID">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Area Of Interest</label>
    				<input type="text" class="form-control" id="studAreaOfInterest">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Permanent Address</label>
    				<input type="text" class="form-control" id="studPermanentAddress">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Current Address</label>
    				<input type="text" class="form-control" id="studCurrentAddress">
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Contact No 1</label>
    				<input type="text" class="form-control" id="studContactNo1">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Contact No 2</label>
    				<input type="text" class="form-control" id="studContactNo2">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Religion</label>
    				<input type="text" class="form-control" id="studReligion">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Cast</label>
    				<input type="text" class="form-control" id="studCast">
					</div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Mother Tounge</label>
    				<input type="text" class="form-control" id="studMotherTounge">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Father Name</label>
    				<input type="text" class="form-control" id="studFatherName">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Father Qualification</label>
    				<input type="text" class="form-control" id="studFatherQualification">
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 ">
					<div class="form-group">
					<label for="email">Father Occupation</label>
    				<input type="text" class="form-control" id="studFatherOccupation">
					</div>
				</div>
			  </div>
			  
			  <div class="modal-footer">
          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       		  </div>
		  </div>
        </div>
        
      </div>
    </div>
  </div>


 <?php $this->load->view('footer');?>
 
<script>
$( document ).ready(function() {
$("#dashboard").removeClass('active');
$("#unverified-request").addClass('active');
});
	
function showStudentDetails(id)
{
	$('#myModal').modal('show');
	$("#studentName").val(id);
	$("#gender").val(id);
	$("#dob").val(id);
	$("#birthPlace").val(id);
}
</script>
 
</body>
</html>