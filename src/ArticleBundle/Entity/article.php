<?php

namespace ArticleBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * article
 */
class article
{
	


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
private $category_id;
	 public function __construct()
    {
        $this->category_id = new ArrayCollection();
    }   
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set name
     *
     * @param string $name
     *
     * @return article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
	

    /**
     * Set image
     *
     * @param string $image
     *
     * @return article
     */
    public function setImage(UploadedFile $image = null)
    {
        if($image != null)
		{
$dirpath = $this->getUploadRootDir();			
if($this->image != null)
{	
unlink($dirpath."/".$this->image);	
}	
		$originalname=$image->getClientOriginalName();
        $this->image = $originalname;
		$ext = $image->guessExtension();
		$name = substr($image, 0, - strlen($ext));
        
		$image->move($dirpath,$originalname);
        return $this;
		}
    }
	 public function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploadsarticle';
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return article
     */
   
	 public function setCategoryId(\CategoryBundle\Entity\category $category = null)
    {
        $this->category_id = $category->getId();

        return $this;
    }
	

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }
}

