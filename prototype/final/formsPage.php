<?php
include_once 'navSign.php';
// POST DATA IS PRESENT (tested)

if (isset($_POST['name_ar'])) {
    $doc_id = $_POST['doc_id'];
    $name_ar = $_POST['name_ar'];
    $name_en = $_POST['name_en'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];
    $mobile_number = $_POST['mobile_number'];
    $year = $_POST['year'];
    $department = $_POST['department'];
    $birth_date = $_POST['birth_date'];
    $query = "INSERT INTO requests VALUES ('" . $doc_id . "', '" . $doc_id . "', '" . $name_ar . "', '" . $name_en . "', '" .
        $address . "', '" . $reason . "', '" . $mobile_number . "', '" . $year . "', '" . $department . "', '" . $birth_date . "')";
    echo "<p>$query</p>";
    $mysqli->query($query);
}
?>
<!doctype html>
<html dir="auto" lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-rtl.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Hello, world!</title>
    </head>
    <style type="text/css">
        #requests {
            font-size: 180%;
        }

        h1 {
            font-size: 120%;
            display: block;
            margin: auto;
        }

        :lang(ar) {
            font-family: "Scheherazade", serif;
            font-size: 105%;
        }

        .jumbotron {
            background-color: white;
        }

        .container {
            background-color: #f0f2f3;
            border-radius: 20px;
        }

        .edge {
            margin-right: 2px;
            margin-bottom: 0;
        }

        .btn {
            text-decoration: none !important;
        }

        .container {
            padding: 20px;
        }
    </style>

    <body>


        <div class="bimg">
        </div>

        <div dir="rtl" lang="ar" class="jumbotron">


            <div dir="rtl" class="container">
                <div class="form-group row" dir="rtl" id="requests">
                    <h1> Requests</h1>
                </div>

                <hr class="my-4">


                <form>
                    <div class="form-group row" dir="rtl">
                        <label for="exampleFormControlSelect1" dir="ltr" style="margin-right:10px">choose your request
                            | اختر طلبك</label>

                        <select name="doc_id" form="req_data" lang="ar" class="form-control form-control-lg" id="exampleFormControlSelect1" rows="3">
                            <option value="1">شهادة تخرج</option>
                            <option value="2">كارنيه</option>
                            <option value="3">كارنيه مترو</option>
                            <option value="5">شهادة قيد</option>
                            <option value="4">اخر</option>
                        </select>

                    </div>
                    </select>
                </form>
                <div class="form-group row edge" dir="rtl">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button" onclick="showDiv()">تنفيذ</a>
                    </p>
                </div>

                <div id="welcomeDiv" style="display:none;" class="answer_list">
                    <form method="post" id="req_data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputEmail4">الاسم باللغة العربية</label>
                                </div>

                                <input name="name_ar" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputEmail4">الاسم باللغة الانجليزية</label>
                                </div>
                                <input name="name_en" type="text" class="form-control" id="inputEmail4" dir="ltr">
                            </div>
                        </div>


                        <div class="form-group" dir="rtl">
                            <div class="form-group row edge" dir="rtl">
                                <label for="inputAddress">العنوان</label>
                            </div>
                            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">

                        </div>

                        <div class="form-group">
                            <div class="form-group row edge" dir="rtl">
                                <label for="exampleFormControlTextarea1">سبب الاستخراج</label>
                            </div>
                            <textarea name="reason" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputCity">رقم الهاتف</label>
                                </div>
                                <input name="mobile_number" type="text" class="form-control" id="inputCity">

                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputState">الفرقة</label>
                                </div>
                                <select name="year" id="inputState" class="form-control" style="font-size:90%">
                                    <option value = "0" selected>الاعدادية</option>
                                    <option value = "1"> الاولى</option>
                                    <option value = "2">الثانية</option>
                                    <option value = "3">الثالثة</option>
                                    <option value = "4">الرابعة</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputZip">القسم</label>
                                </div>
                                <input name="department" type="text" class="form-control" id="inputZip">
                            </div>


                            <div class="form-group col-md-3">
                                <div class="form-group row edge" dir="rtl">
                                    <label for="inputZip">تاريخ الميلاد</label>
                                </div>
                                <input name="birth_date" type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group carneh" dir="rtl">
                            <div class="form-group row edge" dir="rtl">
                                <label for="inputZip">شهادة الميلاد</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group row edge" dir="rtl">
                            <button type="submit" class="btn btn-primary">تأكيد</button>
                        </div>

                    </form>
                    <script type="text/javascript">
                        function showDiv() {
                            document.getElementById('welcomeDiv').style.display = "block";
                        }
                        $(function () {

                            $('#exampleFormControlSelect1').change(function () {
                                if ($('#exampleFormControlSelect1').val() == '1') {

                                    $('.carneh').show();
                                } else {
                                    $('.carneh').hide();
                                }
                            });
                        });

                    </script>
                </div>

            </div>
        </div>
    </body>

</html>
