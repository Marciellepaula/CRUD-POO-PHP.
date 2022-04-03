<?php

namespace App\model;


use \PDO;
use \PDOException;



class ProdutoDao
{


    //Ações..



    public function create(Produto $p)
    {
        // Inserindo no banco

        $sql = 'INSERT INTO produto (nome,descricao) VALUES (?,?)';
        $stml = conexao::getConn()->prepare($sql);
        $stml->bindValue(1, $p->getNome());
        $stml->bindValue(2, $p->getDescricao());
        $stml->execute();
    }


    public function read()
    {
        $sql = 'SELECT *  FROM produto';
        $stml = conexao::getConn()->prepare($sql);
        $stml->execute();

        if ($stml->rowCount() > 0) :
            $resultado = $stml->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        endif;
    }

    public function update(Produto $p, $id)
    {
        $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';
        $stml =  conexao::getConn()->prepare($sql);
        $stml->bindValue(1, $p->getNome());
        $stml->bindValue(2, $p->getDescricao());
        $stml->bindValue(3, $id);
        $stml->execute();
    }

    public function delete($id)
    {

        $sql = 'DELETE from produto WHERE id = ?';
        $stml =  conexao::getConn()->prepare($sql);
        $stml->bindValue(1, $id);
        $stml->execute();
    }

    public  function  selectid($id)
    {  
        $sql = 'SELECT *  FROM produto  WHERE id = ?';
        $stml = conexao::getConn()->prepare($sql);
        $stml->bindValue(1, $id);
        $stml->execute();
        if ($stml->rowCount() > 0) {
            $data = $stml->fetchAll();

            foreach ($data as $item) {
               $u = new Produto();   // objeto retornado
               $u->setid($item['id']);  // serão armazenado os dados do banco...
               $u->setNome($item['nome']);
               $u->setDescricao($item['descricao']);

             
            }
        }
        return $u;  // retorna um objeto 
    }
}



