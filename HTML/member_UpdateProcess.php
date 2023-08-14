<?php
    $conn = mysqli_connect("127.0.0.1", "localhost", "Senior", "daily_atelier", "1521");

    $servername = "xe";
    $dbname = "Senior"; 
    $user = "daily_atelier";
    $password = "1111";

    //id는 바뀌지 않게
    $nickname = $_POST['nickname'];


    $ch_address = $_POST['address'];
    $address_detail = $_POST['address_detail'];
    //address 최종
    $address_fin = $_POST['address'.'address_detail'];

   
    $email_head = $_POST['email_head'];
    $email_form = $_POST['email_form'];
    //email 최종
    $email = $_POST['email_head'.'email_form'];

    
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $tel3 = $_POST['tel3'];
    $number = $_POST['tel1'.'tell2'.'tell3'];
    //tell 최종
    $tell = $_POST['number'];

    
    $sns_agree = $_POST['sns'];
    $email_agree = $_POST['email'];

    $sql = "
    INSERT INTO user
    (name, nickname, phone_number, email, address)
    VALUES('{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['address']}','{$_POST['tell']}', '{$_POST['email']}', '{$_POST['sns_agree']}','{$_POST['email_agree']}'
    )";


    //입력값 없을 때
    if ($_POST != null){
        $arr = $_POST['nickname', 'address', 'address_detail', 'email_head', 'email_form', 'tel1', 'tel2', 'tel3'];
        $result = "";
        foreach($arr as $item){
            $result .= $item . "\n";
        }
    } else {
        $result = "필수입력 항목입니다.";
    }


    //sql문
    echo $sql;
    $result = mysqli_query($conn, $sql);

    if($result == false){
        echo "저장 실패";
        echo mysqli_error($conn);
    }else{
        echo("<script>location.href='Mypage.html';</script>"); 
} 
?>

<script>  //sns, email 라디오 스크립트  
    function Click(){

    //script쓰려고 echo문에 넣으면 오류가 남...... 왜지.....?
    if($("input:radio[id='sns_ok']").is(":checked")==true){ // if 시작
        var sns_no = $(":input:radio[id=sns_ok]:checked").val();
        if(sns_no=='no'){
            return false;
        }
    }else{ //else 시작
        return false; 
    }

    if($("input:radio[id='email_ok']").is(":checked")==true){ // if 시작

        var email_no = $(":input:radio[id=email_ok]:checked").val();
        if(email_no=='no'){
            return false;
        }
    }else{ //else 시작
        return false; 
        }
    }
</script>