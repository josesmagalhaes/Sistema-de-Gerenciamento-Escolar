<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Resultados  (<?php echo sizeof($results) ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Adicionar Resultados</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
              <table class="table table-striped table-bordered table-hover example" >
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Estudante</th>
                          <th>Avaliação</th>
                          <th>Resultado</th>
                          <th>Criado em</th>
                          <th>Ação</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i=1;
                  foreach($results as $result)
                  {
                    ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $result['sname'] ?></td>
                      <td><?php echo $result['exam_name'] ?></td>
                      <td><?php echo $result['result'] ?></td>
                      <td><?php echo $result['created_at'] ?></td>
                      <td>
                        <a href="<?php echo base_url().'index.php/result/delete_result/'.$result['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="<?php echo base_url().'index.php/result/edit_result/'.$result['id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                      </td>
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
        <buresulton type="buresulton" class="close" data-dismiss="modal">&times;</buresulton>
        <h4 class="modal-title">Adicionar Resultado</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/result/' ?>" id="add_result_form">
        <div class="form-group">
        	<label>Selecione Estudante</label>
          <select required="required" name="student" id="select_student" class="form-control">
            <option value="">Selecione</option>
            <?php 
            foreach($all_student as $student)
            {
              ?>
              <option id="st_<?php echo $student['id'] ?>" data-val="<?php echo $student['class']  ?>" value="<?php echo $student['id'] ?>"><?php echo $student['name']; ?></option>
              <?php 
            }
            ?>
          </select>
        </div>
        <div class="form-group">
            <label>Selecione Avaliação</label>
            <select required="required" name="exam" id="exam" class="form-control">
            <option value="">Selecione</option>
          </select>
        </div>
        <div class="form-group">
            <label>Resultado</label>
            <input required="required" tyoe="text" name="result" id="result" class="form-control" placeholder="Resultado" />
        </div>
        <div class="form-group">
        	<buresulton class="btn btn-primary" type="submit">Adicionar</buresulton>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>