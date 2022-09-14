<?php
/**
 * CommerceLab Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the CommerceLab License Agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://commerce-lab.com/LICENSE.txt
 *
 * @category   CommerceLab
 * @package    CommerceLab_News
 * @copyright  Copyright (c) 2012 CommerceLab Co. (http://commerce-lab.com)
 * @license    http://commerce-lab.com/LICENSE.txt
 */

require 'Mage' . DS . 'Widget' .DS . 'controllers' . DS . 'Adminhtml' . DS . 'WidgetController.php';
class CommerceLab_News_WidgetController extends Mage_Widget_Adminhtml_WidgetController
{
    /**
     * Chooser Source action
     */
    public function indexAction()
    {
        $uniqId = $this->getRequest()->getParam('short_content');
        $pagesGrid = $this->getLayout()->createBlock('widget/adminhtml_widget', '', array(
            'id' => $uniqId,
        ));
        $this->getResponse()->setBody($pagesGrid->toHtml());
    }
}
