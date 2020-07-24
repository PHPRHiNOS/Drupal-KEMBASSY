<?php

namespace Drupal\websocket_task\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ChatForm.
 *
 * @package Drupal\websocket_task\Form
 */
class ChatForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'chat_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['chat_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Send'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('Your message was submitted!'));
  }

}
