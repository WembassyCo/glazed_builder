<?php

namespace Drupal\glazed_commerce\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\commerce_product\Entity\Product as ProductEntity;

class Product extends ProductEntity {

  /**
   * Add an empty string to any field that would otherwise be completely empty.
   * Without this code, the frontend editor has nothing to attach to.
   *
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    parent::presave($storage);

    \Drupal::service('glazed_builder.service')->setEmptyStringToGlazedFieldsOnEntity($this);
  }
}
