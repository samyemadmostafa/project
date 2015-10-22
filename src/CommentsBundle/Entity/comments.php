<?php

namespace CommentsBundle\Entity;

/**
 * comments
 */
class comments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

private $authorname;
private $authoremail;
private $authorurl;
    /**
     * Get id
     *
     * @return integer
     */
	private $article_id; 
    

    /**
     * Set description
     *
     * @param string $description
     *
     * @return comments
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
////////////
    public function setAuthorName($authorname)
    {
        $this->authorname = $authorname;

        return $this;
    }
//////////////////
    public function getAuthorName()
    {
        return $this->authorname;
    }	
////////////
    public function setAuthorEmail($authoremail)
    {
        $this->authoremail = $authoremail;

        return $this;
    }
//////////////////
    public function getAuthorEmail()
    {
        return $this->authoremail;
    }
////////////
    public function setAuthorUrl($authorurl)
    {
        $this->authorurl = $authorurl;

        return $this;
    }
//////////////////
    public function getAuthorUrl()
    {
        return $this->authorurl;
    }
public function setArticleId($article_id)
    {
        $this->article_id = $article_id;

        return $this;
    }
//////////////////
    public function getArticleId()
    {
        return $this->article_id;
    }		
}

