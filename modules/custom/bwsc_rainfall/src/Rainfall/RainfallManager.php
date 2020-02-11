<?php

namespace Drupal\bwsc_rainfall\Rainfall;
use Drupal\bwsc_rainfall\Rainfall\RainfallManagerInterface;
use Drupal\Core\Messenger\Messenger;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class RainfallManager.
 */
class RainfallManager implements RainfallManagerInterface {

  /**
   * GuzzleHttp\ClientInterface definition.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;

  /**
   * Messenger definition.
   *
   * @var \Drupal\Core\Messenger\
   */
  protected $messenger;

  /**
   * Constructs a new RainfallManager object.
   */
  public function __construct(ClientInterface $http_client, Messenger $messenger) {
    $this->messenger = $messenger;
    $this->httpClient = $http_client;
    //$this->httpClient->getConfig(['base_url' => 'https://developers.flowworks.com/fwapi/v1/7d57de28-9419-4188-9625-5931013fd7cd/']);
  }

  public function printHello() {

    $this->messenger->addMessage("this service is loaded and running", "status", TRUE);


  }

  public function testHttpClient() {

    try {

      $response = $this->httpClient->request('GET', 'https://reqres.in/api/users');
      //$response = $this->httpClient->request('GET', 'https://developers.flowworks.com/fwapi/v1/7d57de28-9419-4188-9625-5931013fd7cd/site');

      $stream = $response->getBody();
      $content = $stream->getContents();

      $this->messenger->addMessage((string)$content);

    } catch (GuzzleException $e) {
      $this->messenger->addMessage($e->getMessage(), "error", TRUE);

    }

  }

  public function getAllSites() {
    $this->messenger->addMessage("get site funtion", "status");

    $strJsonFileContents = file_get_contents("rainfall-sites.json");
    var_dump($strJsonFileContents); // show contents
  }

  public function loadRainfall($siteId, $startDate, $endDate) {

  }

  public function loadDailyRainfall($siteId, $startDate, $endDate) {

  }

  public function loadHourlyRainfall($siteId, $startDate, $endDate) {

  }

}
