<div
        class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area-row-0-padding dnd_area-row-0-background-image">
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
                            <span
                                  id="hs_cos_wrapper_dnd_area-module-4_"
                                  class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style=""
                                  data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">
                                <h1 class="font30" style="
									color: #00ff5a;
									text-align: center;
									font-weight: normal;
								  ">
                                    <span style="color: #ffffff">المربح: أداة تخمين يوزرات انستا، تيك توك، تويتر</span>
                                </h1>
                                <div style="text-align: center">
                                    <a href="./index.php" id="generate-button" class="generate-button uppercase">
                                        اعادة تخمين اليوزر
                                    </a>
                                </div>
                                <div style="font-size: 16px">
                                    <fieldset class="generate-settings-fieldset">
                                        <legend>النتيجة</legend>
                                        <?php foreach ($result as $key => $item) { ?>
                                            <div style="display:flex;">
                                                <div class="generate-setting-span" style="float:none;">
                                                    اسم المستخدم رقم <?php echo $key+1; ?>
                                                </div>
                                                <div class="generate-setting-span fieldval" style="float:none;">
                                                    <?php echo $item; ?>

                                                </div>

                                                <button type="button" class="copy-btn" data-username="<?php echo $item; ?>"><i class="far fa-copy"></i></button>

                                            </div>

                                        <?php if($key < 4){ echo "<hr>"; } ?>
                                        <?php } ?>
                                    </fieldset>
                                </div>

                            </span>
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