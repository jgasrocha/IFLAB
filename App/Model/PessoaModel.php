<?php

class PessoaModel
{
    public $id, $nome, $cpf, $data_nascimento;
    public $rows;

    public function save()
    {
        $dao = new PessoaDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else{
            $dao->update($this);
        } 
        
    }
    public function getALLRows()
    {
        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PessoaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PessoaModel();
    }

    public function delete(int $id)
    {
        $dao = new PessoaDAO();

        $dao->delete($id);
    }
}

?>