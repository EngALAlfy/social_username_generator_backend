<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../../core/connect.php';

$stmt = $pdo->prepare("SELECT * FROM posts LIMIT 1");
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="row-fluid-wrapper row-depth-1 row-number-9 dnd_area-row-4-margin dnd-section dnd_area-row-4-background-color dnd_area-row-4-padding"
    style="margin-top: 0!important;">
    <div class="row-fluid">
        <div class="span12 widget-span widget-type-cell cell_16408303453322-padding dnd-column" style=""
            data-widget-type="cell" data-x="0" data-w="12">
            <div class="row-fluid-wrapper row-depth-1 row-number-10 dnd-row">
                <div class="row-fluid">
                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_widget_1640830345153"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <div class="cta-col-layout-widget_1640830345153">
                                <div class="cta-cell">
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <img src="/uploads/<?php echo $post["image"];?>"
                                                alt="delinea-image-cybersecurity-for-dummies-thumbnail" loading="lazy"
                                                style="max-width: 100%; height: auto" />
                                        </div>
                                        <div class="span9">
                                            <h3 class="font24" style="color: #231556">
                                                <div id="hs_cos_wrapper_widget_1640830345153_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_inline_text"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="inline_text" data-hs-cos-field="asset_cta_title">
                                                    <b><?php echo $post["title"];?></b>
                                                </div>
                                            </h3>
                                            <div class="font16" style="color: #231556">
                                                <div id="hs_cos_wrapper_widget_1640830345153_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_inline_rich_text"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="inline_rich_text"
                                                    data-hs-cos-field="asset_cta_content">
                                                    <?php echo $post["html"];?>
                                                </div>
                                            </div>

                                            <a href="https://almorbeh.com" class="button button-color-widget_1640830345153" target="_blank"
                                                rel="nofollow noopener">
                                                <div id="hs_cos_wrapper_widget_1640830345153_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_inline_text"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="inline_text" data-hs-cos-field="cta_button_text">
                                                    معرفه المزيد
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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