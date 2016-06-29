<?php
class ProdutosController extends AppController{
    public $helpers = array('Html');

    public function index(){
        $this->set('produtos', $this->Produto->find('all'));
    }

    public function view ($id){
        $produto = $this->Produto->findById($id);
        $this->set('produto', $produto);
    }
}
 ?>
