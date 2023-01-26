<?php

namespace Eguana\ResetPassLinkBroken\Model;

class Url extends \Magento\Backend\Model\Url
{
    protected function _getScope()
    {
        $scopeData = ['code' => 'admin', 'force_disable_rewrites' => false, 'disable_store_in_url' => true];
        if (!$this->_scope) {
            $this->_scope = $this->_storeFactory->create(
                [
                    'url' => $this,
                    'data' => $scopeData,
                ]
            );
        } else{
            $this->_scope->addData($scopeData);
        }
        return $this->_scope;
    }
}
