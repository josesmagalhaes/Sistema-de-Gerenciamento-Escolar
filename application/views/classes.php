<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Turmas (<?php echo sizeof($classes) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Adicionar Disciplina</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Categoria</th>
                                                    <th>Status</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($classes as $cat)
                                            {
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $cat['name']; ?></td>
                                                    <td><?php echo $cat['cat']; ?></td>
                                                    <td><input class="change_status" data-table="classes" value="1" data-id="<?php echo $cat['id']  ?>"  type="checkbox" <?php if($cat['status']==1) { echo "checked"; } ?>  name="status_<?php echo $cat['id']; ?>" ></td>
                                                    <td>
                                                    	<a href="<?php echo base_url().'index.php/school/delete_class/'.$cat['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    	<a href="<?php echo base_url().'index.php/school/edit_class/'.$cat['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    </td>
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
        <h4 class="modal-title">Adicionar Turmas</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/school/classes' ?>" id="add_class_form">
        <div class="form-group">
        	<label>Nome</label>
        	<input type="text" name="name" required="required" class="form-control" id="name" placeholder="Digite o nome da turma">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" required="required" name="cat" id="cat">
                <option value=""> Selecione </option>
                <?php 
                foreach($cats as $c1)
                {
                    ?>
                    <option><?php echo $c1['name']; ?></option>
                    <?php 
                }
                ?>
            </select>
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Adicionar</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>