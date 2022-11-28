<?php
class HelloWorld extends Module{
    public function __construct($name = null, Context $context = null)
     {
         $this->name = "helloworld";
         $this->version = "0.1";
         $this->author = "Johannes Thyroff";
         $this->ps_versions_compliancy = [
             "min" => "1.5",
             "max" => _PS_VERSION_
         ];
         $this->bootstrap = true;
         parent::__construct();

         $this->displayName = $this->l("Hello World!");
         $this->description = $this->l("My very first module.");
         $this->confirmUninstall = $this->l("Don't delete me. :(");
     }
}