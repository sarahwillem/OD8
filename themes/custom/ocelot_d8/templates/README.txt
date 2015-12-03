The templates folder contains all of the template files for this theme. Template
files are inherited from Drupal core, modules, or base themes. To modify a
template, copy it to the templates folder and then make your changes. Do not
modify templates in their original location.

The folder structure inside the templates folder can be organized in any way.
Drupal will recursively look through all sub-directories to find the right file.
In cases where a template file is referenced directly, like when using 'extends'
in a template, the exact path must be specified. For example:

{% extends "@classy/block/block.html.twig" %}

Notice that the templates folder is not added to the path. It is always assumed,
which is different from referencing CS or JS files. In those cases, the entire
path, starting at the root of the theme folder, is required.

For more information on templates, inheritance, and naming conventions see
https://www.drupal.org/node/2186401.
