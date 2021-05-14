<?php  
  @$STUDENTID = $_GET['id'];
 //@$syid = $_GET['sy'];
  if($STUDENTID==''){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($STUDENTID);

  // $sy = New Schoolyear();
  //$singlesy = $sy->single_sy($syid);

  ?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 
        
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  
        
          <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Edit Student</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                         <input  id="student_id" name="student_id"  type="hidden" value="<?php echo $singlestudent->STUDENTID; ?>">
                 <!-- <input   id="SYID" name="SYID"  type="hidden" value="<?php echo $singlesy->SYID; ?>">-->
               
                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "stud_name">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="stud_name" name="stud_name" placeholder=
                            "First Name" type="text" value="<?php echo $singlestudent->FNAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "last_name">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="last_name" name="last_name" placeholder=
                            "Last Name" type="text" value="<?php echo $singlestudent->LNAME; ?>">
                      </div>
                    </div>
                  </div>


                  
 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "stud_address">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="stud_address" name="stud_address" placeholder=
                            "Address" type="text" value="<?php echo $singlestudent->ADDRESS; ?>">
                      </div>
                    </div>
                  </div>

               
 
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "stud_phone">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="stud_phone" name="stud_phone" placeholder=
                            "Contacat Number" type="text" value="<?php echo $singlestudent->MOBILENO; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAILADD">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder=
                            "Example@gmail.com" type="TEXT" value="<?php echo $singlestudent->EMAILADD; ?>" required>
                      </div>
                    </div>
                  </div>

 
                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn_kcctc" name="save" type="submit" >Save</button> 
                        <a href="index.php?view=view&id=<?php echo $IDNO; ?>&sy=<?php echo $syid; ?>" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Student Profile</a>
                      </div>
                    </div>
                  </div>
 
<!--/.fluid-container-->
 
 </form>