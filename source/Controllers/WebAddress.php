<?php

namespace Source\Controllers;
use Source\Models\Endereco;
use Source\Models\Usuario;

class WebAddress extends Controller{

    public function __construct($router){
        parent::__construct($router);
        if(empty($_SESSION["user"]) || !$this->user = (new Usuario)->findById(intval($_SESSION["user"]))){
            $this->router->redirect("web.login");
        }
    }

    public function edit($data){
        $principal = 0;
        if(!empty($data["mainAddress"])){
            $principal = 1;
        }

        $address = (new Endereco)->findById(intval($data["idAddress"]));
        if(!filter_var($data["idAddress"], FILTER_VALIDATE_INT) || !$address || $this->user->idUsuario != $address->user()->idUsuario){
            $this->router->redirect("app.error", ["errcode" => "404"]);
        }

        $address->nome = $data["name"];
        $address->cep = $data["cep"];
        $address->bairro = $data["district"];
        $address->rua = $data["street"];
        $address->numeroCasa = $data["house-number"];
        $address->cidade = $data["city"];
        $address->estado = $data["state"];
        $address->principal = $principal;
        $address->save();

        $this->router->redirect("address.listAddresses");
        
        var_dump($address);
    }
}