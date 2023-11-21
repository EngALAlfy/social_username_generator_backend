<div class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area-row-0-padding dnd_area-row-0-background-image">
    <div class="row-fluid">
        <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0"
             data-w="12">
            <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                <div class="row-fluid">
                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                         data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_dnd_area-module-4"
                             class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text widget-type-rich_text"
                             style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                            <form action="./generate-result.php" method="post" id="hs_cos_wrapper_dnd_area-module-4_"
                                  class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style=""
                                  data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">

                                <div style="text-align: center;">
                                    <img src="./favicon.png" width="200" height="200" alt="Logo Image"
                                         style="display: block; margin: 0 auto;">

                                    <h1 class="font30" style="
                                        color: #00ff5a;
                                        text-align: center;
                                        font-weight: normal;
                                        margin-top: 30px;
                                        ">
                                        <span style="color: #ffffff">المربح: أداة تخمين يوزرات انستا، تيك توك، تويتر</span>
                                    </h1>

                                </div>

                                <?php if (isset($_GET["error"])) { ?>
                                    <div class="alert-danger" style="text-align: right" role="alert">
                                        خطأ : <?php echo $_GET["error"]; ?>
                                    </div>
                                <?php } ?>
                                <div style="text-align: center">
                                    <input name="custom_word" id="password-box" class="null hsimp-level password-output"
                                           type="text" placeholder="ادخل كلمة مخصصة لليوزر"/>
                                    <br/><br/>
                                    <button id="generate-button" class="generate-button uppercase">
                                        تخمين اليوزر
                                    </button>
                                </div>


                                <div style="font-size: 16px">
                                    <fieldset class="generate-settings-fieldset">
                                        <legend>الاعدادات</legend>

                                        <!-- Select2 for the "طول اليوزر" dropdown -->
                                        <div style="display:flex;">
                                            <div class="generate-setting-span" style="float:none;">
                                                طول اليوزر
                                            </div>
                                            <div class="generate-setting-span fieldval" style="float:none;">
                                                <select name="length" id="password-length-selection"
                                                        class="js-example-basic-single">
                                                    <option value="3" data-icon="fas fa-smile">3 (ثلاثي)</option>
                                                    <option value="4" data-icon="fas fa-thumbs-up">4 (رباعي)</option>
                                                    <option value="5" data-icon="fas fa-trophy">5 (خماسي)</option>
                                                    <option value="6" data-icon="fas fa-crown">6 (سداسي)</option>
                                                    <option value="7" data-icon="fas fa-heart">7 (سبعاعي)</option>
                                                    <option value="8" selected data-icon="fas fa-gem">8 (ثماني)</option>
                                                    <option value="9" data-icon="fas fa-coffee">9 (تسعي)</option>
                                                    <option value="10" data-icon="fas fa-star">10 (عشري)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Select2 for the "المنصة" dropdown -->
                                        <div style="display:flex;">
                                            <div class="generate-setting-span" style="float:none;">
                                                المنصة
                                            </div>
                                            <div class="generate-setting-span fieldval" style="float:none;">
                                                <select name="service" id="service-selection"
                                                        class="js-example-basic-single">
                                                    <option value="facebook" data-icon="fab fa-facebook" data-color="#1877f2;">فيسبوك</option>
                                                    <option value="snapchat" data-icon="fab fa-snapchat" data-color="#fffc00;">سناب شات</option>
                                                    <option value="instagram" data-icon="fab fa-instagram" data-color="#bc2a8d;">إنستغرام</option>
                                                    <option value="youtube" data-icon="fab fa-youtube" data-color="#ff0000;">يوتيوب</option>
                                                    <option value="twitter" data-icon="fab fa-twitter" data-color="#1da1f2;">تويتر</option>
                                                    <option value="tiktok" data-icon="fab fa-tiktok" data-color="#69c9d0;">تيك توك</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Bootstrap Switch for "رموز مخصصة" -->
                                        <div style="display:flex;">
                                            <div class="generate-setting-span" style="float:none;">
                                                رموز مخصصة
                                            </div>
                                            <div class="generate-setting-span fieldval" style="float:none;">
                                                <input name="symbols" id="include-symbol-checkbox" type="checkbox"
                                                       checked="checked" data-toggle="switch">
                                            </div>
                                        </div>

                                        <!-- Bootstrap Switch for "تضمين الارقام (0-9)" -->
                                        <div style="display:flex;">
                                            <div class="generate-setting-span" style="float:none;">
                                                تضمين الارقام (0-9)
                                            </div>
                                            <div class="generate-setting-span fieldval" style="float:none;">
                                                <input name="numbers" id="include-numbers-checkbox" type="checkbox"
                                                       checked="checked" data-toggle="switch">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>


                                <p style="
									font-size: 14px;
									text-align: center;
									padding-top: 5px;
								  ">
									<span style="color: #ffffff">لا تنسي استخدام الاعدادات لتخصيص اسم المستخدم الخاص
										بك</span>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->
        </div>
        <!--end widget-span -->
    </div>
    <!--end row-->
</div>
<!--end row-wrapper -->