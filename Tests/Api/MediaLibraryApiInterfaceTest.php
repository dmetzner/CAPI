<?php
/**
 * MediaLibraryApiInterfaceTest
 * PHP version 7.1.3.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.45
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * MediaLibraryApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @internal
 * @coversNothing
 */
class MediaLibraryApiInterfaceTest extends WebTestCase
{
  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass()
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass()
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp()
  {
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown()
  {
  }

  /**
   * Test case for mediaFileIdGet.
   *
   * Get the information of a specific media file.
   */
  public function testMediaFileIdGet()
  {
    $client = static::createClient();

    $path = '/media/file/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('\d+');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for mediaFilesGet.
   *
   * Get *all* content of the media library..
   */
  public function testMediaFilesGet()
  {
    $client = static::createClient();

    $path = '/media/files';

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for mediaFilesSearchGet.
   *
   * Search for mediafiles associated with keywords.
   */
  public function testMediaFilesSearchGet()
  {
    $client = static::createClient();

    $path = '/media/files/search';

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for mediaPackageNameGet.
   *
   * Get media-library asstes of a named package.
   */
  public function testMediaPackageNameGet()
  {
    $client = static::createClient();

    $path = '/media/package/{name}';
    $pattern = '{name}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-_]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
  }

  protected function genTestData($regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
