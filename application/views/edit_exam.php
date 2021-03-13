<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Editar Avaliações</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
            <form action="<?php  echo base_url().'index.php/exam/edit_exam/'.$exam['id'] ?>" id="update_exam_form">
              <div class="form-group">
                <label>Título</label>
                <input type="text" value="<?php echo $exam['title'] ?>" name="title" required="required" class="form-control" id="title" placeholder="Título">
              </div>
              <div class="form-group">
                  <label>Data</label>
                  <input type="date" value="<?php echo $exam['start_date'] ?>" required="required" name="start_date" id="start_date" class="form-control">
              </div>
              <div class="form-group">
                  <label>Categoria</label>
                  <select name="category" id="exam_category" class="form-control">
                    <option value="">Select</option>
                    <?php 
                    foreach($category as $cat)
                    {
                      ?><option <?php if($exam['category']==$cat['name']) { echo "selected"; } ?>><?php echo $cat['name']; ?></option><?php 
                    }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                  <label>Turma</label>
                  <select name="class" id="class" class="form-control">
                    <option value="">Selecione</option>
                    <?php 
                    foreach($classes as $class)
                    {
                      ?><option <?php if($exam['class']==$class['name']) { echo "selected"; } ?>><?php echo $class['name'] ?></option><?php 
                    }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit">Atualizar</button>
              </div>
             </form>     
        </div>
      </div>
		</div>
		</div>
</div>