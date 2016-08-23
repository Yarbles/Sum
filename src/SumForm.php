<?php
/**
 * @file
 * Contains \Drupal\sum\Form\SumForm
 */

namespace Drupal\sum\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SumForm extends FormBase {
  /**
   * {@inheritdoc}
   */

  public function getFormId() {
    return 'sum_form';
  }
