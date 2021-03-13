<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Avaliações  (<?php echo sizeof($all_exam); ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Adicionar Nova Avaliação</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
              <table class="table table-striped table-bordered table-hover example" >
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Título</th>
                          <th>Início</th>
                          <th>Categoria</th>
                          <th>Turma</th>
                          <th>Ação</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i=1;
                    foreach($all_exam as $exam)
                    {
                      ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $exam['title'] ?></td>
                        <td><?php echo $exam['start_date'] ?></td>
                        <td><?php echo $exam['category'] ?></td>
                        <td><?php echo $exam['class'] ?></td>
                        <td><a href="<?php echo base_url().'index.php/exam/edit_exam/'.$exam['id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>
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
        <h4 class="modal-title">Adicionar Avaliação</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/exam/add_exam' ?>" id="add_exam_form">
        <div class="form-group">
        	<label>Título</label>
        	<input type="text" name="title" required="required" class="form-control" id="title" placeholder="Digite título">
        </div>
        <div class="form-group">
            <label>Início</label>
            <input type="date" required="required" name="start_date" id="start_date" class="form-control">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select name="category" id="exam_category" class="form-control">
              <option value="">Selecione</option>
              <?php 
              foreach($category as $cat)
              {
                ?><option><?php echo $cat['name']; ?></option><?php 
              }
              ?>
            </select>
        </div>
        <div class="form-group">
            <label>Turma</label>
            <select name="class" id="class" class="form-control">
              <option value="">Selecione</option>
            </select>
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Adicione</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>