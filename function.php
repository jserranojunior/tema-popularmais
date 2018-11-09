add_action('wp', 'check_home');
function check_home() {
    if(is_home() || is_front_page()) {
        die("yes");
    } else {
        die("no");
    }
}