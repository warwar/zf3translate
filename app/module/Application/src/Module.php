<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

//use Locale;
use Zend\Mvc\MvcEvent;

class Module
{
    const VERSION = '3.1.4dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        switch(strtolower(substr($e->getRequest()->getQuery('lang'), 0, 2))) {
            case 'ru':
                $lang = 'ru';
                break;
            default:
                $lang = 'en';
        }
        $translator = $e->getApplication()->getServiceManager()->get('MvcTranslator');
        $translator->setLocale($lang);
    }
}
