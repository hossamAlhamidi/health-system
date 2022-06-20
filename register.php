
<?php include './template/header.php' ?>

<div class="container px-2 px-sm-0">

<div class="mt-3 mx-3 mx-sm-4 mx-md-5 px-md-5  personal-details">
    <div class="col-md-8 col-xl-6 mx-auto">
        
        <!-- <h2 class="underline-small sm-heading-blue">اضافة مادة</h2> -->
        <!-- progressbar -->
        <div class="progressbar mb-5" >
            <div class="progress" id="progress"></div>
         <div class="progress-step  progress-step-active" data-title=" المعلومات الشخصية">1</div>
         <div class="progress-step" data-title="تأكيد رقم الجوال ">2</div>
         <div class="progress-step" data-title="المعلومات المهنية ">3</div>

        </div>
        <form id="multi-step-form" class="select-blue mt-6 ps-lg-5" >
            <div class="form-active form-disabled form-step">
            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="title" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">الاسم الأول
                    </label>
                <input  id="title" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="أدخل اسمك الأول" />
                <small class="error-msg me-3"></small>
            </div>
            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="level" class=" mb-2 purple-sm-taj label-right mb-2 px-2 light-grey-color">الاسم الأخير
                    </label>
                <input  id="level" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="أدخل اسمك الأول" />
                <small class="error-msg me-3"></small>
            </div>
            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="price" class="purple-sm-taj label-right mb-2 px-2 light-grey-color ">الايميل
                    </label>
                <input  id="price" type="text" name="price" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0"  placeholder="أدخل ايميلك " />
                <small class="error-msg me-3"></small>
            </div>
            <div class="form-group mb-2" style="display:none">
                <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                    id="free" >
                <label class="form-check-label" for="create-uni">
                   تقديم المادة بشكل مجاني
                </label>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="channel" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">رقم الجوال
                    </label>
                <input  id="channel" type="text" name="channel" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="966xxxxxxxxx" />
                <small class="error-msg me-3"></small>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="identity" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">رقم الهوية     
                    </label>
                <input  id="identity" type="text" name="identity" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="xxxxxxxxxx"  />
                <small class="error-msg me-3"></small>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="photo" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">ارفاق صورة الهوية      
                    </label>
                <input  id="photo" type="file" name="photo" class="md-blue-input-text form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="xxxxxxxxxx"  />
                <small class="error-msg me-3"></small>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="channel-link" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">كلمة السر    
                    </label>
                <input  id="channel-link" type="text" name="channel-link" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0"  />
                <small class="error-msg me-3"></small>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="pass" class="purple-sm-taj label-right mb-2 px-2 light-grey-color"> تأكيد كلمة السر    
                    </label>
                <input  id="pass" type="text" name="pass" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0"  />
                <small class="error-msg me-3"></small>
            </div>

            <div class="form-group pb-2 ps-sm-5 px-md-0" style="display:none">
                <label for="description" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">وصف المادة 
                    </label>
                <textarea  id="description" type="text" name="description" class="height md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0"></textarea>
                <small class="error-msg me-3"></small>
            </div>
            
            <div class="row justify-content-center px-2 px-md-3 mx-auto my-5">

                <a id="next" type="button " class="btn sky-blu-btn btn-h-3-mb-3 pb-3 text-center next-btn mb-5">التالي</a>
            </div>
        </div>
        <!-- second form -->
        

        <div class=" form-disabled form-step">
        <!-- <div class="form-group pb-2 ps-sm-5 px-md-0">
                <label for="mob-ver" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">  أدخل رمز التحقق الواصل عبر الجوال     
                    </label>
                <input  id="mob-ver" type="text" name="mob-ver" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0"  />
                <small class="error-msg me-3"></small>
            </div> -->
            <div class="d-flex justify-content-center align-items-center ">
        <div class="card-css py-5 px-3">
            <h5 class="m-0">  رمز التحقق  </h5><span class="mobile-text">أدخل رمز التحقق الذي ارسلناه عبر جوالك <b class="text-danger">+966xxxxxxxxx</b></span>
            <div class="d-flex flex-row mt-5"><input type="text" class="form-control" autofocus=""><input type="text" class="form-control"><input type="text" class="form-control"><input type="text" class="form-control"></div>
            <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
        </div>
    </div>
            <!-- <h2 id="header-second-form" class="underline-small sm-heading-blue my-3">
                أين تدرس مادتك؟
            </h2> -->
            <div class="form-group pb-2 ps-sm-5 px-md-0" style="display:none">
                <label for="universiy"
                    class="purple-sm-taj label-right mb-2 px-3 light-grey-color">
                    اسم الجامعة
                </label>
                <select id="universiy"
                        class="form-select form-control fieldset-input-thin">
                    <option value="" disabled selected hidden>
                    </option>
                    </option>
                    <option class="md-blue-input-text" value="second">
                        جامعة الملك سعود
                    </option>
                    <option class="md-blue-input-text" value="third">
                        جامعة الملك سعود
                    </option>
                </select>
                <small class="error-msg me-3"></small>
            </div>
            <!-- second input -->
            <div class='repeater'style="display:none">
                <div data-repeater-list class="data-repeater-list">
                    <div data-repeater-item>
                        <div class=" pb-2 ps-sm-5 px-md-0">
                            <label for="title" class="purple-sm-taj label-right mb-2 px-3 light-grey-color">الكلية</label>

                            <div class="text-ele-inside box-search px-2 py-4">

                                <div class="d-flex justify-content-end">
                                    <button class="btn"  data-repeater-delete>
                                        <img src="../assets/img/delete.svg" alt="">
                                    </button>
                                </div>
                                <div class="form-group">
                                    <label for="college1"
                                           class="purple-sm-taj label-right mb-2 px-3 light-grey-color">
                                        الكلية
                                    </label>
                                    <select id="college1"
                                            class="form-select form-control fieldset-input-thin ">
                                        <option value="" disabled selected hidden>
                                        </option>
                                        </option>
                                        <option class="md-blue-input-text" value="second">
                                            كلية علوم الحاسب
                                        </option>
                                        <option class="md-blue-input-text" value="third">
                                            كلية العلوم
                                        </option>
                                    </select>
                                    <small class="error-msg me-3"></small>
                                </div>
                                <div class="form-group">
                                    <label
                                            class="purple-sm-taj label-right mb-2 px-3 light-grey-color">
                                        التخصص
                                    </label>

                                    <div class="item-material form-control position-relative">
                                        <div id="majors_display" class="majors_display">

                                            <!-- <div id="major0" class="item">
                                                <p>نظم المعلومات</p>
                                                <span  class="remove-material left-elemt"><i class="fas fa-times"></i></span>
                                            </div> -->
                                        </div>


                                        <p class="no-ele">لايوجد عناصر</p>
                                        <span  class="btn-major">
                                            <img class="btn-add-major-horizental" src="../assets/img/btn-add-majors-horizental.svg" alt="btn-add">
                                        </span>
                                    </div>
                                    <ul id="majors1" class="dropdown select-comment dropdown-menu  text-end popup" aria-labelledby="DropdownMenu" >
                                        <h4 class="pt-3 pe-3">التخصصات</h4>

                                        <li> <div class="form-group mb-2 active ">
                                            <input class="form-check-input border-override mx-2" type="checkbox"
                                                   id="create-uni" name="major" value="نظم معلومات">
                                            <label class="form-check-label" for="create-uni">
                                                نظم معلومات
                                            </label>
                                        </div></li>

                                        <li> <div class="form-group mb-2  ">
                                            <input class="form-check-input border-override mx-2" type="checkbox"
                                                   id="create-uni" name="major" value=" علوم الحاسب">
                                            <label class="form-check-label" for="create-uni">
                                                علوم الحاسب
                                            </label>
                                        </div></li>

                                        <li> <div class="form-group mb-2 ">
                                            <input class="form-check-input border-override mx-2" type="checkbox" value="تقنية معلومات"
                                                   id="create-uni" name="major">
                                            <label class="form-check-label" for="create-uni">
                                                تقنية معلومات
                                            </label>
                                        </div></li>

                                        <li> <div class="form-group mb-2 ">
                                            <input class="form-check-input border-override mx-2" type="checkbox" value="هندسة حاسب"
                                                   id="create-uni" name="major">
                                            <label class="form-check-label" for="create-uni">
                                                هندسة حاسب
                                            </label>
                                        </div></li>

                                        <li> <div class="form-group mb-2 ">
                                            <input class="form-check-input border-override mx-2" type="checkbox" value="هندسة برمجيات"
                                                   id="create-uni" name="major">
                                            <label class="form-check-label" for="create-uni">
                                                هندسة برمجيات
                                            </label>
                                        </div></li>
                                    </ul>



                                    <!-- <div class="list-search">
                                        <span data-materials="chemistry">الكيمياء</span>
                                        <span data-materials="Biology">الاحياء</span>
                                        <span data-materials="computers">الحاسبات</span>
                                        <span data-materials="Management">ادارة</span>
                                    </div>
                                    <div class="chickboxs-elemnts d-none">
                                        <input type="checkbox" name="Information-Systems" checked>
                                        <input type="checkbox" name="chemistry">
                                        <input type="checkbox" name="Biology">
                                        <input type="checkbox" name="computers">
                                        <input type="checkbox" name="Management">
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="my-5"><button data-repeater-create id="btn-college-add" type="button" class="btn-addition"><img src="../assets/img/add-more-colleges.svg" alt="btn addition"></button><label class="sm-heading-blue">لاضافة كلية أخرى</label></div>
            </div>
           


            <div class="d-flex justify-content-center gap-5 my-5">

                <button id="prev" type="button" class="btn btn-page-2 sky-blu-btn btn-h-3-mb-3 text-center mb-5">السابق</button>
                <button id="next" type="button" class="btn btn-page-2 sky-blu-btn btn-h-3-mb-3 text-center mb-5">التالي</button>
            </div>
        </div>
    </div>
        <!-- third form -->
        <div class=" form-disabled form-step  ">
            <div class="col-lg-6 mx-1">
            <div class=" pb-2 ps-sm-5 px-md-0">
                <h2 class="underline-small sm-heading-blue mt-4">
                        نوع الطرح
                </h2>
                <div>
                    <div class="radio-parent form-group">

                        <input  id="op1" type="radio" checked name="side_cover" class=" "  />
                        <label>برنامج (كتابة محتوى - تصميم محتوى - مراجهة محتوى)</label>
                    </div>
                    <div class="radio-parent form-group">

                        <input  id="op2" type="radio" name="side_cover" class=" "  />
                        <label>مهمه</label>
                    </div>
                    <div class="radio-parent form-group">

                        <input  id="op3" type="radio" name="side_cover" class=" "  />
                    <label>تصميم</label>
                    </div>
                </div>
            </div>
            <!-- second input -->
            <div class=" pb-2 ps-sm-5 px-md-0 my-5">
                <h2 class="underline-small sm-heading-blue">
                       المؤهلات
                </h2>
                <div>
                    <div class="form-group pb-2 ps-sm-5 px-md-0" >
                        <label for="universiy"
                            class="purple-sm-taj label-right mb-2 px-3 light-grey-color">
                            التخصص في مجال:
                        </label>
                        <select id="universiy"
                            class="form-select form-control fieldset-input-thin">
                            <option value="" disabled selected hidden>
                            </option>
                            <option class="md-blue-input-text" value="second">
                                العيون
                            </option>
                            <option class="md-blue-input-text" value="third">
                                عظام
                            </option>
                            <option class="md-blue-input-text" value="third">
                                باطنية
                            </option>
                        </select>
                        <small class="error-msg me-3"></small>
                    </div>
                    <div class="form-group pb-2 ps-sm-5 px-md-0">
                        <label for="title" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">المؤهل:
                        </label>
                        <input  id="title" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="اسم المؤهل" />
                            <small class="error-msg me-3"></small>
                    </div>
                    <div class="form-group pb-2 ps-sm-5 px-md-0">
                        <label for="photo" class="purple-sm-taj label-right mb-2 px-2 light-grey-color">صورة المؤهل:      
                        </label>
                        <input  id="photo" type="file" name="photo" class="md-blue-input-text form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="xxxxxxxxxx"  />
                        <small class="error-msg me-3"></small>
                    </div>
                </div>
            </div>
            <!-- check box -->
            <div class=" pb-2 ps-sm-5 px-md-0 my-5">
                <h2 class="underline-small sm-heading-blue">
                      الخبرات
                </h2>
                <div class="form-group mb-2">
                    <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                        id="create-uni">
                    <label class="form-check-label" for="create-uni">
                       العمل في عيادة
                    </label>
                </div>
                <div class="form-group mb-2">
                    <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                        id="create-uni">
                    <label class="form-check-label" for="create-uni">
                        التدريس او التدريب 
                    </label>
                </div>
            </div>
             <!-- Second check box -->
             <div class=" pb-2 ps-sm-5 px-md-0 my-5">
                <h2 class="underline-small sm-heading-blue">
                    البحوث (هل سبق وان قمت؟)
                </h2>
                <div class="form-group mb-2">
                    <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                        id="create-uni">
                    <label class="form-check-label" for="create-uni">
                       كتابة محتوى 
                    </label>
                    <input  id="title" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="اذكرة" />
                            <small class="error-msg me-3"></small>
                </div>
                <div class="form-group mb-2">
                    <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                        id="create-uni">
                    <label class="form-check-label" for="create-uni">
                        تصميم برامج 
                    </label>
                    <input  id="title" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="اذكرة" />
                            <small class="error-msg me-3"></small>
                </div>
                <div class="form-group mb-2">
                    <input class="form-check-input mx-2" type="checkbox" value="create-uni"
                        id="create-uni">
                    <label class="form-check-label" for="create-uni">
                        مراجعة برامج
                    </label>
                    <input  id="title" type="text" name="title" class="md-blue-input-text pe-4 form-control fieldset-input-thin text-right-important grey-placeholder pr-0" placeholder="اذكرة" />
                            <small class="error-msg me-3"></small>
                </div>
            </div>
            <!-- Radio botton -->
            <div class="col-lg-6 mx-1">
            <div class=" pb-2 ps-sm-5 px-md-0">
                <h5 class="underline-small sm-heading-blue mt-4">
                        هل تستطيع توقيع عقد ؟
                </h5>
                <div>
                    <div class="radio-parent form-group">

                        <input  id="op1" type="radio" checked name="side_cover" class=" "  />
                        <label>نعم</label>
                    </div>
                    <div class="radio-parent form-group">

                        <input  id="op2" type="radio" name="side_cover" class=" "  />
                        <label>لا</label>
                    </div>
                </div>
            </div> 

        </div>
        <div class="d-flex justify-content-center gap-5 my-5">

            <button id="prev" type="button" class="btn sky-blu-btn btn-h-3-mb-3 text-center mb-5 btn-form-three">السابق</button>
            <button  data-bs-toggle="modal"
         data-bs-target="#confirmMsg" id="btn-addition" type="button" class="btn sky-blu-btn btn-h-3-mb-3 text-center mb-5 btn-form-three">اضافة</button>
        </div>
        </div>

        
        </form>
         

       <!-- end of column -->
    <!-- </div> -->
