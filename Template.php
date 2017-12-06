<?php

namespace tusharug\mailtemplates;


use tusharug\mailtemplates\TemplateAsset;
use Yii;

/**
 * mailtemplates module definition class
 */
class Template extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'tusharug\mailtemplates\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setAliases(['@tusharug-assets' => __DIR__ . '/assets']); 

        TemplateAsset::register(Yii::$app->view); 
        
        parent::init();
    }
}
