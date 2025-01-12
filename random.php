<?php
// Get a random post and generate the link
function get_random_post_link() {
    // Fetch a random post using WordPress query
    $random_post = get_posts([
        'posts_per_page' => 1, // Fetch only one post
        'orderby' => 'rand',  // Order by random
        'post_status' => 'publish', // Only published posts
    ]);

    // Check if a random post was found
    if (!empty($random_post)) {
        // Get the permalink of the random post
        $random_post_link = get_permalink($random_post[0]->ID);

        // Return the random post link
        return $random_post_link;
    }

    // Fallback if no posts are available
    return home_url('/');
}
?>

<!-- HTML output for the random link -->
<a href="<?php echo esc_url(get_random_post_link()); ?>">Random</a>
