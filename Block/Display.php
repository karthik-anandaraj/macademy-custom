<?php
namespace Macademy\Custom\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    public $data=[["Elsevier","Alice","England"],["RELX","Bob","Netherlands"]];
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function sayHello()
	{
        		return $this->data;
	}
}