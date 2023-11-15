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
                        <?php include './front/includes/result-header.php'; ?>
                        <?php include './front/includes/row_1.php'; ?>
                        <?php include './front/includes/row_2.php'; ?>
                        <?php include './front/includes/row_3.php'; ?>
                        <?php include './front/includes/row_4.php'; ?>
                    </div>
                    <!--end widget-span -->
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    $('.copy-btn').click(function () {
        let username = $(this).data('username');

        navigator.clipboard.writeText(username);
        $.toast({
            heading: "تم النسخ!",
            text: "تم نسخ اسم المستخدم بنجاح",
            showHideTransition: "fade",
            bgColor: "#3c763d",
            textColor: "white",
            allowToastClose: true,
            hideAfter: 5000,
            icon: "success",
            stack: 5,
            textAlign: 'right',
            position: "bottom-right"
        });
    });
</script>

</body>

</html>