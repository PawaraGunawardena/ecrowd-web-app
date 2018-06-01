<div style="padding: 300px;">
<h1>User Details Edit</h1>




<form action = "<?php echo URL;?>user/editSave/<?php echo $this->user['username'];?>" method="POST">

<!--    <label>Username</label>  <input type="text" name="username" value="--><?php //echo $this->user['username']?><!--"><br/><br/>-->
    <label>Email</label>  <input type="text" name="email" value="<?php echo $this->user['email']?>"><br/><br/>
    <label>First name</label>  <input type="text" name="first_name" value="<?php echo $this->user['first_name']?>"><br/><br/>
    <label>Last name</label>  <input type="text" name="last_name" value="<?php echo $this->user['last_name']?>"><br/><br/>
    <label>Password</label>  <input type="password" name="password"><br/><br/>
    <label>Role</label>
        <select name="role">
            <option value="user" <?php if($this->user['role']=='user') echo 'selected';?>>General User</option>
            <option value="admin" <?php if($this->user['role']=='admin') echo 'selected';?>>Admin</option>
        </select><br/>
    <label>&nbsp</label> <input type="submit" value="Add">
</form>

<hr/>

