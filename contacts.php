
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6">
						<div class="section-row">
							<h3>Контакты</h3>
							<ul class="list-style">
								<li><p><strong>Email:</strong> <a href="#">admin@<?=$_SERVER['SERVER_NAME']?></a></p></li>
								<li><p><strong>Номер телефона:</strong> <?=rand(100,999)?>-<?=rand(100,999)?>-<?=rand(1000,9999)?></p></li>
								<li><p><strong>Address:</strong> <?=rand(2,9999)?> Oliver Street</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="section-row">
							<h3>Отправить комментарий</h3>
							<form>
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<span>Email</span>
											<input class="input" type="email" name="email">
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<span>Тема</span>
											<input class="input" type="text" name="subject">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="message" placeholder="Текст комментария"></textarea>
										</div>
										<button class="primary-button">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

