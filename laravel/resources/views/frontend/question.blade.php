@extends('frontend.layout.master')
@section('content')



  <!-- start first section -->
  <section class="land-section padding-section">
    <div class="container">
        <div class="gredint-box">
            <div class="title-box d-flex">
                
                <div class="left-image col-lg-3">
                    <img src="{{asset('frontend')}}/assets/images/success-page-right.svg" alt="" srcset="">
                </div>
                <div class="title-box-text col-lg-3">
                    <h1>الأسئلة الشائعة</h1>
                </div>
                <div class="right-image col-lg-3">
                    <img src="{{asset('frontend')}}/assets/images/success-page-left.svg" alt="" srcset="">
                    
                </div>
                
            </div>
            <div class="gredint-box">
                <div class="condition-contant">
                    <div class="condition-text">
                        <h5 class="mb-2 text-center">

                            حياك الله،، سوف تجد هنا أغلب الأسئلة والمواضيع والاستفسارات التي قد تساعدك، إذا مازلت تحتاج مساعدة بإمكانك ارسال استفسارك بالضغط على تواصل معنا ،أو الاتصال على خدمة العملاء في أي وقت على <strong>8002444455</strong>
                        </h5>
                    </div>
                    <hr>
                   <div class="contant-of-boxs">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            
                              <h3>قبل عملية الشراء</h3>
                             
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
<!-- 1 -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                          <h6>متى تأسس تأميني؟</h6>
                                        </button>
                                      </h2>
                                      <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <p>تأسس تأميني عام ٢٠١٦ وكان أول موقع في المملكة يحصل على رخصة الوساطة الإلكترونية من البنك المركزي السعودي.</p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- start 2-->
                                  <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                                          <h6>كيف يعمل تأميني؟</h6>
                                        </button>
                                      </h2>
                                      <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <p>يرتبط تأميني مع ٢٣ شركة تأمين ويحصل على الأسعار من أنظمة الشركات آلياً، ويعتبر عرض السعر موافقة من الشركة لإصدار التأمين للعميل عند اختياره، و في حال اختيار العميل لأحد العروض و الشراء من تأميني، يقوم تأميني باعادة إرسال الوثيقة المصدرة إلى شركة التأمين لتنفيذ الربط مع الجهات المعنية آلياً وعكسها في أنظمة المرور.</p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- end -->


                                   <!-- start 3-->
                                   <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                                          <h6>ما هو الفرق بين تأمين ضد الغير (طرف ثالث) والتأمين الشامل؟</h6>
                                        </button>
                                      </h2>
                                      <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p>التأمين ضد الغير للسيارات هو الحد الأدنى من مستوى التغطية التأمينية اللي تحتاجه للقيادة بشكل قانوني على طرق المملكة. يغطي تأمين ضد الغير فقط تكلفة تعويض الآخرين عن الإصابات أو الأضرار التي تسببتها في الحادث لا سمح الله ويحميك بإذن الله من المطالبات القانونية والتعويضات المالية المستحقة للطرف الثالث. هذي التغطية لا توفر لك أي مساعدة أو تعويض مالي في حال إصابتك في الحادث أو إصلاح سيارتك. للمزيد من التفاصيل عن التأمين ضد الغير.</p>
                                        <p>التأمين الشامل للسيارة يوفر حماية وتغطية كاملة ضد الأضرار التي لحقت بسيارتك بسبب حادث. كما أن أي تأمين شامل يشمل بشكل افتراضي التأمين ضد الغير. بالإضافة إلى ذلك توفر وثيقة التأمين الشامل تغطية لسيارتك ضد الأضرار الناجمة عن الحريق، السرقة (بدون إهمال)، الكوارث الطبيعية (الفيضانات، البرد، العواصف، وما إلى ذلك). للمزيد من التفاصيل عن التأمين الشامل.
                                        </p>
                                        <p>وبرضه فيه تغطيات تأمينية أخرى للسيارات نقدمها لك في تأميني وهي تغطيات تم تفصيلها وإضافة مزايا خاصة فيها لتتناسب مع احتياجاتك وميزانيتك.</p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- end -->

      <!-- start 4-->
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading4">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
              <h6>ما ضمان سرعة ربط شركة التأمين مع أنظمة نجم/المرور ؟</h6>
            </button>
          </h2>
          <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4" data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <p>يوفر تأميني للعميل في صفحة عروض الأسعار تقييم سرعة ربط كل شركة تأمين مع نجم/المرور وفق البيانات السابقة، فالشركات ملتزمة على إشعار تأميني حال إنتهاء الربط آلياً ويستخدم تأميني هذه المعلومة حسب وقت الإشعار سابقاً في تقييم سرعة الربط وتوفيرها للعميل.</p>
            </div>
          </div>
        </div>
        
      </div>
      <!-- end -->
<!-- start 5 -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
          <h6>هل تقوم شركة التأمين بتعويضي عن إصلاح المركبة بسبب حادث مروري في حال كانت وثيقة التأمين الخاصة بمركبتي هي وثيقة تأمين ضد الغير (طرف ثالث)؟</h6>
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse " aria-labelledby="heading5" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <p>شركة التأمين لا تعوض حامل وثيقة تأمين ضد الغير (طرف ثالث) لإصلاح مركبته الخاصة، وإنما تقوم بتعويض الطرف الثالث في حال كانت هناك مسؤولية للحادث من قبل حامل الوثيقة، وذلك حسب الشروط والاستثناءات الموضحة في وثيقة التأمين.</p>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end -->



<!-- start 6 -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
          <h6>ماهي الوثيقة الموحدة للتأمين الإلزامي على المركبات؟</h6>
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse " aria-labelledby="heading6" data-bs-parent="#accordionExample">
        <div class="accordion-body">
       <p>الوثيقة الموحدة للتأمين الإلزامي على المركبات هي وثيقة تحتوي على القواعد العامة والشروط للتأمين .والتي أصدرها البنك المركزي السعودي. لقراءة كامل الوثيقة ومعرفة الحقوق الرجاء الضغط هنا.</p>
    </div>
      </div>
    </div>
    
  </div>
  <!-- end -->


  
<!-- start 8-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
         <h6>لم يقع لي أي حادث منذ سنوات ولم أستفد من التأمين. لماذا أقوم بالتأمين في كل سنة؟</h6>
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse " aria-labelledby="heading7" data-bs-parent="#accordionExample">
        <div class="accordion-body">
      <p>أنت شخص مثالي ونهنئك ونتمنى لك السلامة دوماً. إلا أنه يجب أن نعلم أن التأمين ليس استثماراً نتوقع منه مردود مباشر، وإنما هو حماية لك بإذن الله من المخاطر والمطالبات المالية الكبيرة أو الصغيرة الناتجة عن الحوادث لا سمح الله والتي لا يستطيع أي فرد التنبؤ بها.</p>
    </div>
      </div>
    </div>
    
  </div>
  <!-- end -->



