<?php

namespace App\model;

// metodos 

class Produto{

    private $id,$nome, $descricao;


    public function getid(){
        return $this->id;
  
    }
  
    public function setid($id){
        $this->id = $id;   
     }
  


  public function getNome(){
      return $this->nome;

  }

  public function setNome($nome){
      $this->nome = $nome;   
   }


   public function getDescricao(){
     return $this->descricao;   
 }

 public function setDescricao($descricao){
    $this->descricao = $descricao;   
 }




}