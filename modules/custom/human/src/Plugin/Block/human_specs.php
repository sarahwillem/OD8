<?php

/**
 * @file
 * Contains \Drupal\human\Plugin\Block\human_specs.
 */

namespace Drupal\human\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'human_specs' block.
 *
 * @Block(
 *  id = "human_specs",
 *  admin_label = @Translation("Human_specs"),
 * )
 */
class human_specs extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build_human_specs = [];
    // $build['human_specs']['#markup'] = 'Implement human_specs.';
    $build_human_specs['human_specs'] = [
      '#theme' => 'human',
      '#img' => '../../../themes/custom/ocelot_d8/assets/100x100',
      '#name' => 'Hugh Jackman',
      '#followers' => '12,354 Followers',
      '#stats' => [
        'msgs' => '23',
        'watches' => '213',
        'likes' => '147',   
      ], 
    ];

    return $build_human_specs;
  }

}
