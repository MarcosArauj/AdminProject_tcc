<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastro de Funcionário
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/funcionarios">Funcionários</a></li>
            <li class="active"><a href="/admin/funcionarios/<?php echo htmlspecialchars( $funcionario["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/atualiza">Editar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Funcionário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  role="form" action="/admin/funcionarios/<?php echo htmlspecialchars( $funcionario["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/atualiza" name="FormCadastro" method="post">
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Dados Pessoais</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <label class="control-label" for="primeiro_nome"><strong class="obrigatorio">*</strong>Primeiro Nome</label>
                                    <input type="text" class="form-control" id="primeiro_nome" name="primeiro_nome" maxlength="20" value="<?php echo htmlspecialchars( $funcionario["primeiro_nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autofocus required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="sobrenome"><strong class="obrigatorio">*</strong>Sobrenome</label>
                                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" maxlength="20" value="<?php echo htmlspecialchars( $funcionario["sobrenome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" for="rg"><strong class="obrigatorio">*</strong>RG</label>
                                    <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" value="<?php echo htmlspecialchars( $funcionario["rg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Contatos</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div id="email">
                                        <label class="control-label" for="email"><strong class="obrigatorio">*</strong>Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">@</span>
                                            <input type="email" class="form-control" name="email"  value="<?php echo htmlspecialchars( $funcionario["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" oninput="ValidarCampoEmail()" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="telefone"><strong class="obrigatorio">*</strong>Telefone</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control phone-ddd-mask" name="telefone" id="telefone" value="<?php echo htmlspecialchars( $funcionario["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="celular"><strong class="obrigatorio">*</strong>Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control cel-sp-mask" name="celular" id="celular" value="<?php echo htmlspecialchars( $funcionario["celular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Endereço</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-4">
                                    <label class="control-label" for="cep"><strong class="obrigatorio">*</strong>CEP</label>
                                    <input type="text" class="form-control cep-mask" name="cep" id="cep" value="<?php echo htmlspecialchars( $funcionario["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  required>
                                </div>
                                <div class="col-md-5">
                                    <label class="control-label" for="endereco"><strong class="obrigatorio">*</strong>Endereço</label>
                                    <input type="text" class="form-control" name="rua" id="endereco" value="<?php echo htmlspecialchars( $funcionario["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>

                                <div class="col-md-3">
                                    <label class="control-label" for="numero"><strong class="obrigatorio">*</strong>Número</label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="<?php echo htmlspecialchars( $funcionario["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="10" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="bairro"><strong class="obrigatorio">*</strong>Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo htmlspecialchars( $funcionario["bairro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="cidade"><strong class="obrigatorio">*</strong>Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="cidade"  value="<?php echo htmlspecialchars( $funcionario["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label" for="estado"><strong class="obrigatorio">*</strong>Estado</label>
                                    <input type="text" class="form-control" name="estado" id="estado" value="<?php echo htmlspecialchars( $funcionario["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-8">
                                    <label class="control-label" for="pais"><strong class="obrigatorio">*</strong>País</label>
                                    <input type="text" class="form-control" name="pais" id="pais" value="<?php echo htmlspecialchars( $funcionario["pais"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Acesso</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="acesso" value="1" <?php if( $funcionario["acesso"] == 1 ){ ?> checked <?php } ?> > Acesso de Administrador
                                        </label>
                                        <input type="hidden" name="responsavel_cadastro" value="<?php echo getNomeUsuario(); ?>">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="box-footer">
                    <div class="form-row pull-right">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-md" type="submit">Atualizar</button>
                            <a href="/admin/funcionarios" class="btn btn-primary btn-md">Voltar</a>
                        </div>
                  </div>
                </div>
            </form>

        </div>
        <!--Mensagem de Erro-->
        <?php if( $funcionarioErro != '' ){ ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo htmlspecialchars( $funcionarioErro, ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </div>
        <?php } ?>
    </section>
</div>


