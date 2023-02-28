<?php echo form::open(); ?>

<div class="form-group">
    <label for="company_id">Empresa</label>
    <select class="form-control" id="company_id" name="company_id">
        <option value="">Selecione..</option>
        <?php foreach ($companys as $company) : ?>
            <option <?php (isset($contact) && $contact->company_id == $company->id) && print 'selected';?> value="<?php echo $company->id; ?>"><?php echo $company->corporateName; ?></option>
        <?php endforeach; ?>
    </select>

</div>

<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" placeholder="Nome" name="name" value="<?php echo \Input::post('name', isset($contact) ? $contact->name : null); ?>">
</div>

<div class="form-group">
    <label for="last_name">Sobrenome</label>
    <input type="text" class="form-control" id="last_name" placeholder="Sobrenome" name="last_name" value="<?php echo \Input::post('last_name', isset($contact) ? $contact->last_name : null); ?>">
</div>

<div class="form-group">
    <label for="phone_number">Telefone</label>
    <input type="text" class="form-control" id="phone_number" placeholder="Telefone" name="phone_number" value="<?php echo \Input::post('phone_number', isset($contact) ? $contact->phone_number : null); ?>">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo \Input::post('email', isset($contact) ? $contact->email : null); ?>">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>
<?php echo Html::anchor('contact', 'Cancelar', array('class' => 'btn btn-danger')); ?>

<?php echo form::close(); ?>