<?php
    ini_set("display_errors",1);
    include "./common.php";
    include "Snoopy.class.php";

    echo '<meta charset="utf-8">';
    $snoopy = new Snoopy;
    $num = 1;
    for($num=5;$num>=1;$num--){
    $snoopy->fetch("https://massageclub.co.kr/bbs/board.php?bo_table=jobs&page=".$num);
    $tmp1 = $snoopy->results;
    $tmp2 = explode("jobs_table",$tmp1);

    $tmp3 = explode('<tr class=" jobs_tr',$tmp2[1]);
    //print_r($tmp3);
    $list_num = $list_area = array();
    
    for($i=1;$i<count($tmp3);$i++){  
        //<a href="//massageclub.co.kr:443/bbs/board.php?bo_table=jobs&amp;wr_id=15507" class="ing_guin_list">      
        preg_match_all('/<a href="\/\/massageclub.co.kr\:443\/bbs\/board.php\?bo_table=jobs\&amp\;wr_id=(.*?)\&amp\;page='.$num.'" class="ing_guin_list">/',$tmp3[$i],$detail);        
        $list_num[] = $detail[1][0];  
        //print_r($list_num);
        preg_match_all('/<td class="n_date jlist_addr">(.*?)<\/td>/',$tmp3[$i],$area);        
        $list_area[] = $area[1][0]; 
        print_r($list_area);
    }
    

    $db = mysql_connect("localhost","magicown","jun1126k");
    mysql_select_db("magicown", $db);


    for($i=0;$i<count($list_area);$i++){
    //for($i=0;$i<1;$i++){
        
        $url = "https://massageclub.co.kr/bbs/board.php?bo_table=jobs&wr_id=".$list_num[$i]."&page=".$num;
        $snoopy->fetch($url);
        $tmp1 = $snoopy->results;
        //print_r($tmp1);
        $top = explode("<!-- 게시물 읽기 시작 { -->",$tmp1);
        $body = explode('<!-- } 게시판 읽기 끝 -->',$top[1]);
        
        preg_match_all('/<h3>(.*?)<\/h3>/',$body[0],$subject);
        print_r($subject);
        preg_match_all('/<span class="company_name" title="(.*?)">(.*?)<\/span>/',$body[0],$wr_2);
        //print_r($wr_2);
        preg_match_all('/<span class="company_phone">(.*?)<\/span>/',$body[0],$wr_3);
        //print_r($wr_3);
        preg_match_all('/<li><span>(.*?)<\/span>(.*?)<\/li>/',$body[0],$wr_4);
        //print_r($wr_4);
        preg_match_all('/<li class="addr"><span>(.*?)<\/span>(.*?)<\/li>/',$body[0],$wr_5);
        //print_r($wr_5);        
        preg_match_all('/<li class="pay"><span>(.*?)<\/span>(.*?)<\/li>/',$body[0],$wr_6);

 
        $content_head = explode("<!-- 본문 내용 시작 { -->",$body[0]);
        $content_body = explode('문의시 "마사지클럽"보고 연락드렸어요 해주세요',$content_head[1]);        
        $content = str_replace("<?php//echo \$view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>","",$content_body[0]);        
        

        $sql  = "INSERT INTO g5_write_incruit SET ";
        $sql .= "wr_subject = '{$subject[1][0]}', ";
        $sql .= "wr_content = '".mysql_real_escape_string($content)."', ";
        $sql .= "mb_id = 'admin', ";
        $sql .= "wr_password = '*78D02788CBC4FB05D363AC13FDABB60C106B1584', ";
        $sql .= "wr_name = '{$wr_2[1][0]}', ";
        $sql .= "wr_email = 'phpprogram47@gmail.com', ";        
        $sql .= "wr_option = 'html1', ";   
        
        $sql .= "wr_1 = '{$list_area[$i]}', ";
        $sql .= "wr_2 = '{$wr_2[1][0]}', ";
        $sql .= "wr_3 = '{$wr_3[1][0]}', ";        
        $sql .= "wr_4 = '".trim($wr_4[2][2])."', ";//모집업종        
        $sql .= "wr_5 = '".trim($wr_4[2][3])."', ";//추가연락처
        $sql .= "wr_6 = '".trim($wr_4[2][4])."', ";//경력
        $sql .= "wr_7 = '".trim($wr_6[2][0])."', ";//경력
        $sql .= "wr_8 = '".trim($wr_4[2][5])."', ";//고용형태
        $sql .= "wr_9 = '".trim($wr_4[2][6])."', ";//모집인원
        $sql .= "wr_10 = '".trim($wr_5[2][0])."', ";//지역        
        $sql .= "wr_11 = 's|p|l' ";
        
        $que = "SELECT COUNT(*) FROM g5_write_incruit WHERE wr_subject = '{$subject[1][0]}'";
        $r = sql_fetch($que);
        echo $sql."<br>";
        if(!$r[0]){
            $res = sql_query($sql);
        }
        
    }
    sleep(10);
}


$que = "SELECT * FROM g5_write_incruit WHERE 1";
$result = sql_query($que);
while($row = sql_fetch_array($result)){
    $sql = "UPDATE g5_write_incruit SET wr_num = -{$row[wr_id]}, wr_parent = {$row[wr_id]} WHERE wr_id = {$row[wr_id]}";
    echo $sql."<br>";
    sql_query($sql);
}
?>