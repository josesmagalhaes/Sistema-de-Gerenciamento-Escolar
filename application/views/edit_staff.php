<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Editar Pessoal</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
			     <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <form action="<?php  echo base_url().'index.php/staff/edit_staff/'.$staff[0]['id'] ?>" id="edit_Staff_form">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" required="required" value="<?php echo $staff[0]['name'] ?>" class="form-control" id="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label>Nome do Pai</label>
                            <input type="text" name="fname" required="required" value="<?php echo $staff[0]['fname'] ?>" class="form-control" id="fname" placeholder="Nome do pai">
                        </div>
                        <div class="form-group">
                            <label>E-Mail </label>
                            <input type="email" name="email" value="<?php echo $staff[0]['email'] ?>" required="required" class="form-control" id="email" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <label>Telefone </label>
                            <input type="text" name="mobile_no" required="required" value="<?php echo $staff[0]['mobile_no'] ?>" class="form-control" id="mobile_no" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <label>Nascimentio</label>
                            <input type="date" name="dob" value="<?php echo $staff[0]['dob'] ?>" required="required" class="form-control" id="dob" placeholder="Nascimento">
                        </div>
                        <div class="form-group">
                            <label>Entrada</label>
                            <input type="date" name="join_date" value="<?php echo $staff[0]['join_date'] ?>" required="required" class="form-control" id="join_date" placeholder="Entrada">
                        </div>
                        <div class="form-group">
                            <label>Experiência</label>
                            <input type="text" name="exp" required="required" value="<?php echo $staff[0]['exp'] ?>" class="form-control" id="exp" placeholder="Experiência">
                        </div>
                        <div class="form-group">
                            <label>Pagamento</label>
                            <input type="text" name="payment" required="required" value="<?php echo $staff[0]['payment'] ?>" class="form-control" id="payment" placeholder="Pagamento">
                        </div>
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea name="staff_other_information"  id="staff_other_information" class="form-control"><?php echo $staff[0]['staff_other_information'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Atualizar</button>
                        </div>
                       </form>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                </div>
		</div>
		</div>
</div>
