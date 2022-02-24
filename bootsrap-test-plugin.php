<?
/**
*Plugin name: Test version of aplugin to activate bootstrap in theme
*/
function include_bootstrap() {
    wp_enqueque_style("demo-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css")

}
add_action("wp_enqueque_scripts", "include-bootstrap")
?>