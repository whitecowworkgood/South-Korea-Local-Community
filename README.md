# south-korea-community
지역별로 각자의 커뮤니티를 운용하도록 만들어본 프로젝트
현재는 하나의 지역만 게시판이 만들어져 있지만, 추후 추가를 한다면 언제든지 증원 가능

# 만들게 된 계기
 south-korea-community는 2021년 2학기 목포대학교 정보보호학과 웹프로그래밍 프로젝트 결과물임을 밝힙니다.
 html, php, mysql을 활용하여 웹 페이지를 만들어 본것에 의미를 두었습니다.

# 웹 페이지 프리뷰
**처음 접속하면 나오는 페이지이다.**
<img width="80%" src="https://user-images.githubusercontent.com/112620533/187922246-c2249a56-3f28-41d1-89dd-f255d8335e0b.png"/>

**가입버튼을 누르면 나오는 페이지이다. 여기서는 아이디 중복을 검사할 수 있다.**
<img width="80%" src="https://user-images.githubusercontent.com/112620533/187922258-a2c61c20-bf70-4df6-af99-ee290e4f2b82.png"/>

**지역을 선택하는 메인 페이지이다. png파일을 이미지 맵기능을 통해 지역명을 클릭하면 게시판으로 넘어가게 하였다.**
<img width="80%" src="https://user-images.githubusercontent.com/112620533/187922259-9bde3064-7a1d-4f2f-980c-7888f1c4a8d8.png"/>



**게시판 페이지이다.**
<img width="80%" src="https://user-images.githubusercontent.com/112620533/187923489-7d759056-3d29-464b-8b3c-77b3dae05c39.png"/>



**게시판을 작성하게 되면 글제목_글쓴이라는 이름으로 폴더가 생성이 된다. 해당 게시글 업로드 파일은 해당폴더로만 저장이 된다.**
<img width="80%" src="https://user-images.githubusercontent.com/112620533/187923486-5fa137db-a4ef-4416-aafc-e496cdc7007c.png"/>


# MYSQL 테이블 구조

**project_member DB에서 member 테이블**

<img width="80%" src="https://user-images.githubusercontent.com/112620533/187889839-d9170013-2e25-4c83-8f24-b37684e628a6.png"/>

**project_board DB에서 board테이블**

<img width="80%" src="https://user-images.githubusercontent.com/112620533/187889842-b9aea2a2-e8bf-4605-9878-26e5d0d10bca.png"/>
