<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 21/03/2019
 * Time: 13:27
 */

namespace App\Controllers;

use App\Models\Empresa;
use App\Models\Login;
use project\pages\PageCadastro;
use project\validacao\Validacao;

class EmpresaController extends Controller
{

    //Tela cadastrar Empresa
    public function cadastrarEmpresa($request, $response){
        Login::verifyLogin();

        if ($request->isGet()) {

            $page = new PageCadastro();

            $page->setTpl("cadastro_empresa", array(
                "empresaErro" => Empresa::getError(),
                "empresaSucesso" => Empresa::getSuccess()

            ));
        } else {

            $empresa = new Empresa();

            $posts = $request->getParsedBody();

            if (!Validacao::validaCNPJ($posts["cnpj"])) {
                Empresa::setError("CNPJ não; existe!");

                return $response->withRedirect($this->container->router->pathFor('cadastra-empresa'));
            }

            try {
                $verifica_empresa = Empresa::chegarEmprsa();

                if ($verifica_empresa > 0) {
                    Empresa::setError("Já existe uma emprasa Cadastrada no Sistema!");
                } else {

                    $empresa->setData($posts);

                    $empresa->salvarEmpresa();

                    Empresa::setSuccess("Empresa Cadastrada com Sucesso!");

                    return $response->withRedirect($this->container->router->pathFor('admin'));
                }
            } catch (\Exception $e) {

                Empresa::setError($e->getMessage());

                return $response->withRedirect($this->container->router->pathFor('cadastra-empresa'));
            }

        }
    }

    // Tela Area de Trabalho do Administrador da Empresa e Site
    public function areaAdministrativo(){
        Login::verifyLogin();

        $page = new PageCadastro();

        $page->setTpl("area-administrativo");
    }

    // Tela Dados da Empresa
    public function empresa($request, $response, $params){
        Login::verifyLogin();

        $empresa = new Empresa();

        $empresa->getUrl($params['url_empresa']);

        $page = new PageCadastro();

        $page->setTpl("empresa", array(
            "empresa" => $empresa->getValues(),
            "empresaSucesso" => Empresa::getSuccess()
        ));
    }

    public function atualizarEmpresa($request, $response, $params) {

        Login::verifyLogin();

        $empresa = new Empresa();

        $empresa->get((int)$params['id_empresa']);

        if ($request->isGet()) {

            $page = new PageCadastro();

            $page->setTpl("atualizar_empresa", array(
                "empresa" => $empresa->getValues(),
                "empresaErro" => Empresa::getError(),
                "empresaSucesso" => Empresa::getSuccess()
            ));
        } else {
            $posts = $request->getParsedBody();

            if (!Validacao::validaCNPJ($posts["cnpj"])) {
                Empresa::setError("CNPJ não; existe!");

                return $response->withRedirect($this->container->router->pathFor('atualizar-empresa',['id_empresa'=>$empresa->getid_empresa()]));
            }

            try {

                $empresa->setData($posts);

                $empresa->salvarEmpresa();

                Empresa::setSuccess("Empresa Alterada com Sucesso!");

                return $response->withRedirect($this->container->router->pathFor('empresa',['url_empresa'=>$empresa->geturl_empresa()]));

            } catch (\Exception $e) {

                Empresa::setError($e->getMessage());

                return $response->withRedirect($this->container->router->pathFor('atualizar-empresa',['id_empresa'=>$empresa->getid_empresa()]));
            }

        }

    }
}
