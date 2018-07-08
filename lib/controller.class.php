<?php

class Controller{
    
    protected $data;
    
    protected $model;
    
    protected $params;
    
    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
    
    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
    
    public function __construct($data = array())
    {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }
}