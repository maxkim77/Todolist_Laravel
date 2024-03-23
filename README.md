# 라라벨 ToDo 앱 기획

## 1. 목표와 기능

### 1.1 목표
- ToDo 리스트를 관리할 수 있는 애플리케이션 제작
- 사용자들이 간편하게 할 일을 등록하고 관리할 수 있는 서비스 제공
- 개인 및 팀 프로젝트에서의 업무 관리 용이성 제공

### 1.2 기능
- 사용자 계정 생성 및 로그인 기능
- ToDo 항목 추가, 수정, 삭제 기능
- ToDo 항목의 완료 여부 체크 기능

## 2. 개발 환경 및 배포
### 2.1 개발 환경
- 웹 프레임워크: Laravel 11(Breeze Blade Template 활용)
- PHP 버전: 8
- 데이터베이스: MySQL
- 프론트엔드: HTML, CSS, JavaScript

### 2.2 배포
- 로컬 환경 : docker
- 서버 환경: AWS EC2
- 배포 도구: Nginx, Apache

## 3. 요구사항 명세와 기능 명세
- ToDo 리스트에 대한 CRUD 기능 제공
- 사용자 관리 기능 (회원가입, 로그인, 로그아웃)
- 각 ToDo 항목에 대한 우선순위 설정 및 완료 여부 표시

## 4. 프로젝트 구조와 개발 일정
- 프로젝트 구조
```
📦 TODOLIST
┣ 📂app
┣ 📂bootstrap
┣ 📂config
┣ 📂database
┣ 📂node_modules
┣ 📂public
┣ 📂resources
┣ 📂routes
┣ 📂storage
┣ 📂tests
┣ 📂vendor
┣ ⚙️ .editorconfig
┣ ⚙️ .env
┣ 💲 .env.example
┣ 📄 .gitattributes
┣ 📄 .gitignore
┣ 🖥️ artisan
┣ 📦 composer.json
┗ 📦 composer.lock

```
개발 일정은 산출물과 함께 WBS로 작성하여 관리

## 5. 와이어프레임 / UI / BM
- UI 및 화면 설계는 Figma 또는 Kakao Oven을 활용하여 작성

![02_Copy of Untitled](https://github.com/maxkim77/todolist/assets/141907655/40ce8a92-2d75-4830-85c4-2092082da7ac)

![01_Untitled](https://github.com/maxkim77/todolist/assets/141907655/ac1d9b82-df22-43a1-a77d-1527885ef9f8)

## 6. 데이터베이스 모델링(ERD)
<img width="673" alt="스크린샷 2024-03-23 오후 9 51 49" src="https://github.com/maxkim77/todolist/assets/141907655/40043b7e-cfd7-49e0-b1e5-23d6c4141bc9">

## 7. Architecture
아키텍처 설계는 ChatGPT 또는 PPT를 활용하여 작성

## 8. 메인 기능
메인 페이지
<img width="1388" alt="스크린샷 2024-03-23 오후 4 29 25" src="https://github.com/maxkim77/todolist/assets/141907655/6560a4be-dcb1-413c-b15f-6ca788f4c24f">

회원가입 기능
<img width="1343" alt="스크린샷 2024-03-23 오후 4 29 39" src="https://github.com/maxkim77/todolist/assets/141907655/172002aa-62ea-475b-86a2-a37d51ed5afc">
<img width="1381" alt="스크린샷 2024-03-23 오후 4 39 21" src="https://github.com/maxkim77/todolist/assets/141907655/1fe98954-6875-4b7a-b936-6cee0241c9f3">

ToDo 리스트에 항목 추가, 수정, 삭제 기능 / 완료 여부 체크 기능

## 9. 에러와 에러 해결
개발 중 발생 가능한 에러에 대비하여 예외 처리 및 에러 해결 전략 수립

## 10. 개발하며 느낀점
개발 진행 중에 느낀 점이나 개선 사항 등을 기록하여 프로젝트 종료 후 회고에 활용
