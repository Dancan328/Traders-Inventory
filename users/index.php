<?php
/**
 * users/index.php
 *
 * @package default
 */
// spaces before html can cause some servers to error.
ob_start();
require_once '../includes/load.php';
if ($session->isUserLoggedIn()) { redirect('../users/home.php', false);}
?>
<?php include_once '../layouts/header.php'; ?>
<div class="login-page">
    <div class="text-center">
        <h1>Welcome</h1>
        <p>Sign in to start your session</p>
    </div>
    <?php echo display_msg($msg); ?>
    <form method="post" action="../users/auth.php" class="clearfix">
        <div class="form-group">
            <label for="username" class="control-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info pull-right">Login</button>
        </div>
    </form>
</div>

<?php include_once '../layouts/footer.php'; ?>
