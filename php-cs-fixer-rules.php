<?php

return [
    '@PSR12' => true,

    /*
     * Alias
     */
    'no_alias_functions' => true,
    'no_alias_language_construct_call' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],

    /*
     * Array
     */
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_whitespace_before_comma_in_array' => true,
    'normalize_index_brace' => true,
    'trim_array_spaces' => true,
    'whitespace_after_comma_in_array' => ['ensure_single_space' => true],

    /*
     * Basic
     */
    'curly_braces_position' => [
        'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
        'allow_single_line_empty_anonymous_classes' => false,
        'allow_single_line_anonymous_functions' => false,
    ],
    'no_trailing_comma_in_singleline' => true,
    'psr_autoloading' => true,

    /*
     * Casing
     */
    'class_reference_name_casing' => true,
    'integer_literal_case' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'native_function_casing' => true,
    'native_function_type_declaration_casing' => true,

    /*
     * Casing
     */
    'cast_spaces' => true,
    'no_short_bool_cast' => true,
    'no_unset_cast' => true,

    /*
     * Class Notation
     */
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'only_if_meta',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line' => true,
        'single_line' => true,
        'inline_constructor_arguments' => false,
        // 'space_before_parenthesis' => true,
    ],
    'no_null_property_initialization' => true,
    'self_accessor' => true,
    'self_static_accessor' => true,
    'single_class_element_per_statement' => [
        'elements' => ['const', 'property'],
    ],

    /*
     * Comment
     */
    'single_line_comment_spacing' => true,
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],

    /*
     * Control Structure
     */
    'include' => true,
    'no_alternative_syntax' => true,
    'no_unneeded_control_parentheses' => [
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'others',
            'return',
            'switch_case',
            'yield',
            'yield_from',
        ],
    ],
    'no_unneeded_curly_braces' => ['namespaces' => true],
    'no_useless_else' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],

    /*
     * Function Notation
     */
    'lambda_not_used_import' => true,
    'no_unreachable_default_argument_value' => true,
    'nullable_type_declaration_for_default_null_value' => [
        'use_nullable_type_declaration' => false,
    ],

    /*
     * Import
     */
    'fully_qualified_strict_types' => true,
    'no_unneeded_import_alias' => true,
    'no_unused_imports' => true,
    'ordered_imports' => [
        'imports_order' => ['class', 'function', 'const'],
        'sort_algorithm' => 'alpha'
    ],
    'single_import_per_statement' => [
        'group_to_single_imports' => true,
    ],

    /*
     * Language Construct
     */
    'declare_parentheses' => true,
    'nullable_type_declaration' => ['syntax' => 'question_mark'],
    'single_space_around_construct' => true,

    /*
     * List Notation
     */
    'list_syntax' => true,

    /*
     * Namespace Notation
     */
    'clean_namespace' => true,
    'no_leading_namespace_whitespace' => true,

    /*
     * Operator
     */
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => ['=>' => null],
    ],
    'concat_space' => [
        'spacing' => 'none',
    ],
    'increment_style' => ['style' => 'post'],
    'logical_operators' => true,
    'new_with_braces' => [
        'anonymous_class' => false,
    ],
    'no_useless_concat_operator' => true,
    'no_useless_nullsafe_operator' => true,
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true,
    'operator_linebreak' => ['only_booleans' => true],
    'unary_operator_spaces' => true,

    /*
     * PHP Tag
     */
    'echo_tag_syntax' => true,
    'linebreak_after_opening_tag' => true,

    /*
     * PHPDoc
     */
    'align_multiline_comment' => true,
    'general_phpdoc_tag_rename' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_phpdoc' => true,
    'no_superfluous_phpdoc_tags' => [
        'allow_mixed' => true,
        'allow_unused_params' => true,
        'remove_inheritdoc' => true,
    ],
    'phpdoc_annotation_without_dot' => true,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag_normalizer' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => [
        'order' => ['param', 'return', 'throws'],
    ],
    'phpdoc_return_self_reference' => true,
    'phpdoc_scalar' => true,
    'phpdoc_separation' => [
        'groups' => [
            ['deprecated', 'link', 'see', 'since'],
            ['author', 'copyright', 'license'],
            ['category', 'package', 'subpackage'],
            ['property', 'property-read', 'property-write'],
            ['param'],
            ['return', 'phpstan-return'],
            ['throws'],
        ],
    ],
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_tag_type' => [
        'tags' => ['inheritDoc' => 'inline'],
    ],
    'phpdoc_to_comment' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'phpdoc_var_without_name' => true,
    'phpdoc_no_access' => true,

    /*
     * Return Notation
     */
    'no_useless_return' => true,
    'simplified_null_return' => true,

    /*
     * Semicolon
     */
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'no_empty_statement' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'semicolon_after_instruction' => true,
    'space_after_semicolon' => true,

    /*
     * Strict
     */
    'strict_comparison' => true,
    'strict_param' => true,

    /*
     * String Notation
     */
    'heredoc_to_nowdoc' => true,
    'no_binary_string' => true,
    'single_quote' => true,

    /*
     * Whitespace
     */
    'array_indentation' => true,
    'blank_line_before_statement' => [
        'statements' => [
            'continue',
            'return',
            'throw',
            'try',
        ],
    ],
    'method_chaining_indentation' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'continue',
            'return',
            'throw',
            'use',
            'switch',
            'case',
            'default',
        ],
    ],
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],
    'type_declaration_spaces' => true,
    'types_spaces' => true,

    /*
     * Enforce non-yoda style
     */
    'yoda_style' => [
        'always_move_variable' => false,
        'equal' => false,
        'identical' => false,
        'less_and_greater' => false,
    ],
];