</div>
</div>

<?php include './template/footer.php' ?>
<script>
    const next_btn = document.querySelectorAll("#next");
const prev_btn = document.querySelectorAll("#prev");
const progress_line = document.querySelector("#progress")
const form_step = document.querySelectorAll(".form-step");
const progress_step = document.querySelectorAll(".progress-step")
const btn_addition = document.querySelector("#btn-addition");
const form = document.querySelector("#multi-step-form")
// const btn_back = document.querySelector("#back-btn");
const checkbox = document.querySelector("#free");
const college_div = document.querySelector("#more-college");
const btn_college_addition = document.querySelector("#btn-college-add");
const btn_major = document.querySelector(".btn-major");
// const btn_major = document.querySelectorAll(".btn-major");
const popup = document.querySelector("ul.popup");
let college_counter =1;
let form_step_num = 0;
// console.log(btn_major,"btn")
for(let btn of next_btn){
    btn.addEventListener("click",()=>{

       switch (form_step_num) {
           case 0:
            //    if (validateForm()){
                   form_step_num++;
                   updateFormSteps()
                   updateProgressBar();
                   break;
            //    }
           case 1:
            //    if (validateForm2()){
                   form_step_num++;
                   updateFormSteps()
                   updateProgressBar();
                   break;
            //    }
           default:
               return;



       }
    })
}

