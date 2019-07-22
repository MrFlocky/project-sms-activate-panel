<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script>
        $(document).ready(function () {

            let buttons = $('button[id^=btr]');
            let activeButton = buttons.first();
            buttons.bind("click", function () {
                activeButton = $(this);
                let idCountry = $(this).attr("country");
                $.ajax({
                    type: "POST",
                    url: "getAmountByCountry.php",
                    data: {id: idCountry},
                    dataType: "json",
                    success: return_1

                })
                function return_1(json) {
                    $("#vk").html(json["vk"] + " шт");
                    $("#ok").html(json["ok"] + " шт");
                    $("#wa").html(json["wa"] + " шт");
                    $("#vi").html(json["vi"] + " шт");
                    $("#tg").html(json["tg"] + " шт");
                    $("#wb").html(json["wb"] + " шт");
                    $("#go").html(json["go"] + " шт");
                    $("#av").html(json["av"] + " шт");
                    $("#fb").html(json["fb"] + " шт");
                    $("#tw").html(json["tw"] + " шт");

                    for (let name in json) {
                        if (($("#"+name).html()) == "0 шт") {
                            $("."+name).css("background-color", "rgb(240, 216, 216)")
                        }else $("."+name).css("background-color", "rgb(240,234,216)")
                    }
                }
            });

            activeButton.click();

            setInterval(function() {activeButton.click();},10000);
        });


        $(document).ready(function () {
            $("#li-1").bind("click",function () {
                $("#btr1")
                    .attr("country", "39")
                $("#dropimg")
                    .attr("src", "img/ang.png")
                $("#why").html("Англия")
                $("#btr1").click();

            });
            $("#li-2").bind("click",function () {
                $("#btr1")
                    .attr("country", "56")
                $("#dropimg")
                    .attr("src", "img/irland.png")
                $("#why").html("Ирландия")
                $("#btr1").click();

            });
            $("#li-3").bind("click",function () {
                $("#btr1")
                    .attr("country", "74")
                $("#dropimg")
                    .attr("src", "img/serbi.png")
                $("#why").html("Сербия")
                $("#btr1").click();

            });
            $("#li-4").bind("click",function () {
                $("#btr1")
                    .attr("country", "110")
                $("#dropimg")
                    .attr("src", "img/germania.png")
                $("#why").html("Германия")
                $("#btr1").click();

            });
            $("#li-5").bind("click",function () {
                $("#btr1")
                    .attr("country", "3")
                $("#dropimg")
                    .attr("src", "img/0.png")
                $("#why").html("Россия")
                $("#btr1").click();

            });
        });

    </script>
    <script type="text/javascript" src="js/JSscript.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
