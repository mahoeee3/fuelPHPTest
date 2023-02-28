<a href="<?php echo Uri::create('company/create');?>" class="class btn btn-primary">Nova Empresa</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($companys as $company):?>
        <?php  $createdat = strtotime($company->created_at);
               $updatedat = strtotime($company->updated_at);?>
        <tr>
            <td><?php echo $company->id;?></td>
            <td><?php echo $company->corporateName;?></td>
            <td><?php echo $company->tradingName;?></td>
            <td><?php echo $company->CNPJ;?></td>
            <td><?php echo date('d/m/Y H:i', $createdat);?></td>
            <td><?php echo date('d/m/Y H:i', $updatedat);?></td>
            <td>
                <a href="<?php echo Uri::create("company/edit/{$company->id}");?>" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <a href="<?php echo Uri::create("company/delete/{$company->id}");?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
