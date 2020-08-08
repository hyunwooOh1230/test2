<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$year = $_POST['year'];



$sql = mq("insert into web_test (id,name,password,email,address,year) value ('$id','$name','$password','$email','$address','$year')");

// ★ $str = "select * from web_test where id='$id'";  검사 방법 : mq안에 있는 값을 넣고 echo를 사용하여 localhost에서 확인
// echo $str; ★
$sql = mq("select * from web_test where id='$id'"); //where 뒤에 확인
$result= $sql -> fetch_array();
echo $result['name']."<br>".$result['year'];

echo "<script>location.href='test.html'</script>" 
//가고 싶은 링크를 넣기 또는 이동한 페이지 안에서 버튼을 만들어서 delate문을 만들 수
// 있도록 만들어보기.

// 데이터베이스 기본 문법 공부하기.
// 유념해야 할 사항 태그를 만들 때 포스트 관련된 부분 공부하기.
// 알아뒀으면 좋은 점 : 잘 모를 때는 출력부터
// ★ $str = "select * from web_test where id='$id'";  검사 방법 : mq안에 있는 값을 넣고 echo를 사용하여 localhost에서 확인
// echo $str; ★


//$sql = mq("select id,name,password,email,address,image,year);
// $result= $sql -> fetch_array();
// echo $result['name'].$result['year'];
?>
