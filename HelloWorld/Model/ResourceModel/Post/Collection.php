<?php

namespace VarnitSh\HelloWorld\Model\ResourceModel\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use VarnitSh\HelloWorld\Model\Post as PostModel;
use VarnitSh\HelloWorld\Model\ResourceModel\Post as PostResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}
?>