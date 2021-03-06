<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastro da Empresa no Sistema
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="/admin/empresa/atualiza/<?php echo htmlspecialchars( $empresa["id_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Atualiza</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!--Mensagem de Erro-->
        <?php if( $empresaErro != '' ){ ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo htmlspecialchars( $empresaErro, ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </div>
        <?php } ?>
        <!--Mensagem de Sucesso-->
        <?php if( $empresaSucesso != '' ){ ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo htmlspecialchars( $empresaSucesso, ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </div>
        <?php } ?>
        <div class="box box-success">
            <!-- /.box-header -->
            <!-- form start -->
            <form  role="form" action="/admin/empresa/atualiza/<?php echo htmlspecialchars( $empresa["id_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="FormCadastro" method="post">
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Dados da Empresa</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-12">
                                    <label class="control-label" for="razao_social"><strong class="obrigatorio">*</strong>Raz&atilde;o Social </label>
                                    <input type="text" class="form-control" id="razao_social" name="razao_social"  value="<?php echo htmlspecialchars( $empresa["razao_social"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autofocus required>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" for="nome_fantasia"><strong class="obrigatorio">*</strong>Nome Fantasia </label>
                                    <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia"  value="<?php echo htmlspecialchars( $empresa["nome_fantasia"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="nome_curto"><strong class="obrigatorio">*</strong>Nome Redusido</label>
                                    <input type="text" class="form-control" id="nome_curto" name="nome_curto" maxlength="20" value="<?php echo htmlspecialchars( $empresa["nome_curto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="cnpj"><strong class="obrigatorio">*</strong>CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj"  onkeypress="formatar('##.###.###/####-##',this)"  minlength="18"  value="<?php echo htmlspecialchars( $empresa["cnpj"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="inscricao_municipal"><strong class="obrigatorio">*</strong>Inscri&ccedil;&atilde;o Municipal</label>
                                    <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal" maxlength="20" value="<?php echo htmlspecialchars( $empresa["inscricao_municipal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="inscricao_estadual"><strong class="obrigatorio">*</strong>Inscri&ccedil;&atilde;o Estadual</label>
                                    <input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual" maxlength="20" value="<?php echo htmlspecialchars( $empresa["inscricao_estadual"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="url_empresa"><strong class="obrigatorio">*</strong>Url da Empresa</label>
                                    <input type="text" class="form-control" id="url_empresa" name="url_empresa" maxlength="20" value="<?php echo htmlspecialchars( $empresa["url_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h2 class="box-title">Contatos</h2>
                            </div>
                            <div class="box-body">
                                <div class="col-md-7">
                                <div id="email">
                                    <label class="control-label" for="email"><strong class="obrigatorio">*</strong>Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">@</span>
                                        <input type="email" class="form-control" name="email"  oninput="ValidarCampoEmail()" value="<?php echo htmlspecialchars( $empresa["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required >
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="control-label" for="senha"><strong class="obrigatorio">*</strong>Senha do Email</label>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="senha" id="senha" class="form-control" value="<?php echo htmlspecialchars( $empresa["senha"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                        <button type="button" id="mostrar_senha" name="mostrar_senha" class="fa fa-eye-slash" aria-hidden="true"></button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="telefone"><strong class="obrigatorio">*</strong>Telefone</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control phone-ddd-mask" name="telefone" id="telefone" value="<?php echo htmlspecialchars( $empresa["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="celular"><strong class="obrigatorio">*</strong>Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control cel-sp-mask" name="celular" id="celular" value="<?php echo htmlspecialchars( $empresa["celular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
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
                                    <input type="text" class="form-control cep-mask" name="cep" id="cep" value="<?php echo htmlspecialchars( $empresa["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="control-label" for="endereco"><strong class="obrigatorio">*</strong>Endereço</label>
                                    <input type="text" class="form-control" name="rua" id="endereco" value="<?php echo htmlspecialchars( $empresa["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>

                                <div class="col-md-3">
                                    <label class="control-label" for="numero"><strong class="obrigatorio">*</strong>Número</label>
                                    <input type="text" class="form-control" name="numero" id="numero"  value="<?php echo htmlspecialchars( $empresa["numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="bairro"><strong class="obrigatorio">*</strong>Bairro</label>
                                    <input type="text" class="form-control" name="estado" id="bairro" value="<?php echo htmlspecialchars( $empresa["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="cidade"><strong class="obrigatorio">*</strong>Cidade</label>
                                    <input type="text" class="form-control" name="estado" id="cidade"  value="<?php echo htmlspecialchars( $empresa["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label" for="estado"><strong class="obrigatorio">*</strong>Estado</label>
                                    <input type="text" class="form-control" name="estado" id="estado" value="<?php echo htmlspecialchars( $empresa["estado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <div class="col-md-8">
                                    <label class="control-label" for="pais"><strong class="obrigatorio">*</strong>País</label>
                                    <input type="text" class="form-control" name="pais" id="pais" value="<?php echo htmlspecialchars( $empresa["pais"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                </div>
                                <input type="hidden" name="responsavel_cadastro" value="<?php echo getNomeUsuario(); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                        <input class="btn btn-primary btn-md" type="submit" value="Atualiza">
                        <a href="/admin/empresa/detalha/<?php echo htmlspecialchars( $empresa["url_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-md">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

