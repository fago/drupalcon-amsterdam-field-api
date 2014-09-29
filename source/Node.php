<?php

namespace Drupal\node\Entity;

/**
 * Defines the node entity class.
 *
 * @ContentEntityType(
 *   id = "node",
 *   label = @Translation("Content"),
 *   handlers = {
 *     "storage" = "Drupal\node\NodeStorage",
 *     "storage_schema" = "Drupal\node\NodeStorageSchema",
 *     "view_builder" = "Drupal\node\NodeViewBuilder",
 *     "access" = "Drupal\node\NodeAccessControlHandler",
 *     "views_data" = "Drupal\node\NodeViewsData",
 *     "form" = {
 *       "default" = "Drupal\node\NodeForm",
 *     .....
 */
class Node extends ContentEntityBase implements NodeInterface {

  // Code...
}
