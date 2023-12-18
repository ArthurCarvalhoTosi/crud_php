<?php 
include('../../config.php'); 
include('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row">
    <div class="col-sm-6">
       <h2>Produtos</h2>
    </div>

    <div class="col-sm-6 text-center">
        <a href="" class="btn btn-primary"><i class="fa-solid fa-plus">

        </i> Novo Produto<a>
    </div>
</div>  
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <table class="table table-hover table-dark table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Código</th>
        <th scope="col">Produto</th>
        <th scope="col">Descrição</th>
        <th class="text-right" scope="col">Operações</th>
        </tr>
    </thead>
    <tbody>
    <?php if($products):?>
            <?php foreach($products as $products): ?>
        <tr>
        <th scope="row"><?php echo $product['id'] ?> </th>
        <td><?php echo $product['codigo'] ?></td>
        <td><?php echo $product['produto'] ?></td>
        <td><?php echo $product['descricao'] ?></td>
        <td class="text-right">
            <a href="" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Visualizar">
                <i class="fa-sharp fa-solid fa-eye" ></i> </a>
            <a href="" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar">
                <i class="fa-solid fa-pen-to-square"></i> </a>
            <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Deletar">
                <i class="fa-solid fa-trash"></i> </a>
        </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5"> Não existem produtos cadastrados.</td>
            </tr>
        
        <?php endif; ?>
    </tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>