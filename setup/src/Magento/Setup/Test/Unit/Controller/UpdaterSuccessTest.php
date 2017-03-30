<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Setup\Test\Unit\Controller;

use \Magento\Setup\Controller\UpdaterSuccess;

class UpdaterSuccessTest extends \PHPUnit_Framework_TestCase
{
    public function testIndexAction()
    {
        /** @var $maintenanceMode \Magento\Framework\App\MaintenanceMode */
        $maintenanceMode = $this->getMock(\Magento\Framework\App\MaintenanceMode::class, [], [], '', false);
        $maintenanceMode->expects($this->once())->method('set')->with(false);
        /** @var $controller UpdaterSuccess */
        $controller = new UpdaterSuccess($maintenanceMode);
        $viewModel = $controller->indexAction();
        $this->assertInstanceOf(\Zend\View\Model\ViewModel::class, $viewModel);
        $this->assertTrue($viewModel->terminate());
    }
}
