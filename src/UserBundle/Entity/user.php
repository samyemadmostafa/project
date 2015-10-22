<?php

namespace UserBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * user
 */
class user implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
	* @Assert\Length(
     *      min = 5,
     *      max = 15,
     *      minMessage = "Your username must be at least 5 characters long",
     *      maxMessage = "Your username cannot be longer than 15 characters"
     * )
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
	* @Assert\Email(
     *     message = "The email  is not a valid email",
     *     checkMX = true,
	 *     checkHost = true,
     * )
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $image;

    /**
     * @Assert\Url(
     *    message = "The facebook url  is not a valid url",
     * )
     * @var string
     */
    private $facebook;

    /**
     * @Assert\Url(
     *    message = "The twitter url  is not a valid url",
     * )
     * @var string
     */
    private $twitter;

    /**
	* @Assert\Url(
     *    message = "The googleplus url  is not a valid url",
     * )
     * @var string
     */
    private $googlePlus;

    /**
     * @var string
     */
    private $linkedin;

    /**
	* @Assert\Url(
     *    message = "The youtube url  is not a valid url",
     * )
     * @var string
     */
    private $youtube;
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
     * @return user
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return user
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return user
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return user
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
        return 'uploads';
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
     * Set facebook
     *
     * @param string $facebook
     *
     * @return user
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return user
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set googlePlus
     *
     * @param string $googlePlus
     *
     * @return user
     */
    public function setGooglePlus($googlePlus)
    {
        $this->googlePlus = $googlePlus;

        return $this;
    }

    /**
     * Get googlePlus
     *
     * @return string
     */
    public function getGooglePlus()
    {
        return $this->googlePlus;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return user
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return user
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }
	public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
	public function getRoles()
    {
        return array('ROLE_USER');
    }
	public function eraseCredentials()
    {
    }
}

