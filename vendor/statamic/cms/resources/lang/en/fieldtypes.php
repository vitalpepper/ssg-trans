<?php

return [
    'any.config.antlers' => 'Enable Antlers parsing in this field\'s content.',
    'any.config.cast_booleans' => 'Options with values of true and false will be saved as booleans.',
    'any.config.mode' => 'Choose your preferred UI style.',
    'array.config.expand' => 'Whether to save the array in the expanded format. Use this if you intend to have numeric values.',
    'array.config.keys' => 'Set the array keys (variables) and optional labels.',
    'array.config.mode' => 'The **dynamic** mode gives the user free control of the data, while **keyed** and **single** modes enforce strict keys.',
    'array.title' => 'Array',
    'assets.config.allow_uploads' => 'Allow new file uploads.',
    'assets.config.container' => 'Choose which asset container to use for this field.',
    'assets.config.dynamic' => 'Assets will be placed in a subfolder based on the value of this field.',
    'assets.config.folder' => 'The folder to begin browsing in.',
    'assets.config.max_files' => 'Set a maximum number of selectable assets.',
    'assets.config.min_files' => 'The minimum number of selectable assets.',
    'assets.config.mode' => 'Choose your preferred layout style.',
    'assets.config.query_scopes' => 'Choose which query scopes should be applied when retrieving selectable assets.',
    'assets.config.restrict' => 'Prevent users from navigating to other folders.',
    'assets.config.show_filename' => 'Show the filename next to the preview image.',
    'assets.config.show_set_alt' => 'Show a link to set the Alt Text of any images.',
    'assets.dynamic_folder_pending_field' => 'This field will be available once :field is set.',
    'assets.dynamic_folder_pending_save' => 'This field will be available after saving.',
    'assets.title' => 'Assets',
    'asset_folders.config.container' => 'Choose which asset container to use for this field.',
    'bard.config.allow_source' => 'Enable to view the HTML source code while writing.',
    'bard.config.always_show_set_button' => 'Enable to always show the "Add Set" button.',
    'bard.config.buttons' => 'Choose which buttons to show in the toolbar.',
    'bard.config.container' => 'Choose which asset container to use for this field.',
    'bard.config.enable_input_rules' => 'Enables Markdown-style shortcuts when typing content.',
    'bard.config.enable_paste_rules' => 'Enables Markdown-style shortcuts when pasting content.',
    'bard.config.fullscreen' => 'Enable toggle for fullscreen mode',
    'bard.config.inline' => 'Disable block elements like headings, images, and sets.',
    'bard.config.inline.break' => 'Enabled with line breaks',
    'bard.config.inline.disabled' => 'Disabled',
    'bard.config.inline.enabled' => 'Enabled without line breaks',
    'bard.config.link_collections' => 'Entries from these collections will be available in the link selector. Leaving this empty will make all entries available.',
    'bard.config.link_noopener' => 'Set `rel="noopener"` on all links.',
    'bard.config.link_noreferrer' => 'Set `rel="noreferrer"` on all links.',
    'bard.config.previews' => 'Shown when sets are collapsed.',
    'bard.config.reading_time' => 'Show estimated reading time at the bottom of the field.',
    'bard.config.remove_empty_nodes' => 'Choose how to deal with empty nodes.',
    'bard.config.save_html' => 'Save HTML instead of structured data. This simplifies but limits control of your template markup.',
    'bard.config.section.editor.instructions' => 'Configure the editor\'s appearance and general behavior.',
    'bard.config.section.links.instructions' => 'Configure how links are handled in this instance of Bard.',
    'bard.config.section.sets.instructions' => 'Configure blocks of fields that can be inserted anywhere in your Bard content.',
    'bard.config.select_across_sites' => 'Allow selecting entries from other sites. This also disables localizing options on the front-end. Learn more in the [documentation](https://statamic.dev/fieldtypes/entries#select-across-sites).',
    'bard.config.smart_typography' => 'Convert common text patterns with the proper typographic characters.',
    'bard.config.target_blank' => 'Set `target="_blank"` on all links.',
    'bard.config.toolbar_mode' => '**Fixed** mode will keep the toolbar visible at all times, while **floating** only appears while selecting text.',
    'bard.config.word_count' => 'Show the word count at the bottom of the field.',
    'bard.title' => 'Bard',
    'button_group.title' => 'Button Group',
    'checkboxes.config.inline' => 'Show the checkboxes in a row.',
    'checkboxes.config.options' => 'Set the array keys and their optional labels.',
    'checkboxes.title' => 'Checkboxes',
    'code.config.indent_size' => 'Set your preferred indentation size (in spaces).',
    'code.config.indent_type' => 'Set your preferred type of indentation.',
    'code.config.key_map' => 'Choose preferred set of keyboard shortcuts.',
    'code.config.mode' => 'Choose language for syntax highlighting.',
    'code.config.mode_selectable' => 'Whether the mode can be changed by the user.',
    'code.config.rulers' => 'Configure vertical rulers to help with indentation.',
    'code.config.theme' => 'Choose your preferred theme.',
    'code.title' => 'Code',
    'collections.title' => 'Collections',
    'color.config.allow_any' => 'Allow entering any color value via picker or hex code.',
    'color.config.default' => 'Choose a default color.',
    'color.config.swatches' => 'Pre-define colors that can be selected from a list.',
    'color.title' => 'Color',
    'date.config.columns' => 'Show multiple months at one time, in rows and columns',
    'date.config.earliest_date' => 'Set the earliest selectable date.',
    'date.config.format' => 'How the date should be stored, using the [PHP date format](https://www.php.net/manual/en/datetime.format.php).',
    'date.config.full_width' => 'Stretch the calendar to use up the full width.',
    'date.config.inline' => 'Skip the dropdown input field and show the calendar directly.',
    'date.config.latest_date' => 'Set the latest selectable date.',
    'date.config.mode' => 'Choose between single or range mode (range disables time picker).',
    'date.config.rows' => 'Show multiple months at one time, in rows and columns',
    'date.config.time_enabled' => 'Enable the timepicker.',
    'date.config.time_seconds_enabled' => 'Show seconds in the timepicker.',
    'date.title' => 'Date',
    'dictionary.config.dictionary' => 'The dictionary you wish to pull options from.',
    'dictionary.file.config.filename' => 'The filename containing your options, relative to the `resources/dictionaries` directory.',
    'dictionary.file.config.label' => 'The key containing the options\' labels. By default it\'s `label`. Alternatively, you may use Antlers.',
    'dictionary.file.config.value' => 'The key containing the options\' values. By default it\'s `value`.',
    'entries.config.collections' => 'Choose which collections the user can select from.',
    'entries.config.create' => 'Allow creation of new entries.',
    'entries.config.query_scopes' => 'Choose which query scopes should be applied when retrieving selectable entries.',
    'entries.config.search_index' => 'An appropriate search index will be used automatically where possible, but you may define an explicit one.',
    'entries.config.select_across_sites' => 'Allow selecting entries from other sites. This also disables localizing options on the front-end. Learn more in the [documentation](https://statamic.dev/fieldtypes/entries#select-across-sites).',
    'entries.title' => 'Entries',
    'float.title' => 'Float',
    'form.config.max_items' => 'Set a maximum number of selectable forms.',
    'form.config.query_scopes' => 'Choose which query scopes should be applied when retrieving selectable forms.',
    'form.title' => 'Form',
    'grid.config.add_row' => 'Customize the label of the "Add Row" button.',
    'grid.config.border' => 'Show a border and padding around fields in this group.',
    'grid.config.fields' => 'Each field becomes a column in the grid table.',
    'grid.config.fullscreen' => 'Enable toggle for fullscreen mode.',
    'grid.config.max_rows' => 'Set a maximum number of creatable rows.',
    'grid.config.min_rows' => 'Set a minimum number of creatable rows.',
    'grid.config.mode' => 'Choose your preferred layout style.',
    'grid.config.reorderable' => 'Enable the ability to reorder rows.',
    'grid.title' => 'Grid',
    'group.config.fields' => 'Configure fields to be nested inside this group.',
    'group.title' => 'Group',
    'hidden.title' => 'Hidden',
    'html.config.html_instruct' => 'Manage the HTML to be displayed in the publish form.',
    'html.title' => 'HTML',
    'icon.config.directory' => 'The path to the directory containing the icons.',
    'icon.config.folder' => 'A subdirectory containing a specific icon set.',
    'icon.title' => 'Icon',
    'integer.title' => 'Integer',
    'link.config.collections' => 'Entries from these collections will be available. Leaving this empty will make entries from routable collections available.',
    'link.config.container' => 'Choose which asset container to use for this field.',
    'link.title' => 'Link',
    'list.title' => 'List',
    'markdown.config.automatic_line_breaks' => 'Enables automatic line breaks.',
    'markdown.config.automatic_links' => 'Enables automatic linking of any URLs.',
    'markdown.config.container' => 'Choose which asset container to use for this field.',
    'markdown.config.escape_markup' => 'Escapes inline HTML markup (e.g. `<div>` to `&lt;div&gt;`).',
    'markdown.config.folder' => 'The folder to begin browsing in.',
    'markdown.config.heading_anchors' => 'Inject anchor links to all of your heading elements (`<h1>`, `<h2>`, etc)',
    'markdown.config.parser' => 'The name of a customized Markdown parser. Leave blank for default.',
    'markdown.config.restrict' => 'Prevent users from navigating to other folders.',
    'markdown.config.smartypants' => 'Automatically convert straight quotes into curly quotes, dashes into en/em-dashes, and other similar text transformations.',
    'markdown.config.table_of_contents' => 'Automatically insert a table of contents at the top of your content with links to your headings.',
    'markdown.title' => 'Markdown',
    'picker.category.controls.description' => 'Fields that provide selectable options or buttons that can control logic.',
    'picker.category.media.description' => 'Fields that store images, videos, or other media.',
    'picker.category.number.description' => 'Fields that store numbers.',
    'picker.category.relationship.description' => 'Fields that store relationships to other resources.',
    'picker.category.special.description' => 'These fields are special, each in their own way.',
    'picker.category.structured.description' => 'Fields that store structured data. Some can even nest other fields inside themselves.',
    'picker.category.text.description' => 'Fields that store strings of text, rich content, or both.',
    'radio.config.inline' => 'Show the radio buttons in a row.',
    'radio.config.options' => 'Set the array keys and their optional labels.',
    'radio.title' => 'Radio',
    'range.config.append' => 'Add text to the end (right-side) of the slider.',
    'range.config.max' => 'The maximum, right-most value.',
    'range.config.min' => 'The minimum, left-most value.',
    'range.config.prepend' => 'Add text to the beginning (left-side) of the slider.',
    'range.config.step' => 'The minimum size between values.',
    'range.title' => 'Range',
    'relationship.config.mode' => 'Choose your preferred UI style.',
    'replicator.config.button_label' => 'Add a label to the add set button.',
    'replicator.config.collapse' => 'The set collapsing behavior.',
    'replicator.config.collapse.accordion' => 'Only allow one set to be expanded at a time',
    'replicator.config.collapse.disabled' => 'All sets expanded by default',
    'replicator.config.collapse.enabled' => 'All sets collapsed by default',
    'replicator.config.fullscreen' => 'Enable toggle for fullscreen mode.',
    'replicator.config.max_sets' => 'Set a maximum number of sets.',
    'replicator.config.previews' => 'Show a preview of the content inside a set while collapsed.',
    'replicator.config.sets' => 'Sets are configurable blocks of fields that be created and reordered as desired.',
    'replicator.title' => 'Replicator',
    'revealer.config.input_label' => 'Set a label to be shown in the button or beside the toggle.',
    'revealer.config.mode' => 'Choose your preferred UI style.',
    'revealer.title' => 'Revealer',
    'section.title' => 'Section',
    'select.config.clearable' => 'Enable to allow deselecting your option.',
    'select.config.multiple' => 'Allow multiple selections.',
    'select.config.options' => 'Set the keys and their optional labels.',
    'select.config.placeholder' => 'Set placeholder text.',
    'select.config.push_tags' => 'Add newly created tags to the options list.',
    'select.config.searchable' => 'Enable searching through possible options.',
    'select.config.taggable' => 'Allow adding new options in addition to pre-defined options',
    'select.title' => 'Select',
    'sites.title' => 'Sites',
    'slug.config.from' => 'Target field to create a slug from.',
    'slug.config.generate' => 'Create a slug automatically from target `from` field.',
    'slug.config.show_regenerate' => 'Show the regenerate button to re-slugify from the target field.',
    'slug.title' => 'Slug',
    'structures.title' => 'Structures',
    'table.config.max_columns' => 'Set a maximum number of columns.',
    'table.config.max_rows' => 'Set a maximum number of rows.',
    'table.title' => 'Table',
    'taggable.config.options' => 'Provide pre-defined tags that can be selected.',
    'taggable.config.placeholder' => 'Type and press ↩ Enter',
    'taggable.title' => 'Taggable',
    'taxonomies.title' => 'Taxonomies',
    'template.config.blueprint' => 'Adds a "map to blueprint" option. Learn more in the [documentation](https://statamic.dev/views#inferring-templates-from-entry-blueprints).',
    'template.config.folder' => 'Only show templates in this folder.',
    'template.config.hide_partials' => 'Partials are rarely intended to be used as templates.',
    'template.title' => 'Template',
    'terms.config.create' => 'Allow creation of new terms.',
    'terms.config.query_scopes' => 'Choose which query scopes should be applied when retrieving selectable terms.',
    'terms.config.taxonomies' => 'Choose which taxonomies to show terms from.',
    'terms.title' => 'Taxonomy Terms',
    'text.config.append' => 'Add text after (to the right of) the input.',
    'text.config.autocomplete' => 'Set the autocomplete attribute.',
    'text.config.character_limit' => 'Set the maximum number of enterable characters.',
    'text.config.input_type' => 'Set the HTML5 input type.',
    'text.config.placeholder' => 'Set placeholder text.',
    'text.config.prepend' => 'Add text before (to the left of) the input.',
    'text.title' => 'Text',
    'textarea.title' => 'Textarea',
    'time.config.seconds_enabled' => 'Show seconds in the timepicker.',
    'time.title' => 'Time',
    'toggle.config.inline_label' => 'Set an inline label to be shown beside the toggle input.',
    'toggle.config.inline_label_when_true' => 'Set an inline label to be shown when the toggle\'s value is true.',
    'toggle.title' => 'Toggle',
    'user_groups.title' => 'User Groups',
    'user_roles.title' => 'User Roles',
    'users.config.query_scopes' => 'Choose which query scopes should be applied when retrieving selectable users.',
    'users.title' => 'Users',
    'video.title' => 'Video',
    'width.config.options' => 'Set the available width options.',
    'yaml.title' => 'YAML',
];
