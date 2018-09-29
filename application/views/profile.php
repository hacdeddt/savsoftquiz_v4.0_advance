 <hr>
<div class="container">
	<div class="row">
  		<div class="col-sm-10"><h1><?php echo $result['first_name'].' '.$result['last_name'];?></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/<?php echo md5($result['email']);?>?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-muted"><?php echo $this->lang->line('profile');?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('joined');?></strong></span> <?php echo $result['registered_date'];?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('group_name');?></strong></span> <?php echo $result['group_name'];?></li>
             <li class="list-group-item text-right"><span class="pull-left"><strong>Student Code</strong></span> <?php echo $result['student_code'];?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('account_type');?></strong></span> <?php   if($result['su']==1){ echo $this->lang->line('administrator');}else{ echo $this->lang->line('user'); }?></li>
            
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading"><?php echo $this->lang->line('contact');?></div>
            <div class="panel-body"> <i class="fa fa-envelope fa-1x"></i> <?php echo $result['email'];?> </div>
            <div class="panel-body">  <i class="fa fa-phone fa-1x"></i> <?php echo $result['contact_no'];?> </div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted"><?php echo $this->lang->line('activity');?> <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('quiz_attempted');?></strong></span> <?php echo $attempted;?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('pass');?></strong></span> <?php echo $pass;?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('fail');?></strong></span> <?php echo $fail;?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $this->lang->line('last_attempt');?></strong></span> <?php echo $lastattempt;?></li>
          </ul> 
               
           
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
          <h3> <?php echo $this->lang->line('category_prof');?> </h3>
           <div class="table-responsive">
                <table class="table table-striped">
                  
                  <tbody>
    
 
<tr>
 <th>
  <?php echo $this->lang->line('category');?>
 </th>
 <th>
  <?php echo $this->lang->line('overall_percentage');?>
</th>
 <th>
  <?php echo $this->lang->line('percentage_last_quiz');?>
  </th>
 </tr>
 
          <?php 
          arsort($categories);
          foreach($categories as $k => $val){
          ?>
          <tr <?php if(intval($val) <= 50){ ?>style="background-color:#f2dede;"<?php }else{ ?>style="background-color:#dff0d8;" <?php } ?> >
 <td>
  <?php echo $k;?> 
  </td>
  <td>
    <?php if($val >= 100){ echo '100';}else{ echo intval($val);}?>% </td>
  
  <td>
  <?php if(intval($category_recent[$k]) >= intval($val)){
  ?>
  <i class="fa fa-arrow-up" style="color:green;" title="<?php echo $this->lang->line('improving');?>"></i>
  <?php 
  }else{
  ?>
   <i class="fa fa-arrow-down" style="color:red;"  title="<?php echo $this->lang->line('improving2');?>"></i>
  <?php 
  }
  ?>
    <?php if($category_recent[$k] >= 100){ echo '100';}else{ echo intval($category_recent[$k]);}  ?>% 
    
    
    </td>
  </tr>
          <?php 
          }
          ?>
   </tbody>
   </table>
   </div>       


             
              <h3><?php echo $this->lang->line('questions_incorect');?></h3>
              
              <div class="table-responsive">
                <table class="table table-striped">
                  
                  <tbody>
    
 
<tr>
 <th>#</th>
  <th>
  <?php echo $this->lang->line('question');?>
 </th>
  <th>
  <?php echo $this->lang->line('action');?>
 </th>
</tr>
<?php 
foreach($questions as $k => $qv){
?>
<tr>
<td>
<?php echo $qv['qid'];?>
</td>
<td>
<?php echo substr(strip_tags($qv['question']),0,100);?>
</td>
<td>
<a href="#"
data-toggle="modal" data-target="#myModal<?php echo $qv['qid'];?>"
><i class="fa fa-eye" title="View Question"></i></a>
</td>

</tr>
<?php 
}
?>
</tbody>
</table>
</div>
     