<?php
namespace Entidade;
abstract class EntidadeAbstrata

{
    protected static $pdo = NULL;
    protected static $tabela = NULL;

    public function __call($method, array $args)

    {
        $prefix = substr($method,0,3);
        if ($prefix == 'get')
        {
                {
                    $attribute = lcfirst(substr($method,3));
                    return $this->$attribute;
                }
                if ($prefix == 'set')
                {
                    $attribute = lcfirst(substr($method,3));
                    $this->$attribute = $args[0];
                    return $this;
                } 
        }
}

}

