<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */

namespace Drupal\apigee_edge\Plugin;

use Apigee\Edge\Client;
use Drupal\apigee_edge\Exception\AuthenticationKeyValueMalformedException;
use Drupal\Component\Serialization\Json;
use Drupal\key\KeyInterface;
use Drupal\key\Plugin\KeyTypeBase;

/**
 * Defines a base class for Apigee Edge Key Type plugins.
 */
abstract class EdgeKeyTypeBase extends KeyTypeBase implements EdgeKeyTypeInterface {

  /**
   * {@inheritdoc}
   */
  public function serialize(array $array) {
    return Json::encode($array);
  }

  /**
   * {@inheritdoc}
   */
  public function unserialize($value) {
    return Json::decode($value);
  }

  /**
   * {@inheritdoc}
   */
  public function getEndpoint(KeyInterface $key): string {
    return $key->getKeyValues()['endpoint'] ?? Client::DEFAULT_ENDPOINT;
  }

  /**
   * {@inheritdoc}
   */
  public function getOrganization(KeyInterface $key): string {
    if (!isset($key->getKeyValues()['organization'])) {
      throw new AuthenticationKeyValueMalformedException('organization');
    }
    return $key->getKeyValues()['organization'];
  }

  /**
   * {@inheritdoc}
   */
  public function getUsername(KeyInterface $key): string {
    if (!isset($key->getKeyValues()['username'])) {
      throw new AuthenticationKeyValueMalformedException('username');
    }
    return $key->getKeyValues()['username'];
  }

  /**
   * {@inheritdoc}
   */
  public function getPassword(KeyInterface $key): string {
    if (!isset($key->getKeyValues()['password'])) {
      throw new AuthenticationKeyValueMalformedException('password');
    }
    return $key->getKeyValues()['password'];
  }

}
