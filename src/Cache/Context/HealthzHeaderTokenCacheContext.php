<?php

namespace Drupal\bay_monitoring\Cache\Context;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\Context\CacheContextInterface;
use Drupal\Core\Cache\Context\RequestStackCacheContextBase;

/**
 * Defines a custom cache context based on the authentication header.
 */
class HealthzHeaderTokenCacheContext extends RequestStackCacheContextBase implements CacheContextInterface {

  /**
   * Name of the header containing the health check token.
   */
  protected const TOKEN_HEADER_NAME = 'Healthz-Token';

  /**
   * {@inheritdoc}
   */
  public static function getLabel() {
    return t('Health check token');
  }

  /**
   * {@inheritdoc}
   */
  public function getContext() {
    return $this->requestStack->getCurrentRequest()?->headers->get(static::TOKEN_HEADER_NAME) ?? '';
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheableMetadata() {
    return new CacheableMetadata();
  }

}
