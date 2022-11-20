<?php include "../db.php"; ?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/mycloset.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/button.css">
  <!--<script defer src="../js/mycloset.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script> 
  <script src="../js/html2canvas.min.js"></script> 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <header>
		<header>
			<div class="inner">
				<nav class="navbar navbar-expand-xl navbar-light bg-2-right" style="margin: 0px;">
					<a class="navbar-brand" href="../index.html"><img style ="margin-top: -58px;margin-left: 100px;" src="../image/Closet_logo1.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				
					<div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 200px;">
						<ul class="navbar-nav" style="margin-top: 40px; height: 60px;">
							<li class="nav-item mag">
								<a class="nav-link" href="/html/codygalaryspring.html">CODY</a>
							</li>
							<li class="nav-item mag">
								<a class="nav-link" href="/html/drag and drop.html">CUSTOM</a>
							</li>
							<li class="nav-item mag">
								<a class="nav-link" href="/html/used_trade.html">USED TRADE</a>
							</li>
							<li class="nav-item mag">
								<a class="nav-link" href="/html/monthlycody.html">MONTHLY BEST CODY</a>
							</li>
							<li class="nav-item mag">
								<a class="nav-link" href="../html/mycloset.html">MY CLOSET</a>
							</li>
							<li class="nav-item mag">
								<a class="nav-link" href="/html/login.html">LOGIN</a>
							</li>
						</ul>
					</div>
				</nav>	
			</div>
			</header>
			<!-- 네비게이션 바 끝 -->
	</header>


  <div class="navimargin" style="margin-top :113px;"></div>

  <div class = "profile_class" style="width:auto; height: 300px;">
    <div class = "row">
      <div class = "col">
        <h3 id="mycustom">My Page</h3>
      </div>
    </div>

    <div>
      <div class="box_profile" style="background: #BDBDBD; float: left;">
        <img class="profile_img" src="../image/shop.jpg">
      </div>
    </div>
    <div style="float: left;">
      <h3 id = "profile_name">NickName: 정세연<br><br>ID : wjdtpdus828</h3>
    </div>
  </div>

  <div class="cart" >
    <hr style="border-top: 3px solid;">
<!-- 장바구니 -->
    <div id="frame">
      <form>
        <div id="frame2">
          <span style="font-size:16pt; font-weight: bold;">장바구니</span>
          
        </div>
        <br>

        <div>
          <table class= "cart_list">
            <form>
              <thead>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>이미지</td>
                  <td>상품명</td>
                  <td>옵션</td>
                  <td>상품금액</td>
                  <td>배송비</td>
                </tr>
              </thead>
              <?php
                $sql3 = mq("select * from exam order by product_id desc");
                while($cart = $sql3->fetch_array()){
              ?>
              <tbody>
                <tr class = "cart_list_detail">
                  <td><input type="checkbox"></td>
                  <td><img src="../image/<?php echo $cart['product_img'];?>.png"></td>
                  <td><?php echo $cart['product_name'];?></td>
                  <td>
                    <select name="size">
                      <option value="">--선택--</option>
                      <option value="Large">L</option>
                      <option value="Mideum">M</option>
                      <option value="Small">S</option>
                    </select>
                  </td>
                  <td><?php echo $cart['product_price'];?></td>
                  <td>3000 KRW</td>
                </tr>
              </tbody>
              <?php } ?>
            </form>
          </table>
          <br>
          <div class="cart__mainbtns">
            <button class="cart__bigorderbtn right">주문하기</button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <div class="liked" >
<!-- 찜목록 -->
    <div id="frame">
      <form>
        <div id="frame2">
          <span style="font-size:16pt; font-weight: bold;">찜목록</span>
          
        </div>
        <br>

        <div>
          <table class= "cart_list">
            <form>
              <thead>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>이미지</td>
                  <td>상품명</td>
                  <td>좋아요</td>
                  <td>상품금액</td>
                </tr>
              </thead>
              <tbody>
                <tr class = "cart_list_detail">
                  <td><input type="checkbox"></td>
                  <td><img src="../image/blue.png"></td>
                  <td>룩 노피 베이직 오버핏 항공점퍼</td>
                  <td>
                    <input type="checkbox">
                  </td>
                  <td>13000KRW</td>
                </tr>
              </tbody>
            
            </form>
          </table>
        </div>
      </form>

    </div>
  </div>

  <div class = "modifying_info">
    <div id="frame">
      <form>
        <div id="frame2">
          <span style="font-size:16pt; font-weight: bold;">회원정보수정</span>
          
        </div>
        <br>

        <div>
          <table>
            <tr>
              <th style="border-bottom: 1px solid lightgrey; padding-bottom: 20px;"><span>ID</span></th>
              <td><input type="text"></td>
            </tr>

            <tr>
              <th style="border-bottom: 1px solid lightgrey; padding-bottom: 20px;">비밀번호</th>
              <td><input type="password"></td>
            </tr>

            <tr>
              <th style="border-bottom: 1px solid lightgrey; padding-bottom: 20px;">비밀번호 확인</th>
              <td><input type="password"></td>
            </tr>

            <tr>
              <th style="border-bottom: 1px solid lightgrey; padding-bottom: 20px;">주소</th>
              <td><input type="text"></td>
            </tr>

            <tr >
              <th style="border-bottom: 1px solid lightgrey; padding-bottom: 20px;">이메일</th>
              <td><input type="text"></td>
            </tr>
          </table>
        </div>
      </form>
      <br>
      <div class="cart__mainbtns">
        <button class="cart__bigorderbtn right">수정하기</button>
      </div>
    </div>
  </div>


  <div class="closet_subinner" style="margin-bottom:50px;">
  

    

  </div>

  <div class="captureImg"> 
    <div id="capture_cody"></div>
  </div>

  <div style="margin-bottom: 200px;"></div>


    <section class="footer">
      <div class="container-fluid text-center bg-9">
        <ul class="menu">
          <li><a href="javascript:void(0)" class="green">Personal information processing policy</a></li>
          <li><a href="javascript:void(0)">Terms and conditions of use of the homepage</a></li>
          <li><a href="javascript:void(0)">My Closet Terms and ConditionsS</a></li>
        </ul>
    
        <div class="btn-group">
          <a href="javascript:void(0)" class = "btn btn--white">Find Way</a>
          <a href="javascript:void(0)" class = "btn btn--white">newly-opened</a>
          <a href="javascript:void(0)" class = "btn btn--white">Site Map</a>
        </div>
    
        <div class="info">
          <span>Business registration number 201-81-21515</span>
          <span>(주)CEO of Closet, Lee Yeonkyu</span>
          <span>TEL : 010-9203-9910 / FAX : 010-5341-9168</span>
          <span>Person in charge of personal information: Jeong Se-yeon</span>
        </div>
    
        <p class="copyright">
          &copy; <span class = "this-year"></span> My Closet. All Right reserved
        </p>
        <img src="../image/CLOSET.png" alt="" class="logo" style="margin-bottom: 30px;">
      </div>
    </section>

</body>
</html>