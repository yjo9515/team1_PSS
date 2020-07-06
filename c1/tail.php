<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <!-- <div id="aside">
        <?php echo outlogin(); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll(); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div> -->
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
    <div class="ft_top_wrap">
    <div class="ft_icon">
                <a href=""><img src="./img/sns_1.gif" alt=""></a>
                <a href=""><img src="./img/sns_2.gif" alt=""></a>
                <a href=""><img src="./img/sns_3.gif" alt=""></a>
                <a href=""><img src="./img/sns_4.gif" alt=""></a>
                <div class="ft_searchbox_2">
        <select name="" id="selectlink">
            <option value>유관/협력기관</option>
            <option value="http://www.president.go.kr">청와대</option>
            <option value="http://www.korea.kr">정책브리핑</option>
            <option value="http://www.nis.go.kr">국가정보원</option>
            <option value="http://www.mofa.go.kr">외 교 부</option>
            <option value="http://www.police.go.kr/main.html">경 찰 청</option>
            <option value="http://spo.go.kr">대 검 찰 청</option>
            <option value="http://www.moj.go.kr">법 무 부</option>
            <option value="http://mnd.go.kr">국 방 부</option>
            <option value="http://www.jcs.mil.kr">합동참모본부</option>
            <option value="http://www.dssc.mil.kr">군사안보지원사령부</option>
            <option value="http://www.molit.go.kr">국토교통부</option>
            <option value="http://www.customs.go.kr">관 세 청</option>
            <option value="http://www.mcst.go.kr">문화체육관광부</option>
            <option value="http://www.mfds.go.kr">식품의약품안전처</option>
            <option value="http://www.msip.go.kr">과학기술정보통신부</option>
            <option value="http://www.mpss.go.kr">행정안전부</option>
            <option value="http://www.kcg.go.kr">해양경찰청</option>
        </select>
        <a href="">이동 </a>
        </div>
            </div>
   
    </div>
<div id="ft">


    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" id="tq">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">저작권정책 </a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">사이트개선의견</a>
            <a href="<?php echo get_device_change_url(); ?>">이메일무단수집거부</a>
        </div>
        <!-- <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <!- <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
            </p> -->
     

	    </div>
        <!-- <?php
        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('notice', 'notice', 4, 13);
        ?> -->

        <!-- <?php echo visit(); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?> --> 
    </div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <div id="ft_copy">
							03048) 서울특별시 종로구 청와대로1 대통령경호처 <br>Copyright &copy; <b>2013 PRESIDENTIAL SECURITY SERVICE REPUBLIC OF KOREA ALL RIGHTS RESERVED.</b></div>

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>