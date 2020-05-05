<?php

namespace Ex\ExchangeRate\Controller\Index;

use \Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action {
	/** @var  \Magento\Framework\View\Result\Page */
	protected $resultPageFactory;
	/**      * @param \Magento\Framework\App\Action\Context $context      */

	public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)     {
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}

	/**
	 * Blog Index, shows a list of recent blog posts.
	 *
	 * @return \Magento\Framework\View\Result\PageFactory
	 */
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		//$resultPage->getConfig()->getTitle()->prepend(__('Exchange Rate'));
		return $resultPage;
	}
}
