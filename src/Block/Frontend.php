<?php

class Mattwellss_InlineJs_Block_Frontend extends Mage_Core_Block_Template
{

    protected $_frameOpenTag = 'script';
    protected $_frameCloseTag = '/script';
    protected $_type = null;
    protected $_id = null;

    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }

    protected function _beforeToHtml()
    {
        if (!is_null($this->_type)) {
            $this->_frameOpenTag .= " type=\"{$this->_type}\"";
        }
        if (!is_null($this->_id)) {
            $this->_frameOpenTag .= " id=\"{$this->_id}\"";
        }

        return parent::_beforeToHtml();
    }
}
