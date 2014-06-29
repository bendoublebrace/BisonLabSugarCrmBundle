<?php

namespace RedpillLinpro\SugarCrmBundle\Service;


/*
 * Just a service object for the sugar7crm-wrapper class.
 */

class SugarWrapper 
{

    private $sugar;
    private $options;

    public function __construct($base_url, $username, $password)
    {
        $this->options = array('base_url' => $base_url, 
            'username' => $username, 
            'password' => $password);
    }


    public function getSugar()
    {

        if (!$this->sugar) 
            $this->connectSugar();

        return $this->sugar;

    }

    public function connectSugar()
    {
        $this->sugar = new \Spinegar\Sugar7Wrapper\Rest();
        $this->sugar->setClientOption('verify', false)
            ->setUrl($this->options['base_url'] . '/rest/v10/')
            ->setUsername($this->options['username'])
            ->setPassword($this->options['password'])
            ->connect();
    }
}