</head>
<body>
<div class="row-fluid">
    <div class="col-md-3 col-sm12">
        <div id="back" class="leftMainDiv well"">
            <div class="tabs-desktop"></div>
            <div class="tab-content">
                <div class="row" style="padding: 10px; margin: 0px">
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 0px; height: 40px;">
                       <div class="btn-group" style="width: 159px;">
                           <button id="btr1" type="button"country="3" class="statusRightBtn btn btn-primary active" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                               <img class="checkImg1" src="../img/checkWhite.svg" width="16">
                               <img id="dropimg" src="../img/0.png"  alt="Смс" width="24">
                               <span id="why">Россия</span></button>
                           <button type="button" id="car" class="statusBtn btn btn-primary active dropdown-toggle" style="width: 16%" data-toggle="dropdown" data-placement="left">
                               <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu">
                               <li><a id="li-1" href="#" data-toggle="dropdown" class="dropClick">
                                       <img src="img/ang.png" width="24" alt="">Англия</a></li>
                               <li><a id="li-2" href="#" data-toggle="dropdown" class="dropClick">
                                       <img src="img/irland.png" width="24" alt="">Ирланлия</a></li>
                               <li><a id="li-3" href="#" data-toggle="dropdown" class="dropClick">
                                       <img src="img/serbi.png" width="24" alt="">Сербия</a></li>
                               <li><a id="li-4" href="#" data-toggle="dropdown" class="dropClick">
                                       <img src="img/germania.png" width="24" alt="">Германия</a></li>
                               <li><a id="li-5" href="#" data-toggle="dropdown" class="dropClick">
                                       <img src="img/0.png" width="24" alt="">Россия</a></li>
                           </ul>
                       </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 20px; height: 40px;">
                        <div class="btn-group" style="width: 159px;">
                            <button id="btr2" type="button" country="10"  class=" statusRightBtn btn btn-default" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                                <img class="checkImg2" style="display: none" src="/img/checkWhite.svg" width="16">
                                <img src="../img/2.png" alt="Смс" width="24">
                                Казахстан</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 0px; height: 40px;">
                        <div class="btn-group" style="width: 159px;">
                            <button id="btr3" type="button" country="11" class="statusRightBtn btn btn-default" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                                <img class="checkImg3" style="display: none" src="/img/checkWhite.svg" width="16">
                                <img src="../img/1.png" alt="Смс" width="24">
                                Украина</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 20px; height: 40px;">
                        <div class="btn-group" style="width: 159px;">
                            <button id="btr4" type="button" country="31" class="statusRightBtn btn btn-default" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                                <img class="checkImg4" style="display: none" src="/img/checkWhite.svg" width="16">
                                <img src="../img/32.png" alt="Смс" width="24">
                                Румыния</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 0px; height: 40px;">
                        <div class="btn-group" style="width: 159px;">
                            <button id="btr5" type="button" country="80" class="statusRightBtn btn btn-default" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                                <img class="checkImg5" style="display: none" src="/img/checkWhite.svg" width="16">
                                <img src="../img/15.png" alt="Смс" width="24">
                                Польша</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-6 col-xs-6" style="text-align: center; padding: 5px 0px 5px 20px; height: 40px;">
                        <div class="btn-group" style="width: 159px;">
                            <button id="btr6" type="button" country="20" class="statusRightBtn btn btn-default" style="width: 67%; white-space: nowrap; overflow: hidden; padding-left: 0px; padding-right: 0px; text-overflow: ellipsis"; aria-haspopup="true" aria-expanded="false" >
                                <img class="checkImg6" style="display: none" src="/img/checkWhite.svg" width="16">
                                <img src="../img/11.png" alt="Смс" width="24">
                                Кыргызия</button>
                        </div>
                    </div>

                </div>
                <form action="#" method="GET" id="leftForm">
                    <table class="table table-hover table-stripped table-condensed table-small tabbed">
                        <tbody>
                        <tr class="vk table1 tabbed cell manyNumbers" service="vk_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="vk_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-vk_0">
                                    <img src="../img/vk0.png" alt="Получить номер ВК" width="24px">
                                    <span id="serv1" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">Вконтакте</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="vk"><?php echo $returnArray["vk"] ?></span>
                                    <a id="btm01" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="vk_0">15.00р</td>
                        </tr>
                        <tr class="bal1 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                            <td></td>
                            <td>Сколько нужно номеров?</td>
                            <td style="text-align: center">
                                <input type="number" min="1" max="10" service="vk" forward="0" class="form-control numbersToBuy" value="1">
                            </td>
                        </tr>
                        <tr class="ok table2 tabbed cell manyNumbers" service="ok_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="ok_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-ok_0">
                                    <img src="../img/ok0.png" alt="Получить номер ОК" width="24px">
                                    <span id="serv2" class="serviceNameRadio" style="font-size: 12px; font-weight: 100">Одноклассники</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="ok"><?php echo $returnArray["ok"] ?></span>
                                    <a id="btm02" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="ok_0">4.00р</td>
                        </tr>
                        <tr class="bal2 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="ok" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="wa table3 tabbed cell manyNumbers" service="wa_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="wa_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-wa_0">
                                    <img src="../img/wa0.png" alt="Получить номер WA" width="24px">
                                    <span id="serv3" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">WhatsApp</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="wa"><?php echo $returnArray["wa"] ?></span>
                                    <a id="btm03" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="wa_0">2.00р</td>
                        </tr>
                        <tr class="bal3 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="vk" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="vi table4 tabbed cell manyNumbers" service="vi_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="vi_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-vi_0">
                                    <img src="../img/vi0.png" alt="Получить номер Viber" width="24px">
                                    <span id="serv4" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">Viber</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="vi"><?php echo $returnArray["vi"] ?></span>
                                    <a id="btm04" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="vi_0">3.00р</td>
                        </tr>
                        <tr class="bal4 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="vk" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="tg table5 tabbed cell manyNumbers" service="tg_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="tg_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-tg_0">
                                    <img src="../img/tg0.png" alt="Получить номер Telegram" width="24px">
                                    <span id="serv5" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">Telegram</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="tg"><?php echo $returnArray["tg"] ?></span>
                                    <a id="btm05" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="tg_0">4.00р</td>
                        </tr>
                        <tr class="bal5 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="wb" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="wb table6 tabbed cell manyNumbers" service="wb_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="wb_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-wb_0">
                                    <img src="../img/wb0.png" alt="Получить номер WeChat" width="24px">
                                    <span id="serv6" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">WeChat</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="wb"><?php echo $returnArray["wb"] ?></span>
                                    <a id="btm06" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="wb_0">7.00р</td>
                        </tr>
                        <tr class="bal6 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="vk" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="go table7 tabbed cell manyNumbers" service="go_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="go_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-go_0">
                                    <img src="../img/go0.png" alt="Получить номер Google, youtube" width="24px">
                                    <span id="serv7" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">YouTube</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="go"><?php echo $returnArray["go"] ?></span>
                                    <a id="btm07" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="go_0">3.00р</td>
                        </tr>
                        <tr class="bal7 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="av" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="av table8 tabbed cell manyNumbers" service="av_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="av_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-av_0">
                                    <img src="../img/av0.png" alt="Получить номер Avito" width="24px">
                                    <span id="serv8" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">Avito</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="av"><?php echo $returnArray["av"] ?></span>
                                    <a id="btm08" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="av_0">4.00р</td>
                        </tr>
                        <tr class="bal8 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="fb" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="fb table9 tabbed cell manyNumbers" service="fb_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="fb_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-fb_0">
                                    <img src="../img/fb0.png" alt="Получить номер FaceBook" width="24px">
                                    <span  id="serv9" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">faceBook</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="fb"><?php echo $returnArray["fb"] ?></span>
                                    <a id="btm09" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="fb_0">1.00р</td>
                        </tr>
                        <tr class="bal9 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="tw" forward="1" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        <tr class="tw table10 tabbed cell manyNumbers" service="tw_0" style="background-color:rgb(240,234,216); ">
                            <td style="padding-left: 0px; vertical-align: middle;">
                                <label class="customLabel">
                                    <input type="checkbox" class="favoriteService" service="tw_0">
                                    <span data-toggle="tooltip" data-placement="right" data-original-title="Добавить в избранное"></span>
                                </label>
                            </td>
                            <td class="radiotd">
                                <label class="radioLabel" for="tab-tw_0">
                                    <img src="../img/tw0.png" alt="Получить номер Twitter" width="24px">
                                    <span id="serv10" class="serviceNameRadio" style="font-size: 14px; font-weight: 100">Twitter</span>
                                    <span style="color rgb(161, 161, 161); vertical-align: bottom; font-size: 12px;" class="countSim" id="tw"><?php echo $returnArray["tw"] ?></span>
                                    <a id="btm10" class="btn buyNumber btn-xs btn-primary" style="display: none">Купить</a>
                                </label>
                            </td>
                            <td class="center numbers" id="tw_0">1.00р</td>
                        </tr>
                        <tr class="bal10 bal" data-toggle="tooltip" data-placement="right" style="display: none ;  data-original-title="Вы можете сразу заказать до 10 номеров">
                        <td></td>
                        <td>Сколько нужно номеров?</td>
                        <td style="text-align: center">
                            <input type="number" min="1" max="10" service="vk" forward="0" class="form-control numbersToBuy" value="1">
                        </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<a href=""></a>
<!-- JQuery   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<button class="btn btn-info "><a href="../project-sms-activate-panel.rar"  download style="text-decoration : none"> source</a></button>
</body>
</html>