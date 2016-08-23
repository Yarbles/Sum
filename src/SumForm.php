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
    return 'sum';
  }

  /**
* {@inheritDoc}
*/

public function buildForm(array $form, FormStateInterface $form_state) {
  $form['top_number'] = array(
      '#title' => 'Top number',
      '#type' => 'number',
      '#description' => t('Please enter a starting number to add.'),
  );

  $form['bottom_number'] = array(
      '#title' => 'Bottom number',
      '#type' => 'number',
      '#description' => t('Please enter a number to add to the starting number.'),
  );

  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Calculate Sum',
  );

  return $form;
}
