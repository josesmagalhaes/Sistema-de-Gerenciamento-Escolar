<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Frequências <a data-toggle="modal" data-target="#myModal" href="javascript:;" class="btn btn-primary pull-right">Adicionar Frequência</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Data</th>
                                                    <th>Status</th>
                                                    <th>Observações</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($all_attendance as $aa)
                                            {
                                              ?>
                                              <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $aa['date'] ?></td>
                                                <td><?php echo $aa['status'] ?></td>
                                                <td><?php echo $aa['remarks'] ?></td>
                                                <td><a class="btn btn-info" href="<?php echo base_url().'index.php/attendance/edit_attendance/'.$aa['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Frequências</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/attendance/add_attendance/'.$this->uri->segment(3); ?>" id="add_Attendance_form">
        <div class="form-group">
        	<label>Status</label>
        	<select required="required" class="form-control" name="status" id="status">
              <option>Presente</option>
              <option>Ausência</option>
          </select>
        </div>
        <div class="form-group">
            <label>Data</label>
            <input required="required" id="date" type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Observações</label>
            <textarea required="required" name="remarks" id="remarks" class="form-control"></textarea>
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Adicionar</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>/