for(let btn of prev_btn){
    btn.addEventListener("click",()=>{
        form_step_num--;
        updateFormSteps()
        updateProgressBar();
    })
}

function updateFormSteps(){
    // console.log(form_step,"before")
    // form_step[form_step_num-1].classList.remove("form-active")
    // form_step[form_step_num-1].classList.add("form-disabled")
    for(let form of form_step){
        if(form.classList.contains("form-active")){
            console.log("yes");
            form.classList.remove("form-active");
            form.classList.add("form-disabled");
        }
    }

    form_step[form_step_num].classList.add("form-active")
    form_step[form_step_num].classList.remove("form-disabled")
    
}

function updateProgressBar(){
    // update the circles steps
    progress_step.forEach((step,index)=>{
        if(index <= form_step_num){
            step.classList.add("progress-step-active")
        }
        else{
            step.classList.remove("progress-step-active")
        }
    })

    const progressActive = document.querySelectorAll(".progress-step-active");
    console.log(progressActive.length,"active")
    console.log(progress_step.length,"step")
//  update the line
    progress_line.style.width = (progressActive.length-1)/(progress_step.length-1) * 100 +"%";
}

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    const inputs = [];
     form.querySelectorAll("input").forEach((input)=>{
         const {name , value} = input;
         inputs.push({name,value})
     })
     console.log(inputs,"inputs")
     form.reset();
     form_step[2].classList.remove("form-active")
     form_step[2].classList.add("form-disabled")
     form_step_num=0;
     form_step[ form_step_num].classList.add("form-active")
     updateProgressBar()
   
})

