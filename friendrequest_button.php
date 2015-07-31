<?php
include 'user_registration.php';
$user_id=user session value;
$friend_id=friend id value;
$result=mysqli_query($connection,"SELECT 'friend_one','friend_two','status' FROM friends WHERE (friend_one="$user_id" OR friend_two="$user_id") AND (friend_one="$friend_id" OR friend_two="$friend_id")");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row['friend_one']=='$user_id' && $row['status']=='0')
{
echo "user sent friend request";
}
else
{
echo "user received a friend request from friend";
}
?>