<!-- start 8-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading8">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
         <h6>هل موقع تأميني آمن للدفع الإلكتروني؟</h6>
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse " aria-labelledby="heading8" data-bs-parent="#accordionExample">
        <div class="accordion-body">
     <p>نعم، يتعامل موقع تأميني مع أحد أكبر البنوك السعودية (بنك الرياض) في عملية الدفع عن طريق سداد، كذلك يرتبط موقع تأميني بخدمة بيفورت )PayFort) للسداد عن طريق البطاقات الائتمانية والذي يمتلك فريق متخصص لمنع الاحتيال والذي سيعمل معك جنباً إلى جنب لإعداد أفضل القواعد والمعايير اللازمة للحد من عمليات الاحتيال. كما سيقوم الفريق بمراقبة المعاملات المالية للبحث عن أي عمليات غير مصرح بها من البطاقات الائتمانية للعملاء.</p>
    </div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 9-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading9">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
         <h6>هل موقع تأميني معتمد ومصرّح من الجهات الرسمية؟</h6>
        </button>
      </h2>
      <div id="collapse9" class="accordion-collapse collapse " aria-labelledby="heading9" data-bs-parent="#accordionExample">
        <div class="accordion-body">
    <p>نعم، موقع تأميني هو أول موقع إلكتروني لشراء وثائق التأمين تم ترخيصه من البنك المركزي السعودي.</p>
    </div>
      </div>
    </div>
    
  </div>
  <!-- end -->


<!-- start 10-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading10">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
         <h6>هل تتطلب عملية الشراء إرسال صور للوثائق الشخصية مثل الهوية الوطنية؟</h6>
        </button>
      </h2>
      <div id="collapse10" class="accordion-collapse collapse " aria-labelledby="heading10" data-bs-parent="#accordionExample">
        <div class="accordion-body">
    <p>لا حاجة لإرسال أو رفع صور للوثائق الرسمية، يقوم تأميني بالتحقق من صحة المعلومات المقدمة من قبلك عن طريق الربط مع مركز المعلومات الوطني والجهات الرسمية ذات الصلة .</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 11-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading11">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
        <h6>هل تغطي وثيقة التأمين ضد الغير (طرف ثالث) الإصابات الشخصية للسائق والركاب؟</h6>
        </button>
      </h2>
      <div id="collapse11" class="accordion-collapse collapse " aria-labelledby="heading11" data-bs-parent="#accordionExample">
        <div class="accordion-body">
   <p>يرجى الرجوع وقراءة الوثيقة الموحدة للتأمين الإلزامي على المركبات لمعرفة التغطية التأمينية.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 12-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading12">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
       <h6>هل يمكن نقل التأمين من شخص لآخر عند شراء مركبة مستعملة على سبيل المثال؟</h6>
    </button>
      </h2>
      <div id="collapse12" class="accordion-collapse collapse " aria-labelledby="heading12" data-bs-parent="#accordionExample">
        <div class="accordion-body">
  <p>بحسب أنظمة البنك المركزي السعودي، لا يمكن نقل تأمين السيارة من شخص لآخر، وإنما يجب الحصول على تأمين جديد في حال شراء مركبة جديدة أو نقل ملكية مركبة.
</p>
<p>ويمكن للمالك السابق استرداد الجزء النسبي من الاشتراك للتأمين (إن وجد) من خلال التواصل مع الشركة المؤمن عندها وذلك على حسب آلية الإلغاء المذكورة في الوثيقة الموحدة للتأمين الإلزامي.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->
  <!-- start 13-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading13">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
       <h6>هل أستطيع شراء أكثر من وثيقة تأمين لنفس المركبة؟</h6>
    </button>
      </h2>
      <div id="collapse13" class="accordion-collapse collapse " aria-labelledby="heading13" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>بحسب أنظمة ولوائح البنك المركزي السعودي، فإنه لا يمكن حمل أو شراء أكثر من وثيقتين على نفس المركبة وبنفس اسم المالك خلال نفس الفترة. علماً أنه يمكن إضافة وثيقة ثالثة جديدة في حال تبقى (14) يوم على انتهاء الوثيقة الأولى.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

  <!-- start 14-->
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading14">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
      
            <h6>هل عملية شراء وثيقة التأمين عن طريق موقع تأميني فورية؟ وهل سوف أحصل على الوثيقة بشكل فوري؟</h6>
    </button>
      </h2>
      <div id="collapse14" class="accordion-collapse collapse " aria-labelledby="heading14" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>نعم، يوفر موقع تأميني قنوات دفع آمنة وفورية (سداد – بطاقات ائتمانية)، وبعد أن تتم عملية شراء الوثيقة بأحد تلك القنوات فإن الوثيقة سوف تصدر للمالك بشكل فوري ويتم إرسال الوثيقة وتفاصيلها عن طريق البريد الإلكتروني المسجل للعميل. كما يمكن تحميل أو طباعة الوثيقة من حسابك الخاص في موقع تأميني.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->



 <!-- start 15-->
 <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading15">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
      
           <h6>تبقى على انتهاء وثيقة التأمين الخاصة بي (10) أيام وأريد أن أجدد التأمين للمركبة، ماذا أعمل؟</h6>
        </button>
      </h2>
      <div id="collapse15" class="accordion-collapse collapse " aria-labelledby="heading15" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>يمكنك تجديد وإصدار وثيقة تأمين جديدة قبل انتهاء وثيقة التأمين الحالية (ننصح بذلك) بمدة لا تزيد عن (14) يوم من تاريخ انتهاء الوثيقة الحالية. وكل ما عليك فعله هو الدخول إلى حسابك في موقع "تأميني" وطلب تأمين جديد على أن يكون اختيارك لـ "تاريخ بدء الوثيقة" هو اليوم التالي من تاريخ انتهاء الوثيقة الحالية. مثال: تاريخ انتهاء الوثيقة الحالية هو 15-07-2017، فإنه يجب اختيار تاريخ بدء الوثيقة الجديدة في 16-07-2017</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 16-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading16">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
      
           <h6>لا أقوم بتجديد تأمين المركبة بعد انتهاء وثيقة التأمين السابقة مباشرةً وإنما أقوم بذلك بعد عدة أيام. هل هناك أي مشكلة في ذلك؟</h6>
        </button>
      </h2>
      <div id="collapse16" class="accordion-collapse collapse " aria-labelledby="heading16" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>ننصح دائماً بعدم ترك المركبة بدون تغطية تأمينية ولو كان يوماً واحداً وذلك للأسباب التالية:  تفادي أخطار الوقوع في حوادث مرورية لا سمح الله والتي قد تنتج عتها مطالبات مالية على مالك المركبة.  عدم تجديد تأمين المركبة أو وجود فترة انقطاع بين الوثيقة السابقة والجديدة قد يؤدي إلى فقدانك أحقية الخصم للوثيقة في حال عدم وجود مطالبات.  عدم التجديد قد يعرضك للحصول على مخالفة مرورية.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->
