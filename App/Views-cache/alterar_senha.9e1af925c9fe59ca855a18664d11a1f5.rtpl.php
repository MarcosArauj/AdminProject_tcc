<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <a href="/admin"><strong><?php echo getNomeEmpresa(); ?></strong></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/perfil"><?php echo htmlspecialchars( $usuario["primeiro_nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
            <li class="active"><a href="/perfil/altera_senha">Auterar Senha</a></li>
        </ol>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-3">
                <?php require $this->checkTemplate("perfil_menu");?>

            </div>
            <div class="col-md-6">
                <?php if( $erroAlterarSenha != '' ){ ?>

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo htmlspecialchars( $erroAlterarSenha, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Alterar Senha</h3>
                    </div>

                <form action="/perfil/altera_senha" name="FormAlteraSenha" method="post">
                    <div class="box-body">
                        <div id="senha_atual" class="form-row">
                            <div class="col-md-12">
                            <label class="control-label" for="senha_atual">Senha Atual</label>
                            <input type="password" class="form-control" name="senha_atual" id="senhatual" maxlength="20" oninput="validarCampoDeSenha()" autofocus>
                            </div>
                        </div>
                        <hr>
                       <div class="form-row">
                           <div class="col-md-6">
                               <div id="nova_senha">
                                    <label class="control-label" for="nova_senha">Nova Senha</label>
                                    <input type="password" class="form-control"  name="nova_senha" id="novasenha" maxlength="20" oninput="validarCampoDeSenha()" required>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div id="confirma_senha">
                                    <label class="control-label" for="confirma_senha">Confirme a Nova Senha</label>
                                    <input type="password" class="form-control" name="confirma_senha" id="confirmasenha" maxlength="20" oninput="validarCampoDeSenha()" required>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="box-footer">

                             <input type="button" id="mostrar_senha_alterar" class="btn btn-default btn-md" value="Mostrar Senhas" class="button" />

                        <div class="pull-right">
                            <input class="btn btn-primary btn-md" type="submit" value="Atualizar">
                            <a href="/perfil" class="btn btn-primary btn-md">Voltar</a>
                        </div>
                    </div>
                </form>
                </div>

                <?php if( $sucessoAlterarSenha != '' ){ ?>

                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo htmlspecialchars( $sucessoAlterarSenha, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>


            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
