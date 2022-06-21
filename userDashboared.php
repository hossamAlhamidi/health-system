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
                        <td>تم دعوتك للمشاركة في برنامج الامن الصحي</td>
                        <td class="d-flex justify-content-end">
                            <!-- <button class="btn btn-primary mx-3 ">اختيار موعد</button> -->
                     <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اختيار موعد
                    </button>

                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اختيار موعد
                    </button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اختيار موعد
                    </button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اختيار موعد
                    </button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>34568</td>
                        <td>تم الترشيح</td>
                        <td>...</td>
                        <td class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اختيار موعد
                    </button>
                            <button class="btn btn-danger ">رفض </button>
                        </td>
                    </tr> -->
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
                <td>تحت التدقيق</td>
                <td class="">
                    <a class="btn btn-primary mx-3 ">تحميل العقد </a>
                    <input type="file" class="" style="display:inline-block;"/>
                </td>
            </tr>

            <!-- <tr>
                <td>1</td>
                <td>34568</td>
                <td> الأمن الصحي</td>
                <td>دوام جزئي</td>
                <td>مستمر</td>
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
                <td>تحت التدقيق</td>
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
            </tr> -->
        </tbody>
    </table>
</div>
</div>
</div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="min-height:500px">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
      <div class="input-group mb-4">
 
  <input type="text" class="datepicker_input form-control" placeholder="الموعد" required aria-label="فضلا حدد موعدك">
</div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">حفظ</button>
        <!-- <button dir="rtl" type="button" class="btn btn-primary">حفظ </button> -->
      </div>
    </div>
  </div>
</div>

  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">3</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0"></div>
</div>

<?php include './template/footer.php' ?>

<script>
    /* Bootstrap 5 JS included */
/* vanillajs-datepicker 1.1.4 JS included */

const getDatePickerTitle = elem => {
  // From the label or the aria-label
  const label = elem.nextElementSibling;
  let titleText = '';
  if (label && label.tagName === 'LABEL') {
    titleText = label.textContent;
  } else {
    titleText = elem.getAttribute('aria-label') || '';
  }
  return titleText;
}

const elems = document.querySelectorAll('.datepicker_input');
for (const elem of elems) {
  const datepicker = new Datepicker(elem, {
    'format': 'dd/mm/yyyy', // UK format
    title: getDatePickerTitle(elem)
  });
}


     document.querySelector(".next-btn").classList.remove('next-btn')

</script>