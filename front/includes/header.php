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

                            <form action="./generate-result.php" method="post" id="hs_cos_wrapper_dnd_area-module-4_"
                                      class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style=""
                                      data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">
								<h1 class="font30" style="
									color: #00ff5a;
									text-align: center;
									font-weight: normal;
								  ">
									<span style="color: #ffffff">تخمين يوزرات انستا، تيك توك</span>
								</h1>

                                <?php if(isset($_GET["error"])){ ?>
                                    <div class="alert-danger" style="text-align: right" role="alert">
                                        خطأ : <?php echo $_GET["error"]; ?>
                                    </div>
                                <?php } ?>
								<div style="text-align: center">
									<input name="custom_word" id="password-box" class="null hsimp-level password-output" type="text"
                                           placeholder="ادخل كلمة مخصصة لليوزر" />
									<br /><br /><button id="generate-button" class="generate-button uppercase">
										تخمين اليوزر
									</button>
								</div>
								<div style="font-size: 16px">
									<fieldset class="generate-settings-fieldset">
										<legend>الاعدادات</legend>
										<div style="display:flex;">
											<div class="generate-setting-span" style="float:none;">
												طول اليوزر
											</div>
											<div class="generate-setting-span fieldval" style="float:none;">
												<select name="length" id="password-length-selection">
													&nbsp;
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option selected value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
										<div style="display:flex;">
											<div class="generate-setting-span" style="float:none;">
												المنصة
											</div>
											<div class="generate-setting-span fieldval" style="float:none;">
												<select name="service" id="service-selection">
													<option value="facebook">facebook</option>
													<option value="snapchat">snapchat</option>
													<option value="instagram">instagram</option>
													<option value="youtube">youtube</option>
													<option value="twitter">twitter</option>
													<option value="tiktok">tiktok</option>
												</select>
											</div>
										</div>
										<div style="display:flex;">
											<div class="generate-setting-span" style="float:none;">
												رموز مخصصة
											</div>
											<div class="generate-setting-span fieldval"  style="float:none;">
												<input name="symbols" id="include-symbol-checkbox" type="checkbox" checked="checked" />
											</div>
										</div>
										<div style="display:flex;">
											<div class="generate-setting-span"  style="float:none;">
												تضمين الارقام (0-9)
											</div>
											<div class="generate-setting-span fieldval" style="float:none;">
												<input name="numbers" id="include-numbers-checkbox" type="checkbox"
                                                       checked="checked" />
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