<!-- start 17-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading17">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
      
           <h6>هل التسعيرات التي يقدمها موقع تأميني من شركات التأمين تشمل خصم عدم وجود مطالبات؟</h6>
        </button>
      </h2>
      <div id="collapse17" class="accordion-collapse collapse " aria-labelledby="heading17" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>نعم، موقع تأميني يربط مع الجهات المعنية لضمان حصول عملائه على أفضل الأسعار ومن ذلك الحصول على جميع الخصومات المتوفرة ومن بينها خصم "عدم وجود مطالبات" والتي أقرها البنك المركزي السعودي على جميع شركات التأمين للتأمين الإلزامي (تأمين ضد الغير) للأفراد.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->
<!-- start 18-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading18">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
      
          <h6>أريد أن أقوم بنقل ملكية مركبة وإصدار "رخصة السير" للمركبة (الاستمارة) من المرور، هل يضمن موقع "تأميني" وصول وثيقة التأمين لمركز المعلومات الوطني (المرور) بشكل فوري بعد عملية الشراء؟</h6>
        </button>
      </h2>
      <div id="collapse18" class="accordion-collapse collapse " aria-labelledby="heading18" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>نعم، إن آلية العمل مع شركائنا في شركات التأمين هي القيام بإرسال وتصدير وثيقة التأمين إلى مركز المعلومات الوطني (المرور) فور أن تتم عملية شراء وثيقة التأمين بنجاح.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->
<!-- start 19-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading19">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
      
         <h6>هل تسعيرات الوثائق التي يقدمها موقع تأميني تنافسية؟</h6>
        </button>
      </h2>
      <div id="collapse19" class="accordion-collapse collapse " aria-labelledby="heading19" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>نعم، موقع تأميني يحرص منذ إنشاءه على أن أسعار الوثائق المقدمة في الموقع هي أسعار منافسة مقارنة بسوق التأمين.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 20-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading20">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
      
        <h6>هل يستفيد تأميني بزيادة السعر على أسعار شركات التأمين؟</h6>
        </button>
      </h2>
      <div id="collapse20" class="accordion-collapse collapse " aria-labelledby="heading20" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>إطلاقاً، لا يتم زيادة نسبة تأميني في عروض السعر المقدمة من الشركات، بل يتم استقطاعها من شركة التأمين. ولا يدفع العميل أي مبلغ إضافي عن سعر شركة التأمين.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->
<!-- start 21-->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading21">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
      
        <h6>لماذا استفيد من الاستمرار مع تأميني عند تجديد تأميني؟</h6>
    </button>
      </h2>
      <div id="collapse21" class="accordion-collapse collapse " aria-labelledby="heading21" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>ستمرارك مع تأميني يؤهلك لدخول برنامج الولاء الخاص بعملاء تأميني ويزيد الفرصة لك بنفس الوقت في اختيار الشركة الأنسب لك ومعرفة الأسعار حال تجديد تأمينك دون الإكتفاء بعرض سعر واحد.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->


  <!-- start 22-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading22">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
    
     <h6>هل يمكن أن أجد عروض أسعار في مواقع شركات التأمين أفضل من العروض المقدمة في تأميني؟</h6>
    </button>
    </h2>
    <div id="collapse22" class="accordion-collapse collapse " aria-labelledby="heading22" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>حسب الإتفاقية بين تأميني وشركات التأمين، فإن شركات التأمين تلتزم بتوفير جميع عروضها وأسعارها على موقع تأميني دون أي اختلاف عن عروضها في موقعها الرئيسي وتطبق في نفس اللحظة، وفي حال وجود اختلاف نرجو إشعار تأميني والحصول على كوبون خصم إهداء من تأميني نتيجة خدمة العميل لنا. ومن المهم التنويه أن بعض شركات التأمين تعتمد في مواقعها آلية عرض السعر غير شامل للضريبة حتى يصل خطوة الدفع، مما قد يسبب إلتباس للعميل أن السعر مختلف عن السعر الموجود في تأميني، كون تأميني يعرض السعر مع الضريبة لوضوح اكثر للعميل.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->



 <!-- start 23-->
 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading23">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="true" aria-controls="collapse23">
    
     <h6>هل عروض الأسعار المقدمة لها فترة صلاحية؟ وهل هي متغيرة؟</h6>
    </button>
    </h2>
    <div id="collapse23" class="accordion-collapse collapse " aria-labelledby="heading23" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>نعم، العروض المقدمة لها فترة صلاحية محددة تسمى بفترة الشراء وعند انتهاء الفترة يجب القيام من جديد بطلب تسعيرة جديدة.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
 <!-- start 24-->
 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading24">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="true" aria-controls="collapse24">
    <h6>ما المقصود بمميزات الوثيقة؟</h6>
    </button>
    </h2>
    <div id="collapse24" class="accordion-collapse collapse " aria-labelledby="heading24" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>مميزات الوثيقة يقصد بها التغطيات التي تشملها وثيقة التأمين المقدمة من شركة التأمين. وتختلف تلك التغطيات عادةً من شركة تأمين لأخرى</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
 <!-- start 25-->
 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading25">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="true" aria-controls="collapse25">
   <h6>ماهي وسائل الدفع الممكنة لشراء وثيقة تأمين في تأميني؟</h6>
  </button>
    </h2>
    <div id="collapse25" class="accordion-collapse collapse " aria-labelledby="heading25" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>يمكن الدفع وشراء الوثائق إلكترونياً عن طريق البطاقات الائتمانية (فيزا أو ماستر كارد)، كما يمكنك الشراء باستخدام خدمة سداد و بطاقات مدى</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->

 <!-- start 26-->
 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading26">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="true" aria-controls="collapse26">
  <h6>أين أستطيع أن أجد رقم فاتورة سداد ورقم المرجع؟</h6>
  </button>
    </h2>
    <div id="collapse26" class="accordion-collapse collapse " aria-labelledby="heading26" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>عند اختيارك الدفع عن طريق خدمة سداد، سيظهر لك رقم المفوتر والرقم المرجعي للفاتورة وسيتم إرسال هذه المعلومات إلى أيضاً إلى بريدك الإلكتروني المسجل في حسابك، ويمكن الوصول لهذه المعلومات عبر اتباع هذه الخطوات: ١ـ الدخول لحسابك ٢ـ الضغط على "حسابي" ٣ـ الضغط على "لوحة التحكم" من القائمة ٤ـ الضغط على فواتير سداد.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->



 <!-- start 27-->
 <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading27">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
  <h6>كيف أعرف رقم فاتورة سداد؟</h6>
