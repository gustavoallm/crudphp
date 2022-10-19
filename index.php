<?php include("Header.php"); ?>

<?php
if(ISSET($_POST['contato_salvar'])){
$atualizar = $conexao->prepare("UPDATE contato SET nome = :nome, idade = :idade WHERE id = :id");
$atualizar->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
$atualizar->bindParam(':idade', $_POST['idade'] , PDO::PARAM_STR);
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Dados atualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Os dados não foram salvos.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['tel_atualiza'])){
$atualizar = $conexao->prepare("UPDATE telefone SET telefone = :telefone, perfil = :perfil WHERE id = :id");
$atualizar->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_STR);
$atualizar->bindParam(':perfil', $_POST['perfil'] , PDO::PARAM_STR);
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Dados atualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Os dados não foram salvos.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['tel_adicionar'])){
$atualizar = $conexao->prepare("INSERT INTO telefone VALUES (null, :telefone, :perfil, :contato_id)");
$atualizar->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_STR);
$atualizar->bindParam(':perfil', $_POST['perfil'] , PDO::PARAM_STR);
$atualizar->bindParam(':contato_id', $_POST['contato_id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Telefone adicionado.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Algo deu errado!.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['tel_deletar'])){
$atualizar = $conexao->prepare("DELETE FROM telefone WHERE id = :id");
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Telefone deletado.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Algo deu errado!.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['email_atualiza'])){
$atualizar = $conexao->prepare("UPDATE email SET email = :email, perfil = :perfil WHERE id = :id");
$atualizar->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$atualizar->bindParam(':perfil', $_POST['perfil'] , PDO::PARAM_STR);
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Email atualizado.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Os dados não foram salvos.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['email_deletar'])){
$atualizar = $conexao->prepare("DELETE FROM email WHERE id = :id");
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Email deletado.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Algo deu errado!.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>
<?php
if(ISSET($_POST['email_adicionar'])){
$atualizar = $conexao->prepare("INSERT INTO email VALUES (null, :email, :perfil, :contato_id)");
$atualizar->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$atualizar->bindParam(':perfil', $_POST['perfil'] , PDO::PARAM_STR);
$atualizar->bindParam(':contato_id', $_POST['contato_id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Email adicionado.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Algo deu errado!.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<?php
if(ISSET($_POST['atualiza_cidade'])){
$atualizar = $conexao->prepare("UPDATE endereco SET cidade = :cidade WHERE id = :id");
$atualizar->bindParam(':cidade', $_POST['cidade'], PDO::PARAM_STR);
$atualizar->bindParam(':id', $_POST['id'] , PDO::PARAM_STR);
$executa = $atualizar->execute();

    if($executa){
    ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sucesso!</strong> Cidade atualizada.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php 
    }else{
    ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"><use xlink:href="#x-circle-fill"/></svg>
        <strong>Erro!</strong> Os dados não foram salvos.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php 
    }
}?>

<div class="container text-center">
    <table class="table shadow-1g mt-3 table-hover text-white text-center" style="background-color:#333; border: 1px solid white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Cidade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $contato = $conexao->prepare("select * from contato ");               
                $executa = $contato->execute();
                while($r_contato = $contato->fetch(PDO::FETCH_ASSOC))
                {
                    $contato_id = $r_contato["id"];



            ?>
            
            <tr>
                <th scope="row"><?php echo $r_contato["id"];?></th>
                <td>                        
                    <a type="button" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#contato_<?php echo $r_contato["id"];?>">
                        <?php echo $r_contato["nome"];?>
                    </a>
                    <div class="modal fade text-left text-white" id="contato_<?php echo $r_contato["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #333;">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_contato["nome"];?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="#" method="POST" class="row g-3">
                                    <input type="hidden" name="id" value="<?php echo $r_contato["id"];?>" />
                                    <div class="col-8">
                                        <label for="nome" class="visually-hidden">Nome</label>
                                        <input type="text" style="background-color: #444;" class="form-control text-white" id="nome" name="nome" value="<?php echo $r_contato["nome"];?>" placeholder="Digite o nome completo">
                                    </div>
                                    <div class="col-2">
                                        <label for="idade" class="visually-hidden">Idade</label>
                                        <input type="number" style="background-color: #444;" class="form-control text-white" id="idade" name="idade" value="<?php echo $r_contato["idade"];?>" placeholder="Digite a idade">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit"  style="background-color: chartreuse; color: black; border: 1px solid #FFF;" name="contato_salvar" class="btn btn-primary mb-3">Salvar</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" style="color: black; border: 1px solid #FFF;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td style="color: chartreuse;">
                    <a type="button" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#contato_<?php echo $r_contato["id"];?>">
                        <?php echo $r_contato["idade"];?>
                    </a>
                </td>
                <td>
                    <?php 
                    $cidade = $conexao->prepare("SELECT cidade, id, contato_id FROM endereco where contato_id = :contato_id limit 1");
                    $cidade->bindParam(':contato_id', $contato_id , PDO::PARAM_STR);
                    $executa = $cidade->execute();
                    while($r_cidade = $cidade->fetch(PDO::FETCH_ASSOC))
                    { ?>
                        <a type="text" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#cidade_<?php echo $r_cidade["id"];?>">
                            <?php echo $r_cidade["cidade"];?>
                        </a>
                        <div class="modal fade text-left text-white" id="cidade_<?php echo $r_cidade["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #333;">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_cidade["cidade"];?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="#" method="POST" class="row g-3">
                                    <input type="hidden" name="id" value="<?php echo $r_cidade["id"];?>" />
                                    <div class="col-8">
                                        <label for="nome" class="visually-hidden">Cidade</label>
                                        <input type="text" style="background-color: #444;" class="form-control text-white" id="cidade" name="cidade" value="<?php echo $r_cidade["cidade"];?>">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" style="background-color: chartreuse; color: black; border: 1px solid #FFF;" name="atualiza_cidade" class="btn btn-primary mb-3">Salvar</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" style="color: black; border: 1px solid #FFF;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>              
                    <?php } ?>
                    
                </td>
                <td class="text-center">
                    <?php 
                    $telefone = $conexao->prepare("SELECT * FROM telefone where contato_id = :contato_id");
                    $telefone->bindParam(':contato_id', $contato_id , PDO::PARAM_STR);           
                    $executa = $telefone->execute();
                    while($r_telefone = $telefone->fetch(PDO::FETCH_ASSOC)){ ?>
                        <a type="button" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#telefone_<?php echo $r_telefone["id"];?>">
                            <?php echo $r_telefone["telefone"]?>
                        </a>
                        <br>
                        <div class="modal fade" id="telefone_<?php echo $r_telefone["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content" style="background-color: #333;">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_contato["nome"];?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="#" method="POST" class="row g-3">
                                        <input type="hidden" name="id" value="<?php echo $r_telefone["id"];?>" />
                                        <div class="col-8">
                                            <label for="nome" class="text-secondary text-start">Telefone</label>
                                            <input type="text" style="background-color: #444;" class="form-control text-white" id="telefone" name="telefone" value="<?php echo $r_telefone["telefone"];?>" placeholder="Digite o telefone novo">
                                        </div>
                                        <div class="col-4">
                                            <label for="idade" class="text-secondary text-start">Perfil</label>
                                            <input type="text" style="background-color: #444;" class="form-control text-white" id="perfil" name="perfil" value="<?php echo $r_telefone["perfil"];?>" placeholder="Digite o perfil">
                                        </div>
                                        <div>
                                            <button type="submit" style="background-color: chartreuse; color: black; border: 1px solid #FFF;" name="tel_atualiza" class="btn btn-primary mb-3">Salvar</button>
                                            <button type="submit" style="background-color: DarkRed; color: black; border: 1px solid #FFF;" name="tel_deletar" class="btn btn-primary mb-3">Excluir</button>
                                        </div>                                   
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" style="color: black; border: 1px solid #FFF;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php 
                    $telefone = $conexao->prepare("SELECT * FROM telefone where contato_id = :contato_id");
                    $telefone->bindParam(':contato_id', $contato_id , PDO::PARAM_STR);
                    ?>  
                    <a type="button" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#telefone_add_<?php echo $contato_id;?>">
                        <?php echo "Adicionar Telefone";?>
                    </a>
                    <div class="modal fade" id="telefone_add_<?php echo $contato_id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #333;">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_contato["nome"];?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="#" method="POST" class="row g-3">
                                    <input type="hidden" name="contato_id" value="<?php echo $contato_id;?>" />
                                    <div class="col-8">
                                        <label for="nome" class="text-secondary text-start">Telefone</label>
                                        <input type="text" class="form-control text-white" style="background-color: #444;" id="telefone_novo" name="telefone" placeholder="Digite o telefone novo">
                                    </div>
                                    <div class="col-2">
                                        <label for="idade" class="text-secondary text-start">Perfil</label>
                                        <select class="form-select text-white" style="background-color: #444;" id="perfil_novo" name="perfil">
                                            <option selected></option>
                                            <option value="Profissional">Profissional</option>
                                            <option value="Pessoal">Pessoal</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" style="background-color: chartreuse; color: black; border: 1px solid #FFF; margin-top: 23px" name="tel_adicionar" class="btn btn-primary mb-3">Salvar</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" style="color: black; border: 1px solid #FFF;" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <?php 
                    $email = $conexao->prepare("SELECT email, id, perfil FROM email where contato_id = :contato_id");
                    $email->bindParam(':contato_id', $contato_id , PDO::PARAM_STR);
                    $executa = $email->execute();
                    while($r_email = $email->fetch(PDO::FETCH_ASSOC))
                    { ?>
                        <a type="text" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#email_<?php echo $r_email["id"];?>">
                            <?php echo $r_email["email"];?>
                        </a>
                        <br>
                        <div class="modal fade" id="email_<?php echo $r_email["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content" style="background-color: #333;">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_contato["nome"];?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="#" method="POST" class="row g-3">
                                        <input type="hidden" name="id" value="<?php echo $r_email["id"];?>" />
                                        <div class="col-8">
                                            <label for="nome" class="text-secondary text-start">Email</label>
                                            <input type="text" style="background-color: #444;" class="form-control text-white" id="email" name="email" value="<?php echo $r_email["email"];?>" placeholder="Digite o novo email">
                                        </div>
                                        <div class="col-4">
                                            <label for="idade" class="text-secondary text-start">Perfil</label>
                                            <input type="text" style="background-color: #444;" class="form-control text-white" id="perfil" name="perfil" value="<?php echo $r_email["perfil"];?>" placeholder="Escolha o perfil">
                                        </div>
                                        <div>
                                            <button type="submit" style="background-color: chartreuse; color: black; border: 1px solid #FFF;" name="email_atualiza" class="btn btn-primary mb-3">Salvar</button>
                                            <button type="submit" style="background-color: DarkRed; color: black; border: 1px solid #FFF;" name="email_deletar" class="btn btn-primary mb-3">Excluir</button>
                                        </div>                                   
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" style="color: black; border: 1px solid #FFF;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
                    <a type="button" style="color: chartreuse;" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#email_add_<?php echo $contato_id;?>">
                        <?php echo "Adicionar Email";?>
                    </a>
                    <div class="modal fade" id="email_add_<?php echo $contato_id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="background-color: #333;">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $r_contato["nome"];?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="#" method="POST" class="row g-3">
                                    <input type="hidden" name="contato_id" value="<?php echo $contato_id;?>" />
                                    <div class="col-8">
                                        <label for="nome" class="text-secondary text-start">Email</label>
                                        <input type="text" class="form-control text-white" style="background-color: #444;" id="email_novo" name="email" placeholder="Digite o novo email">
                                    </div>
                                    <div class="col-2">
                                        <label for="idade" class="text-secondary text-start">Perfil</label>
                                        <select class="form-select text-white" style="background-color: #444;" id="perfil_novo" name="perfil">
                                            <option selected></option>
                                            <option value="Profissional">Profissional</option>
                                            <option value="Pessoal">Pessoal</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" style="background-color: chartreuse; color: black; border: 1px solid #FFF; margin-top: 23px" name="email_adicionar" class="btn btn-primary mb-3">Salvar</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" style="color: black; border: 1px solid #FFF;" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
<?php include("Footer.php"); ?>