<?php
/**
 * UpdateUserRequest.
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
 * Class representing the UpdateUserRequest model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateUserRequest
{
  /**
   * Indicates wether a request should only be verified or executed.
   *
   * @var bool|null
   * @SerializedName("dry-run")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $dry_run;

  /**
   * Email of the user.
   *
   * @var string|null
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * Name of the user | minLength: 3 | maxLength: 180.
   *
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $username;

  /**
   * A secure password | minLength: 6 | maxLength: 4096.
   *
   * @var string|null
   * @SerializedName("password")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $password;

  /**
   * @var string|null
   * @SerializedName("country")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $country;

  /**
   * @var UploadedFile|null
   * @SerializedName("image")
   * @Assert\Type("UploadedFile")
   * @Type("UploadedFile")
   */
  protected $image;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->dry_run = isset($data['dry_run']) ? $data['dry_run'] : false;
    $this->email = isset($data['email']) ? $data['email'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->password = isset($data['password']) ? $data['password'] : null;
    $this->country = isset($data['country']) ? $data['country'] : null;
    $this->image = isset($data['image']) ? $data['image'] : null;
  }

  /**
   * Gets dry_run.
   */
  public function isDryRun(): ?bool
  {
    return $this->dry_run;
  }

  /**
   * Sets dry_run.
   *
   * @param bool|null $dry_run indicates wether a request should only be verified or executed
   *
   * @return $this
   */
  public function setDryRun(bool $dry_run = null)
  {
    $this->dry_run = $dry_run;

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
   * @param string|null $email email of the user
   *
   * @return $this
   */
  public function setEmail(string $email = null)
  {
    $this->email = $email;

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
   * @param string|null $username Name of the user | minLength: 3 | maxLength: 180
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @param string|null $password A secure password | minLength: 6 | maxLength: 4096
   *
   * @return $this
   */
  public function setPassword(string $password = null)
  {
    $this->password = $password;

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
   * Gets image.
   */
  public function getImage(): ?UploadedFile
  {
    return $this->image;
  }

  /**
   * Sets image.
   *
   * @return $this
   */
  public function setImage(UploadedFile $image = null)
  {
    $this->image = $image;

    return $this;
  }
}
