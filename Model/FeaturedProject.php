<?php
/**
 * FeaturedProject.
 *
 * PHP version 5
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
 * The version of the OpenAPI document: v1.0.31
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
 * Class representing the FeaturedProject model.
 *
 * @author  OpenAPI Generator team
 */
class FeaturedProject
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
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * @var string|null
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $author;

  /**
   * @var string|null
   * @SerializedName("featured_image")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $featured_image;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->author = isset($data['author']) ? $data['author'] : null;
    $this->featured_image = isset($data['featured_image']) ? $data['featured_image'] : null;
  }

  /**
   * Gets id.
   *
   * @return string|null
   */
  public function getId()
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
   * Gets name.
   *
   * @return string|null
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets author.
   *
   * @return string|null
   */
  public function getAuthor()
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets featured_image.
   *
   * @return string|null
   */
  public function getFeaturedImage()
  {
    return $this->featured_image;
  }

  /**
   * Sets featured_image.
   *
   * @return $this
   */
  public function setFeaturedImage(string $featured_image = null)
  {
    $this->featured_image = $featured_image;

    return $this;
  }
}
