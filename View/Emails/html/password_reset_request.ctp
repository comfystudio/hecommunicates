<h2>Password reset</h2>
<p>A request to reset your password was sent. To change your password click the link below.</p>
<p><?php echo Router::url(array('admin' => true, 'controller' => 'users', 'action' => 'reset_password', $token), true); ?></p>