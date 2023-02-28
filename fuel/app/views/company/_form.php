<?php echo form::open(); ?>

<div class="form-group">
    <label for="corporateName">Razão Social</label>
    <input type="text" class="form-control" id="corporateName" placeholder="Razão Social" name="corporateName" value="<?php echo \Input::post('corporateName', isset($company) ? $company->corporateName : null); ?>">
</div>

<div class="form-group">
    <label for="tradingName">Nome Fantasia</label>
    <input type="text" class="form-control" id="tradingName" placeholder="Nome Fantasia" name="tradingName" value="<?php echo \Input::post('tradingName', isset($company) ? $company->tradingName : null); ?>">
</div>

<div class="form-group">
    <label for="CNPJ">CNPJ</label>
    <input type="text" class="form-control" id="CNPJ" placeholder="CNPJ" name="CNPJ" value="<?php echo \Input::post('CNPJ', isset($company) ? $company->CNPJ : null); ?>">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>
<?php echo Html::anchor('company', 'Cancelar', array('class' => 'btn btn-danger')); ?>

<?php echo form::close(); ?>