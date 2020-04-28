<?php
/*
 * Plugin Name: Test plugin
*/

    function ideapro_example_function()
        {
            $information = "This is plugin";
            return $information;
        }
    add_shortcode('example', 'ideapro_example_function');

    function ideapro_admin_menu_option()
    {
        add_menu_page('Header & Footer Scripts',
            'Site Scripts',
            'manage_options',
            'ideapro-admin-menu',
            'ideapro_scripts_page',
            '',
            200);
    }
    add_action('admin_menu','ideapro_admin_menu_option');

    function ideapro_scripts_page()
    {
        $header_scritps = get_option('ideapro_header_scritps', 'none');
        $footer_scritps = get_option('ideapro_footer_scritps', 'none');

        ?>
        <div class="wrap">
            <h2>Update Scripts on the header and footer</h2>

            <label for="header_scripts">Header Scripts</label>
            <textarea name="header_scripts" class="large-text"><?php print $header_scritps; ?></textarea>
            <label for="footer_scripts">Footer Scripts</label>
            <textarea name="footer_scripts" class="large-text"><?php print $footer_scritps; ?></textarea>

            <input type="submit" name="submit_scripts_update" class="button button-primary" value="UPDATE!">
        </div>
        <?php
    }

?>