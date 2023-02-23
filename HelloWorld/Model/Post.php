<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Created By : Rohan Hapani
 */
namespace VarnitSh\HelloWorld\Model;
use Magento\Framework\Model\AbstractModel;
use VarnitSh\HelloWorld\Model\ResourceModel\Post as PostResourceModel;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
?>