</button>
    </h2>
    <div id="collapse27" class="accordion-collapse collapse " aria-labelledby="heading27" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>عند إصدار فاتورة سداد سيتم عرض المعلومات الآتية: 1ـ رمز فاتورة سداد 2ـ رقم المرجع 3ـ آخر موعد للسداد يرجى استخدام رمز فاتورة سداد ورقم المرجع واستخدام احدى قنواتك البنكية للسداد.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->

<!-- start 28-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading28">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="true" aria-controls="collapse28">
  <h6>قمت بالدفع ولم تصلني نسخة من الوثيقة عبر بريدي الإلكتروني؟</h6>
</button>
    </h2>
    <div id="collapse28" class="accordion-collapse collapse " aria-labelledby="heading28" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>إذا لم تصلك الوثيقة بعد عملية الدفع وظهور صفحة عملية دفع ناجحة يرجى اتباع الخطوات التالية: الدخول لحسابك في موقع تأميني والضغط على أيقونة "حسابي" في الأعلى، بعد ذلك الضغط على "لوحة التحكم" من القائمة ومن ثم الضغط على "وثائق سارية المفعول". إذا لم يكن هناك وثائق سارية المفعول في حسابك يرجى التواصل مع خدمة العملاء عبر ٨٠٠٢٤٤٤٤٥٥ أو إرسال طلب دعم فني عن طريق صفحة "تواصل معنا" وسوف يقوم فريق العمل لدينا بالتواصل معكم في أسرع وقت ممكن.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
<!-- start 2-29-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-29">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-29" aria-expanded="true" aria-controls="collapse2-29">
  <h6>قمت بالتسجيل ولم يصلني رمز التحقق عبر رسالة نصية للجوال؟</h6>
</button>
    </h2>
    <div id="collapse2-29" class="accordion-collapse collapse " aria-labelledby="heading2-29" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>سيتم إرسال رمز التحقق خلال أقصى حد (4) دقائق وفي حال لم تصل الرسالة يرجى التأكد من الرقم المستخدم أعلى خانة رمز التحقق، إذا كان الرقم صحيح يرجى الضغط على زر إعادة الإرسال، إذا لم يصلك الرمز خلال عدة محاولات، يرجى التواصل مع خدمة العملاء عبر ٨٠٠٢٤٤٤٤٥٥ أو إرسال طلب دعم فني عن طريق صفحة "تواصل معنا" وسوف يقوم فريق العمل لدينا بالتواصل معكم في أسرع وقت ممكن.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
<!-- start 2-30-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-30">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-30" aria-expanded="true" aria-controls="collapse2-30">
  <h6>هناك خطأ في معلوماتي التأمينية الواردة في وثيقة التأمين؟</h6>
</button>
    </h2>
    <div id="collapse2-30" class="accordion-collapse collapse " aria-labelledby="heading2-30" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>إذا كان هناك أي معلومات خاطئة أو غير صحيحة في وثيقة التأمين فيجب التواصل مباشرةً مع شركة التأمين المعنية لتحديث وثيقة التأمين. بإمكانك زيارة صفحتنا الرئيسية: https://www.tameeni.com/ للاطلاع على عناوين وأرقام التواصل مع شركات التأمين.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->

<!-- start 2-31-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-31">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-31" aria-expanded="true" aria-controls="collapse2-31">
  <h6>ماهي أوقات دوام عمل خدمة العملاء؟</h6>
</button>
    </h2>
    <div id="collapse2-31" class="accordion-collapse collapse " aria-labelledby="heading2-31" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>أوقات العمل من يوم الأحد إلى الخميس: من الساعة ۸ صباحاً حتى الساعة ١١ مساءً. يوم الجمعة والسبت: مغلق</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
