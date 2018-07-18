# 1. 파일 업로드

출처 : 웹 모의해킹 시나리오의 완성 WEB HACKING 서버 침투 기법

웹쉘 주소(C99) : https://raw.githubusercontent.com/tennc/webshell/master/php/PHPshell/c99/c99.php

## 모법답안

* answers/1.blacklist_fixed_upload.php

블랙리스트 방법, 여러 방법으로 우회 가능함

* answers/2.whitelist_fixed_upload.php

화이트리스트 방법
아파치 다중확장자 취약점으로 우회 가능함 (c99.php.jpg)

이를 보완하기 위해서는 /etc/httpd/conf.d/php.conf 파일을 다음과 같이 수정해야 함

```conf
#AddHandler php5-script .php
#AddType text/html .php
<FilesMatch \.php$>
    SetHandler application/x-httpd-php
</FilesMatch>
```
AddHandler, AddType 등을 사용하면 Apache의 다중 확장자 처리 기능이 작동하나, 이는 오작동 여지가 있음
파일명.jpg.php.cmd 등으로 작성하면 .cmd의 정의가 없어 .php로 인식하는 문제가 발생 가능함
(/etc/mime.types에서 확장자 정의 확인 가능)
