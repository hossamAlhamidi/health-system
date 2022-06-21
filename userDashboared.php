<?php include './template/header.php' ?>

<nav class="my-5 ">
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">حالة الطلب</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">العقود</button>
    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">التقييم</button> -->
    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>التقييم</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="container my-5">

        <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="table-responsive">
            <table id="order-status" class="table table-striped">
                <thead>
                    <tr >
                        <th># </th>
                        <th> رقم الطلب</th>
                        <th>حالة الطلب </th>
                        <th>وصف الطلب</th>
                        <th class="d-flex justify-content-end ps-5"> الأوامر </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                            <button class="btn btn-primary mx-3 ">اختيار موعد</button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                            <button class="btn btn-primary mx-3 ">اختيار موعد</button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                            <button class="btn btn-primary mx-3 ">اختيار موعد</button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                            <button class="btn btn-primary mx-3 ">اختيار موعد</button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                            <button class="btn btn-primary mx-3 ">اختيار موعد</button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>


  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    
  <div class="container my-5">

<div class="row">

<div class="table-responsive">
    <table id="order-status" class="table table-striped">
        <thead>
            <tr >
                <th># </th>
                <th> رقم العقد</th>
                <th> البرنامج </th>
                <th>نوع العقد </th>
                <th>الحالة</th>
                <th class=""> الأوامر </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>-</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>-</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>-</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>-</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>-</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>


  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">3</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0"></div>
</div>

<?php include './template/footer.php' ?>