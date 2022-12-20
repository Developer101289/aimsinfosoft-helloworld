<?php
/**
 * Aimsinfosoft
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the aimsinfosoft.com license that is
 * available through the world-wide-web at this URL:
 * https://www.aimsinfosoft.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Aimsinfosoft
 * @package     Aimsinfosoft_Helloworld
 * @copyright   Copyright (c) Aimsinfosoft (https://www.aimsinfosoft.com)
 * @license     https://www.aimsinfosoft.com/LICENSE.txt
 */
 
 namespace Aimsinfosoft\Helloworld\Controller\Index;
 
 class Helloworld extends \Magento\Framework\App\Action\Action
 {
     protected $_pageFactory;
 
     public function __construct(
         \Magento\Framework\App\Action\Context $context,
         \Magento\Framework\View\Result\PageFactory $pageFactory)
     {
         $this->_pageFactory = $pageFactory;
         return parent::__construct($context);
     }
 
     public function execute()
     {
         echo "Hello World";
         exit;
     }
 }
 