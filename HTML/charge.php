<!DOCTYPE html>
<html lang="en">
<head>
    <title>적립금 충전</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/charge.css"></link>
    <script src="//code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<?php
      include("Header.php");
    ?>

      <!--본문 시작-->
      <article>
  <div style="margin-top: 200px;">
       
    <div class="page_top">
      <span class="page_name">충전하기</span>
      <br>
      <hr class="hr_1">
      <p>임의로 만든 페이지로, 결제 금액만 누르면 자동 충전이 됩니다.</p>
    </div>
 <!--충전하기-->
    <form action = "charge_process.php" method = "post" id="charge_form">
        <div class = "container">
            <input type = "radio" name = "price" class="price" id = "10000" value = "10000" checked = "checked"/>
            <label for = "10000">10,000P</label>
            
            <input type = "radio" name = "price" class="price" id = "30000" value = "30000"/>
            <label for = "30000">30,000P</label>
            
            <input type = "radio" name = "price"  class="price" id = "50000" value = "50000"/>
            <label for = "50000">50,000P</label>
            
            <input type = "radio" name = "price"  class="price" id = "100000" value = "100000"/>
            <label for = "100000">100,000P</label>
            
            <input type = "radio" name = "price"  class="price" id = "200000" value = "200000"/>
            <label for = "200000">200,000P</label>
            
            <input type = "radio" name = "price"  class="price" id = "300000" value = "300000"/>
            <label for = "300000">300,000P</label>

            <div class = "point-balance">
                <p class = "text-center">
                    <span class = "text-alpha-black-47">충전 후 예상 보유 포인트 n,nnnP</span>
                </p>
            </div>
        </div>

        <!--결제수단-->
        <div class = "h1_top">
            <h2>결제수단</h2>
        </div>

        <div class = "container">
            <div class = "point-balance">
                <p class = "text-center">
                    <div class = "text-alpha-black-47">[기타결제수단]에서 네이버페이와 토스페이를 선택할 수 있어요.</div>
                    
                    <input type = "radio" name = "payment" id = "kakao" checked = "checked"/>
                    <label for = "kakao">카카오페이</label>
                    
                    <input type = "radio" name = "payment" id = "card"/>
                    <label for = "card">카드 간편 결제</label>
                    
                    <input type = "radio" name = "payment" id = "visa"/>
                    <label for = "visa">신용카드</label>
                    
                    <input type = "radio" name = "payment" id = "else"/>
                    <label for = "else">기타결제수단</label>
                    
                </p>
            </div>
        </div>

        <!--결제정보-->
        <div class = "h1_top">
            <h2>결제정보</h2>
        </div>

        <div class = "container_2">
            <div class = "form-group">
                <div class = "info">이름</div>
                <input id = "name" name = "name" class="form-control" value="ID">
            </div>
            <div class = "form-group">
                <div class = "info">연락처</div>
                <input id = "contact-number" name = "contact-number" class="form-control" placeholder = "예 : 01012345678"value>
            </div>
        </div>

        <!--결제금액-->
        <div class = "h1_top">
            <h2>결제금액</h2>
        </div>

        <div class = "container">
            <h3 id ="total-price">n,nnn원</h3>

           
            <div class = "last_container">
                <div class = "dbdmltkgkd">
                    <p class = "text-center mb-0">
                        <input type = "checkbox" id = "warn_check">
                            주문 내용과 아래 유의 사항을 확인하였으며 결제 진행에 동의합니다.
                    </p>
                </div>
            </div>
            <div class = "last_container">
                <div class = "pay-button" onClick="document.forms['charge_form'].submit();">
                        <a style = "text-decoration : none; color: black;">결제하기</a>
                </div>
            </div>
        </div>
            <div class = "last_last_container">
                <p class = "text_notice">
                    - 충전된 적립금 잔액 결제 취소는 적립금을 구매한 뒤 사용한 이력이 없고 결제 후 영업일 기준으로 7일 안에 결제 취소한 경우에 가능합니다. (가상계좌, 페이팔, 아이폰 인앱으로 결제 시 환불 불가) 적립금 충전 내역에서 '결제 취소'를 클릭하여 적립금 결제를 취소할 수 있습니다. 결제사 정책에 따라 카드 승인 취소 또는 대금이 고객님의 계좌로 입금되기까지 영업일 기준으로 최대 5일이 소요될 수 있습니다.
                </p>
                <p class = "text_notice">
                    - 위 경우를 제외하고 충전한 적립금의 잔액이 80% 이하일 때에 한해 환불 신청이 가능합니다. 1,000원 또는 잔액의 10% 중 큰 금액을 환급수수료로 제외하고 환불해 드립니다. 잔액이 10,000원 이하면 환불이 불가능합니다. 환불은 데일리 아틀리에 도움 센터를 통해 신청할 수 있습니다.
                </p>
                <p class = "text_notice">
                    - 환불 페이지의 모든 양식을 기입하여 제출하면 즉시 잔여 적립금이 차감됩니다. 환불한 금액은 영업일 기준으로 7일 안에 환불 계좌로 입금해 드립니다.
                </p>
                
                <p class = "text_notice">
                    - 미성년자는 적립금을 충전하기 전에 부모 등 법정 대리인의 동의를 받아야합니다.
                </p>
                
                <p class = "text_notice">
                    - 적립금은 결제한 날로부터 5년이 되는 시점에 소멸됩니다. 단, 직접 회원 탈퇴하거나 5년 이상 로그인하지 않아 계정이 삭제되면 그 즉시 소멸되며 복구할 수 없습니다.
                </p>
                <p class = "text_notice">
                    - 자세한 내용은 서비스 이용 전 동의하신 이용약관을 참고해주세요.
                </p>
            </div>
    </form>

</article>


    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
        $(document).ready(function(){
            $(".Header").load("../HTML/Header.html");
        });

        $(document).ready(function(){
            $(".footer-Background").load("../HTML/Footer.html");
        });
    </script>
</body>
</html>