<?php 


namespace App\Repositories; 
interface ProductInterface{
    public function all(); 
    public function show($id); 
    public function store(array $data);

}