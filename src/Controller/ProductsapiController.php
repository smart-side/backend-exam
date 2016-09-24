<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of ProductsApiController
 *
 * @author fcorrea
 */
class ProductsapiController extends AppApiController
{

    public function index()
    {
        $tableProduct = \Cake\ORM\TableRegistry::get('Product');
        $result = $tableProduct->find('all');
        
        echo json_encode($result);
    }

    public function view($id)
    {
        $tableProduct = \Cake\ORM\TableRegistry::get('Product');
        $result = $tableProduct->get($id);
        echo json_encode($result);
    }
    
    public function add()
    {
        $jsonOut = [];
        $message = null;
        $tableProduct = \Cake\ORM\TableRegistry::get('Product');

        $product = $tableProduct->newEntity($this->request->data());
        
        if($tableProduct->save($product)){
            $jsonOut = $product->toArray();
        } else{
            $jsonOut['message'] = 'fail';
        }
        
        echo json_encode($jsonOut);
    }
    
    public function put($id)
    {
        $jsonOut = [];
        $tableProduct = \Cake\ORM\TableRegistry::get('Product');
        $product = $tableProduct->get($id);
        
        if ($this->request->is(['post', 'put'])) {
            $product = $tableProduct->patchEntity($product, $this->request->data);
            
            if($tableProduct->save($product)){
                $jsonOut['message'] = 'success';
            } else{
                $jsonOut['message'] = 'fail';
            }
            
        } else {
            $jsonOut['message'] = 'Invalid Http Method';
        }
        echo json_encode($jsonOut);        
    }
    
    public function delete($id)
    {
        $jsonOut = [];
        $tableProduct = \Cake\ORM\TableRegistry::get('Product');
        $product = $tableProduct->get($id);
        
        if(!$tableProduct->delete($product)){
            $jsonOut['message'] = 'Error';
        } else{
            $jsonOut['message'] = 'success';
        }
        
        echo json_encode($jsonOut);
    }

}
