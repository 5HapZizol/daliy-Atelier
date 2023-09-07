<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>주문</title>>
    <link rel="stylesheet" href="../css/Order.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<?php
      include("Header.php");
    ?>

    <article>
      <!--본문 시작-->
    
    <div class = "h1_top"><h1>주문하기</h1></div>

    <div class = "divide_hr"><hr></div>


    <div class="conatiner">
        <table align="center">
            <tr>
                <td rowspan="3">
                    혜택정보
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    nnn 님은 작가/일반 회원이십니다.
                </td>
            </tr>
              <tr>
                <td>
                    가용적립금 : nn,nnn 원
                </td>
                <td>
                    쿠폰 :n개
                </td>
              </tr>
        </table>
    </div>


    <div class="conatiner">
        <table align="center">
            <tr>
              <th>
                <input type="checkbox">
              </th>
                <th>
                    이미지
                </th>
                <th>
                    상품정보
                </th>
                <th>
                    낙찰가
                </th>
                <th>
                    적립금
                </th>
                <th>
                    배송구분
                </th>
                <th>
                    배송비
                </th>
                <th>
                    합계
                </th>
            </tr>
            <tr>
              <th>
                <input type="checkbox">
              </th>
                <td>
                    <img src="">
                </td>
                <td>
                    작품 이름
                    <br>
                    장르 / 재료 / 작가이름
                </td>
                <td>
                    nnn,nnn 원
                </td>
                <td>
                    nnn 원
                </td>
                <td>
                    기본 배송
                </td>
                <td>
                    차등
                </td>
                <td>
                    300,000원
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    작품 구매 금액 <!--금액--> + 배송비 <!--배송비--> = 합계 : <!--합계-->
                </td>
            </tr>
        </table>

    </div>


    <div class="conatiner">
      <table align="center">
        <tr>
          <th colspan="2">
            
          <span>배송정보</span>
        
        <span style="float: right;"> *필수입력사항</span>
          </th>
        </tr>
        <tr>
          <tr>

            <td>
              배송지 선택
            </td>
            <td>
              <input type="radio" name="info" value="equal" checked>회원 정보와 일치
              <input type="radio" name="info" value="new">새로운 배송지
              <input type="button" value="주소록보기 >">
            </td>
          </tr>

          <tr>
            <td>
              받으시는 분*
            </td>
            <td>
              <input type="text" name="name">
            </td>
          </tr>

          <tr>
            <td>
              주소*
            </td>
            <td>
              <input type="text">
              <input type="button" onclick="execDaumPostcode()" name = "adrress-num" value="우편번호 찾기">
              <br><br>
              <input type="text" name="address" size=70% maxlength=50>
            </td>
          </tr>

          <tr>
            <td>
              휴대전화*
            </td>
            <td>
              <select name = "phone-num">
                <option value="010" selected>010</option>
                <option value="011">011</option>
              </select>
              -
              <input type="text" name="first-phone-num" size="4" maxlength="4">
              -
              <input type="text" name="second-phone-num" size="4" maxlength="4">
            </td>
          </tr>

          <tr>
            <td>
              이메일*
            </td>
            <td>
              <input type="text" name="email-id" size="10">
              @
              <input type="text" name="email-address" size="10">
              <select name="email">
                <option value="self-input" selected>--직접 입력--</option>
                <option name="naver" value="naver">naver.com</option>
                <option name="daum" value="daum">daum.net</option>
                <option name="gmail" value="gmail">gmail.com</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>
              배송 메시지
            </td>
            <td>
              <textarea rows="2" cols="50"></textarea>
            </td>
          </tr>
          
      </table>
    </div>

    <div class="conatiner">
      <table align="center">
        <tr>
          <th>
            총 주문 금액
            <input type="button" name="total-price" value="내역보기 >">
          </th>
          <th>
            총 할인 + 부가결제 금액
          </th>
          <th>
            총결제예상금액
          </th>
        </tr>

        <tr>
          <td>
            <h2>nn,nnn 원</h2>
          </td>
          <td>
            <h2>- n 원</h2>
          </td>
          <td>
            <h2>= nn,nnn 원</h2>
          </td>
        </tr>
      </table>

      <table align="center">
        <tr>
          <td>
            총 할인금액
          </td>
          <td>
            n원
          </td>
        </tr>

        <tr>
          <td>
            총 부가결제금액
          </td>
          <td>
            n원
          </td>
        </tr>

        <tr>
          <td>
            적립금
          </td>
          <td>
            <input type="text" name="juklipgeum" size="10">
            원 (총 사용가능 적립금 : nnn원)
            <br>
            - 적립금은 최소 0 이상일 때 결제가 가능합니다.
            <br>
            - 최대 사용금액은 제한이 없습니다.
            <br>
            - 적립금으로만 결제할 경우, 결제금액이 0으로 보여지는 것은 정상이며 [결제하기] 버튼을 누르면 주문이 완료됩니다.
          </td>
        </tr>
      </table>
    </div>

    <div class = "last_container">
      <a href="#">
          <div class = "order-pay-button">
                  결제하기
          </div>
      </a>
  </div>
    </article>


    
    <footer>  <!-- footer 시작 -->
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
     

    $(document).ready(function(){
        $(".footer-Background").load("../html/Footer.html");
    });
    </script>
</body>
</html>