<!-- start 2-32-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-32">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-32" aria-expanded="true" aria-controls="collapse2-32">
<h6>هل تغطي وثيقة التأمين الإلزامي (ضد الغير) أي سائق يقل عمره عن 18 عامًا (هجري) ؟</h6>
</button>
    </h2>
    <div id="collapse2-32" class="accordion-collapse collapse " aria-labelledby="heading2-32" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>وفقًا للوثيقة الموحدة للتأمين الإلزامي على المركبات ، لا تغطي الوثيقة أي سائق يقل عمره عن 18 عامًا (هجري). ولكي يتم تغطية السائق الذي يقل عمره عن 18 عامًا (هجري) يجب أن يقوم المؤمن له بإضافة هذا السائق ضمن قائمة السائقين الإضافيين حتى يتم تغطيتهم</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->

  <!--  -->

                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              <p>خلال عملية الشراء</p>
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                               <!-- start 2-1-->
                               <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading2-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                                     <h6>ما هو العنوان الوطني؟ وكيف اعرف عنواني الوطني؟</h6>
                                    </button>
                                  </h2>
                                  <div id="collapse2-1" class="accordion-collapse collapse " aria-labelledby="heading2-1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                     <p>العنوان الوطني هو مكان وعنوان إقامة/سكن حامل الوثيقة (مالك الوثيقة/المؤمن له). بإمكانك معرفة عنوانك الوطني عن طريق بوابة العنوان الوطني https://address.gov.sa ولتسهيل عملية الشراء قمنا بإضافة خريطة جوجل أثناء عملية الشراء حيث يتطلب فقط تحديد عنوانك وسنقوم بتعبئة خانات عنوانك الوطني بشكل آلي.</p>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->
                              <!-- start 2-2-->
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading2-2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-2" aria-expanded="true" aria-controls="collapse2-2">
                                     <h6>ما المقصود برقم الهوية الوطنية؟</h6>
                                    </button>
                                  </h2>
                                  <div id="collapse2-2" class="accordion-collapse collapse " aria-labelledby="heading2-2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                     <p>هو الرقم الموجود في بطاقة الهوية الوطنية (بطاقة الأحوال) والذي يتكون من عشرة أرقام.</p>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->
                            
                               <!-- start 2-3-->
                               <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading2-3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-3" aria-expanded="true" aria-controls="collapse2-3">
                                     <h6>ما لمقصود برقم الشركة وكيف أستطيع الحصول عليه؟</h6>
                                    </button>
                                  </h2>
                                  <div id="collapse2-3" class="accordion-collapse collapse " aria-labelledby="heading2-3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>رقم الشركة هو رقم الحاسب الآلي في مركز المعلومات الوطني، ويمكن إيجاده في الزاوية اليسرى العلوية للسجل التجاري للشركة فوق رقم السجل التجاري ويبدأ بالرقم (7).</p>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->
                                 <!-- start 2-4-->
                                 <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2-4">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-4" aria-expanded="true" aria-controls="collapse2-4">
                                       <h6>ما هو الرقم التسلسلي للمركبة؟ وأين أستطيع إيجاده؟</h6>
                                      </button>
                                    </h2>
                                    <div id="collapse2-4" class="accordion-collapse collapse " aria-labelledby="heading2-4" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                     <p>الرقم التسلسلي للمركبة هو الرقم الموجود في أسفل بطاقة "رخصة السير" للمركبة (الاستمارة).</p>
                                    </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end -->
                                  <!-- start 2-5-->
                                  <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading2-5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-5" aria-expanded="true" aria-controls="collapse2-5">
                                         <h6>ما هو "رقم البطاقة الجمركية" للمركبة؟ وأين أستطيع إيجاده؟</h6>
                                        </button>
                                      </h2>
                                      <div id="collapse2-5" class="accordion-collapse collapse " aria-labelledby="heading2-5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                      <p>هو رقم البطاقة الصادر من مصلحة الجمارك والموجود في الركن الأيسر العلوي للبطاقة (فقط أرقام بدون العلامات).</p>
                                      </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- end -->
                                   <!-- start 2-6-->
                                   <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading2-6">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-6" aria-expanded="true" aria-controls="collapse2-6">
                                      <h6>ما المقصود بتاريخ انتهاء الهوية؟</h6>
                                        </button>
                                      </h2>
                                      <div id="collapse2-6" class="accordion-collapse collapse " aria-labelledby="heading2-6" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                    <p>هو تاريخ صلاحية بطاقة الهوية الوطنية لمالك المركبة والموجود في بطاقة الهوية الوطنية (بطاقة الأحوال) أسفل رقم الهوية.</p>
                                    </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- end -->
                                    <!-- start 2-7-->
                                    <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading2-7">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-7" aria-expanded="true" aria-controls="collapse2-7">
                                       <h6>ما المقصود بسنة الميلاد؟</h6>
                                      </button>
                                        </h2>
                                        <div id="collapse2-7" class="accordion-collapse collapse " aria-labelledby="heading2-7" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                     <p>هو تاريخ الميلاد لمالك المركبة والموجود على بطاقة "هوية مقيم" (الإقامة).</p>
                                    </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <!-- end -->
                                      <!-- start 2-8-->
                                      <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="heading2-8">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-8" aria-expanded="true" aria-controls="collapse2-8">
                                        <h6>ما هي المدخلات التي تؤثر على سعر الوثيقة؟</h6>
                                        </button>
                                          </h2>
                                          <div id="collapse2-8" class="accordion-collapse collapse " aria-labelledby="heading2-8" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                      <p>توجد عدة مدخلات تؤثر على سعر وثيقة التأمين (كل شركة تأمين لها طريقة خاصة في احتساب سعر الوثيقة). فعلى سبيل المثال لا الحصر، نوع المركبة وعمر السائق والمنطقة التي سوف يتم استخدام المركبة فيها والغرض من استخدام المركبة، كل ذلك قد يؤثر على سعر وثيقة التأمين. كذلك هناك عوامل أخرى تؤثر على سعر الوثيقة كوجود مطالبات سابقة أو حوادث تسبب فيها مالك المركبة أو أحد السائقين لها.</p>
                                      </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                      <!-- end -->
                                        <!-- start 2-9-->
                                        <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2-9">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-9" aria-expanded="true" aria-controls="collapse2-9">
                                        <h6>هل إضافة قائد إضافي للمركبة أقل من ٢١ سنة ستؤثر على سعر الوثيقة؟</h6>
                                        </button>
                                            </h2>
                                            <div id="collapse2-9" class="accordion-collapse collapse " aria-labelledby="heading2-9" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                       <p>نعم سيؤثر على سعر الوثيقة.</p>
                                      </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <!-- end -->

                                         <!-- start 2-10-->
                                         <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2-10">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-10" aria-expanded="true" aria-controls="collapse2-10">
                                        <h6>كيف اعرف "نوع وثيقة المركبة"؟</h6>
                                      </button>
                                            </h2>
                                            <div id="collapse2-10" class="accordion-collapse collapse " aria-labelledby="heading2-10" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                       <p>في حال كانت المركبة المراد التأمين عليها تحمل رخصة سير (استمارة)، فنوع التسجيل يكون "بطاقة التسجيل (استمارة)". أما إذا لم يكن للمركبة رخصة سير (استمارة) -أي أنها سيارة جديدة من الوكالة أو تم استيرادها من الخارج-، فنوع التسجيل في تلك الحالة يكون "البطاقة الجمركية"</p>
                                      </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <!-- end -->
                                         <!-- start 2-11-->
                                         <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2-11">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-11" aria-expanded="true" aria-controls="collapse2-11">
                                        <h6>ما المقصود برقم الإقامة؟</h6>
                                      </button>
                                            </h2>
                                            <div id="collapse2-11" class="accordion-collapse collapse " aria-labelledby="heading2-11" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                      <p>هو الرقم الموجود في بطاقة هوية المقيم والذي يتكون من عشرة أرقام.</p>
                                      </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <!-- end -->

                                         <!-- start 2-12-->
                                         <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2-12">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-12" aria-expanded="true" aria-controls="collapse2-12">
                                        <h6>ما المقصود بالغرض من استخدام المركبة؟</h6>
                                      </button>
                                            </h2>
                                            <div id="collapse2-12" class="accordion-collapse collapse " aria-labelledby="heading2-12" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                     <p>يقصد بذلك الغرض من استخدام المركبة للاستعمال اليومي، سواء كان ذلك للاستخدام الشخصي أو للتأجير أو لنقل البضائع... الخ.</p>
                                    </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      
                                        <!-- end -->
                                            <!-- start 2-13-->
                                            <div class="accordion" id="accordionExample">
                                              <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading2-13">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-13" aria-expanded="true" aria-controls="collapse2-13">
                                                          <h6>ماذا لو كنت أستخدم المركبة للأغراض الشخصية وكذلك لنقل الركاب (مثال: أوبر أو كريم)؟ ماذا أختار؟</h6>
                                          </button>
                                                </h2>
                                                <div id="collapse2-13" class="accordion-collapse collapse " aria-labelledby="heading2-13" data-bs-parent="#accordionExample">
                                                  <div class="accordion-body">
                                        <p>ذا كان هناك (أي) استخدام آخر مع الاستخدام الشخصي (حتى لو كان قليلاً أو يستخدم في بعض الأحيان)، فإنه يجب اختيار الاستخدام الآخر ولا يتم اختيار "استخدام شخصي". مثال: (أحمد) لديه سيارة خاصة ويستخدمها غالباً للأغراض الشخصية ولكن في عطل نهاية الأسبوع يقوم (أحمد) باستخدام مركبته لتوصيل الأشخاص من مكان إلى آخر باستخدام (أوبر- على سبيل المثال). في حالة (أحمد)، يجب عليه اختيار "نقل ركاب (أوبر)" في خانة (الغرض من الاستخدام).</p>
                                        </div>
                                                </div>
                                              </div>
                                              
                                            </div>
                                            <!-- end -->
                                             <!-- start 2-14-->
                                             <div class="accordion" id="accordionExample">
                                              <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading2-14">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-14" aria-expanded="true" aria-controls="collapse2-14">
                                                        <h6>حينما اشتريت وثيقة التأمين من موقع تأميني كنت أستخدم المركبة للأغراض الشخصية، ولكن بعد مرور عدة أشهر قررت أن أقوم باستخدامها لنقل الركاب (على سبيل المثال: أوبر أو كريم). ماذا علي أن أعمل؟</h6>
                                                        </button>
                                                </h2>
                                                <div id="collapse2-14" class="accordion-collapse collapse " aria-labelledby="heading2-14" data-bs-parent="#accordionExample">
                                                  <div class="accordion-body">
                                       <p>في حال كان هناك أي تغيير في بيانات أو معلومات المؤمن له أو المركبة أو أي معلومات تؤثر في وثيقة التأمين بعد شراء وثيقة التأمين، فإنه يجب على المؤمن له (مالك الوثيقة) إشعار شركة التأمين المعنية بذلك وتعديل وثيقة التأمين على ضوء ذلك لحفظ حقوق المؤمن له والتي تشمل على سبيل المثال لا الحصر (العنوان الوطني، معلومات المركبة، معلومات مالك الوثيقة، الغرض من استخدام المركبة، عمر السائق، مدينة قيادة المركبة، إلخ..).</p>
                                      </div>
                                                </div>
                                              </div>
                                              
                                            </div>
                                            <!-- end -->

                                              <!-- start 2-15-->
                                              <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="heading2-15">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-15" aria-expanded="true" aria-controls="collapse2-15">
                                                        <h6>ماهي عواقب إدخال بيانات غير صحيحة؟</h6>
                                                        </button>
                                                  </h2>
                                                  <div id="collapse2-15" class="accordion-collapse collapse " aria-labelledby="heading2-15" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                         <p>بحسب أنظمة ولوائح البنك المركزي السعودي، وبالرجوع إلى الوثيقة الموحدة للتأمين الإلزامي الصادرة من البنك المركزي السعودي، فإنها نصت على أنه إذا ثبت أن المؤمن له أدلى ببيانات غير صحيحة أو أخفى وقائع جوهرية فإن لشركة التأمين الاحتفاظ بحق الرجوع للمؤمن له. وبذلك لا تعد وثيقة التأمين صالحة بموجبه.</p>
                                      
                                        </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                              <!-- end -->

                                              
                                              <!-- start 2-16-->
                                              <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="heading2-16">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-16" aria-expanded="true" aria-controls="collapse2-16">
                                                       <h6>هل يمكن شراء وثيقة تأمين بهوية وطنية أو إقامة منتهية الصلاحية؟</h6>
                                                      </button>
                                                  </h2>
                                                  <div id="collapse2-16" class="accordion-collapse collapse " aria-labelledby="heading2-16" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                        <p>لا يمكن ذلك، فيجب تجديد الهوية أولاً.</p>
                                        </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                              <!-- end -->


             <!-- start 2-17-->
             <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading2-17">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-17" aria-expanded="true" aria-controls="collapse2-17">
                    <h6>ما هو "تاريخ بدء الوثيقة"؟</h6>
                    </button>
                </h2>
                <div id="collapse2-17" class="accordion-collapse collapse " aria-labelledby="heading2-17" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
     <p>هو تاريخ بدء سريان وثيقة التأمين (بدء التغطية التأمينية). ولا يمكن أن تكون بداية التغطية التأمينية في نفس يوم طلب التأمين، بل يكون بعد يوم واحد على الأقل من تاريخ طلب التأمين وحتى أقصى حد (14) يوم.</p>
    </div>
                </div>
              </div>
              
            </div>
            <!-- end -->
  <!-- start 2-18-->
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2-18">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-18" aria-expanded="true" aria-controls="collapse2-18">
          <h6>لم أستطيع الحصول على تسعيرة للوثيقة وظهور رسالة "خطأ في جلب تسعيرة لطلبك"؟</h6>
        </button>
      </h2>
      <div id="collapse2-18" class="accordion-collapse collapse " aria-labelledby="heading2-18" data-bs-parent="#accordionExample">
        <div class="accordion-body">