// btn_back.addEventListener("click",()=>{
//     console.log("yes")
//     history.back()
// })


// disable price free checkbox
checkbox.addEventListener("change",checkCheckbox)
function checkCheckbox(){
    const price_input = document.querySelector("#price");
  
  if(checkbox.checked == true){
      price_input.disabled = true;
      console.log("checked")
  }
  else {
      price_input.disabled = false;
      console.log("not checked")
  }
  const label_price = document.querySelector("label[for='price']");
  label_price.classList.toggle("label-price")
}

function createElement({tag,text,className,attributeName,attributeContent,number}){
    let element = document.createElement(tag);
    if(typeof className != "undefined")
    element.className = className;

    if(typeof text != "undefined"){
        if(typeof number != "undefined"){
        element.textContent = text+" "+number;
        }
        else{
            element.textContent = text;
        }
    }
    if(typeof attributeName != "undefined"){
        element.setAttribute(attributeName,attributeContent)
    }
    
    return element;
}
function createLiPopup({id,text,value}){
   

    let li = document.createElement("li");
    let div = document.createElement("div");
    div.className = "form-group mb-2";
    li.appendChild(div);
    let input = document.createElement("input");
    input.className = "form-check-input border-override mx-2";
    input.type = "checkbox";
    input.id = id;
    input.value = value;
    div.appendChild(input);
    let label = document.createElement("label");
    label.textContent = text;
    label.className = "form-check-label"
     label.setAttribute("for",id);
    div.appendChild(label);
    return li;


    
    return element

}





