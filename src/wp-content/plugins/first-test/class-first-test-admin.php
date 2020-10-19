<?php
function myplugin_register_settings() {
  add_option( 'myplugin_option_name', 'This is my option value.');
  register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
}
add_action( 'admin_init', 'myplugin_register_settings' );

function myplugin_register_options_page() {
  add_options_page('First test settings', 'First test', 'manage_options', 'myplugin', 'myplugin_options_page');
}
add_action('admin_menu', 'myplugin_register_options_page');

function myplugin_options_page()
{
?>
  <div>
    <?php screen_icon(); ?>
    <h1>My Plugin Page Title</h1>
    <form method="post" action="options.php">
      <?php settings_fields( 'myplugin_options_group' ); ?>
      <h3>This is my option</h3>
      <p>Some text here.</p>
      <table>
        <tr valign="top">
          <th scope="row">
            <label for="myplugin_option_name">Label</label>
          </th>
          <td>
            <input type="text" id="myplugin_option_name" name="myplugin_option_name" value="<?php echo get_option('myplugin_option_name'); ?>" />
          </td>
        </tr>
      </table>
      <?php  submit_button(); ?>
    </form>
  </div>
<?php
} ?>

