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

class CommerceLab_News_Model_News extends Mage_Core_Model_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init('clnews/news');
    }

    public function getUrl($category = '') {
        if ($category) {
            $url = Mage::getUrl(Mage::helper('clnews')->getRoute()).$category.'/'.$this->getUrlKey().Mage::helper('clnews')->getNewsitemUrlSuffix();
        } else {
            $url = Mage::getUrl(Mage::helper('clnews')->getRoute()).$this->getUrlKey().Mage::helper('clnews')->getNewsitemUrlSuffix();
        }
        return $url;
    }

    /**
     * Reset all model data
     *
     * @return CommerceLab_News_Model_News
     */
    public function reset()
    {
        $this->setData(array());
        $this->setOrigData();
        $this->_attributes = null;
        return $this;
    }
}
