<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Attendance</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Status</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            $i=1;
                                            foreach($student_list as $student)
                                            {

                                              $all_count=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'])));
                                              $all_countp=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'],'status'=>'Present')));

                                            ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $student['name']; ?></td>
                                                <td><?php echo $all_count*$all_countp/100; ?>%</td>
                                                <td><a href="<?php echo base_url().'index.php/attendance/add_attendance/'.$student['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></td>
                                              </tr>
                                              <?php 
                                              $i++;
                                            }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
		</div>
		</div>
</div>