<p>يرجى المحاولة مرة أخرى لاحقاً والتأكد من صحة المعلومات، وفي حال تكرار الرسالة يمكن التواصل مع خدمة العملاء إما بالاتصال خلال أوقات العمل عبر ٨٠٠٢٤٤٤٤٥٥ أو إرسال طلب دعم فني عن طريق صفحة "تواصل معنا" وسوف يقوم فريق العمل لدينا بالتواصل معكم في أسرع وقت ممكن.</p>
</div>
      </div>
    </div>
    
  </div>
  <!-- end -->

<!-- start 2-19-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-19">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-19" aria-expanded="true" aria-controls="collapse2-19">
       <h6>لماذا تختلف الأسعار المقدمة لي من شركات التأمين عن صديق أو قريب لي ؟</h6>
      </button>
    </h2>
    <div id="collapse2-19" class="accordion-collapse collapse " aria-labelledby="heading2-19" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>يعتمد تقديم عرض سعر من شركات التأمين على عدة عوامل منها السجل التأميني، الحوادث السابقة للعميل، العمر، المنطقة، وعوامل أخرى تعتمدها الشركة في التسعير، ويوفر تأميني هذه العروض بدون أي تدخل في التسعير.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
<!-- start 2-20-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-20">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-20" aria-expanded="true" aria-controls="collapse2-20">
      <h6>لماذا قد أجد أسعار شركات أحياناً وأحياناً لا أجدها ؟</h6>
      </button>
    </h2>
    <div id="collapse2-20" class="accordion-collapse collapse " aria-labelledby="heading2-20" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>يعتمد ذلك على تقديم الشركات للعروض آلياً وقد يتأثر ذلك بمدى استجابة أنظمة كل شركة آلياً وعدم تعطلها.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->
<!-- start 2-20-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2-20">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-20" aria-expanded="true" aria-controls="collapse2-20">
      <h6>لماذا قد أجد أسعار شركات أحياناً وأحياناً لا أجدها ؟</h6>
      </button>
    </h2>
    <div id="collapse2-20" class="accordion-collapse collapse " aria-labelledby="heading2-20" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>يعتمد ذلك على تقديم الشركات للعروض آلياً وقد يتأثر ذلك بمدى استجابة أنظمة كل شركة آلياً وعدم تعطلها.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->


                            <!--  -->
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              <p>بعد عملية الشراء</p>
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              
                              
                              <!-- start 3-1-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading3-1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-1" aria-expanded="true" aria-controls="collapse3-1">
