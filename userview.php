include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/pluggable.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/user.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/plugin.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/class-wp-user.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/meta.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/functions.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/option.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/wp-db.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/load.php");
include_once("C:/xampp/apps/wordpress/htdocs/wp-includes/connMySQL.php");


$current_user = wp_get_current_user();
echo "Hi justin!.'<br>'";
    $current_user = wp_get_current_user();
    /**
     * @example Safe usage:
     * $current_user = wp_get_current_user();
     * if ( ! $current_user->exists() ) {
     *     return;
     * }
     */
    echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />';
	echo 'User Farm: ' . $current_user->farm . '<br />';



if ($current_user->farm == 'four'):
	$sql = "SELECT location FROM `four seasons pilgrimage garden`";
	$result = mysqli_query($con,$sql);
	while($row_result=mysqli_fetch_array($result)){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br/>";
		}
	}

elseif ($current_user->farm == 'norm'):
	$sql = "SELECT location FROM `national farmland`";
	$result = mysqli_query($con,$sql);
	while($row_result=mysqli_fetch_array($result)){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br/>";
		}
	}

else:
	echo "there is no result!<br>";

endif;

$current_user_id = get_current_user_id();
echo 'Your User ID is: ' .$current_user_id.'<br>';
?>
