<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php include './front/includes/head.php'; ?>

<body>
    <div class="body-wrapper hs-content-id-61894514328 hs-site-page page">
        <main id="main-content" class="body-container-wrapper">
            <div class="container-fluid body-container flex-page">
                <div class="row-fluid-wrapper">
                    <div class="row-fluid">
                        <div class="span12 widget-span widget-type-cell" style="" data-widget-type="cell" data-x="0"
                            data-w="12">
                            <?php include './front/includes/header.php'; ?>
                            <?php include './front/includes/post_details.php'; ?>
                        </div>
                        <!--end widget-span -->
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
    // Initialize Select2
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            templateSelection: function (data, container) {
                if (data.element && data.element.dataset.icon) {
                    return $('<span><i style="color:'+data.element.dataset.color+';" class="' + data.element.dataset.icon + '"></i> ' + data.text + '</span>');
                }
                return data.text;
            },
            templateResult: function (data, container) {
                if (data.element && data.element.dataset.icon) {
                    return $('<span><i style="color:'+data.element.dataset.color+';" class="' + data.element.dataset.icon + '"></i> ' + data.text + '</span>');
                }
                return data.text;
            }
        });
    });

    // Initialize Bootstrap Switch
    $(document).ready(function() {
        $("[data-toggle='switch']").bootstrapSwitch({
            // labelWidth:200,
            handleWidth:200,
            onText:"نعم",
            offText:"لا",
        });
    });
</script>
</body>

</html>