// for the first college form only while the above is for all
window.addEventListener("click",(event)=>{
    let parent = event.target.parentElement;
    console.log(event.target.parentElement,"target window")
    if(parent.classList.contains("popup")){
        console.log("yes")
    }
    
    if(parent != btn_major && parent != popup  && parent.tagName.toLowerCase()!="li" &&parent.parentElement.tagName.toLowerCase()!="li" && event.target.tagName.toLowerCase() !="img"){
        console.log(event.target.parentElement,"from inside")
    popup.classList.remove("popup-active");
    popup.classList.add("popup-disabled");
    }
})

// const isEmpty = str => !str.trim().length;
// const validateForm = () => {
//     if(isEmpty($('#title').val())) {
//         $('#title').addClass('is-invalid');
//         $('#title').prev().addClass('error-color');
//         $('#title').next().text('الرجاء إدخال عنوان المادة');
//     }
//     if(isEmpty($('#level').val())) {
//         $('#level').addClass('is-invalid');
//         $('#level').prev().addClass('error-color');
//         $('#level').next().text('الرجاء إدخال المستوى');

//     }
//     if(isEmpty($('#price').val())) {
//         $('#price').addClass('is-invalid');
//         $('#price').prev().addClass('error-color');
//         $('#price').next().text('الرجاء إدخال السعر');

