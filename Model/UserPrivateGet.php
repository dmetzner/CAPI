<?php
/**
 * UserPrivateGet.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.40
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the UserPrivateGet model.
 *
 * @author  OpenAPI Generator team
 */
class UserPrivateGet
{
  /**
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $username;

  /**
   * EMail of the user.
   *
   * @var string|null
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * @var string|null
   * @SerializedName("profile_image")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $profile_image;

  /**
   * @var string|null
   * @SerializedName("country")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $country;

  /**
   * @var int|null
   * @SerializedName("projects")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $projects;

  /**
   * @var int|null
   * @SerializedName("followers")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $followers;

  /**
   * @var int|null
   * @SerializedName("following")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $following;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->email = isset($data['email']) ? $data['email'] : null;
    $this->profile_image = isset($data['profile_image']) ? $data['profile_image'] : null;
    $this->country = isset($data['country']) ? $data['country'] : null;
    $this->projects = isset($data['projects']) ? $data['projects'] : null;
    $this->followers = isset($data['followers']) ? $data['followers'] : null;
    $this->following = isset($data['following']) ? $data['following'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @param string|null $email EMail of the user
   *
   * @return $this
   */
  public function setEmail(string $email = null)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets profile_image.
   */
  public function getProfileImage(): ?string
  {
    return $this->profile_image;
  }

  /**
   * Sets profile_image.
   *
   * @return $this
   */
  public function setProfileImage(string $profile_image = null)
  {
    $this->profile_image = $profile_image;

    return $this;
  }

  /**
   * Gets country.
   */
  public function getCountry(): ?string
  {
    return $this->country;
  }

  /**
   * Sets country.
   *
   * @return $this
   */
  public function setCountry(string $country = null)
  {
    $this->country = $country;

    return $this;
  }

  /**
   * Gets projects.
   */
  public function getProjects(): ?int
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @return $this
   */
  public function setProjects(int $projects = null)
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets followers.
   */
  public function getFollowers(): ?int
  {
    return $this->followers;
  }

  /**
   * Sets followers.
   *
   * @return $this
   */
  public function setFollowers(int $followers = null)
  {
    $this->followers = $followers;

    return $this;
  }

  /**
   * Gets following.
   */
  public function getFollowing(): ?int
  {
    return $this->following;
  }

  /**
   * Sets following.
   *
   * @return $this
   */
  public function setFollowing(int $following = null)
  {
    $this->following = $following;

    return $this;
  }
}