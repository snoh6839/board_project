<?php
    // define( "DOC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/" );
    // define( "URL_DB", DOC_ROOT."db/db_common.php" );
    // include_once( URL_DB );

    include_once("D:\board_project\db\db_common.php");

    $arr_prepare = 
        array(
            "limit_num" => 5
            ,"offset" => 0
        );
    $result = select_board_info_paging($arr_prepare);
    print_r($result);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/default.css">
</head>

<body>
    <div class="content-wrap">
        <div class="title">
            <div class="page-title">
                <h3>자유 게시판 미니 프로젝트</h3>
                <p></p>
            </div>
        </div>
        <div class="content" id="jwxe_main_content">
            <input type="hidden" name="boardMode" value="list">
            <div class="ko board list ys-board">
                <div class="common">
                    <div class="board-wrap board-qa">
                        <table class="board-table">
                            <caption class="hide">미니 &gt; 자유 &gt; 게시판</caption>
                            <colgroup>
                                <col width="10%">
                                <col width="*">
                                <col width="15%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">번호</th>
                                    <th scope="col">제목</th>
                                    <th scope="col">등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="  ">
                                    <td class="">
                                        3
                                    </td>
                                    <td class="text-left">
                                        <div class="c-board-title-wrap">
                                            <a href="#" class="c-board-title">
                                                제목 1
                                            </a>
                                        </div>
                                    </td>
                                    <td>23.04.10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="paging-wrap">
                        <li><a href="#curPage" class="page-icon active">1</a></li>
                    </ul>
                    <ul class="btn-wrap text-right">
                        <!-- 버튼 순서: 전체 목록 , 영구삭제, 삭제, 복구, 수정(x), 등록 -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>