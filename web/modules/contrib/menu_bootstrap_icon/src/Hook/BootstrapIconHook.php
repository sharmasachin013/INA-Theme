<?php

namespace Drupal\menu_bootstrap_icon\Hook;

use Drupal\Component\Utility\Html;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Hook implementations for menu Bootstrap icon.
 */
class BootstrapIconHook {
  use StringTranslationTrait;

  /**
   * Implements hook_help().
   */
  #[Hook('help')]
  public function help($route_name, RouteMatchInterface $route_match) {
    switch ($route_name) {
      case 'help.page.menu_bootstrap_icon':
        $text = file_get_contents(__DIR__ . '/../../Readme.md');
        if (!\Drupal::moduleHandler()->moduleExists('markdown')) {
          return '<pre>' . Html::escape($text) . '</pre>';
        }
        else {
          // Use the Markdown filter to render the README.
          $filter_manager = \Drupal::service('plugin.manager.filter');
          $settings = \Drupal::configFactory()->get('markdown.settings')->getRawData();
          $config = ['settings' => $settings];
          $filter = $filter_manager->createInstance('markdown', $config);
          return $filter->process($text, 'en');
        }

      default:
        break;
    }
    return FALSE;
  }

}
