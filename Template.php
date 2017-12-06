<?php

namespace tusharu\mailtemplates;


use tusharu\mailtemplates\TemplateAsset;
use Yii;

/**
 * mailtemplates module definition class
 */
class Template extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'tusharu\mailtemplates\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setAliases(['@tusharu-assets' => __DIR__ . '/assets']); 

        TemplateAsset::register(Yii::$app->view); 
        
        parent::init();
    }
}
