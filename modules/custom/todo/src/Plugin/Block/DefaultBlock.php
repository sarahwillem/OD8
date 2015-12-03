<?php

/**
 * @file
 * Contains \Drupal\todo\Plugin\Block\DefaultBlock.
 */

namespace Drupal\todo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    // $build['default_block']['#markup'] = '<h2>TODO</h2>';
    $build['todo_example'] = [
      '#theme' => 'todo',
      '#name' => 'Example',
      '#items' => [
        'Item 1',
        'Item 2',
        'Item 3',
      ],
      '#status' => 'Done!',
    ];

    return $build;
  }

}



/**
 * @file
 * Contains \Drupal\todo\Plugin\Block\TodoBlock.
 */

// namespace Drupal\todo\Plugin\Block;

// use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TodoBlock' block.
 *
 * @Block(
 *  id = "todo_block",
 *  admin_label = @Translation("Todo block"),
 * )
 */
// class DefaultBlock extends BlockBase {


//   /**
//    * {@inheritdoc}
//    */
//   public function build() {
//     $items = [
//       ['name' => 'Soup', 'published' => FALSE],
//       ['name' => 'Tomato', 'published' => TRUE],
//       ['name' => 'Lettuce', 'published' => TRUE],
//     ];
//     $build = [];
//     $build['first_todo_block'] = [
//       '#theme' => 'todo',
//       '#attributes' => [
//         'class' => 'todo',
//       ],
//       '#name' => 'Groceries',
//       '#items' => $items,
//       '#status' => 'Done',
//     ];

//     $build['second_todo_block'] = [
//       '#theme' => 'todo',
//       '#attributes' => [
//         'class' => 'todo',
//       ],
//       '#name' => 'Another example',
//       '#items' => [
//       ],
//       '#status' => 'In Progress',
//     ];

//     return $build;
//   }

// }
