<?php

namespace VarnitSh\HelloWorld\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
   
    protected function _construct()
    {
        $this->_init('varnitsh_helloworld_post', 'post_id');
    }
}
?>