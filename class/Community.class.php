<?php
class Community extends Database{

public  function insert_post(){
if(isset($_REQUEST['submit'])){
$user_id = $_SESSION['uin'];
$title = trim($_REQUEST['title']);
$category = trim($_REQUEST['category']);
$body = trim($_REQUEST['body']);
$rand = rand(999999, 000000);
$today = date('ymd');
$post_id = $rand.$today;
$data=[
    'user_id'=>$user_id,
    'title'=>$title,
    'category'=>$category,
    'body'=>$body,
    'post_id'=>$post_id
];


$this->insertData('community',$data);
echo "<script>alert('Post added to community successfully')</script>";


}
}
public  function insert_blog(){
if(isset($_REQUEST['submit'])){
$user_id = $_SESSION['uin'];
$title = trim($_REQUEST['title']);
$body = trim($_REQUEST['body']);
$rand = rand(999999, 000000);
$today = date('ymd');
$post_id = $rand.$today;
$data=[
    'user_id'=>$user_id,
    'title'=>$title,
    'body'=>$body,
    'post_id'=>$post_id
];


$this->insertData('blog',$data);
echo "<script>alert('Post added to blog successfully')</script>";


}
}
public  function insert_comment($post_id){
if(isset($_REQUEST['submit'])){
$user_id = $_SESSION['uin'];
$comment = trim($_REQUEST['comment']);
$rand = rand(999999, 000000);
$today = date('ymd');
$comment_id = $rand.$today;
$data=[
    'user_id'=>$user_id,
    'comment'=>$comment,
    'post_id'=>$post_id
];


$this->insertData('community_comment',$data);
header("location:single_post.php?post_id=$post_id");


}
}
public  function insert_comment_blog($post_id){
if(isset($_REQUEST['submit'])){
$user_id = $_SESSION['uin'];
$comment = trim($_REQUEST['comment']);
$rand = rand(999999, 000000);
$today = date('ymd');
$comment_id = $rand.$today;
$data=[
    'user_id'=>$user_id,
    'comment'=>$comment,
    'post_id'=>$post_id
];


$this->insertData('blog_comment',$data);

header("location:single_blog.php?post_id=$post_id");



}
}

public function post_detail(){
    if(isset($_REQUEST['post_id'])){
        $id = $_REQUEST['post_id'];
        $data = $this->where('community','post_id',$id);
        return $data;
    }
}
public function blog_detail(){
    if(isset($_REQUEST['post_id'])){
        $id = $_REQUEST['post_id'];
        $data = $this->where('blog','post_id',$id);
        return $data;
    }
}





}






?>