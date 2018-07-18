<?php
    $uploaddir = './uploads/';
    $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

    // 블랙리스트 필터링 코드, 사이트 목적이 명확하면 화이트리스트가 더 나음
    $file_ext = array('php');

    # 1. phP 등 확장자 대소문자 치환 등으로 우회가능
    // $ext = array_pop(explode('.', $uploadfile));
    
    // 확장자 확인
    $ext = strtolower(array_pop(explode('.', $uploadfile)));

    //# 2. /etc/httpd/conf.d/php.conf 에는 php 외에도 php3, php5, php7, phtml 등 여러 확장자를 지원하고 있음
    //# 또한 Apache 웹 서버는 "mod_mime" 모듈에서 확장자 처리 규칙을 이용해 국가 코드, 인코딩을 입력할 수 있음
    //# ex)(c99.php.kr) ==> c99.kr.php로 처리됨

    //또한 httpd.conf의 cgi-script 항목에 다양한 CGI 인터프린터가 있을 수 있음
    //".cgi", ".pl", ".pm", ".py" 등이 있음

    if(_in_array($ext, $file_ext)){
        echo "Upload Error :<br><b>" . $ext . "</b> File extenstion is not allowed";
        exit;
    }

    echo '<pre>';
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)){
        echo "Valid File, File uploaded succesfully.\n";
    } else {
        print "Possible file upload attack!\n";
    }

    print "Debugging information:\n";
    print_r($_FILES);

    print "</pre>"
?>