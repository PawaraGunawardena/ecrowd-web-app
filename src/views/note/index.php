<h1>Note</h1>

<form action = "<?php echo URL;?>note/create" method="POST">
    <label>Username</label>  <input type="text" name="username"><br/><br/>
    <label>Email</label>  <input type="text" name="email"><br/><br/>
    <label>First name</label>  <input type="text" name="first_name"><br/><br/>
    <label>Last name</label>  <input type="text" name="last_name"><br/><br/>
    <label>Password</label>  <input type="password" name="password"><br/><br/>
    <label>Role</label>
        <select name="role">
            <option value="user">General User</option>
            <option value="admin">Admin</option>
        </select><br/>
    <label>&nbsp</label> <input type="submit" value="Add">
</form>

<hr/>

<table>
    <?php
        foreach($this->userList as $key => $value){
            echo '<tr>';

            echo ' <td> '.$value['user_id'].' </td> ';
            echo '<td>'.$value['username'].'</td>';
            echo '<td>'.$value['first_name'].'</td>';
            echo '<td>'.$value['last_name'].'</td>';
            echo '<td>'.$value['email'].'</td>';
            echo '<td>'.$value['role'].'</td>';

            echo '<td> 
                <a href='.URL.'user/edit/'.$value['user_id'].'>Edit</a>
                <a href='.URL.'user/delete/'.$value['user_id'].'>Delete</a></td>';
            echo '</tr>';
        }
    ?>




</table>