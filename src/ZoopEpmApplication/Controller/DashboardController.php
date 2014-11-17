<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZoopEpmApplication\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new ViewModel();
        $kpiPanel = new ViewModel();
        $kpiPanel->setTemplate('zoop-epm-application/dashboard/partial/kpi-panel');
        $view->addChild($kpiPanel,'kpiPanel');
        return $view;
    }

    public function kpiAction()
    {
        $view = new ViewModel();
        return $view;
    }
}
