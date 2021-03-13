<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Frequências</h3>
            <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Adicionar Frequências</a>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Turma</th>
                                                    <th>Status</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($classes as $class)
                                            {

                                            $all_students=$this->CM->select_data('student','id,class',array('class'=>$class['name']));
                                            $main_all_count=0;
                                            $main_p_count=0;
                                            foreach($all_students as $student)
                                            {
                                              $all_count=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'])));
                                              $all_countp=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'],'status'=>'Present')));
                                              $main_all_count=$main_all_count+$all_count;
                                              $main_p_count=$main_p_count+$all_countp;
                                            }
                                            ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $class['name']; ?></td>
                                                <td><?php echo  $main_all_count*$main_p_count/100 ?>%</td>
                                                  <td><a href="<?php echo base_url().'index.php/attendance/sttudent_list/'.$class['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                                              </tr>
                                              <?php 
                                            }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
		</div>
		</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Frequência</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/school/Attendance' ?>" id="add_Attendance_form">
        <div class="form-group">
        	<label>Nome</label>
        	<input type="text" name="name" required="required" class="form-control" id="name" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label>Duração</label>
            <input required="required" class="form-control" type="text" name="Attendance_duration" id="Attendance_duration" placeholder="Digite a duraçãon">
        </div>
        <div class="form-group">
            <label>Créditos</label>
            <input type="text" required="required" class="form-control" name="Attendance_fees" id="Attendance_fees" placeholder="Digite créditos">
        </div>
        <div class="form-group">
            <label>Inicio</label>
            <input type="text" required="required" name="Attendance_started" id="Attendance_started" class="form-control" placeholder="Digite início">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Adicionar</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>