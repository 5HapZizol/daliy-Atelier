<?php
    session_start();
    include '../server.php'; 

    $tell = $_POST["tel1"].$_POST["tel2"].$_POST["tel3"];
    $email = $_POST['email_body'].'@'.$_POST['email_form'];

    $sql = " 
    UPDATE user set nickname = '{$_POST["nickname"]}', phone_number = '$tell', 
    email = '$email', email_agree = '{$_POST["email_agree"]}'
    where userid = 'test'";

    //sql문
    echo $sql;
    $row=mysqli_query($conn,$sql);
    $result = mysqli_query($conn, $sql);

    if($result == false){
        echo "저장 실패";
        echo mysqli_error($conn);
    }else{
        echo("<script>location.href='Mypage.html';</script>"); 

?>

<script>  //sns, email 라디오 스크립트
    function Click(){

    if($("input:radio[id='sns_y']").is(":checked")==true){ // if 시작
        var sns_n = $(":input:radio[id=sns_y]:checked").val();
        if(sns_n=='n'){
            return false;
        }
    }else{ //else 시작
        return false; 
    }

    if($("input:radio[id='email_y']").is(":checked")==true){ // if 시작

        var email_n = $(":input:radio[id=email_y]:checked").val();
        if(email_n=='n'){
            return false;
        }
    }else{ //else 시작
        return false; 
        }
    }
</script>

<script>
    function doAction(){
    let msgEle = document.getElementById("msg");
    //msgele.value의 입력값이 있을 경우에는 페이지를 이동
    //                    없을 경우에는 submit 동작을 취소
    if(msgEle.value.length == 0){//입력값이 없을 경우
    //이동x
    alert('공란을 입력하세요')
    return false;
    }
    //페이지 이동 -submit 진행
    return true;
    }
</script>
<?php
}
?>