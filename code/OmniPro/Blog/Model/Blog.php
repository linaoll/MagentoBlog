<?php
namespace OmniPro\Blog\Model;

class Blog extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \OmniPro\Blog\Api\Data\BlogInterface
{
    const CACHE_TAG = 'omnipro_blog_blog';
    const TITLE = 'title';
    const CONTENT = 'content';
    const IMAGE = 'image';
    const EMAIL = 'email';
    const ID = 'id';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'blog';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\OmniPro\Blog\Model\ResourceModel\Blog::class);
    }

    /**
     * Return a unique id for the model.
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function setContent($content) {
        $this->setData(self::CONTENT, $content);
    }

    public function getEmail() {
        return $this->getData(self::EMAIL);
    }

    public function setEmail($email) {
        $this->setData(self::EMAIL, $email);
    }

    public function getImage() {
        return $this->getData(self::IMAGE);
    }

    public function setImage($img) {
        $this->setData(self::IMAGE, $img);
    }

}
