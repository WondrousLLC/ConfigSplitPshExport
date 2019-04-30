<?php
namespace Drush\Commands\config_split_psh_export;

use Drush\Commands\DrushCommands;
use Consolidation\AnnotatedCommand\CommandData;

/**
 *
 */
class ConfigSplitPshExportCommands extends DrushCommands {

  const HOOK_FUNCTION = 'preCommandConfigSplitPshExport';

  /**
   * Hooks into config-export drush command and alters it's behavior.
   *
   * @hook pre-command-event config:export
   *
   * @param \Consolidation\AnnotatedCommand\CommandData $commandData
   */
  public function preCommand(CommandData $commandData) {
    if (!function_exists(self::HOOK_FUNCTION)) {
      return;
    }

    call_user_func(self::HOOK_FUNCTION, $commandData);
  }
}
