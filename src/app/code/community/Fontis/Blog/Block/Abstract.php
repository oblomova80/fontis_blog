<?php
/**
 * Fontis Blog Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * Parts of this software are derived from code originally developed by
 * Robert Chambers <magento@robertchambers.co.uk>
 * and released as "Lazzymonk's Blog" 0.5.8 in 2009.
 *
 * @category   Fontis
 * @package    Fontis_Blog
 * @copyright  Copyright (c) 2016 Fontis Pty. Ltd. (https://www.fontis.com.au)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

abstract class Fontis_Blog_Block_Abstract extends Mage_Core_Block_Template
{
    use Fontis_Blog_Block_FrontendTrait;

    /**
     * @var Fontis_Blog_Model_Post[]|Fontis_Blog_Model_Mysql4_Post_Collection
     */
    protected $_posts = null;

    /**
     * @return string
     */
    abstract public function getHeader();

    /**
     * @return Fontis_Blog_Model_Post[]|Fontis_Blog_Model_Mysql4_Post_Collection
     */
    abstract public function getPosts();
}
