# 2. 파일 다운로드

출처 : 웹 모의해킹 시나리오의 완성 WEB HACKING 서버 침투 기법

파일 업로드 취약점에서 웹 루트가 아닌 곳을 다운로드 경로로 지정해, 실행이 불가능하도록 하였음

하지만, 다운로드를 구현하는 과정에서 임의 파일 다운로드 (Path Traversal) 취약점 발생

/down.php?file=../../../etc/passwd가 됨

## 주요 설정 파일 경로 정보

Apache : /etc/httpd/conf/httpd.conf
PHP : /etc/httpd/conf.d/php.conf
서버 계정 정보 : /etc/passwd
관리자 권한 확인 : /etc/shadow