//     }
//     if(isEmpty($('#channel').val())) {
//         $('#channel').addClass('is-invalid');
//         $('#channel').prev().addClass('error-color');
//         $('#channel').next().text('الرجاء إدخال قناة للتواصل مع الطلاب');

//     }
//     if(isEmpty($('#channel-link').val())) {
//         $('#channel-link').addClass('is-invalid');
//         $('#channel-link').prev().addClass('error-color');
//         $('#channel-link').next().text('الرجاء إدخال حساب التواصل الخاص بك');

//     }
//     if(isEmpty($('#description').val())) {
//         $('#description').addClass('is-invalid');
//         $('#description').prev().addClass('error-color');
//         $('#description').next().text('الرجاء إدخال وصف المادة');

//     }
//     if (isEmpty($('#title').val()) ||  isEmpty($('#level').val()) || isEmpty($('#price').val()) || isEmpty($('#channel').val()) ||  isEmpty($('#channel-link').val()) ||  isEmpty($('#description').val())){
//         return false;
//     }else{
//         resetErrorMsg();
//         return true;
//     }


// };
// const validateForm2 = () => {
//     const universiyValue = document.querySelector('#universiy').value
//     const collage1Value = document.querySelector('#college1').value
//     if(isEmpty(universiyValue)) {
//         $('#universiy').addClass('is-invalid');
//         $('#universiy').prev().addClass('error-color');
//         $('#universiy').next().text('الرجاء اختيار الجامعة');
//     }
//     if(isEmpty(collage1Value)) {
//         $('#college1').addClass('is-invalid');
//         $('#college1').prev().addClass('error-color');
//         $('#college1').next().text('الرجاء اختيار الكلية');
//     }


//     if (isEmpty(universiyValue) || isEmpty(collage1Value)){
//         return false;
//     }else{
//         resetErrorMsg();
//         return true;
//     }


// };
// const resetErrorMsg = () => {
//     $('#title').removeClass('is-invalid');
//     $('#title').prev().removeClass('error-color');
//     $('#title').next().text('');

//     $('#level').removeClass('is-invalid');
//     $('#level').prev().removeClass('error-color');
//     $('#level').next().text('');

//     $('#channel').removeClass('is-invalid');
//     $('#channel').prev().removeClass('error-color');
//     $('#channel').next().text('');

//     $('#channel-link').removeClass('is-invalid');
//     $('#channel-link').prev().removeClass('error-color');
//     $('#channel-link').next().text('');

//     $('#description').removeClass('is-invalid');
//     $('#description').prev().removeClass('error-color');
//     $('#description').next().text('');

//     $('#universiy').removeClass('is-invalid');
//     $('#universiy').prev().removeClass('error-color');
//     $('#universiy').next().text('');

//     $('#college1').removeClass('is-invalid');
//     $('#college1').prev().removeClass('error-color');
//     $('#college1').next().text('');

// }





</script>