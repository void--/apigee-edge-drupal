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

/**
 * Defines an interface for Apigee Edge field storage formatters.
 */
interface ApigeeFieldStorageFormatInterface {

  /**
   * Encodes field data to the target format.
   *
   * @param array $data
   *   Data to be encoded.
   *
   * @return string
   *   Encoded data.
   */
  public function encode(array $data): string;

  /**
   * Decodes field data from the target format.
   *
   * @param string $data
   *   Encoded data.
   *
   * @return array
   *   Decoded data.
   */
  public function decode(string $data): array;

}
