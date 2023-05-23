<?php

namespace Drupal\bay_monitoring\Plugin\monitoring\Support;

use Drupal\monitoring\Result\SensorResultInterface;

interface TideExternalServiceSupportInterface {
  public function runCheck(SensorResultInterface &$result);
}