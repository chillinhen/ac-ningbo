// Create 1 Custom Post type for a Demo, called ac-ningbo
function create_post_type_contact()
{
    register_taxonomy_for_object_type('category', 'ac-ningbo'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'ac-ningbo');
    register_post_type('ac-ningbo', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Contact Post', 'ac-ningbo'), // Rename these to suit
            'singular_name' => __('Contact Post', 'ac-ningbo'),
            'add_new' => __('Add New', 'ac-ningbo'),
            'add_new_item' => __('Add New Contact Post', 'ac-ningbo'),
            'edit' => __('Edit', 'ac-ningbo'),
            'edit_item' => __('Edit Contact Post', 'ac-ningbo'),
            'new_item' => __('New Contact Post', 'ac-ningbo'),
            'view' => __('View Contact Post', 'ac-ningbo'),
            'view_item' => __('View Contact Post', 'ac-ningbo'),
            'search_items' => __('Search Contact Post', 'ac-ningbo'),
            'not_found' => __('No Contact Posts found', 'ac-ningbo'),
            'not_found_in_trash' => __('No Contact Posts found in Trash', 'ac-ningbo')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_contact'); // Add our Contact Post Type
