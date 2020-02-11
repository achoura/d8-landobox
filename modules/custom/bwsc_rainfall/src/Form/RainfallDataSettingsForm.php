<?php

namespace Drupal\bwsc_rainfall\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RainfallDataSettingsForm.
 */
class RainfallDataSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'bwsc_rainfall.rainfalldatasettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'rainfall_data_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('bwsc_rainfall.rainfalldatasettings');
    $form['flowworks_api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('FlowWorks API Key'),
      '#description' => $this->t('API Key for FlowWorks platform'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('flowworks_api_key'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('bwsc_rainfall.rainfalldatasettings')
      ->set('flowworks_api_key', $form_state->getValue('flowworks_api_key'))
      ->save();
  }

}
