 <style>
.txtVertical 
{
	 position: fixed;
	
    right: 0px;
    bottom: 0px;
}

.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<div class="container">

   
 
<div id="update_notice"></div>  
 

 
<div class="row">

<div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $num_users;?></div>
                                    <div><?php echo $this->lang->line('no_registered_user');?> </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('user');?>">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->lang->line('users');?> <?php echo $this->lang->line('list');?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
</div>


<div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $num_quiz;?></div>
                                    <div><?php echo $this->lang->line('no_registered_quiz');?> </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('quiz');?>">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->lang->line('quiz');?> <?php echo $this->lang->line('list');?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
</div>

<div class="col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $num_qbank;?></div>
                                    <div><?php echo $this->lang->line('no_questions_qbank');?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('qbank');?>">
                            <div class="panel-footer"><?php echo $this->lang->line('question');?> <?php echo $this->lang->line('list');?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
 </div>
 
 
 
 

</div>
 
<div class="row"></div>






<div class="row">
      <div class="col-lg-10">


<div class="row">
                          
 <div class="col-lg-6 " >
 <div class="panel panel" >
                        <div class="panel-heading"  style="background-color:#72B159;text-align:center;">
                        
    <div class="font-size-34"> <strong style="color:#ffffff;"><?php echo $active_users;?></strong>
    <br>
    <small class="font-weight-light text-muted" style="font-size:18px;color:#eeeeee;"><?php echo $this->lang->line('active');?> <?php echo $this->lang->line('users');?></small>

</div>

                    
                        </div>
 </div>
</div>
 <div class="col-lg-6">
 <div class="panel panel" >
                        <div class="panel-heading"  style="background-color:#DB5949;text-align:center;">
                        
    <div class="font-size-34" > <strong style="color:#ffffff;"><?php echo $inactive_users;?></strong>
    <br>
    <small class="font-weight-light text-muted" style="font-size:18px;color:#eeeeee;"><?php echo $this->lang->line('inactive');?> <?php echo $this->lang->line('users');?></small>

</div>

                    
                        </div>
                        </div>
</div>
  

</div>


        <!-- recent users -->

        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title"><?php echo $this->lang->line('recently_registered');?></div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped valign-middle">
              <thead>
                <tr>
                <th><?php echo $this->lang->line('email');?></th>
                <th><?php echo $this->lang->line('student_code');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('first_name');?> <?php echo $this->lang->line('last_name');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('group_name');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('contact_no');?></th>
                <th></th>
              </tr></thead>
              <tbody> 
              <?php 
if(count($result)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
foreach($result as $key => $val){
?><tr>
<td>
<a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"><?php echo $val['email'];?> <?php echo $val['wp_user'];?></a></td>
<td  class="text-xs-right"><?php echo $val['student_code'];?></td>
<td  class="text-xs-right"><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
 <td  class="text-xs-right"><?php echo $val['group_name'];?></td>
<td  class="text-xs-right"><?php echo $val['contact_no'];?></td>

                
              </tr>
             
             <?php 
             }
             ?> 
     
            </tbody></table>
          </div>
        </div>

        <!-- recent users -->

      </div>