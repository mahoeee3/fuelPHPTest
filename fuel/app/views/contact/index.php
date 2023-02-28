<a href="<?php echo Uri::create('contact/create');?>" class="class btn btn-primary">Novo Contato</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($contacts as $contact):?>
        <?php  $createdat = strtotime($contact->created_at);
               $updatedat = strtotime($contact->updated_at);?>
        <tr>
            <td><?php echo $contact->id;?></td>
            <td><?php echo $contact->company->corporateName ?? '-';?></td>
            <td><?php echo $contact->name;?></td>
            <td><?php echo $contact->last_name;?></td>
            <td><?php echo $contact->phone_number;?></td>
            <td><?php echo $contact->email;?></td>
            <td><?php echo date('d/m/Y H:i', $createdat);?></td>
            <td><?php echo date('d/m/Y H:i', $updatedat);?></td>
            <td>
                <a href="<?php echo Uri::create("contact/edit/{$contact->id}");?>" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <a href="<?php echo Uri::create("contact/delete/{$contact->id}");?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