<h6>هل يجب أن أطبع وثيقة التأمين التي اشتريتها من موقع تأميني؟</h6>
      </button>
    </h2>
    <div id="collapse3-1" class="accordion-collapse collapse " aria-labelledby="heading3-1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<p>على الرغم من أن شركة نجم والتي تباشر الحوادث تقوم بالاستعلام عن وثيقة التأمين للمركبة إلكترونياً، إلا أننا ننصح ونحث عملائنا على طباعة وثيقة التأمين والاحتفاظ بها في المركبة دوماً في حال تم طلبها من رجل المرور أو غيره.</p>
</div>
    </div>
  </div>
  
</div>
<!-- end -->

                              <!-- start 3-2-->
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading3-2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-2" aria-expanded="true" aria-controls="collapse3-2">
                          <h6>نسيت كلمة المرور الخاصة بي؟ ماذا أعمل؟</h6>
                            </button>
                                  </h2>
                                  <div id="collapse3-2" class="accordion-collapse collapse " aria-labelledby="heading3-2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                            <p>لإعادة تهيئة كلمة المرور يرجى اتباع الخطوات التالية: ١ـ الدخول لنافذة تسجيل الدخول والضغط على "نسيت كلمة المرور" ٢ـ إدخال بريدك الإلكتروني المسجل في تأميني ٣ـ الضغط على زر "إرسال" ٤ـ سيتم إرسال رسالة إلى بريدك الإلكتروني المسجل، يرجى الضغط على رابط تغيير كلمة المرور المرسل لك ٥ـ ستفتح نافذة تحديث كلمة المرور، قم بإدخال كلمة مرور الجديدة.</p>
                            </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->
                            
                             <!-- start 3-3-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-3">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-3" aria-expanded="true" aria-controls="collapse3-3">
                        <h6>هل أستطيع تغيير عنوان البريد الإلكتروني الخاص بي؟</h6>
                      </button>
                                </h2>
                                <div id="collapse3-3" class="accordion-collapse collapse " aria-labelledby="heading3-3" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                          <p>نعم، يمكن تغيير البريد الإلكتروني وذلك باتباع الخطوات التالية: ١ـ الدخول لحسابك ٢ـ الضغط على "حسابي" ٣ـ الضغط على "الإعدادات" من القائمة ٤ـ الضغط على أيقونة تعديل البريد الإلكتروني في خانة "البريد الإلكتروني".</p>
                        </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                             
                             <!-- start 3-4-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-4">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-4" aria-expanded="true" aria-controls="collapse3-4">
                       <h6>هل يمكنني الرجوع لحسابي لاحقاً وطباعة الوثيقة؟</h6>
                      </button>
                                </h2>
                                <div id="collapse3-4" class="accordion-collapse collapse " aria-labelledby="heading3-4" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                         <p>نعم، يمكنك في أي وقت الرجوع للحساب وطباعة وثيقة التأمين التي تم شراؤها.</p>
                        </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                             <!-- start 3-5-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-5">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-5" aria-expanded="true" aria-controls="collapse3-5">
                      <h6>هل أستطيع تغيير رقم الجوال؟</h6>
                      </button>
                                </h2>
                                <div id="collapse3-5" class="accordion-collapse collapse " aria-labelledby="heading3-5" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                       <p>نعم، يمكنك تغيير رقم جوالك وذلك باتباع الخطوات التالية: ١ـ الدخول لحسابك ٢ـ الضغط على "حسابي" ٣ـ الضغط على "الإعدادات" من القائمة ٤ـ الضغط على أيقونة تعديل رقم الجوال في خانة " رقم الجوال". سيتم التحقق من صحة رقم جوالك الجديد بإرسال رسالة نصية تحوي رمز للتفعيل.</p>
                        </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                             <!-- start 3-6-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-6">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-6" aria-expanded="true" aria-controls="collapse3-6">
                     <h6>ما المقصود بـ "وثائق سارية المفعول" والموجودة عند الدخول لحسابي في موقع تأميني؟</h6>
  
                      </button>
                                </h2>
                                <div id="collapse3-6" class="accordion-collapse collapse " aria-labelledby="heading3-6" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                      <p>هي وثائق التأمين التي قمت بشرائها سابقاً من موقع "تأميني" ولم تنتهي بعد صلاحية (فترة) تغطية التأمين لها.</p>
                      </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                             <!-- start 3-7-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-7">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-7" aria-expanded="true" aria-controls="collapse3-7">
                     <h6>ما المقصود بـ "وثائق منتهية الصلاحية" والموجودة عند الدخول لحسابي في موقع تأميني؟</h6>
                      </button>
                                </h2>
                                <div id="collapse3-7" class="accordion-collapse collapse " aria-labelledby="heading3-7" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                      <p>هي وثائق التأمين التي قمت بشرائها سابقاً من موقع "تأميني" والتي انتهت صلاحية (فترة) تغطية التأمين لها.</p>
                    </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                            
                             <!-- start 3-8-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-8">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-8" aria-expanded="true" aria-controls="collapse3-8">
                     <h6>ما المقصود بـ "وثائق قاربت على الانتهاء" والموجودة عند الدخول لحسابي في موقع تأميني؟</h6>
                    </button>
                                </h2>
                                <div id="collapse3-8" class="accordion-collapse collapse " aria-labelledby="heading3-8" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                      <p>هي وثائق التأمين التي قمت بشرائها سابقاً من موقع "تأميني" والتي تبقى فترة زمنية قصيرة على انتهاء صلاحية (فترة) التغطية لها. في هذه الحالة يتوجب على مالك المركبة (المؤمن له) بشراء وثيقة تأمين جديدة من موقع تأميني.</p>
                    </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                             <!-- start 3-9-->
                             <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3-9">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-9" aria-expanded="true" aria-controls="collapse3-9">
                     <h6>هل بعد عملية الشراء تكون الوثيقة سارية المفعول؟</h6>
                    </button>
                                </h2>
                                <div id="collapse3-9" class="accordion-collapse collapse " aria-labelledby="heading3-9" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                      <p>تعتبر وثيقة التأمين سارية المفعول فقط من تاريخ بدء (سريان) الوثيقة والموضح في وثيقة التأمين.</p>
                    </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- end -->

                              <!-- start 3-10-->
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading3-10">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-10" aria-expanded="true" aria-controls="collapse3-10">
                      <h6>ماهي "قائمة الاختيار السريع" الموجودة في صفحة المركبات والهويات المسجلة؟</h6>
                      </button>
                                  </h2>
                                  <div id="collapse3-10" class="accordion-collapse collapse " aria-labelledby="heading3-10" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                      <p>هي قائمة تتضمن على العناصر (الهويات المسجلة، المركبات، العناوين) التي قمت بإضافتها مسبقاً في "تأميني" لتسهيل عملية الشراء مستقبلاً دون الحاجة إلى إدخال البيانات مرةً أخرى.</p>
                      </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->

                              <!-- start 3-11-->
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading3-11">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-11" aria-expanded="true" aria-controls="collapse3-11">
                      <h6>هل أستطيع إلغاء الوثيقة بعد شراؤها من موقع تأميني؟</h6>
                    </button>
                                  </h2>
                                  <div id="collapse3-11" class="accordion-collapse collapse " aria-labelledby="heading3-11" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                     <p>لا يمكن إلغاء وثيقة التأمين عن طريق موقع تأميني، ويلزم مراجعة شركة التأمين المعنية للقيام بذلك.</p>
                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->

                               <!-- start 3-12-->
                               <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading3-12">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-12" aria-expanded="true" aria-controls="collapse3-12">
                     <h6>هل موقع تأميني يقوم بتعويضي عن المطالبات؟</h6>
                    </button>
                                  </h2>
                                  <div id="collapse3-12" class="accordion-collapse collapse " aria-labelledby="heading3-12" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                     <p>موقع "تأميني" يختص فقط في بيع وثائق التأمين.</p>
                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- end -->

                                 <!-- start 3-13-->
                                 <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3-13">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-13" aria-expanded="true" aria-controls="collapse3-13">
                       <h6>قمت بتعديل/تغيير/إلغاء وثيقة التأمين مع شركة التأمين المعنية، لم أرى هذا التغيير في موقع تأميني؟</h6>
                      </button>
                                    </h2>
                                    <div id="collapse3-13" class="accordion-collapse collapse " aria-labelledby="heading3-13" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                       <p>في حال قام مالك الوثيقة بإجراء أي تعديل على وثيقته لاحقاً مع شركة التأمين المعنية، فإن هذا التغيير لن يحدث في موقع تأميني ويعتبر ما تم تغييره من شركة التأمين هو الساري والمعمول به.</p>
                      </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end -->

                                
                                 <!-- start 3-14-->
                                 <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3-14">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-14" aria-expanded="true" aria-controls="collapse3-14">
                       <h6>هل أستطيع حذف هوية أو مركبة مسجلة عن طريق حسابي في تأميني؟</h6>
                      </button>
                                    </h2>
                                    <div id="collapse3-14" class="accordion-collapse collapse " aria-labelledby="heading3-14" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                      <p>يمكن ذلك من خلال الدخول لحسابك والتوجه إلى الهويات المسجلة أو المركبات المسجلة، واختيار أيقونة الحذف بجانب المعلومة المراد حذفها.</p>
                      </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end -->
                                 <!-- start 3-15-->
                                 <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3-15">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-15" aria-expanded="true" aria-controls="collapse3-15">
                      <h6>هل يمكن حذف عنوان وطني قديم؟</h6>
                      </button>
                                    </h2>
                                    <div id="collapse3-15" class="accordion-collapse collapse " aria-labelledby="heading3-15" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                     <p>يمكن الحذف من خلال قائمة الاختيار السريع أثناء عملية الشراء. كما يمكنك تعديل العنوان الوطني لإحدى الهويات المسجلة في تأميني من خلال الدخول لحسابك والتوجه لصفحة الهويات المسجلة والضغط على أيقونة التعديل بجانب الهوية المطلوبة. أو تعديل العنوان الوطني لمالك الحساب من خلال صفحة الإعدادات.</p>
                    </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end -->
                                  <!-- start 3-16-->
                                  <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading3-16">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-16" aria-expanded="true" aria-controls="collapse3-16">
                        <h6>هل أستطيع تغيير لغة رسائل البريد الإلكتروني والرسائل النصية التي تصلني من تأميني؟</h6>
                      </button>
                                      </h2>
                                      <div id="collapse3-16" class="accordion-collapse collapse " aria-labelledby="heading3-16" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                      <p>نعم، يمكنك التغيير وذلك باتباع الخطوات التالية: ١ـ الدخول لحسابك ٢ـ الضغط على "حسابي" ٣ـ الضغط على "الإعدادات" من القائمة ٤ـ اختيار اللغة المناسبة في خانة "لغة التواصل الإلكتروني المفضلة".</p>
                      </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <!-- end -->
                                     <!-- start 3-17-->
                                     <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3-17">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-17" aria-expanded="true" aria-controls="collapse3-17">
                          <h6>هل يقوم موقع تأميني بتذكيري قبل انتهاء صلاحية (سريان) وثيقة التأمين الحالية؟></h6>
                        </button>
                                        </h2>
                                        <div id="collapse3-17" class="accordion-collapse collapse " aria-labelledby="heading3-17" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                       <p>يمكن التحكم بتفضيلات الإشعارات وذلك باتباع الخطوات التالية: 1) الدخول لحسابك 2) الضغط على حسابي 3) الضغط على الإعدادات من القائمة 4) اختيار لسان التبويب الإشعارات 5) تفعيل خانة "قبل انتهاء الوثيقة" ومن ثم اختيار الوقت المناسب للتذكير. سوف تصلكم رسالة نصية وكذلك بريد إلكتروني للتذكير.</p>
                      </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <!-- end -->

                                     <!-- start 3-18-->
                                     <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3-18">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-18" aria-expanded="true" aria-controls="collapse3-18">
                          <h6>كيف أستطيع تغيير كلمة المرور الخاصة بي؟</h6>
                        </button>
                                        </h2>
                                        <div id="collapse3-18" class="accordion-collapse collapse " aria-labelledby="heading3-18" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                      <p>يمكن تغيير كلمة المرور لحسابكم وذلك باتباع الخطوات التالية: 1) الدخول لحسابك 2) الضغط على "حسابي" 3) الضغط على "الإعدادات" من القائمة 4) اختيار لسان التبويب "تغيير كلمة المرور" 5) إدخال كلمة المرور الجديدة ومن ثم الضغط على "تعديل".

                      </p>
                      </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <!-- end -->

                                     <!-- start 3-19-->
                                     <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3-19">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-19" aria-expanded="true" aria-controls="collapse3-19">
                                           
                                            <h6>هل يهتم فريق تأميني بالمقترحات أو الملاحظات التي أقوم بإرسالها ؟</h6>
                                           
                        </button>
                                        </h2>
                                        <div id="collapse3-19" class="accordion-collapse collapse " aria-labelledby="heading3-19" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                      <p>تشكل اقتراحاتكم وملاحظاتكم أولوية لدى فريق عمل تأميني , ونقوم بدراستها بشكل فوري والتواصل معكم ان اقتضت الحاجة</p>
                      </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <!-- end -->
                            
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- end first section -->

@endsection