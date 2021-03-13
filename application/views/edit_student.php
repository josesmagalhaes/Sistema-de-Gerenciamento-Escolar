<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Editar Estudantes</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row" >
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form action="<?php  echo base_url().'index.php/student/edit_student/'.$student_data['id'] ?>" id="edit_student_form">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" required="required" value="<?php echo $student_data['name'] ?>" class="form-control" id="sname" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label>Nome do Pai</label>
                            <input type="text" name="fname" required="required" value="<?php echo $student_data['fname'] ?>" class="form-control" id="fname" placeholder="Nome do Pai">
                        </div>
                        <div class="form-group">
                            <label>E-Mail </label>
                            <input type="email" name="email" required="required" value="<?php echo $student_data['email'] ?>" class="form-control" id="email_user" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="category" id="category" class="form-control">
                                <option value=""> Selecione </option>
                                <?php 
                                foreach($all_category as $cat)
                                {
                                    ?>
                                    <option <?php if($student_data['category']==$cat['name']) { echo "selected"; } ?>><?php echo $cat['name']; ?></option>
                                    <?php 
                                }
                                ?>     
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Turma</label>
                            <select class="form-control" name="class" id="class">
                                <option value=""> Selecione </option>
                                <?php 
                                foreach($classes as $class)
                                {
                                    ?>
                                    <option <?php if($student_data['class']==$class['name']) { echo "selected"; } ?>><?php echo $class['name']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nascimento</label>
                            <input type="date" name="dob" value="<?php echo $student_data['dob'] ?>" required="required" class="form-control" id="dob" placeholder="Nascimento">
                        </div>
                        <div class="form-group">
                            <label>Entrada</label>
                            <input type="date" name="join_date" value="<?php echo $student_data['join_date'] ?>" required="required" class="form-control" id="join_date" placeholder="Entrada">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Atualizar</button>
                        </div>
                       </form>   
                    </div>
                    <div class="col-sm-2"></div>     
                </div>
            </div>
		</div>
		</div>
</div>
